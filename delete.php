<?php
require_once 'db/conn.php';
if(!$_GET['id']){
    include 'includes/errormessage.php';
    header("Location: viewrecords.php");


}else{
    //Get Id values
    $id = $_GET['id'];

    //Call Delete function

    $result = $crud->deleteAttendee($id);
    //Redirect to list
    if($result)
    {
        header("Location: viewrecords.php");
    }
    else{
        include 'includes/errormessage.php';

    }
}

?>