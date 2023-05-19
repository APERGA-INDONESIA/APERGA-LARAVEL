@extends('template')

@section('navbar')
@endsection

@section('konten')
<div class="container">
    <div class="dashboard-kotak"> </div>
    <img src="{{ asset('images/profile 1.png') }}" alt="Profile Image" class="profile-img">
    <p class="greeting">Halo,</p>
    <p class="username">Username</p>

    <div class="FAQ">
        <div class="FAQ-with-Icon">
        </div>
        <div class="FAQ-items">
            <div class="FAQ-items-1">
                <p class="">
                <img src="">
            </div>
            <div class="FAQ-items-2">
                <p class="">
                <img src="">
            </div>
            <div class="FAQ-items-3">
                <p class="">
                <img src="">
            </div>
        </div>
    </div>



</div>


@endsection

@section('footer')
@endsection

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/bantuan.css') }}">
@endpush
