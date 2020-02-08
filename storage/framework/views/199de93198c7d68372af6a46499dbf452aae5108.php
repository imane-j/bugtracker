<?php $__env->startSection('page-title'); ?>
    <title>Issue details</title>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('dashboard-name'); ?>
    Issue details
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="col-9 order-xl-1 main-form">
        <div class="card bg-secondary shadow">
            <div class="card-header bg-white border-0">
                <div class="row align-items-center">
                    <div class="col-8">
                        <h3 class="mb-0">Issue details</h3>
                    </div>
                    <div class="col-4 text-right">
                        <a href="<?php echo e(route('issues.index')); ?>" class="btn btn-sm btn-default">Go back</a>
                    </div>
                </div>
            </div>



            <div class="card-body">
                <div class="row">
                    <div class="col-lg-12 show-margin">
                        <h6 class="heading-small text-muted ">Issue name</h6>
                        <div class="pl-lg-4">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="show-content">
                                        <p><?php echo e($issue->name); ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12 show-margin">
                        <h6 class="heading-small text-muted ">Issue description</h6>
                        <div class="pl-lg-4">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="show-content">
                                        <p><?php echo e($issue->description); ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6 show-margin">
                        <h6 class="heading-small text-muted ">Project that the issue belongs to</h6>
                        <div class="pl-lg-4">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="show-content">
                                        <p><?php echo e($project->name); ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 show-margin">
                        <h6 class="heading-small text-muted ">User assigned to the issue</h6>
                        <div class="pl-lg-4">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="show-content">
                                        <p><?php echo e($user->username); ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-lg-4 show-margin">
                        <h6 class="heading-small text-muted ">Issue type</h6>
                        <div class="pl-lg-4">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="show-content">
                                        <p><?php echo e($type->name); ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 show-margin">
                        <h6 class="heading-small text-muted ">Issue priority</h6>
                        <div class="pl-lg-4">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="show-content">
                                        <p><?php echo e($priority->name); ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 show-margin">
                        <h6 class="heading-small text-muted ">Issue status</h6>
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

        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\bugtracker\resources\views/issues/show.blade.php ENDPATH**/ ?>