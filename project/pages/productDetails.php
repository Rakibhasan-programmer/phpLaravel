<?php include "includes/header.php"; ?>


<section class="py-5">
    <div class="container">
        <h2 class="text-center fw-bold pb-5">Product Details</h2>
        <div class="row d-flex justify-content-center align-items-center">
            <?php foreach ($products as $product) { ?>
                <div class="col-md-8 py-3">
                    <div class="card d-flex justify-content-center align-items-center">
                        <img src="assets/images/<?php echo $product['image'] ?>" class="card-img-top w-50" alt="">
                        <div class="card-body">
                            <h4><?php echo $product['name'] ?></h4>
                            <p>Price: <?php echo $product['price'] ?> tk</p>
                            <p><?=$product['desc']?></p>
                            <a href="action.php?page=all-product" class="btn btn-outline-dark px-5">Back to All Product Page</a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>





<?php include "includes/footer.php"; ?>

