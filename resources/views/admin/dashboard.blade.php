@extends("layouts.admin")
@section("content")
<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="row">
                    <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                        <h3 class="font-weight-bold">Welcome {{Auth::user()->name}}</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
                <div class="card tale-bg">
                    <div class="card-people mt-auto">
                        <img src="images/dashboard/people.svg" alt="people">
                        <div class="weather-info">
                            <div class="d-flex">
                                <div>
                                    <h2 class="mb-0 font-weight-normal"><i class="icon-sun mr-2"></i>31<sup>C</sup></h2>
                                </div>
                                <div class="ml-2">
                                    <h4 class="location font-weight-normal">Bangalore</h4>
                                    <h6 class="font-weight-normal">India</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @if (Auth::user()->is_admin == "0")
                <div class="col-md-6 grid-margin transparent">
                    <div class="row">
                        <div class="col-md-6 mb-4 stretch-card transparent">
                            <div class="card card-tale">
                                <div class="card-body">
                                    <p class="mb-4">Total Blog's</p>
                                    <p class="fs-30 mb-2">{{ $blogsCount ?? ""}}</p>
                                    <p>10.00% (30 days)</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4 stretch-card transparent">
                            <div class="card card-dark-blue">
                                <div class="card-body">
                                    <p class="mb-4">Total User's</p>
                                    <p class="fs-30 mb-2">{{ $userCount ?? "" }}</p>
                                    <p>22.00% (30 days)</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-4 mb-lg-0 stretch-card transparent">
                            <div class="card card-light-blue">
                                <div class="card-body">
                                    <p class="mb-4">Number of Meetings</p>
                                    <p class="fs-30 mb-2">34040</p>
                                    <p>2.00% (30 days)</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 stretch-card transparent">
                            <div class="card card-light-danger">
                                <div class="card-body">
                                    <p class="mb-4">Number of Clients</p>
                                    <p class="fs-30 mb-2">47033</p>
                                    <p>0.22% (30 days)</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
            @if (Auth::user()->is_admin == "1")
                    <div class="col-md-6 grid-margin transparent">
                        <div class="row">
                            <div class="col-md-6 mb-4 stretch-card transparent">
                                <div class="card card-tale">
                                    <div class="card-body">
                                        <a href="{{ route('list.blog') }}" style="text-decoration: none;color: #fff;">
                                            <p class="mb-4">My Blog's</p>
                                            <p class="fs-30 mb-2">{{ $userBlogsCount ?? ""}}</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
    </div>
</div>
<!-- content-wrapper ends -->
@endsection