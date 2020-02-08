<?php $__env->startSection('page-title'); ?>
    <title>Project details</title>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('dashboard-name'); ?>
   Project details
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="col-9 order-xl-1 main-form">
        <div class="card bg-secondary shadow">
            <div class="card-header bg-white border-0">
                <div class="row align-items-center">
                    <div class="col-8">
                        <h3 class="mb-0">Project details</h3>
                    </div>
                    <div class="col-4 text-right">
                        <a href="<?php echo e(route('projects.index')); ?>" class="btn btn-sm btn-default">Go back</a>
                    </div>
                </div>
            </div>



    <div class="card-body">
            <h6 class="heading-small text-muted mb-4">Project name</h6>
            <div class="pl-lg-4">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="show-content">
                            <p><?php echo e($project->name); ?></p>
                        </div>
                    </div>
                </div>
            </div>

        <h6 class="heading-small text-muted mb-4">Project description</h6>
        <div class="pl-lg-4">
            <div class="row">
                <div class="col-lg-12">
                    <div class="show-content">
                        <p><?php echo e($project->description); ?></p>
                    </div>
                </div>
            </div>
        </div>

        <h6 class="heading-small text-muted mb-4">Project status</h6>
        <div class="pl-lg-4">
            <div class="row">
                <div class="col-lg-12">
                    <div class="show-content">
                        <p><?php echo e($status->name); ?></p>
                    </div>
                </div>
            </div>
        </div>

    </div>

        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\bugtracker\resources\views/projects/show.blade.php ENDPATH**/ ?>