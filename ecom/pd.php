<?php 
    include 'db_config.php';
    $sql = "SELECT DISTINCT categories.name as cat_name, subcategories.cat_id as cat_id FROM subcategories INNER JOIN categories ON subcategories.cat_id = categories.id";
            
    $query = mysqli_query($con,$sql);

    $sql_sub = "SELECT * FROM subcategories ORDER BY id";
    $query_sub = mysqli_query($con,$sql_sub);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Majestic Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="admin_design/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="admin_design/vendors/base/vendor.bundle.base.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/brands.min.css"
        integrity="sha512-W/zrbCncQnky/EzL+/AYwTtosvrM+YG/V6piQLSe2HuKS6cmbw89kjYkp3tWFn1dkWV7L1ruvJyKbLz73Vlgfg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/fontawesome.min.css"
        integrity="sha512-siarrzI1u3pCqFG2LEzi87McrBmq6Tp7juVsdmGY1Dr8Saw+ZBAzDzrGwX3vgxX1NkioYNCFOVC0GpDPss10zQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="admin_design/css/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="admin_design/images/favicon.png" />
</head>

<body>
    <div class="container-scroller">
        <!-- partial:../../partials/_navbar.html -->
        <?php include 'head_nav.php'; ?>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:../../partials/_sidebar.html -->
            <?php include 'side_nav.php'; ?>
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row">
                        <div class="col-12 grid-margin stretch-card" id="insert_div">
                            <div class="card">

                                <div class="card-body">
                                    <h4 class="card-title">Products</h4>
                                    <span id="status"></span>
                                    <form class="forms-sample">

                                        <div class=" form-group">
                                            <label for="exampleInputName1">Select cateogory</label>
                                            <select class="form-control cat_id">
                                                <option value="0">
                                                    Select your category
                                                </option>
                                                <?php 
                                                    while($result=mysqli_fetch_assoc($query)){                                
                                                ?>
                                                <option value="<?php echo $result['cat_id']; ?>">
                                                    <?php echo $result['cat_name']; ?>
                                                </option>
                                                <?php 
                                                    }
                                                ?>
                                            </select>
                                        </div>

                                        <div class=" form-group">
                                            <label for="exampleInputName1">Select Sub-cateogory</label>
                                            <select class="form-control sub_cat_id">
                                                <option value="0">
                                                    Select your sub-category
                                                </option>
                                                <?php 
                                                    while($result=mysqli_fetch_assoc($query_sub)){                                          
                                                ?>
                                                <option value="<?php echo $result['id'] ?>">
                                                    <?php echo $result['name']; ?>
                                                </option>
                                                <?php 
                                                    }
                                                ?>
                                            </select>
                                        </div>

                                        <div class=" form-group">
                                            <label for="exampleInputName1">Name</label>
                                            <input type="text" class="form-control common_pd" placeholder="Product Name" name="name"
                                                id="name" disabled>
                                        </div>
                                        <div class=" form-group">
                                            <label for="exampleInputName1">Description</label>
                                            <textarea class="form-control common_pd" placeholder="Product Description" name="description"
                                                id="description" rows="10" cols="80" disabled></textarea>
                                          <script>
                                            CKEDITOR.replace('role');
                                          </script>

                                          <!-- <input type="text" class="form-control" id="exampleInputDescription" placeholder="role" name="role"> -->
                                        </div>
                                        <div class=" form-group">
                                            <label for="exampleInputName1">Price</label>
                                            <input type="text" class="form-control common_pd" placeholder="Product Price" name="price"
                                                id="price" disabled>
                                        </div>
                                        <div class=" form-group">
                                            <label for="exampleInputName1">Discount</label>
                                            <input type="text" class="form-control common_pd" placeholder="Discount" name="discount"
                                                id="discount" disabled>
                                        </div>
                                        <div class=" form-group">
                                            <label for="exampleInputName1">Sale Price</label>
                                            <input type="text" class="form-control" placeholder="Product Sale Price" name="sale_price"
                                                id="sale_price" disabled>
                                        </div>
                                        <div class="form-group">
                                          <label>Upload Image</label>
                                          <input type="file" name="img[]" class="file-upload-default" disabled>
                                          <div class="input-group col-xs-12">
                                            <input type="file" name="image" class="form-control file-upload-info">
                                            <span class="input-group-append">
                                              <!-- <button class="file-upload-browse btn btn-primary" type="button">Upload</button> -->
                                            </span>
                                          </div>
                                        </div>
                                        
                                        <button type="button" class="btn btn-primary me-2 pd_btn"
                                            name="submit">Submit</button>

                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 grid-margin stretch-card" id="edit_div">
                            <div class="card">

                                <div class="card-body">
                                    <h4 class="card-title">Edit Category</h4>
                                    <span id="status"></span>
                                    <form class="forms-sample">
                                        <div class=" form-group">
                                            <label for="exampleInputName1">Name</label>
                                            <input type="text" class="form-control" placeholder="Name" name="name"
                                                id="edit_cat_name">
                                            <input type="hidden" class="form-control" placeholder="Name" name="name"
                                                id="edit_cat_id">
                                        </div>
                                        <button type="button" class="btn btn-primary me-2 back_cat_btn"
                                            name="submit">Back</button>
                                        <button type="button" class="btn btn-primary me-2 edit_cat_btn"
                                            name="submit">Submit</button>

                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Striped Table</h4>
                                    <p class="card-description">
                                        Add class <code>.table-striped</code>
                                    </p>
                                    <div class="table-responsive">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th style="display:none">
                                                        pid
                                                    </th>
                                                    <th>
                                                        Sl
                                                    </th>
                                                    <th>
                                                        Sub-category
                                                    </th>
                                                    <th>
                                                        Product
                                                    </th>
                                                    <th>
                                                        Action
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody id="sub_cat_tbody">


                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
                <!-- content-wrapper ends -->
                <!-- partial:../../partials/_footer.html -->
                <footer class="footer">
                    <div class="d-sm-flex justify-content-center justify-content-sm-between">
                        <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © <a
                                href="https://www.bootstrapdash.com/" target="_blank">bootstrapdash.com </a>2021</span>
                        <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Only the best <a
                                href="https://www.bootstrapdash.com/" target="_blank"> Bootstrap dashboard </a>
                            templates</span>
                    </div>
                </footer>
                <!-- partial -->
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->

    <script src="admin_design/vendors/base/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- inject:js -->
    <script src="admin_design/js/off-canvas.js"></script>
    <script src="admin_design/js/hoverable-collapse.js"></script>
    <script src="admin_design/js/template.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="admin_design/js/file-upload.js"></script>
    <script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>

    <script>
    $(document).ready(function() {
        $('#edit_div').hide();

        $(".sub_cat_id").prop("disabled", true);
        $('.cat_id').change(function(e) {
            alert(1)
            cat_id = $(".cat_id option:selected").val();
            if (cat_id == 0) {
                // alert("hello")

              $(".sub_cat_id").prop("disabled", true);
            } else {
              $(".sub_cat_id").prop("disabled", false);

                data = {
                  cat_id: cat_id
                };
                $.ajax({
                  type: "POST",
                  url: 'sub_cat_single.php',
                  data: data,
                  success: function(response) {
                    if(response == '0') {
                      $('.sub_cat_id').empty();
                      option_data = '<option value="0"> No data available </option>'
                      $('.sub_cat_id').append(option_data);
                      $(".sub_cat_id").prop("disabled", true);

                    } else {
                      data = JSON.parse(response)
                      // alert(data)
                      console.log(response)                   
                      $('.sub_cat_id').empty();
                      option_data = '<option value="0"> Select your sub-category </option>'
                      $('.sub_cat_id').append(option_data);
                    
                      for (i = 0; i < data.length; i = i + 1) {

                      option_data = '<option value="'+ data[i].id + '">'+ data[i].name +'</option>'
                      console.log(option_data)
                      $('.sub_cat_id').append(option_data);
                      }
                    }
                  }
                });
            }
        });

        $('.sub_cat_id').change(function(e) {
          alert($('.common_pd').length)
          $('.common_pd').prop('disabled', false)
          CKEDITOR.replace('description');

          // $('.common_pd').each(function(index){
          //     console.log(index)
          //     $(this).prop('disabled', false)
          // });

        });

        var delay = 2000; // 2 seconds
        var timeoutId;

        $('#discount').keyup(function(){
          // alert('#discount')
  
          clearTimeout(timeoutId);
          
          timeoutId = setTimeout(function(){

            price = parseFloat($("#price").val())
            discount = parseFloat($("#discount").val())
            sale_price = price - (price * discount)/100
            console.log(sale_price)
            $('#sale_price').val(sale_price)
           

          }, delay);
         
          


        });
    });
    </script>


    <!-- End custom js for this page
    -->
</body>

</html>