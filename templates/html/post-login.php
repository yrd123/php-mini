<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    include '../../mysqli_connect.php';
    $select_query="select * from user;";
	$rows=mysqli_query($link,$select_query)
    while($row=mysqli_fetch_array($rows,MYSQLI_BOTH))
    {
        echo "Email: {$row['email']}"."<br>";
    }
    ?>
</body>
</html>