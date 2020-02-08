<?php $__env->startSection('page-title'); ?>
    <title>Add a new project</title>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('dashboard-name'); ?>
    Add new project
<?php $__env->stopSection(); ?>



<?php $__env->startSection('content'); ?>
    <div class="col-9 order-xl-1 main-form">
        <div class="card bg-secondary shadow">
            <div class="card-header bg-white border-0">
                <div class="row align-items-center">
                    <div class="col-8">
                        <h3 class="mb-0">Create a new project</h3>
                    </div>
                    <div class="col-4 text-right">
                        <a href="<?php echo e(route('projects.index')); ?>" class="btn btn-sm btn-default">Go back</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <form method="POST" action="<?php echo e(route('projects.index')); ?>">
                    <?php echo csrf_field(); ?>
                    <h6 class="heading-small text-muted mb-4">Project informations</h6>
                    <div class="pl-lg-4">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group focused">
                                    <label class="form-control-label" for="project-name">Project Name</label>
                                    <input type="text" id="project-name" class="form-control form-control-alternative" placeholder="C# bank application" name="project-name" value="<?php echo e(old('project-name')); ?>" required>
                                    <?php $__errorArgs = ['project-name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <p class="error">This field is required</p>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group focused">
                                    <label class="form-control-label" for="project-description">Description</label>
                                    <textarea id="project-description" name="project-description" class="form-control form-control-alternative" rows="3" placeholder="Fill in this field with a brief description of your project" required><?php echo e(old('project-description')); ?></textarea>
                                    <?php $__errorArgs = ['project-description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <p class="error">This field is required</p>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group focused">
                                    <label class="form-control-label" for="status">Status</label>
                                    <select
                                        name="status"
                                        id="status"
                                        class="form-control form-control-alternative <?php $__errorArgs = ['status'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                        required>
                                        <option selected disabled>Please select a status</option>
                                        <?php $__currentLoopData = $statuses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $status): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($status->id); ?>"><?php echo e($status->name); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                    <?php $__errorArgs = ['status'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <p class="error">This field is required</p>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-success btn-lg">Submit</button>
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\bugtracker\resources\views/projects/create.blade.php ENDPATH**/ ?>