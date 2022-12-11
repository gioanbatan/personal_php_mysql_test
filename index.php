<?php

define("DB_SERVERNAME", "localhost");
define("DB_USERNAME", "root");
define("DB_PASSWORD", "root");
define("DB_NAME", "db_lc_university");

$conn = new mysqli(DB_SERVERNAME, DB_USERNAME, DB_PASSWORD, DB_NAME);
var_dump($conn);

if ($conn && $conn->connect_error) {
    echo "Errore di connessione";
    exit();
}

/*
Test query
 */

$sql = "SELECT * FROM `users`";
$result = $conn->query($sql);
var_dump($result);

if ($result && $result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        var_dump($row);
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">

    <title>Php + MySQL test</title>
</head>

<body>
    <div class="container">
        <h1 class="text-center">Test di PHP + MySQL e uso di database e api</h1>

        <h3 class="text-center mb-4">Accesso a un DataBase attraverso Login</h3>
        <div class="row justify-content-center">
            <div class="col col-6">
                <div class="card">
                    <div class="card-header">
                        Accedi al database
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Special title treatment</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
        </div>
    </div>



</body>

</html>