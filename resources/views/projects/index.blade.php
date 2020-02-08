@extends('layout')
@section('page-title')
    <title>Manage your projects</title>
@endsection
@section('dashboard-name')
    Projects dashboard
@endsection


@section('content')
    <div class="row mt-5">
        <div class="col-12 mb-5 mb-xl-0">
            @include('/components/flash-message')
            <div class="card shadow">
                <div class="card-header border-0">
                    <div class="row align-items-center">
                        <div class="col">
                            <h3 class="mb-0">All projects list</h3>
                        </div>
                        <div class="col text-right">
                            <a href="{{ route('dashboard') }}" class="btn btn-sm btn-primary">Go back</a>
                        </div>
                    </div>
                </div>
                <div class="table-responsive">
                    <!-- Projects table -->
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                        <tr>
                            <th scope="col">Project Name</th>
                            <th scope="col">Description</th>
                            <th scope="col">Status</th>
                            <th scope="col">Details</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($projects as $project)
                            <tr>
                                <th scope="row">
                                    <div class="media-body">
                                        <span class="mb-0 text-sm">{{ $project->name }}</span>
                                    </div>
                                </th>
                                <td>
                                   <span>{{ $project->description }}</span>
                                </td>
                                <td>
                                    @foreach($statuses as $status)
                                        @if($status->id === $project->status)
                                            <span>{{ $status->name }}</span>
                                        @endif
                                    @endforeach
                                </td>
                                <td>
                                    <a href="{{route('projects.show', $project->id)}}" class="badge badge-success">View</a>
                                    <a href="{{route('projects.edit', $project->id)}}" class="badge badge-info">Edit</a>
                                    <a href="javascript:;" data-toggle="modal" onclick="deleteData({{$project->id}})"
                                       data-target="#modal-notification" class="badge badge-danger">Delete</a>
                                    @include('components/modal')
                                </td>
                            </tr>

                            @empty
                            <tr>
                                <p>No projects found at the moment</p>
                            </tr>
                        @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
            <a href="{{ route('projects.create') }}"><button type="button" class="btn btn-success mt-4">Add new project</button></a>
        </div>
    </div>
@endsection
