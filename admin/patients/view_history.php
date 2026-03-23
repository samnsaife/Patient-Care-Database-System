<?php
require_once('../../config.php');
if(isset($_GET['id'])){
    $qry = $conn->query("SELECT p.*,d.fullname as doctor FROM `patient_history` p inner join `doctor_list` d on p.doctor_id = d.id where p.id = '{$_GET['id']}'");
    if($qry->num_rows > 0){
        $res = $qry->fetch_array();
        foreach($res as $k => $v){