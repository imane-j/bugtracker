<?php $__env->startSection('page-title'); ?>
    <title>Manage your Issues</title>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('dashboard-name'); ?>
    Issues dashboard
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
    <div class="row mt-5">
        <div class="col-12 mb-5 mb-xl-0">
            <?php echo $__env->make('/components/flash-message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <div class="card shadow">
                <div class="card-header border-0">
                    <div class="row align-items-center">
                        <div class="col">
                            <h3 class="mb-0">All issues list</h3>
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
                            <th scope="col">Issue Name</th>
                            <th scope="col">Description</th>
                            <th scope="col">Projects it belongs to</th>
                            <th scope="col">Assigned user</th>
                            <th scope="col">Type</th>
                            <th scope="col">Priority</th>
                            <th scope="col">Status</th>
                            <th scope="col">Details</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $__empty_1 = true; $__currentLoopData = $issues; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $issue): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <tr>
                                <th scope="row">
                                    <div class="media-body">
                                        <span class="mb-0 text-sm"><?php echo e($issue->name); ?></span>
                                    </div>
                                </th>
                                <td>
                                   <span><?php echo e(Str::words($issue->description, 50)); ?>...</span>
                                </td>
                                <td>
                                    <?php $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if($project->id === $issue->project): ?>
                                          <span><?php echo e($project->name); ?></span>
                                        <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </td>
                                <td class="centered-user">
                                    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if($user->id === $issue->user): ?>
                                            <img src="<?php if($user->user_image): ?> <?php echo e($user->user_image); ?> <?php else: ?> /assets/img/icons/common/anonymous.png <?php endif; ?>" class="ui mini avatar image">
                                            <span class="user"><?php echo e($user->username); ?></span>
                                        <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </td>
                                <td>
                                    <?php $__currentLoopData = $types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if($type->id === $issue->type): ?>
                                            <span><?php echo e($type->name); ?></span>
                                        <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </td>
                                <td>
                                    <?php $__currentLoopData = $priorities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $priority): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if($priority->id === $issue->priority): ?>
                                            <span><?php echo e($priority->name); ?></span>
                                        <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </td>
                                <td>
                                    <?php $__currentLoopData = $statuses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $status): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if($status->id === $issue->status): ?>
                                           <span class="status"><?php echo e($status->name); ?></span>
                                        <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </td>
                                <td id="details">
                                    <a href="<?php echo e(route('issues.show', $issue->id)); ?>" class="badge badge-success">View</a>
                                    <a href="<?php echo e(route('issues.edit', $issue->id)); ?>" class="badge badge-info">Edit</a>
                                    <a href="javascript:;" data-toggle="modal" onclick="deleteData(<?php echo e($issue->id); ?>)"
                                       data-target="#modal-notification" class="badge badge-danger">Delete</a>
                                    <?php echo $__env->make('components/modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                </td>
                            </tr>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                            <tr>
                                No projects found at the moment
                            </tr>
                        <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <a href="<?php echo e(route('issues.create')); ?>"><button type="button" class="btn btn-success mt-4">Add new issue</button></a>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\bugtracker\resources\views/issues/index.blade.php ENDPATH**/ ?>