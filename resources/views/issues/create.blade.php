@extends('layout')
@section('page-title')
    <title>Add a new issue</title>
@endsection

@section('dashboard-name')
    Add new issue
@endsection



@section('content')
    <div class="col-9 order-xl-1 main-form">
        <div class="card bg-secondary shadow">
            <div class="card-header bg-white border-0">
                <div class="row align-items-center">
                    <div class="col-8">
                        <h3 class="mb-0">Create a new issue</h3>
                    </div>
                    <div class="col-4 text-right">
                        <a href="{{ route('issues.index') }}" class="btn btn-sm btn-default">Go back</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('issues.store') }}">
                    @csrf
                    <h6 class="heading-small text-muted mb-4">Issue informations</h6>
                    <div class="pl-lg-4">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group focused">
                                    <label class="form-control-label" for="issue-name">Issue Name</label>
                                    <input type="text" id="issue-name" class="form-control form-control-alternative" placeholder="C# bank application" name="issue-name" value="{{ old('issue-name') }}" required>
                                    @error('issue-name')
                                    <p class="error">This field is required</p>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group focused">
                                    <label class="form-control-label" for="issue-description">Description</label>
                                    <textarea id="issue-description" name="issue-description" class="form-control form-control-alternative" rows="3" placeholder="Fill in this field with a brief description of your project" required>{{ old('issue-description') }}</textarea>
                                    @error('issue-description')
                                    <p class="error">This field is required</p>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group focused">
                                    <label class="form-control-label" for="issue-project">Project that this issue belongs to</label>
                                    <select
                                        name="issue-project"
                                        id="issue-project"
                                        class="form-control form-control-alternative @error('issue-project') is-invalid @enderror"
                                        required>
                                        <option selected disabled>Please select a project</option>
                                        @foreach($projects as $project)
                                            <option value="{{ $project->id }}">{{ $project->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('issue-project')
                                    <p class="error">This field is required</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group focused">
                                    <label class="form-control-label" for="issue-user">User assigned to this issue</label>
                                    <div class="ui fluid search selection dropdown" id="dropdown-with-image" tabindex="0">
                                        <input type="hidden" name="issue-user" required>
                                        <i class="dropdown icon"></i>
                                        <div class="default text">Assign a user</div>
                                        <div class="menu">
                                            @foreach($users as $user)
                                                <div class="item" data-value="{{$user->id}}">
                                                    <img class="ui mini avatar image" src="@if($user->user_image) {{$user->user_image}} @else /assets/img/icons/common/anonymous.png @endif">
                                                    {{$user->username}}
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    @error('issue-user')
                                    <p class="error">This field is required</p>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-group focused">
                                    <label class="form-control-label" for="issue-type">Type of the issue</label>
                                    <select
                                        name="issue-type"
                                        id="issue-type"
                                        class="form-control form-control-alternative @error('issue-type') is-invalid @enderror"
                                        required>
                                        <option selected disabled>Please select a type</option>
                                        @foreach($types as $type)
                                            <option value="{{ $type->id }}">{{ $type->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('issue-type')
                                    <p class="error">This field is required</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group focused">
                                    <label class="form-control-label" for="issue-priority">Priority of the issue</label>
                                    <select
                                        name="issue-priority"
                                        id="issue-priority"
                                        class="form-control form-control-alternative @error('issue-priority') is-invalid @enderror"
                                        required>
                                        <option selected disabled>Please select a priority</option>
                                        @foreach($priorities as $priority)
                                            <option value="{{ $priority->id }}">{{ $priority->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('issue-priority')
                                    <p class="error">This field is required</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group focused">
                                    <label class="form-control-label" for="issue-status">Status of the issue</label>
                                    <select
                                        name="issue-status"
                                        id="issue-status"
                                        class="form-control form-control-alternative @error('issue-status') is-invalid @enderror"
                                        required>
                                        <option selected disabled>Please select a status</option>
                                        @foreach($statuses as $status)
                                            <option value="{{ $status->id }}">{{ $status->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('issue-status')
                                    <p class="error">This field is required</p>
                                    @enderror
                                </div>
                            </div>
                        </div>


                        @if($errors->any())
                            <ul class="alert alert-danger">
                                @foreach($errors->all() as $error)
                                    <li>{{$error}}</li>
                                @endforeach
                            </ul>
                        @endif

                        <button type="submit" class="btn btn-success btn-lg">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection

