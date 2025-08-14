
<?php $__env->startSection('contant'); ?>

    <div class="custom-product border border-danger" id="container">
        
      <div id="carouselExampleCaptions" class="carousel slide">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner border border-success">
          <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

          <div class="carousel-item <?php echo e($item['id']==1?'active':''); ?>">
           <img src="<?php echo e(asset($item->gallery)); ?>" height="450px" class="d-block w-100 " alt="..."> 
              <div class="carousel-caption d-none d-md-block text-white">
                <h5 class="fs-3"><?php echo e($item['name']); ?></h5>
                <p class="fs-4"><?php echo e($item['description']); ?></p>
              </div>
          </div>

    
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
         
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
      
    </div>



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
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\LaravelProjects\EcommerceProject\resources\views/product.blade.php ENDPATH**/ ?>