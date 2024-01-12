@extends('layouts.app')
@section('content')
@include('components.userheader')
<div class="main p-5">
    <p>Name : {{Auth::user()->name}}</p>
    <p>Your Referral code : {{Auth::user()->referral_code}}</p>
    <p>Total Points You Earned : {{Auth::user()->points}}</p>
</div>
@endsection