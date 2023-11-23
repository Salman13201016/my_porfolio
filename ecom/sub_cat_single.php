<?php 
    
    include 'db_config.php';

    $cat_id = $_POST['cat_id'];
    $sql_sub = "SELECT * FROM subcategories WHERE cat_id='$cat_id' ORDER BY id";
    $query_sub = mysqli_query($con,$sql_sub);

    if(mysqli_num_rows($query_sub)>0){
      $data = [];
      while($row = mysqli_fetch_assoc($query_sub)){
          
          $data[] = $row;
          
      }
  
      $json_data = json_encode($data);
      echo $json_data;
    }
    else{
      echo "No data available";
    }
?>