<?php
include("dbcon.php");
?>
<title>View Page</title>
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
.update, .delete{
  background-color: green;
  color: white;
  border: 0;
  outline: none;
  border-radius: 5px;
  height: 23px;
  width: 80px;
  font-weight: bold;
  cursor: pointer;
}
.delete{
  background-color: red;
}
</style>
<h2>Student Details</h2>
<table>
    <tr>
       <th width="5%">Sl No. </th>
        <th width="15%">Name </th>
        <th width="15%">Email </th>
        <th width="10%">Phone </th>
        <th width="10%">Gender </th>
        <th width="10%">Stream </th>
        <th width="15%">State </th>
        <th width="20%">Operatinos </th>
    </tr>
    <?php
   $query = "SELECT * FROM regd";
   $data = mysqli_query($conn, $query);
   
    while($row = mysqli_fetch_array($data))  
    {
        
      
       echo "<tr>
        <td>$row[id]</td>
            <td>$row[name]</td>
            <td>$row[email]</td>
            <td>$row[phone]</td>
             <td>$row[gender]</td>
             <td>$row[stream]</td>
             <td>$row[state]</td>
             <td><a href='update_data.php?id=$row[id]'><input type='submit' value='Update' class='update'></a>
             <a href='delete_data.php?id=$row[id]'><input type='submit' value='Delete' class='delete'></a></td>
             
        </tr>
        ";
       
         }
        ?>
</table>
