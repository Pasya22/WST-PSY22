<?php
include 'db.php';

// Create object / instance
$db = new Database();
$con=$db->Connect();


$id = $_POST['id_chat'];
$nama = $_POST['nama'];
$isi = $_POST['text_chat'];
$tgl = $_POST['tgl'];

mysqli_query($con,"insert into chatbox values('$id','$nama','$isi','$tgl')");

?>