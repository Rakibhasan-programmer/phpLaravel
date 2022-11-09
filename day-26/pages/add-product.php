<?php
include 'includes/header.php';
?>

    <?php
        session_start();
        echo $_SESSION['name'];
    ?>

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="text-center">Add Product</h3>
                        </div>
                        <div class="card-body">
                            <span class="text-success text-center">
                                <?php echo isset($products) ? $products : ''; ?>
                            </span>
                            <form action="action.php" method="POST" enctype="multipart/form-data">
                                <div class="row mt-2">
                                    <label for="" class="col-md-4">Category Name</label>
                                    <div class="col-md-8">
                                        <select name="category_id" id="" class="form-control">
                                            <option value="">Select a Category</option>
                                            <?php foreach ($categories as $category) { ?>
                                                <option value="<?php echo $category['id'] ?>">
                                                    <?php echo $category['name'] ?>
                                                </option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <label for="" class="col-md-4">Product Name</label>
                                    <div class="col-md-8">
                                        <input type="text" name="name" class="form-control">
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <label for="" class="col-md-4">Product Price</label>
                                    <div class="col-md-8">
                                        <input type="text" name="price" class="form-control">
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <label for="" class="col-md-4">Product Description</label>
                                    <div class="col-md-8">
                                        <textarea name="desc" id="" rows="5" class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <label for="" class="col-md-4">Image</label>
                                    <div class="col-md-8">
                                        <input type="file" name="image" accept="image/*" class="form-control">
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-md-12">
                                        <input name="btn" type="submit" class="btn btn-outline-dark form-control" value="Add Product">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


<?php include "includes/footer.php"; ?>