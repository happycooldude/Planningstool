<?php
function createDatabase()
{
  $servername = "localhost";
  $username = "root";
  $password = "mysql";
  $dbname = "planningstool";

  try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $conn;
    echo "Connected successfully";
  } catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
  }
}

function readgames()
{
  $dbConn = createDatabase();
  $stmt = $dbConn->prepare("SELECT * FROM games");
  $stmt->execute();
  $result = $stmt->fetchAll();
  $dbConn = null;
  return $result;
}

function readgame()
{
  $dbConn = createDatabase();
  $stmt = $dbConn->prepare("SELECT * FROM games");
  $stmt->execute();
  $result = $stmt->fetchall();
  $dbConn = null;
  return $result;
}

function readGameInfo($gameId){
    $dbConn = createDatabase();
    $stmt = $dbConn->prepare("SELECT * FROM games WHERE id=$gameId");
    $stmt->execute();
    $result=$stmt->fetch();
    $dbConn=null;
    return $result;
}