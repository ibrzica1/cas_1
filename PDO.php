<?php

$name = "Marko";
$password = "12345";

// Driver: MySQLI

$baza = mysqli_connect("localhost","root","","php_27");
//$baza->query("INSERT INTO users (username, password) VALUES ('$name','$password')");

// Driver: PDO

$pdo = new PDO('mysql:host=localhost;dbname=php_27',"root","");

$stmt = $pdo->prepare("INSERT INTO users (username, password) VALUES (:name, :password)");

$stmt->bindParam(':name', $name, PDO::PARAM_STR);
$stmt->bindParam(':password', $password, PDO::PARAM_STR);
//$stmt->execute();

/*$stmt->execute([
  ':name' => $name,
  ':password' => $password
]); */

$stmt2 = $pdo->prepare("SELECT * FROM users WHERE username = :name");
$stmt2->bindParam(':name', $name, PDO::PARAM_STR);
$stmt2->execute();

if($stmt2->rowCount() < 5)
{
    echo "Imamo manje od 5 rezultata";
}

$user = $stmt2->fetch();
//$users = $stmt2->fetchAll();

var_dump($user);