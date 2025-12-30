<?php
$user = [];
$user['id'] = "100"; 
$user['name'] = "Fatima"; 
$user['email'] = "fatima@gmail.com"; 
$user['contact'] = "03264+65+9";
$user1 = [];
$user1['id'] = "1984";
$user1['name'] = "Rayyan";
$user1['email'] = "rayyan@gmail.com";
$user1['contact'] = "023165464";
$user2 = [];
$user2['id'] = "44664";
$user2['name'] = "Ahsan";
$user2['email'] = "ahsan@gmail.com";
$user2['contact'] = "4654654644";

// echo "<pre>";
//print_r($user);

// die();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <thead>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Cntact</th>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $user['id']?></td>
                <td><?php echo $user['name']?></td>
                <td><?php echo $user['email']?></td>
                <td><?php echo $user['contact']?></td>
            </tr>
            <tr>
                <td><?php echo $user1['id']?></td>
                <td><?php echo $user1['name']?></td>
                <td><?php echo $user1['email']?></td>
                <td><?php echo $user1['contact']?></td>
            </tr>
            <tr>
                <td><?php echo $user2['id']?></td>
                <td><?php echo $user2['name']?></td>
                <td><?php echo $user2['email']?></td> 
                <td><?php echo $user2['contact']?></td>
            </tr>
        </tbody>
    </table>
</body>
</html>