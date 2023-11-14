<?php 
    $sub_cat_name = $_POST['sub_cat_name'];
    $cat_id= $_POST['cat_id'];

    include 'db_config.php';

    if($sub_cat_name==''){
        echo "the field can not be empty";
    }
    else{
        $sql = "INSERT INTO subcategories (cat_id,name) VALUES('$cat_id','$sub_cat_name')";
        $query = mysqli_query($con,$sql);
        if($query){
            $sql = "SELECT categories.name as cat_name, subcategories.name as sub_cat_name, subcategories.id as sub_cat_id,subcategories.cat_id as cat_id FROM subcategories INNER JOIN categories ON subcategories.cat_id = categories.id";
            
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
    }

?>