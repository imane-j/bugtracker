@extends('layout')
@section('page-title')
    <title>Edit current project</title>
@endsection

@section('dashboard-name')
    Edit current project
@endsection


@section('content')
    <div class="col-9 order-xl-1 main-form">
        <div class="card bg-secondary shadow">
            <div class="card-header bg-white border-0">
                <div class="row align-items-center">
                    <div class="col-8">
                        <h3 class="mb-0">Edit current project</h3>
                    </div>
                    <div class="col-4 text-right">
                        <a href="{{ route('projects.index') }}" class="btn btn-sm btn-default">Go back</a>
                    </div>
                </div>
            </div>
            <div class="card-body">

                <form method="POST" action="/projects/{{ $project->id }}">
                    @csrf
                    @method('PUT')
                    <h6 class="heading-small text-muted mb-4">Project informations</h6>
                    <div class="pl-lg-4">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group focused">
                                    <label class="form-control-label" for="name">Project Name</label>
                                    <input type="text" id="name" class="form-control form-control-alternative" placeholder="C# bank application" name="name" value="{{ $project->name }}" required>
                                    @error('name')
                                    <p class="error">{{ $message }}</p>
                                    @enderror

                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group focused">
                                    <label class="form-control-label" for="description">Description</label>
                                    <textarea id="description" name="description" class="form-control form-control-alternative" rows="3" placeholder="Fill in this field with a brief description of your project" required>{{ $project->description }}</textarea>
                                    @error('description')
                                    <p class="error">{{ $message }}</p>
                                    @enderror
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
                                        class="form-control form-control-alternative @error('status') is-invalid @enderror"
                                        required>
                                        @foreach($statuses as $status)
                                            <option value="{{ $status->id }}"    @if($project->status==$status->id) selected='selected' @endif  >{{ $status->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('status')
                                    <p class="error">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-success btn-lg">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection

