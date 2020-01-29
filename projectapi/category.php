<?php
header('Content-Type: application/json');
if($_SERVER['REQUEST_METHOD']=='GET'){
    include 'dbConnect.php';
    $sql = " SELECT * FROM category_master ";
    $result = $con->query($sql);
    $response = array();
    while ($tmp = $result->fetch_assoc()) {
        $tmp_arr = array();
        $tmp_arr['category_id']=$tmp['category_id'];
        $tmp_arr['category_name']=$tmp['category_name'];
        $response[] = $tmp_arr;
    }
        // $response = $_GET['subject_name'];
      
        echo json_encode(["category"=>$response]);
}
?>