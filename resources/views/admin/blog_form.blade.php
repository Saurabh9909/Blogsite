@extends("layouts.admin")
@section("content")
<div class="col-9 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Add blog</h4>
            <form class="forms-sample" action="{{ route('store.blog') }}" method="post" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                <div class="form-group">
                    <label for="BlogTitle">Blog Title</label>
                    <input type="text" class="form-control" id="BlogTitle" name="blog_title" maxlength="100" placeholder="Blog Title"
                        autofocus>
                </div>
                <div class="form-group">
                    <label for="BlogDetails">Blog Details</label>
                    <textarea class="form-control"  name="blog_details"  id="BlogDetails" rows="4" maxlength="200"></textarea>
                </div>
                <label for="BlogType">Blog Type</label>
                <div class="form-group">
                    <select name="blog_type[]" class="js-example-basic-multiple w-100" id="BlogType" multiple="multiple">
                        @foreach ($blogType as $key => $data)
                            <option value="{{$data->id}}">{{ $data->blog_type ?? "" }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>File upload</label>
                    <input type="file" name="blog_poster" class="file-upload-default">
                    <div class="input-group col-xs-12">
                        <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                        <span class="input-group-append">
                            <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                        </span>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary mr-2">Submit</button>
                <button class="btn btn-light">Cancel</button>
            </form>
        </div>
    </div>
</div>
@endsection