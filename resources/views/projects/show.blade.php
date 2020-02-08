@extends('layout')
@section('page-title')
    <title>Project details</title>
@endsection

@section('dashboard-name')
   Project details
@endsection

@section('content')
    <div class="col-9 order-xl-1 main-form">
        <div class="card bg-secondary shadow">
            <div class="card-header bg-white border-0">
                <div class="row align-items-center">
                    <div class="col-8">
                        <h3 class="mb-0">Project details</h3>
                    </div>
                    <div class="col-4 text-right">
                        <a href="{{ route('projects.index') }}" class="btn btn-sm btn-default">Go back</a>
                    </div>
                </div>
            </div>



    <div class="card-body">
            <h6 class="heading-small text-muted mb-4">Project name</h6>
            <div class="pl-lg-4">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="show-content">
                            <p>{{ $project->name }}</p>
                        </div>
                    </div>
                </div>
            </div>

        <h6 class="heading-small text-muted mb-4">Project description</h6>
        <div class="pl-lg-4">
            <div class="row">
                <div class="col-lg-12">
                    <div class="show-content">
                        <p>{{ $project->description }}</p>
                    </div>
                </div>
            </div>
        </div>

        <h6 class="heading-small text-muted mb-4">Project status</h6>
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

@endsection
