<?php
    include "includes/header.php";
?>


    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <img src="assets/images/<?php echo $details['img'] ?>" alt="" class="card-img-top w-75">
                        <div class="card-body">
                            <h3 class="fw-bold fs-4 pb-3"><?php echo $details['title'] ?></h3>
                            <p class="fw-light"><?php echo $details['description'] ?></p>
                            <a href="action.php?page=all-blogs" class="btn btn-outline-dark fw-bold">Go Back</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php
    include "includes/footer.php";
?>