
<?php $__env->startSection('contant'); ?>




    <div class="container mt-5" style="height:600px;">
        <table class="table table-striped">
            
            <tbody>
                <tr>
                    <td>Price</td>
                    <td><?php echo e($total); ?></td>
                </tr>
                <tr>
                    <td>Tax</td>
                    <td>0 PKR</td>
                </tr>
                <tr>
                    <td>Delivery</td>
                    <td>400 PKR</td>
                </tr>
                <tr>
                    <td>Total</td>
                    <td><?php echo e($total+400); ?></td>
                </tr>
            </tbody>
        </table>


        <form action="/orderplace" method="POST">
            <?php echo csrf_field(); ?>
            <div class="mb-3">
             
              <textarea name="address" id="" cols="80" rows="5" placeholder="Enter your Address" class="ps-2" ></textarea>
             
              
            </div>
            <div class="mb-1">

                <label for="" class="fs-3">Payment</label>
                <hr>
                <p><input type="radio" name="payment" ><span class="ps-2">Payment</span></p>
                <p><input type="radio" name="payment" ><span class="ps-2">EMI Payment</span></p>
                <p><input type="radio" name="payment" ><span class="ps-2">Payment On Delivery</span></p>
              
            </div>
            
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>


    </div>
 




<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\LaravelProjects\EcommerceProject\resources\views/orderNow.blade.php ENDPATH**/ ?>