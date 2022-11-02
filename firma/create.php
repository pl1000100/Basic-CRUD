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
    <form method="post">
        <label>Imie pracownika</label>
        <input type="text" name="name" id="name">
        <label>Nazwisko pracownika</label>
        <input type="text" name="surname" id="surname">
        <label>Id działu</label>
        <input type="text" name="departmentId" id="departmentId">
        <button type="submit" name="submit">Dodaj pracownika</button>
    </form>
</div>

</body>
</html>
