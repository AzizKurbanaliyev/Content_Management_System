

<?php include "includes/admin_header.php"; ?>


<body>

<div id="wrapper">

    <!-- Navigation -->
    <?php include "includes/admin_navigation.php"; ?>


    <div id="page-wrapper">

        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        Categories
                        <small><?php echo $_SESSION['username']; ?></small>
                    </h1>

                    <div class="col-xs-6">
                    <?php insert_categories(); ?>

                        <form action="" method="post">
                        <div class="form-group">
                            <label for="cat_title">Add Category</label>
                            <input type="text" class="form-control" name="cat_title">
                        </div>
                            <div class="form-group">
                                <input class="btn btn-primary" type="submit" name="submit" value="Add category">
                            </div>

                        </form>

                        <?php
                        if(isset($_GET['edit'])){
                            $cat_id = $_GET['edit'];
                            include "includes/update_categories.php";

                        }




                        ?>


                    </div> <!--Add category Form-->
                    <div class="col-xs-6">

                        <?php

                        ?>
                        <table class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Category Title</th>
                                <th>Delete</th>
                                <th>Edit</th>
                            </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <?php
                                    // Find all Categories QUERY
                                    findAllCategories();
                                    ?>


                                    <?php
                                    // DELETE QUERY
                                    delete_categories();

                                    ?>


                                </tr>
                            </tbody>
                        </table>

                    </div>

                </div>
            </div>
            <!-- /.row -->

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- /#page-wrapper -->
    <?php include "includes/admin_footer.php";  ?>
