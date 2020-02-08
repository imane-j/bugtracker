@extends('layout')
@section('page-title')
    <title>Issue details</title>
@endsection

@section('dashboard-name')
    Issue details
@endsection

@section('content')
    <div class="col-9 order-xl-1 main-form">
        <div class="card bg-secondary shadow">
            <div class="card-header bg-white border-0">
                <div class="row align-items-center">
                    <div class="col-8">
                        <h3 class="mb-0">Issue details</h3>
                    </div>
                    <div class="col-4 text-right">
                        <a href="{{ route('issues.index') }}" class="btn btn-sm btn-default">Go back</a>
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
                                        <p>{{ $issue->name }}</p>
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
                                        <p>{{ $issue->description }}</p>
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
                                        <p>{{ $project->name }}</p>
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
                                        <p>{{ $user->username }}</p>
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
                                        <p>{{ $type->name }}</p>
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
                                        <p>{{ $priority->name }}</p>
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
                                        <p>{{ $status->name }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection
