

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
                    @if (\Request::is('issues'))
                        "{{ route('issues.destroy', $issue->id)}}"
                    @else
                        "{{ route('projects.destroy', $project->id)}}"
                    @endif
                    class="delete-form">
                    {{ csrf_field() }}
                    @method('DELETE')
                    <button class="btn btn-white" type="submit">Yes, delete</button>
                </form>
                <button type="button" class="btn btn-link text-white ml-auto" data-dismiss="modal">No, don't delete</button>
            </div>
        </div>
    </div>
</div>
</div>

