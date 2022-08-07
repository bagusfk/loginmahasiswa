@extends('layouts.app1')

@section('content')
<h1>Jadwal</h1>
<!-- Start -->
<div class="container-fluid px-1">
    <div class="col-sm-12 col-xl-6">
        <div class="bg-light rounded h-100 p-4">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createjadwal">tambah</button>
            <h6 class="mb-4"></h6>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">no</th>
                        <th scope="col">Jadwal</th>
                        <th scope="col">Nama Mata Kuliah</th>
                        <th scope="col">Nama Dosen</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($jadwal as $data)
                        <tr>
                            <th scope="row">{{$data->id}}</th>
                            <td>{{$data->jadwal}}</td>
                            <td>{{$data->matakuliah->name}}</td>
                            <td>{{$data->matakuliah->dosen}}</td>
                            <td>
                                <a class="btn btn-success" href="#edit{{$data->id}}" data-bs-toggle="modal" role="button">edit</a>
                                <form action="{{url('matakuliah/'.$data->id)}}" method="post">
                                    @csrf
                                    @method('delete')

                                    <input class="btn btn-danger" type="submit"role="button" value="hapus">
                                </form>
                                {{-- @include('jadwal/edit') --}}
                            </td>
                        </tr>
                        @endforeach
                        @include('jadwal/create')
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- End -->
@endsection
