<!--
    Nama Pembuat    : Aprilyanto Setiyawan Siburian
    NIM             : 24060121120022
    Lab             : A2 PBP
    Deskripsi       : Implementasi add_customer_get.php pada modul praktikum 5
-->

<?php
require_once('./lib/db_login.php');

$name = $db->real_escape_string($_GET['name']);
$address = $db->real_escape_string($_GET['address']);
$city = $db->real_escape_string($_GET['city']);

// Assign a query
$query = "INSERT INTO customers (name, address, city) VALUES ('" . $name . "', '" . $address . "', '" . $city . "')";
$result = $db->query($query);

if (!$result) {
    // TODO 1: Jika error, tulislah response yang sesuai
    echo '<div class="alert alert-danger alert-dismissable">
    <strong>Error!</strong> Could not query the database<br>'.
    $db->error. '<br>query = '.$query.
    '</div>';
} else {
    // TODO 2: Jika sukses, tulislah response yang sesuai
    echo '<div class="alert alert-success alert-dismissable">
    <strong>Success!</strong> Data has been added<br>
    Name: '.$_GET['name'].'<br>
    Address: '.$_GET['address'].'<br>
    City: '.$_GET['city']. '<br>
    </div>';
}

// Close DB Connection
$db->close();
