<?php
    include "includes/header.php";
?>
    <section class="py-5">
        <div class="container">
            <div class="row">
                <?php foreach ($allProducts as $product){ ?>
                    <div class="col-md-4 pt-4">
                        <div class="card">
                            <img src="<?php echo $product["image"]?>" alt="" class="card-img-top img-height">
                            <div class="card-body">
                                <h3><?php echo $product["name"]?></h3>
                                <p><?php echo $product["price"]?></p>
                                <a href="" class="btn btn-warning px-5 py-2">View</a>
                            </div>
                        </div>

                    </div>
                <?php } ?>
            </div>
        </div>
    </section>

<?php
    include "includes/footer.php";
?>

