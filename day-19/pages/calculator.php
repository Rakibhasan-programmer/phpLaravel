<?php include 'includes/header.php'; ?>

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <div class="card">
                        <div class="card-header bg-dark text-white">
                            <h3 class="text-center">Calculator</h3>
                        </div>
                        <div class="card-body">
                            <form action="action.php" method="POST">
                                <div class="row pb-3">
                                    <label class="col-md-4">First Number</label>
                                    <div class="col-md-8">
                                        <input  type="number" name="first_number" class="form-control" id="firstNumber" placeholder="Enter First Number">
                                    </div>
                                </div>
                                <div class="row pb-3">
                                    <label class="col-md-4">Second Number</label>
                                    <div class="col-md-8">
                                        <input  type="number" name="second_number" class="form-control" id="secondNumber" placeholder="Enter Second Number">
                                    </div>
                                </div>
                                <div class="row pb-3">
                                    <label class="col-md-4">Operators</label>
                                    <div class="col-md-8">
                                        <label><input checked type="radio" name="actions" value="+"> + </label>
                                        <label><input type="radio" name="actions" value="-"> - </label>
                                        <label><input type="radio" name="actions" value="*"> * </label>
                                        <label><input type="radio" name="actions" value="/"> / </label>
                                        <label><input type="radio" name="actions" value="%"> % </label>
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
                                        <input class="btn btn-dark" type="submit" name="result_btn" value="Result">
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
