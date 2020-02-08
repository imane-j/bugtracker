@extends('layout');
@section('page-title')
    <title>Ivry Bugtracker dashboard</title>
@endsection
@section('dashboard-name')
    Bugtacker dashboard
@endsection

@section('stat-cards')
@include('components/stat-cards')
@endsection

@section('content')
<div class="row mt-5">
        <div class="col-xl-6 mb-5 mb-xl-0">
          <div class="card shadow">
            <div class="card-header border-0">
              <div class="row align-items-center">
                <div class="col">
                  <h3 class="mb-0">Latest projects</h3>
                </div>
                <div class="col text-right">
                  <a href="{{ Route('projects.index')}}" class="btn btn-sm btn-primary">See all</a>
                </div>
              </div>
            </div>
            <div class="table-responsive">
              <!-- Projects table -->
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">Project title</th>
                    <th scope="col">Number of issues</th>
                    <th scope="col">Status</th>
                    <th scope="col">Created at</th>
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
                               <td>{{ $project->created_at}}</td>
                            </tr>

                            @empty
                            <tr>
                                <p>No projects found at the moment</p>
                            </tr>
                        @endforelse
                  
                </tbody>
              </table>
              {!! $projects->links() !!}
            </div>
          </div>
        </div>
        <div class="col-xl-6">
          <div class="card shadow">
            <div class="card-header border-0">
              <div class="row align-items-center">
                <div class="col">
                  <h3 class="mb-0">Latest Issues</h3>
                </div>
                <div class="col text-right">
                  <a href="{{Route('issues.index')}}" class="btn btn-sm btn-primary">See all</a>
                </div>
              </div>
            </div>
            <div class="table-responsive">
              <!-- Projects table -->
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">Issue name</th>
                    <th scope="col">Status</th>
                    <th scope="col">Created at</th>
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
                                    @foreach($statuses as $status)
                                        @if($status->id === $issue->status)
                                            <span>{{ $status->name }}</span>
                                        @endif
                                    @endforeach
                                </td>
                               <td>{{ $issue->created_at}}</td>
                            </tr>

                            @empty
                            <tr>
                                <p>No issues found at the moment</p>
                            </tr>
                        @endforelse
                </tbody>
              </table>
              {!! $issues->links() !!}
            </div>
          </div>
        </div>
      </div>
@endsection