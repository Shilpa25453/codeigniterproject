
<html>
<body>
<?php
$mysql=new mysqli("localhost","root","","standarddb");
$id=$_GET['id'];
$result=$mysql->query("select * from studentdata where id='$id'");
while($row=$result->fetch_assoc())
{   
 ?>
    <form action="edits.php?id=<?php echo $id; ?>" method="get">
    <table>
    <tr>
    <?php
    //echo $id;
    ?>
    <input name="id" type="hidden" id="id" value="<?php echo $id; ?>">
   <td>student name:</td> <td><input type="text" name="name" value=<?php echo $row['name'];?>> </td>
   </tr>
   <tr>
   <td>student rollno:</td> <td><input type="text" name="rollno" value=<?php echo $row['rollno'];?>> </td>
   <tr>
   <td>student address:</td> <td><textarea name="address"><?php echo $row['address'];?></textarea </td>
   <tr>
   <td>student email:</td> <td><input type="text" name="email" value=<?php echo $row['email'];?>> </td>
   <tr><td></td><td><input type="submit" name="edit" value="Edit"></td></tr>
   </tr>
   </form>

<?php
}
?>


