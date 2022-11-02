<?php
include '../kalkulator/Calculator.php';
include 'Department.php';
include 'connect.php';

$id = $_GET['updateid'];
$query = $db->prepare('SELECT * FROM workery WHERE id=:id');
$query -> bindValue(':id', $id, PDO::PARAM_INT);
$query -> execute();
$result = $query -> setFetchMode(PDO::FETCH_ASSOC);
$row = $query->fetch();

$name = $row['name'];
$surname = $row['surname'];
$departmentId = $row['departmentId'];


/*
    $query = $db->prepare('SELECT * FROM workery');
    $query -> execute();
    $result = $query -> setFetchMode(PDO::FETCH_ASSOC);
    while ($row = $query->fetch()) {
        echo "<tr>
                <td>".$row['id']."</td>
                <td>".$row['name']."</td>
                <td>".$row['surname']."</td>
                <td>".$row['departmentId']."</td>
                <td>

 */

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $departmentId = $_POST['departmentId'];
    $query = $db->prepare('UPDATE workery SET name=:name,surname=:surname,departmentId=:departmentId 
               WHERE id=:id');
    $query -> bindValue(':name', $name, PDO::PARAM_STR);
    $query -> bindValue(':surname', $surname, PDO::PARAM_STR);
    $query -> bindValue(':departmentId', $departmentId, PDO::PARAM_INT);
    $query -> bindValue(':id', $id, PDO::PARAM_INT);
    $query -> execute();
    header('location:read.php');
}
?>

<!DOCTYPE html>
<html>
<body>
<div>
    <form method="post">
        <?php
        echo "<label>Imie pracownika</label>
        <input type='text' name='name' id='name' value=".$name.">
        <label>Nazwisko pracownika</label>
        <input type='text' name='surname' id='surname' value=".$surname.">
        <label>Id działu</label>
        <input type='text' name='departmentId' id='departmentId' value=".$departmentId.">
        <button type='submit' name='submit'>Edytuj pracownika</button>"
        ?>


    </form>
</div>

</body>
</html>
