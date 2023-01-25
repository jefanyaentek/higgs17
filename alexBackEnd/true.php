<?php 
if(isset($_GET['playid'])) {
    $id = $_GET['playid'];
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "http://172.104.174.199/trueid/higgsdomino/?id=".$id);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 0);
    $result = curl_exec($ch);
    curl_close($ch);
    
    $res = json_decode($result,true);
    echo $res['nickname'];
}
?>