
<?php $__env->startSection('contant'); ?>

   <div class="container" style="height:500px">
    <div class="row justify-content-center">
        <div class="col-9 mt-5">
            <table class="table table-striped">
                <tr>
                    <th>Id</th>
                    <th>Product Id</th>
                    <th>User id</th>
                    <th>Address</th>
                    <th>Status</th>
                    <th>payment Method</th>
                    <th>payment status</th>
                    <th>Image</th>
                </tr>
                <tbody>
                    <?php $__currentLoopData = $allorder; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($item->id); ?></td>
                                <td><?php echo e($item->product_id); ?></td>
                                <td><?php echo e($item->user_id); ?></td>
                                <td><?php echo e($item->address); ?></td>
                                <td><?php echo e($item->status); ?></td>
                                <td><?php echo e($item->payment_method); ?></td>
                                <td><?php echo e($item->payment_status); ?></td>
                                <td><img src="<?php echo e($item->gallery); ?>" style="height:50px;width:80px;"></td>
                            </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>
   </div>




<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\LaravelProjects\EcommerceProject\resources\views/showallOrder.blade.php ENDPATH**/ ?>