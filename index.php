<pre>

<?php
require_once "connection.php";
connection();

$conn = connection();

$sql = "SELECT * FROM students";

$result = $conn->query($sql);

// while($data=$result->fetch_assoc()){
//   var_dump($data)  ;
// }




?>

</pre>


<table border="2">
    <thead>
        <tr>
            <th>id</th>
            <th>name</th>
            <th>age</th>
            <th>actions</th>
        </tr>

    </thead>
    <tbody>
        <?php while ($data = $result->fetch_assoc()) : ?>
            <tr>
                <td><?php echo $data["students_id"] ?></td>
                <td><?php echo $data["students_name"] ?></td>
                <td><?php echo $data["student_age"] ?></td>
                <td>
                   <a href="edit.php?id=<?php echo  $data["students_id"]?>">edit data</a>
                </td>
            </tr>
        <?php endwhile ?>

    </tbody>

    <tfoot>
        <tr>
            <th colspan="4"> <a href="create.php">add data</a></th>
        </tr>
    </tfoot>
</table>