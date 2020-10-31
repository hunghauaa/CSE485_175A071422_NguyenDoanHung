<?php
    include "config.php";
    $categoryId = 0;
    if(isset($_POST['depart'])){
    $categoryId = mysqli_real_escape_string($con,$_POST['depart']); // department id
    }
    $subcategory = array();
    if($categoryId > 0){
    $sql = "SELECT subcategory_id,subcategory_title FROM sub_category WHERE category=".$categoryId;
    $result = mysqli_query($con,$sql);
    while( $row = mysqli_fetch_array($result) ){
    $userid = $row['subcategory_id'];
    $name = $row['subcategory_title'];
    $subcategory[] = array("id" => $userid, "name" => $name);
    }
}
// encoding array to json format
echo json_encode($subcategory);
?>