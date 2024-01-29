<?php
	require_once "includes/database.php";

	// get country code from url
    $id = $_GET['id'] ?? '1';

    // build query
    $query = "SELECT * FROM City WHERE ID = '$id'";

    // execute query
    $result = mysqli_query($db, $query) or die('Error loading city.');

    // get one record from the database
    $city = mysqli_fetch_array($result, MYSQLI_ASSOC);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $city['Name'] ?></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>
<body class="p-3">
<h1><?= $city['Name'] ?></h1>
<p><?= $city['District'] ?></p>
<p>...</p>

<?php

// close database connection (put in footer to avoid doing multiple times)
mysqli_close($db);
?>
</body>
</html>