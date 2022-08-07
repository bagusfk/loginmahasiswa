@extends('layouts.app1')

@section('content')
<h1>Semester</h1>
<!-- Start -->
<div class="container-fluid px-1">
    <div class="col-sm-12 col-xl-6">
        <div class="bg-light rounded h-100 p-4">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createsemester">tambah</button>
            <h6 class="mb-4"></h6>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <td class="text-center">Semester</td>
                        <td></td>
                    </thead>
                @foreach($semester as $data)
                    <tbody>
                        <td class="text-center">{{$data->semester}}</td>
                        <td>
                            <a class="btn btn-success" href="#edit{{$data->id}}" data-bs-toggle="modal" role="button">edit</a>
                            <form action="{{url('semester/'.$data->id)}}" method="post">
                                @csrf
                                @method('delete')
                                <input class="btn btn-danger" type="submit"role="button" value="hapus">
                            </form>
                        </td>
                        @include('semester/edit')
                    </tbody>
                @endforeach
                    @include('semester/modal')
                </table>
            </div>
        </div>
    </div>
</div>
<!-- End -->
@endsection
