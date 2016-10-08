#!/usr/bin/php
<?php

$servername = "localhost";
$username = "root";
$password = "root";

$adminpw = hash("whirlpool","password");

try {
  $conn = new PDO("mysql:host=$servername;", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "CREATE DATABASE db";
  // use exec() because no results are returned
  $conn->exec($sql);
  echo "Database created successfully<br>";
  $conn = new PDO("mysql:host=$servername;dbname=db", $username, $password);
  $conn->exec("CREATE TABLE users (id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  firstname VARCHAR(30) NOT NULL,
  lastname VARCHAR(30) NOT NULL,
  password VARCHAR(128) NOT NULL);");
  $conn->exec("CREATE TABLE shop(id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(30) NOT NULL,
  description VARCHAR(140),
  price FLOAT(30) NOT NULL,
  category_id INT(4) NOT NULL,
  stock INT(6));");
  $conn->exec("CREATE TABLE category(id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(30) NOT NULL,
  description VARCHAR(140) NOT NULL);");
  query($conn, "INSERT INTO users (id, firstname, lastname, password) VALUES (NULL, 'admin', 'admin', :password);", array(':password' => $adminpw));
  $conn->exec("INSERT INTO shop (id, name, description, price, category_id, stock) VALUES (NULL, 'fruit1', 'un bon fruit', 4000.42, 1, 999);");
  $conn->exec("INSERT INTO category (id, name, description) VALUES (NULL, 'les fruits', 'delicieux');");
}
catch(PDOException $e)
{
  echo $e->getMessage();
}
echo "gothere";
$conn = NULL;

function query($conn, $sql, $data)
{
  $query = $conn->prepare($sql);
  $query->execute($data);
}
?>
