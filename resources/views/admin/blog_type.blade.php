@extends("layouts.admin")
@section("content")
<div class="main-panel">
    <div class="content-wrapper">
        <form class="forms-sample" action="{{ route('blog_type') }}" method="post">
            @csrf
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <div class="form-group col col-4">
                            <h4 class="card-title" for="BlogType">Blog Type</h4>
                            <input type="text" class="form-control" id="BlogType" name="blog_type" placeholder="Blog Type" autofocus>
                        </div>
                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                        <button class="btn btn-light">Cancel</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection