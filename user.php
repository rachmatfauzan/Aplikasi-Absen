<?php  
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Absensi User</title>
</head>
<body>
    <h1>Absensi User</h1>

    <a href="logout.php">Logout</a>
    <h1>Level = <?= $_SESSION["username"];?></h1>
</body>
</html>