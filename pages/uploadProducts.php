<?php
    session_start();
   if (!isset($_SESSION['id']))
   {
       header('Location: action.php?pages=login');
   }
?>

<?php include 'pages/includes/header.php'; ?>
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title text-center">Input Product Description</h3>
                        </div>
                        <div class="card-body">

                            <?php if (isset($message)) { ?>
                                <h6 class="text-success text-center"><?php echo $message ; ?></h6>
                            <?php } ?>
                            <div>
                                <form action="action.php" method="post" enctype="multipart/form-data">
                                    <div class="form-group row">
                                        <label for="" class="col-md-4 col-form-label">Product Name</label>
                                        <div class="col-md-8">
                                            <input type="text" name="name" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="" class="col-md-4 col-form-label">Price</label>
                                        <div class="col-md-8">
                                            <input type="number" name="price" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="" class="col-md-4 col-form-label">Description</label>
                                        <div class="col-md-8">
                                            <textarea name="description" class="form-control" id="" cols="" rows=""></textarea>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="" class="col-md-4 col-form-label">Image</label>
                                        <div class="col-md-8">
                                            <input type="file" accept="image/*" name="image" class="">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="" class="col-md-4 col-form-label"></label>
                                        <div class="col-md-8">
                                            <input type="submit" name="uploadBtn" class="btn btn-outline-success btn-block" value="Upload Product">
                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php include 'pages/includes/footer.php'; ?>
