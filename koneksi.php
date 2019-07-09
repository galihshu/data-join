<?php
/**
 * Informasi untuk koneksi database
 */
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'db_join';

// koneksi ke database
$mysqli = new mysqli($host, $user, $pass, $db);

if ($mysqli->connect_errno) {
    die('Error Koneksi database : ' . $mysqli->connect_error);
}
