
<?php $__env->startSection('contant'); ?>




    <div class="container mt-5" style="height:600px;">

            
        <div class="row justify-content-center">
            <div class="col-6">
                <table class="table table-bordered">
                    <tr>
                        <th>Id</th>
                        <th>Image</th>
                        <th>name</th>
                        <th>category</th>
                        <th>price</th>
                        <th>Remove</th>
                
                    </tr>
                    <tbody>
                
                      <?php $__currentLoopData = $foundData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <tr>
                        <td><?php echo e($item->id); ?></td>
                        <td><img src="<?php echo e(asset($item->gallery)); ?>" style="height:60px;width:100px"></td>
                        <td> <?php echo e($item->name); ?> </td>
                        <td><?php echo e($item->category); ?></td>
                        <td><?php echo e($item->price); ?></td>
                        <td>
                            <a href="/delete/<?php echo e($item->cart_id); ?>">Remove</a>
                        </td>
                        
                
                      </tr>
                          
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                
                
                
                    </tbody>
                </table>
                    
            </div>

          
           
        
        </div>
        
        

        <a href="/ordernow" class="btn btn-success" style="margin-left:980px">Order Now</a>
           

        

    </div>
 




<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\LaravelProjects\EcommerceProject\resources\views\cartlist.blade.php ENDPATH**/ ?>