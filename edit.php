<?php 
 
require_once 'db_connect.php';
 
if($_GET['id']) {
    $id = $_GET['id'];
 
    $sql = "SELECT * FROM data WHERE id = {$id}";
    $result = $connect->query($sql);
 
    $data = $result->fetch_array();
 
    $connect->close();
 
?>
 
<!DOCTYPE html>
<html>
<head>
    <title>Edit Member</title>
 
    <style type="text/css">
        fieldset {
            margin: auto;
            margin-top: 100px;
            width: 50%;
        }
 
         tabletr th {
            padding-top: 20px;
        }
    </style>
 
</head>
<body>
 
<fieldset>
    <legend>Edit Member</legend>
 
    <form action="update.php" method="post">
         <table cellspacing="0" cellpadding="0">
            <tr>
                <th>First Name</th>
                <td><input type="text" name="fname" placeholder="First Name" value="<?php echo $data['fn'] ?>" /></td>
            </tr>     
            <tr>
                <th>Last Name</th>
                <td><input type="text" name="lname" placeholder="Last Name" value="<?php echo $data['ln'] ?>" /></td>
            </tr>
            <tr>
                <input type="hidden" name="id" value="<?php echo $data['id']?>" />
                <td><button type="submit">update Changes</button></td>
                <td><a href="index.php"><button type="button">Back</button></a></td>
            </tr>
        </table>
    </form>
 
</fieldset>
 
</body>
</html>
 
<?php
}
?>