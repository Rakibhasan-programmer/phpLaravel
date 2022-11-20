<?php include "includes/header.php"; ?>


<section class="py-5">
    <div class="container">
        <div class="row">
            <h2 class="text-center fw-bold pb-5">Category Wise Product</h2>
            <?php foreach ($products as $product) { ?>
                <div class="col-md-4 py-3">
                    <div class="card">
                        <img src="assets/images/<?php echo $product['image'] ?>" class="card-img-top" alt="" style="height: 250px">
                        <div class="card-body">
                            <h4><?php echo $product['name'] ?></h4>
                            <p>Price: <?php echo $product['price'] ?> tk</p>
                            <p><?=substr_replace($product['desc'], '...', 200, 200)?></p>
                            <a href="action.php?page=product-details&&id=<?=$product['id']?>" class="btn btn-outline-dark">View Details</a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>





<?php include "includes/footer.php"; ?>

