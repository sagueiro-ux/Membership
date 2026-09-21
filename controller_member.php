<?php
include("model_member.php");
session_start(); //memulai session

// Kalau session memberlist belum ada, buat array kosong
if(!isset($_SESSION['memberlist'])) {
    $_SESSION['memberlist'] = array();
}

// Fungsi untuk membuat member baru
function createMember() {
    $member = new model_member();
    $member->name = $_POST['inputName'];
    $member->phone = $_POST['inputPhone'];
    $member->email = $_POST['inputEmail'];
    $member->note = $_POST['inputNote'];
    //Setelah terima data, panggil array push, lalu ke session mana, dan data yang mau dimasukin yg mana
    array_push($_SESSION['memberlist'], $member);
}

function updateMember($memberID) {
    $member = $_SESSION['memberlist'][$memberID];
    $member->name = $_POST['inputName'];
    $member->phone = $_POST['inputPhone'];
    $member->email = $_POST['inputEmail'];
    $member->note = $_POST['inputNote'];
}

function getAllMembers() {
    return $_SESSION['memberlist'];
}

function deleteMember($memberindex) {
    unset($_SESSION['memberlist'][$memberindex]); //array index = 0,1,2
    $_SESSION['memberlist'] = array_values($_SESSION['memberlist']); 
}

function getMemberWIthID($memberID) {
    return $_SESSION['memberlist'][$memberID];
}


// Jika tombol register diklik
if(isset($_POST['button_register'])) {
    createMember();
    header("Location: view_member.php");//kembali ke halaman lain
}

// Jika tombol update diklik
if(isset($_POST['button_update'])) {
    updateMember($_POST['input_id']);
    header("Location: view_member.php");//kembali ke halaman lain
}

// Jika button delete diklik
if(isset($_GET['deleteID'])) {
    deleteMember($_GET['deleteID']);
    header("Location: view_member.php");//kembali ke halaman lain
}
?>