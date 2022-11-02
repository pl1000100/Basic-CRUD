<?php
include 'connect.php';

if(isset($_GET['deleteid'])){
    $id = $_GET['deleteid'];
    $query = 'DELETE FROM workery WHERE id='.$id;
    $db->exec($query);
    header('location:read.php');

}