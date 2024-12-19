@extends("layouts.admin")
@section("content")
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Users Record</h4>
            <p class="card-description">
                Total Users :<code>{{ $userCount }}</code>
            </p>
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Sr no</th>
                            <th>User name</th>
                            <th>User email</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($user as $key => $data)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $data->name ?? "" }}</td>
                                <td class="text-danger">{{ $data->email }}</td>
                                <td><label class="badge badge-danger">Pending</label></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection