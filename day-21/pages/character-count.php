<?php include 'includes/header.php'; ?>

<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="card">
                    <div class="card-header bg-dark text-white">
                        <h3 class="text-center">Character Count</h3>
                    </div>
                    <div class="card-body">
                        <form action="action.php" method="POST">
                            <div class="row pb-3">
                                <label class="col-md-4">Text/Sentence</label>
                                <div class="col-md-8">
                                    <input  type="text" name="text" class="form-control" id="firstNumber" placeholder="Enter First Number">
                                </div>
                            </div>
                            <div class="row pb-3">
                                <label for="firstName" class="col-md-4">Result</label>
                                <div class="col-md-8">
                                    <input readonly value="<?php echo isset($result) ? $result : ""; ?>" type="text" name="" class="form-control" id="firstName" placeholder="Result">
                                </div>
                            </div>
                            <div class="row pb-3">
                                <label for="" class="col-md-4"></label>
                                <div class="col-md-8">
                                    <input class="btn btn-dark" type="submit" name="character_count_btn" value="Result">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>


