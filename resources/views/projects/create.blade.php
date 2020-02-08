@extends('layout')
@section('page-title')
    <title>Add a new project</title>
@endsection

@section('dashboard-name')
    Add new project
@endsection



@section('content')
    <div class="col-9 order-xl-1 main-form">
        <div class="card bg-secondary shadow">
            <div class="card-header bg-white border-0">
                <div class="row align-items-center">
                    <div class="col-8">
                        <h3 class="mb-0">Create a new project</h3>
                    </div>
                    <div class="col-4 text-right">
                        <a href="{{ route('projects.index') }}" class="btn btn-sm btn-default">Go back</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('projects.index') }}">
                    @csrf
                    <h6 class="heading-small text-muted mb-4">Project informations</h6>
                    <div class="pl-lg-4">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group focused">
                                    <label class="form-control-label" for="project-name">Project Name</label>
                                    <input type="text" id="project-name" class="form-control form-control-alternative" placeholder="C# bank application" name="project-name" value="{{ old('project-name') }}" required>
                                    @error('project-name')
                                    <p class="error">This field is required</p>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group focused">
                                    <label class="form-control-label" for="project-description">Description</label>
                                    <textarea id="project-description" name="project-description" class="form-control form-control-alternative" rows="3" placeholder="Fill in this field with a brief description of your project" required>{{ old('project-description') }}</textarea>
                                    @error('project-description')
                                    <p class="error">This field is required</p>
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
                                        <option selected disabled>Please select a status</option>
                                        @foreach($statuses as $status)
                                            <option value="{{ $status->id }}">{{ $status->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('status')
                                    <p class="error">This field is required</p>
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

