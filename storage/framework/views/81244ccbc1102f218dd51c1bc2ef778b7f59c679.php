;
<?php $__env->startSection('page-title'); ?>
    <title>Ivry Bugtracker dashboard</title>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('dashboard-name'); ?>
    Bugtacker dashboard
<?php $__env->stopSection(); ?>

<?php $__env->startSection('stat-cards'); ?>
<?php echo $__env->make('components/stat-cards', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="row mt-5">
        <div class="col-xl-6 mb-5 mb-xl-0">
          <div class="card shadow">
            <div class="card-header border-0">
              <div class="row align-items-center">
                <div class="col">
                  <h3 class="mb-0">Latest projects</h3>
                </div>
                <div class="col text-right">
                  <a href="<?php echo e(Route('projects.index')); ?>" class="btn btn-sm btn-primary">See all</a>
                </div>
              </div>
            </div>
            <div class="table-responsive">
              <!-- Projects table -->
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">Project title</th>
                    <th scope="col">Number of issues</th>
                    <th scope="col">Status</th>
                    <th scope="col">Created at</th>
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
                               <td><?php echo e($project->created_at); ?></td>
                            </tr>

                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                            <tr>
                                <p>No projects found at the moment</p>
                            </tr>
                        <?php endif; ?>
                  
                </tbody>
              </table>
              <?php echo $projects->links(); ?>

            </div>
          </div>
        </div>
        <div class="col-xl-6">
          <div class="card shadow">
            <div class="card-header border-0">
              <div class="row align-items-center">
                <div class="col">
                  <h3 class="mb-0">Latest Issues</h3>
                </div>
                <div class="col text-right">
                  <a href="<?php echo e(Route('issues.index')); ?>" class="btn btn-sm btn-primary">See all</a>
                </div>
              </div>
            </div>
            <div class="table-responsive">
              <!-- Projects table -->
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">Issue name</th>
                    <th scope="col">Status</th>
                    <th scope="col">Created at</th>
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
                                    <?php $__currentLoopData = $statuses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $status): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if($status->id === $issue->status): ?>
                                            <span><?php echo e($status->name); ?></span>
                                        <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </td>
                               <td><?php echo e($issue->created_at); ?></td>
                            </tr>

                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                            <tr>
                                <p>No issues found at the moment</p>
                            </tr>
                        <?php endif; ?>
                </tbody>
              </table>
              <?php echo $issues->links(); ?>

            </div>
          </div>
        </div>
      </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\bugtracker\resources\views/dashboard.blade.php ENDPATH**/ ?>