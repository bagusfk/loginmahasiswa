@extends('layouts.app1')

@section('content')
<h1>Mata Kuliah</h1>

<!-- Start -->
<div class="container-fluid px-1">
    <div class="col-sm-12 col-xl-6">
        <div class="bg-light rounded h-100 p-4">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#creatematakuliah">tambah</button>
            <h6 class="mb-4"></h6>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">no</th>
                        <th scope="col">Nama Mata Kuliah</th>
                        <th scope="col">SKS</th>
                        <th scope="col">Dosen</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($matakuliah as $data)
                        <tr>
                            <th scope="row">{{$data->id}}</th>
                            <td>{{$data->name}}</td>
                            <td>{{$data->sks}}</td>
                            <td>{{$data->dosen}}</td>
                            <td>
                                <a class="btn btn-success" href="#edit{{$data->id}}" data-bs-toggle="modal" role="button">edit</a>
                                <form action="{{url('matakuliah/'.$data->id)}}" method="post">
                                    @csrf
                                    @method('delete')
                                    <input class="btn btn-danger" type="submit"role="button" value="hapus">
                                </form>
                                @include('matakuliah/edit')
                            </td>
                        </tr>
                        @endforeach
                        @include('matakuliah/create')
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- End -->
@endsection
