<?php include "includes/header.php" ?>

    <section class="py-5">
        <div class="container">
            <div class="row d-flex justify-content-center align-items-center" style="height: 70vh">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="text-center">Login</h3>
                        </div>
                        <div class="card-body">
                            <p class="text-danger text-center"><?=isset($message) ? $message : ""?></p>
                            <form action="action.php" method="POST">
                                <div class="row mt-3">
                                    <label for="" class="col-md-4">Email</label>
                                    <div class="col-md-8">
                                        <input type="email" name="email" class="form-control">
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <label for="" class="col-md-4">Password</label>
                                    <div class="col-md-8">
                                        <input type="password" name="password" class="form-control">
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-md-12">
                                        <input type="submit" value="Login" name="btn" class="btn btn-outline-dark form-control">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



<?php include "includes/footer.php" ?>
