<?php 
if(isset($_GET['id'])){
    $qry = $conn->query("SELECT r.*,CONCAT(c.lastname,', ',c.firstname,' ',c.middlename) as client from `repair_list` r inner join client_list c on r.client_id = c.id where r.id = '{$_GET['id']}'");
    if($qry->num_rows > 0){
        $res = $qry->fetch_array();
        foreach($res as $k => $v){
            if(!is_numeric($k)){
                $$k = $v;
            }