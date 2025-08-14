
<?php $__env->startSection('contant'); ?>

<div class="container">
    <h2 class="mt-3">Trending Items</h2>
      <div class="row">
        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <div class="col-3">
           
            <a href="detail/<?php echo e($item['id']); ?>">

              <img src="<?php echo e(asset($item->gallery)); ?>" height="300px" class="d-block w-100 mt-3" alt="..."> 
              <div class="py-3">
                  <div class="d-flex ">
                        <h5><?php echo e($item['name']); ?></h5> 
                        <span style="margin-left:150px"><?php echo e($item['category']); ?></span>
                  </div> 
                      <p><?php echo e($item['price']); ?></p>
              </div>

            </a>
 
          </div>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </div>
    </div>
    
 




<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\LaravelProjects\EcommerceProject\resources\views\search.blade.php ENDPATH**/ ?>