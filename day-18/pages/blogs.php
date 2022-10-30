<?php
    include "includes/header.php";
?>


    <section>
        <div class="container">
            <h2 class="fw-bold pt-4">All Blogs: </h2>
        </div>
    </section>

    <section class="py-5">
        <div class="container">
            <div class="row">
                <?php foreach ($blogs as $blog) { ?>
                    <div class="col-md-4 py-3">
                        <div class="card">
                            <img src="assets/images/<?=$blog['img']?>" alt="" class="card-img-top h-300">
                            <div class="card-body">
                                <h3 class="fw-bold fs-4 pb-3"><?php echo $blog['title'] ?></h3>
                                <p class="fw-light"><?=substr_replace($blog['description'], '....', 200)?></p>
                                <a href="action.php?page=details&&id=<?php echo $blog['id']?>" class="btn btn-outline-dark float-end fw-bold">View More</a>
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
