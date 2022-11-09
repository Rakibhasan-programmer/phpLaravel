<?php include "includes/header.php"; ?>

    <section class="py-5">
        <div class="container">
            <div class="row">
                <?php foreach ($products as $product) { ?>
                    <div class="col-md-4 py-3">
                        <div class="card">
                            <img src="<?=$product['image']?>" alt="" class="card-img-top" style="height: 300px">
                            <div class="card-body">
                                <h3 class="fw-bold fs-4 pb-3"><?php echo $product['name'] ?></h3>
                                <h3 class="fw-bold fs-4 pb-3"><?php echo $product['price'] ?></h3>
                                <p class="fw-light"><?=substr_replace($product['desc'], '....', 200)?></p>
                                <a href="" class="btn btn-outline-dark float-end fw-bold">View More</a>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>


<?php include "includes/footer.php"; ?>
