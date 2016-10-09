#!/usr/bin/php
<?php

$servername = "localhost";
$username = "root";
$password = "root";

$_POST[firstname] = 'admin';
$_POST[lastname] = 'admin';
$_POST[password] = 'password';
$_POST[submit] = 'REGISTER';
include_once('create.php');

$mysqli = mysqli_connect($servername, $username, $password);
if ($mysqli->connect_errno) {
  echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
echo $mysqli->host_info . "\n";
$result = mysqli_query($mysqli, 'CREATE DATABASE db');
$mysqli = mysqli_connect($servername, $username, $password, 'db');
$result = mysqli_query($mysqli, "CREATE TABLE shop(id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(30) NOT NULL,
description VARCHAR(140),
price FLOAT(30) NOT NULL,
category_id INT(4) NOT NULL,
stock INT(6),
image VARCHAR(80));");
$result = mysqli_query($mysqli, "CREATE TABLE category(id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(30) NOT NULL,
description VARCHAR(140) NOT NULL);");
$result = mysqli_query($mysqli, "INSERT INTO shop (id,
  name,
  description,
  price,
  category_id,
  stock) VALUES (NULL,
  'fruit1',
  'un bon fruit',
  4000.42,
  1,
  999);");
  $result = mysqli_query($mysqli, "INSERT INTO shop (id,
  name,
  description,
  price,
  category_id,
  stock) VALUES (NULL,
  'fruitDEUX',
  'un bon autre autre fruit',
  1000,
  1,
  999);");
  $result = mysqli_query($mysqli, "INSERT INTO shop (id,
  name,
  description,
  price,
  category_id,
  stock) VALUES (NULL,
  'fruit3',
  'uutre?',
  7420.42,
  1,
  9);");
  $result = mysqli_query($mysqli, "INSERT INTO shop (id,
  name,
  description,
  price,
  category_id,
  stock) VALUES (NULL,
  'le seul legume',
  'uutre?',
  7000.42,
  2,
  9);");
  $result = mysqli_query($mysqli, "INSERT INTO shop (id,
  name,
  description,
  price,
  category_id,
  stock) VALUES (NULL,
  'de la viandemiam',
  'qotz?',
  7312.42,
  3,
  99);");
  $result = mysqli_query($mysqli, "INSERT INTO category (id, name, description) VALUES (NULL, 'les fruits', 'delicieux');");
  $result = mysqli_query($mysqli, "INSERT INTO category (id, name, description) VALUES (NULL, 'les lagumes', 'ca va ca va');");
  $result = mysqli_query($mysqli, "INSERT INTO category (id, name, description) VALUES (NULL, 'les viandes', 'orgasmic');");
  echo "SUCCESS\n";
        ?>
