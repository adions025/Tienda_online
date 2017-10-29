<?php
  require_once("models/ConnectDB.php");
  require_once("models/dbManager.php");

  $degrees = array();
  $mentions = array();
  $conn = ConnectDB();
  $resultSet_degrees = getDegrees($conn);
  while($row = $resultSet_degrees->fetch_assoc()){
      $degrees[] = $row;
  }
  $resultSet_mentions = getDegreeMentions($conn, 1);
  while($row = $resultSet_mentions->fetch_assoc()) {
      $mentions[] = $row;
  }
  require_once("views/userRegister.php");
