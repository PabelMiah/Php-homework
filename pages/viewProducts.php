<?php include 'pages/includes/header.php'; ?>
<section class="py-5">
    <div class="container">
        <div class="row">
            <?php foreach ($products  as $product) { ?>
            <div class="col-md-4">
                <div class="card mt-3">
                    <img src="<?php echo $product['image']; ?>" alt="student image" class="card-img-top" style="height: 250px"/>
                    <div class="card-body">
                        <h3><?php echo $product['name']; ?></h3>
                        <p><?php echo $product['description']; ?></p>
                        <p><?php echo $product['price']; ?></p>
                        <a href="javascript:void(0)" class="btn btn-outline-success float-right">View</a>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</section>
<?php include 'pages/includes/footer.php'; ?>