<ul>
    <li><a href="#">Download as XL</a> </li>
    <li><a href="#">Download as PDF</a> </li>
    <li><a href="create.html">Create New</a> </li>
</ul>

<table border="1" width="70%">
        <tr>
            <td>ID</td>
            <td>First Name</td>
            <td>Last Name</td>
            <td>Action</td>
        </tr>
<?php
        foreach($result as $row){
?>

    <tr>
        <td><?php echo $row['id']?></td>
        <td><?php echo $row['first_name']?></td>
        <td><?php echo $row['last_name']?></td>
        <td> <a href="#">Edit</a> | <a href="delete.php?id=<?php echo $row['id']?>">Delete</a> | <a href="softdelete.php?id=<?php echo $row['id']?>">Soft Delete</a></td>
    </tr>

<?php
        }
?>

</table>
