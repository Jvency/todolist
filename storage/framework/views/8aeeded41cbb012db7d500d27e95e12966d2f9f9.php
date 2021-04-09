<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('status')); ?>

                            <div class="col-md-3"></div>
                            <div class="col-md-6">
                                <a href="/todo" class="btn btn-primary btn-lg">Go to ToDoList</a>
                            </div>
                            <div class="col-md-3"></div>
                        </div>
                    <?php endif; ?>
                    <div class="row justify-content-center">
                        
                                <a href="/todolist" class="btn btn-dark btn-md">Go to ToDo List</a>
                            
                    </div>

                    
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\todolist\resources\views/home.blade.php ENDPATH**/ ?>