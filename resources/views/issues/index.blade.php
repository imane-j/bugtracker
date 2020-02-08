@extends('layout')
@section('page-title')
    <title>Manage your Issues</title>
@endsection
@section('dashboard-name')
    Issues dashboard
@endsection


@section('content')
    <div class="row mt-5">
        <div class="col-12 mb-5 mb-xl-0">
            @include('/components/flash-message')
            <div class="card shadow">
                <div class="card-header border-0">
                    <div class="row align-items-center">
                        <div class="col">
                            <h3 class="mb-0">All issues list</h3>
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
                            <th scope="col">Issue Name</th>
                            <th scope="col">Description</th>
                            <th scope="col">Projects it belongs to</th>
                            <th scope="col">Assigned user</th>
                            <th scope="col">Type</th>
                            <th scope="col">Priority</th>
                            <th scope="col">Status</th>
                            <th scope="col">Details</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($issues as $issue)
                            <tr>
                                <th scope="row">
                                    <div class="media-body">
                                        <span class="mb-0 text-sm">{{ $issue->name }}</span>
                                    </div>
                                </th>
                                <td>
                                   <span>{{ Str::words($issue->description, 50)}}...</span>
                                </td>
                                <td>
                                    @foreach($projects as $project)
                                        @if($project->id === $issue->project)
                                          <span>{{ $project->name }}</span>
                                        @endif
                                    @endforeach
                                </td>
                                <td class="centered-user">
                                    @foreach($users as $user)
                                        @if($user->id === $issue->user)
                                            <img src="@if($user->user_image) {{$user->user_image}} @else /assets/img/icons/common/anonymous.png @endif" class="ui mini avatar image">
                                            <span class="user">{{ $user->username }}</span>
                                        @endif
                                    @endforeach
                                </td>
                                <td>
                                    @foreach($types as $type)
                                        @if($type->id === $issue->type)
                                            <span>{{ $type->name }}</span>
                                        @endif
                                    @endforeach
                                </td>
                                <td>
                                    @foreach($priorities as $priority)
                                        @if($priority->id === $issue->priority)
                                            <span>{{ $priority->name }}</span>
                                        @endif
                                    @endforeach
                                </td>
                                <td>
                                    @foreach($statuses as $status)
                                        @if($status->id === $issue->status)
                                           <span class="status">{{ $status->name }}</span>
                                        @endif
                                    @endforeach
                                </td>
                                <td id="details">
                                    <a href="{{route('issues.show', $issue->id)}}" class="badge badge-success">View</a>
                                    <a href="{{route('issues.edit', $issue->id)}}" class="badge badge-info">Edit</a>
                                    <a href="javascript:;" data-toggle="modal" onclick="deleteData({{$issue->id}})"
                                       data-target="#modal-notification" class="badge badge-danger">Delete</a>
                                    @include('components/modal')
                                </td>
                            </tr>

                        @empty
                            <tr>
                                No projects found at the moment
                            </tr>
                        @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
            <a href="{{ route('issues.create') }}"><button type="button" class="btn btn-success mt-4">Add new issue</button></a>
        </div>
    </div>
@endsection
