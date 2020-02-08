<?php $__env->startSection('page-title'); ?>
    <title>Manage your projects</title>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('dashboard-name'); ?>
    Projects dashboard
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
    <div class="row mt-5">
        <div class="col-12 mb-5 mb-xl-0">
            <?php echo $__env->make('/components/flash-message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <div class="card shadow">
                <div class="card-header border-0">
                    <div class="row align-items-center">
                        <div class="col">
                            <h3 class="mb-0">All projects list</h3>
                        </div>
                        <div class="col text-right">
                            <a href="<?php echo e(route('dashboard')); ?>" class="btn btn-sm btn-primary">Go back</a>
                        </div>
                    </div>
                </div>
                <div class="table-responsive">
                    <!-- Projects table -->
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                        <tr>
                            <th scope="col">Project Name</th>
                            <th scope="col">Description</th>
                            <th scope="col">Status</th>
                            <th scope="col">Details</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $__empty_1 = true; $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <tr>
                                <th scope="row">
                                    <div class="media-body">
                                        <span class="mb-0 text-sm"><?php echo e($project->name); ?></span>
                                    </div>
                                </th>
                                <td>
                                   <span><?php echo e($project->description); ?></span>
                                </td>
                                <td>
                                    <?php $__currentLoopData = $statuses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $status): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if($status->id === $project->status): ?>
                                            <span><?php echo e($status->name); ?></span>
                                        <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </td>
                                <td>
                                    <a href="<?php echo e(route('projects.show', $project->id)); ?>" class="badge badge-success">View</a>
                                    <a href="<?php echo e(route('projects.edit', $project->id)); ?>" class="badge badge-info">Edit</a>
                                    <a href="javascript:;" data-toggle="modal" onclick="deleteData(<?php echo e($project->id); ?>)"
                                       data-target="#modal-notification" class="badge badge-danger">Delete</a>
                                    <?php echo $__env->make('components/modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                </td>
                            </tr>

                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                            <tr>
                                <p>No projects found at the moment</p>
                            </tr>
                        <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <a href="<?php echo e(route('projects.create')); ?>"><button type="button" class="btn btn-success mt-4">Add new project</button></a>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\bugtracker\resources\views/projects/index.blade.php ENDPATH**/ ?>