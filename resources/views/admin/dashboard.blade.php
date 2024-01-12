@extends('admin.layouts.master')
@section('content')
    

<div class="container-fluid px-4">
    <h3 class="mt-4">Dashboard</h3>
    
    <div class="row">
        <div class="col-xl-3 col-md-6">
            <div class="card dashboard-card1 text-white mb-4">
                <div class="card-body d-flex justify-content-between">Users
                    <div>{{$usercnt}}</div>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="{{route('user.list')}}">View Details</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
       
    </div>
</div>
@endsection