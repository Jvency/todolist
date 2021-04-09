<?php $__env->startSection('content'); ?>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">ToDo List</div>

                <div class="card-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('status')); ?>

                    <?php endif; ?>
                            <?php 
                                if(isset($list))
                                {
                            ?>
                                    <div class="table-responsive">
                                        <table class="table table-hover">
                                            <tr class="row justify-content-center">
                                                <th class="col-md-5">Task</th>
                                                <th class="col-md-3">Status</th>
                                                <th class="col-md-3"></th>

                                            </tr>

                                    
                                        <?php $__currentLoopData = $list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $list): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                                            <tr class="row justify-content-center">
                                                <td class="col-md-5"><?php echo e($list->task); ?></td> 

                                                <td class="col-md-3"><?php
                                                    if($list->status)
                                                    {    ?>
                                                        <h4><span class="badge badge-success"> Done </span></h4>

                                                        <?php
                                                    }
                                                    else
                                                    {
                                                        ?>
                                                        <form action="/todolist/update" method="GET">
                                                        <div class="btn-group-toggle">
                                                            
                                                            <button type="submit" class="btn btn-primary" name="taskid" value="<?php echo e($list->id); ?>"> Done </button>
                                                                
                                                        
                                                        </div>
                                                        </form>
                                                    <?php
                                                    } ?>
                                                    </td>

                                                    <td class="col-md-3">
                                                        <form action="/todolist/delete" method="GET">
                                                           
                                                            <button type="submit" class="btn btn-danger" name="tid" value="<?php echo e($list->id); ?>"> Delete </button>
                                                        </form>
                                                    </td>
                                                    </tr>
                                        
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            
                                        </table>
                                    </div>
                                    <?php
                                }
                                else
                                    echo "No Data Added";
                                ?>
                        </div>
                   
                </div>
            </div>

        </div>
    </div>

         
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-header">Add New Entry</div>

                <div class="card-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('status')); ?>

                            
                        </div>
                    <?php endif; ?>

                    <!-- <div class="row"> -->
                        <form action="/todolist/up" method="GET">
                                
                                <div class="form-group">
                                     <div class="row justify-content-center">   
                                        <div class="col-md-3">Task</div>
                                        <div class="col-md-6"><input class="form-control" type="text" name="task"></div>
                                        <div class="col-md-3">
                                            
                                            <input type="submit" name="submit" value="Submit" class="btn btn-primary btn-md">
                                        </div>
                                    </div>  
                                </div>
                            
                            </form>
                    </div>

                    
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\todolist\resources\views/todolist.blade.php ENDPATH**/ ?>