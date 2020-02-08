

<div class="modal fade" id="modal-notification" tabindex="-1" role="dialog" aria-labelledby="modal-notification" aria-hidden="true">
    <div class="modal-dialog modal-danger modal-dialog-centered modal-10" role="document">
        <div class="modal-content bg-gradient-danger">
            <div class="modal-header">
                <h6 class="modal-title" id="modal-title-notification">Your attention is required</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="py-3 text-center">
                    <i class="ni ni-bell-55 ni-3x"></i>
                    <h4 class="heading mt-4">Delete confirmation required</h4>
                    <p>Do you really want to delete this project?</p>
                </div>
            </div>
            <div class="modal-footer">
                <form method="POST" action=
                    <?php if(\Request::is('issues')): ?>
                        "<?php echo e(route('issues.destroy', $issue->id)); ?>"
                    <?php else: ?>
                        "<?php echo e(route('projects.destroy', $project->id)); ?>"
                    <?php endif; ?>
                    class="delete-form">
                    <?php echo e(csrf_field()); ?>

                    <?php echo method_field('DELETE'); ?>
                    <button class="btn btn-white" type="submit">Yes, delete</button>
                </form>
                <button type="button" class="btn btn-link text-white ml-auto" data-dismiss="modal">No, don't delete</button>
            </div>
        </div>
    </div>
</div>
</div>

<?php /**PATH C:\laragon\www\bugtracker\resources\views/components/modal.blade.php ENDPATH**/ ?>