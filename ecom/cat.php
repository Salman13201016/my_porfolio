<?php 
    include 'db_config.php';
    $status = '';



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
                                    <h4 class="card-title">Category</h4>
                                    <span id="status"></span>
                                    <form class="forms-sample">
                                        <div class=" form-group">
                                            <label for="exampleInputName1">Name</label>
                                            <input type="text" class="form-control" placeholder="Name" name="name"
                                                id="cat_name">
                                        </div>
                                        <button type="button" class="btn btn-primary me-2 cat_btn"
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
                                                        SL
                                                    </th>
                                                    <th>
                                                        Category Name
                                                    </th>
                                                    <th>
                                                        Action
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody id="cat_tbody">


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
        $.ajax({
            type: "POST",
            url: 'show_cat.php',
            success: function(response) {
                data = JSON.parse(response)
                for (i = 0; i < data.length; i = i + 1) {

                    t_r_data = '<tr> <td class = "py-1" style="display:none;">' + data[i].id +
                        '</td> <td class = "py-1" >' + i +
                        '</td> <td>' + data[i].name +
                        '</td ><td class = "py-1" ><a href="#"><i class="fa-sharp fa-solid fa-pen-to-square edit_i_btn" ></i></a>&nbsp&nbsp&nbsp<a href="#"> <i class="fa-sharp fa-solid fa-trash delete_i_btn"></i></a></td> </tr >'
                    console.log(t_r_data)
                    $('#cat_tbody').append(t_r_data);
                }


                // $('#status').text(response)
                // alert(response)
                // Process the data and add rows to the table

            }


        });



        $('.cat_btn').click(function(e) {
            e.preventDefault()
            cat_name = $('#cat_name').val()

            data = {
                name: cat_name
            };
            $.ajax({
                type: "POST",
                url: 'cat_insert.php',
                data: data,
                success: function(response) {

                    data = JSON.parse(response)
                    $('#cat_tbody').empty();
                    for (i = 0; i < data.length; i = i + 1) {

                        t_r_data = '<tr><td class = "py-1" style="display:none;">' + data[i]
                            .id +
                            '</td> <td class = "py-1" >' + i + '</td> <td>' +
                            data[i]
                            .name +
                            '</td > <td class = "py-1" ><a href="#"><i class="fa-sharp fa-solid fa-pen-to-square"></i></a><a href="#"> <i class="fa-sharp fa-solid fa-trash"></i></a></td></tr >'
                        console.log(t_r_data)
                        $('#cat_tbody').append(t_r_data);
                    }

                }


            });

        });

        $('body').on('click', '.edit_i_btn', function(e) {
            e.preventDefault()
            var tr = $(this).closest('tr');
            var td_cat_name = tr.find("td").eq(2).text()
            var td_cat_id = tr.find("td").eq(0).text()
            $('#edit_cat_name').val(td_cat_name)
            // alert(td)
            $('#edit_cat_id').val(td_cat_id)
            $('#edit_div').show();
            $('#insert_div').hide();
        });
        $('.back_cat_btn').click(function(e) {
            $('#edit_div').hide();
            $('#insert_div').show();
        });

        $('.edit_cat_btn').click(function(e) {
            e.preventDefault()
            cat_name = $('#edit_cat_name').val()
            cat_id = $('#edit_cat_id').val()

            data = {
                name: cat_name,
                id: cat_id
            };
            $.ajax({
                type: "POST",
                url: 'cat_edit.php',
                data: data,
                success: function(response) {
                    alert(response)

                    data = JSON.parse(response)
                    $('#cat_tbody').empty();
                    for (i = 0; i < data.length; i = i + 1) {

                        t_r_data = '<tr><td class = "py-1" style="display:none;">' + data[i]
                            .id +
                            '</td> <td class = "py-1" >' + i + '</td> <td>' +
                            data[i]
                            .name +
                            '</td > <td class = "py-1" ><a href="#"><i class="fa-sharp fa-solid fa-pen-to-square edit_i_btn"></i></a><a href="#"> <i class="fa-sharp fa-solid fa-trash"></i></a></td></tr >'
                        console.log(t_r_data)
                        $('#cat_tbody').append(t_r_data);
                    }

                }


            });

        });
        $('body').on('click', '.delete_i_btn', function(e) {
            e.preventDefault()
            if (confirm("Do you really want to delete?")) {
                var tr = $(this).closest('tr');
                var td_cat_id = tr.find("td").eq(0).text()
                data = {
                    id: td_cat_id
                };
                $.ajax({
                    type: "POST",
                    url: 'cat_delete.php',
                    data: data,
                    success: function(response) {
                        alert(response)

                        data = JSON.parse(response)
                        $('#cat_tbody').empty();
                        for (i = 0; i < data.length; i = i + 1) {

                            t_r_data = '<tr><td class = "py-1" style="display:none;">' +
                                data[i]
                                .id +
                                '</td> <td class = "py-1" >' + i + '</td> <td>' +
                                data[i]
                                .name +
                                '</td > <td class = "py-1" ><a href="#"><i class="fa-sharp fa-solid fa-pen-to-square edit_i_btn"></i></a><a href="#"> <i class="fa-sharp fa-solid fa-trash delete_i_btn"></i></a></td></tr >'
                            console.log(t_r_data)
                            $('#cat_tbody').append(t_r_data);
                        }

                    }


                });

            } else {
                alert("please don't delete")
            }
        });
    });
    </script>


    <!-- End custom js for this page
    -->
</body>

</html>