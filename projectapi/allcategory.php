<?php
header('Content-Type: application/json');
if($_SERVER['REQUEST_METHOD']=='GET'){
    include 'dbConnect.php';
    $sql = " SELECT * FROM post";
    $result = $con->query($sql);
    $response = array();
    while ($tmp = $result->fetch_assoc()) {
        $tmp_arr = array();
        $tmp_arr['id']=$tmp['id'];
        $tmp_arr['category_id']=$tmp['category_id'];
        $tmp_arr['image']="http://127.0.0.1:8000/uploads/image/".$tmp['image'];
        $response[] = $tmp_arr;
    }
        // $response = $_GET['subject_name'];
      
        echo json_encode(["allcategory"=>$response]);
}
?>