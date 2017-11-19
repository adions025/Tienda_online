<?php
/**
 * Created by PhpStorm.
 * User: adonisgonzalez
 * Date: 19/11/17
 * Time: 1:50
 */
$objData = new ConnectDB();

/*$sql = 'INSERT INTO tdiw-j6 (email`, password) VALUES (:email, :password)';*/

$stmt = $objData->prepare("INSERT INTO tdiw-j6 VALUES(:id, :nombre)");
$stmt->bindValue(':id', $id);
$stmt->bindValue(':name', $nombre);
$stmt->execute();


/*
$sth = $objData->prepare('SELECT idUser, naUser, paUser FROM users '
    . 'where naUser = :naUser and paUser = :paUser');
$sth->bindParam(':naUser', $usuario);
$sth->bindParam(':paUser', $clave);

    $stmt = $conn->prepare("INSERT INTO tbl VALUES(:id, :name)");
*/