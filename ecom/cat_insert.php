<?php 
    $cat_name = $_POST['name'];
    
    include 'db_config.php';

    if($cat_name==''){
        echo "the field can not be empty";
    }
    else{
        $sql = "INSERT INTO categories (name) VALUES('$cat_name')";
        $query = mysqli_query($con,$sql);
        if($query){
            echo "Success";
        }
        else{
            echo "Something went wrong";
        }
    }

?>