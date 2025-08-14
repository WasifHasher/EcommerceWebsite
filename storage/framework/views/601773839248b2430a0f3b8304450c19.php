
<?php $__env->startSection('contant'); ?>

    <div class="custom-product border border-danger" id="container">
        
        

            <div class="row justify-content-center">
                <div class="col-5 mt-5" >
                    <img src="<?php echo e($details['gallery']); ?>" style="height:300px" class="w-100">
                </div>
                   
                <div class="col-5 mt-5 align-middle pt-5" id="style">
                    

                    <h3>Name : <?php echo e($details['name']); ?></h3>
                    <h3>Price : <?php echo e($details['price']); ?></h3>
                    <h3>Category : <?php echo e($details['category']); ?></h3>
                    <h3>Descrption : <?php echo e($details['description']); ?></h3>
                    <br>

                    <div class="d-flex">

                    <form action="/addtoCart" method="POST">
                        
                    <?php echo csrf_field(); ?>

                        <input type="hidden" name="product_id" value="<?php echo e($details['id']); ?>">

                         <button class="btn btn-primary ms-3">Add to Card</button> 


                    </form>


                   
                        


                            <a href="<?php echo e(url('/product')); ?>" class="btn btn-danger ms-3">Back</a>
                        
                    </div>
               
                </div>

               
            </div>
       

       
            


    </div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\LaravelProjects\EcommerceProject\resources\views/details.blade.php ENDPATH**/ ?>