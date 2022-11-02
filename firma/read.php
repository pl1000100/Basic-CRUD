<?php
include 'connect.php';
?>
<!DOCTYPE html>
<html>
<body>
<div>
<table>
    <thead>
        <tr>
            <th>Id</th>
            <th>Imie</th>
            <th>Nazwisko</th>
            <th>Id działu</th>
            <th>Działania</th>
        </tr>
    </thead>
    <tbody>
    <?php
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
                    <button type='button' name='updateWorker'>
                        <a href='update.php?updateid=".$row['id']."'>Edytuj pracownika</a>
                    </button>
                    <button type='button' name='deleteWorker'>
                        <a href='delete.php?deleteid=".$row['id']."'>Usuń pracownika</a>
                    </button>
                </td>
            </tr>";
    }
    ?>
    </tbody>
</table>
    <button type="button" name="addWorker"><a href="index.php">Dodaj pracownika</a></button>

</div>

</body>
</html>