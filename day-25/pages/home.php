<?php
    include 'includes/header.php';
?>

   <section class="py-5">
       <div class="container">
           <div class="row">
               <div class="col-md-10 mx-auto">
                   <div class="card">
                       <div class="card-header">
                           <h3 class="text-center">All Products</h3>
                       </div>
                       <div class="card-body">
                           <table class="table table-hover table-striped">
                               <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Category id</th>
                                        <th>Product Name</th>
                                        <th>Product Price</th>
                                        <th>Product Description</th>
                                        <th>Product Image</th>
                                    </tr>
                               </thead>
                               <tbody>
                               <?php $i = 1; ?>
                               <?php foreach ($products as $product) { ?>
                                    <tr>
                                        <td><?php echo $i++ ?></td>
                                        <td><?php echo $product['category_id'] ?></td>
                                        <td><?php echo $product['name'] ?></td>
                                        <td><?php echo $product['price'] ?></td>
                                        <td><?php echo $product['desc'] ?></td>
                                        <td>
                                            <img class="w-50" src="<?php echo $product['image'] ?>" alt="" style="height: 30px;">
                                        </td>
                                    </tr>
                               <?php } ?>
                               </tbody>
                           </table>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </section>


<?php
    include 'includes/footer.php';
?>
