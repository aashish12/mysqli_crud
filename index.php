<?php require_once 'db_connect.php'; ?>
 
<!DOCTYPE html>
<html>
<head>
    <title>PHP CRUD</title>
 
    <style type="text/css">
        .manageMember {
            width: 50%;
            margin: auto;
        }
 
         table{
            width: 100%;
            margin-top: 20px;
        }
 
    </style>
 
</head>
<body>
 
<div class="manageMember">
    <a href="create.php"><button type="button">Add Member</button></a>
    <table border="1" cellspacing="0" cellpadding="0">
        <thead>
            <tr>
                <th>Id</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            
            <?php

                $sql = "SELECT * FROM data WHERE status = 1";
                $result = $connect->query($sql);

                if($result->num_rows > 0) {
                    while($row=$result->fetch_array())
                        {
                    ?>
                            <tr>

                            <td><?php echo $row['id']; ?></td>
                            <td><?php echo $row['fn']; ?></td>
                            <td><?php echo $row['ln']; ?></td>
                            <td><a href="edit.php?id=<?php echo $row['id']; ?>"><button type='button'>Edit</button></a>
                                <a href="remove.php?id=<?php echo $row['id']; ?>"><button type='button'>Remove</button></a>
                           
                            </tr>
                    <?php
                        }
                    }
                ?>
        </tbody>
    </table>
</div>
 
</body>
</html