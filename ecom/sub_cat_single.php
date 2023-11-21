<?php 
    include 'db_config.php';

    $cat_id = $_POST['cat_id'];
    $sql1 = "SELECT * FROM subcategories WHERE cat_id='$cat_id ' ORDER BY id";
    $query1 = mysqli_query($con,$sql1);

    if(mysqli_num_rows($query1)>0){
        $data = [];
        while($row = mysqli_fetch_assoc($query1)){
            
            $data[] = $row;
            
        }
    
        $json_data = json_encode($data);
        echo $json_data;
    }
    else{
        echo "0";
    }




?>