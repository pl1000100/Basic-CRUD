<?php
include '../kalkulator/Calculator.php';
include 'Department.php';
include 'connect.php';

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $departmentId = $_POST['departmentId'];
    $query = $db->prepare('INSERT INTO workery VALUES (NULL, :name, :surname, :departmentId)');
    $query -> bindValue(':name', $name, PDO::PARAM_STR);
    $query -> bindValue(':surname', $surname, PDO::PARAM_STR);
    $query -> bindValue(':departmentId', $departmentId, PDO::PARAM_INT);
    $query -> execute();
}
?>

<!DOCTYPE html>
<html>
<body>
<div>
    <p><a href="read.php">CRUD read</a></p>
</div>

</body>
</html>
