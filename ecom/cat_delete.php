<?php 
    $id = $_POST['id'];
    include 'db_config.php';

    $sql = "DELETE FROM categories WHERE id = '$id' ";
    $query = mysqli_query($con,$sql);
    if($query){
        $sql = "SELECT * FROM categories";
        $query = mysqli_query($con,$sql);
        if(mysqli_num_rows($query)>0){
            $data = [];
            while($row = mysqli_fetch_assoc($query)){
                
                $data[] = $row;
                
            }
        
            $json_data = json_encode($data);
            echo $json_data;
        }
        else{
            echo "No data available";
        }
            
        
    }
    else{
        echo "Something went wrong";
    }

?>