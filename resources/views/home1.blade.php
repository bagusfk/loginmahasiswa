@extends('layouts.app1')

@section('content')
<!-- Start -->
<div class="container-fluid px-1">
    <div class="col-12">
        <div class="bg-light rounded h-100 p-4">
            <div class="px-lg-5 text-center">
                <br>
                <br>
                <br>
                <h1 class="my-5 ">Welcome, <b>{{ Auth::user()->name }}</b></h1>
                <h3 class="mb-5"></h3>
                <a class="btn btn-primary btn-xl mb-5" href="#about">Mulai Absen</a>
            </div>
        </div>
    </div>
</div>
<!-- End -->
@endsection
