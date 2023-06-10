<?php
include("dbcon.php");
?>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
<h2>Student Details</h2>
<table>
    <tr>
        <th>Name </th>
        <th>Phone </th>
        <th>Gender </th>
        <th>Stream </th>  
    </tr>
    <?php
    $query = mysqli_query($conn, "select *from regd");
    while($row = mysqli_fetch_array($query))
    {
        ?>
        <tr>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['phone']; ?></td>
             <td><?php echo $row['gender']; ?></td>
             <td><?php echo $row['stream']; ?></td>
             
        </tr>
        <?php }
        ?>
</table>