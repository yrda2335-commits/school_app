<?php
function connection(){
    $userhost="localhost";
    $username="root";
    $password="";
    $dbname="students";

    $conn=new mysqli( $userhost, $username,$password,$dbname);

    if(!$conn){
        die("the db is die ");
    }
    return $conn;
}

?>