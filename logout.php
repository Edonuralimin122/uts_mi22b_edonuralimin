<?php
// NIM :2257401046
// NAMA:edo nuralimin
// Kelas:MI22B
session_start();
if(session_destroy()) {
    header("Location: login.php");
}
?>