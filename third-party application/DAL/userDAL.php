
*/
Data Access Layer that regulates access based on consent. It only pulls personal information for consent = Yes.
/*

<?php
require_once ("dbconnection.php");

class userDAL
{
     private $link = null;

     public function _construct()
     {
         $this-> link = dbconnection ::getInstance();
     }
     public function getUsers()
     {
         $sql = "SELECT Firstname, Lastname, Address, City, State, Zipcode, Phonenumber, Deviceid, Email FROM tbluser  WHERE consent = 'Yes' ";
         $results = $this -> link -> executeQuery($sql);

         $users = array ();
         if (($row = mysqli_fetch_assoc($results)))
         {
             $users = $row;
         }
         mysqli_free_result($results);
         return $users;

     }
}
