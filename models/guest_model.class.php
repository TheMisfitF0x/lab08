<?php
/*
 * Author: Isaac Lowe
 * Date: 4/8/2022
 * File: guest_model.class.php
 * Description:
 */

class GuestModel
{
    private $db;   //database object
    private $dbConnection;  //database connection object

    public function __construct() {

        $this->db = Database::getInstance();
        $this->dbConnection = $this->db->getConnection();
    }
    /*
    * this method retrieves all Guests from the database and
    * returns an array Guests if successful or false if failed.
    */
    public function getGuests() {
        //SQL select statement
        $sql = "SELECT * FROM " . $this->db->getGuestTable();

        //execute the query
        $query = $this->dbConnection->query($sql);

        if ($query && $query->num_rows > 0) {
            //array to store all Guests
            $guests = array();

            //loop through all rows
            while ($query_row = $query->fetch_assoc()) {
                $guest = new Guest($query_row["last_name"],
                    $query_row["first_name"],
                    $query_row["birth_date"],
                    $query_row["email"]);

                //push the guest into the array
                $guests[] = $guest;
            }
            return $guests;
        }
        return false;
    }
    public function addGuest() {
        //if the script did not received post data, display an error message and then terminite the script immediately
        if (!filter_has_var(INPUT_POST, 'last_name') ||
            !filter_has_var(INPUT_POST, 'first_name') ||
            !filter_has_var(INPUT_POST, 'birth_date') ||
            !filter_has_var(INPUT_POST, 'email')){


            return false;
        }

        //retrieve data for the new Guest; data are sanitized and escaped for security.
        $last_name = $this->dbConnection->real_escape_string(trim(filter_input(INPUT_POST, 'last_name', FILTER_SANITIZE_STRING)));
        $first_name = $this->dbConnection->real_escape_string(trim(filter_input(INPUT_POST, 'first_name', FILTER_SANITIZE_STRING)));
        $birth_date = $this->dbConnection->real_escape_string(filter_input(INPUT_POST, 'birth_date', FILTER_DEFAULT));
        $email = $this->dbConnection->real_escape_string(trim(filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING)));

        //query string for SQL insert
        $sql = "INSERT INTO ". $this->db->getGuestTable() ." VALUES( NULL,'$last_name','$first_name','$birth_date','$email')";

        //execute the query
        return $this->dbConnection->query($sql);
    }

}
