@extends('layouts.app1')

@section('content')
<h1>profile</h1>
<div class="row g-4">
    <div class="col-sm-12 col-xl-6">
        <div class="bg-light rounded h-100 p-4 text-center">
            <img class="rounded-circle me-lg-2" src="img/user.png" alt="" style="width: 300px; height: 300px;">
            <h1 class="mb-4">{{ Auth::user()->name }}</h1>
            <h5 class="mb-4">{{ Auth::user()->email }}</h5>
        </div>
    </div>
    <div class="col-sm-12 col-xl-6">
        <div class="bg-light rounded h-100 p-4">
            <table class="table table-striped">
                <tbody>
                    <tr>
                        <td>Nim </td>
                        <td>: {{ Auth::user()->id }}</td>
                    </tr>
                    <tr>
                        <td>Nama </td>
                        <td>: {{ Auth::user()->name }}</td>
                    </tr>
                    <tr>
                        <td>Email </td>
                        <td>: {{ Auth::user()->email }}</td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td>: {{ Auth::user()->alamat }}</td>
                    </tr>
                    <tr>
                        <td>Telepon</td>
                        <td>: {{ Auth::user()->no_tlp }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection