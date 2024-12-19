@extends("layouts.admin")
@section("content")
<div class="col-lg-11">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Blogs Record</h4>
            <p class="card-description">
                Total Blogs :<code>{{ $blogsCount }}</code>
            </p>
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Sr no</th>
                            <th>Blog Title</th>
                            <th>Blog Details</th>
                            <th>Blog Poster</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($blogs as $key => $data)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ substr($data->blog_title, 0, 20) ?? "" }}</td>
                                <td class="text-danger">{{ substr($data->blog_details, 0, 20) }}</td>
                                <td><img src="{{ $data->blog_poster }}" alt="" style="height: 50px;width: 50px;"></td>
                                <td><a href="{{ route('edit.blog', $data->id)}}" style="text-decoration: none;"><span
                                            class="mdi mdi-table-edit text-success">Edit</span></a></td>
                                <td>
                                    <form action="{{ route('delete.blog', $data->id) }}" method="post">
                                        @csrf
                                        <button type="submit" style="border:none;background: none;">
                                            <span class="mdi mdi mdi-delete-forever text-danger">Delete</span>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection