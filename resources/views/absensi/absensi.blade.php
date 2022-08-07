@extends('layouts.app1')

@section('content')
<h1>Absensi</h1>

<!-- Start -->
<div class="container-fluid px-1">
    <div class="col-12">
        <div class="bg-light rounded h-100 p-4">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createabsensi">Absen</button>
            <h6 class="mb-4"></h6>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">no</th>
                        <th scope="col">Waktu</th>
                        <th scope="col">Nama Mahasiswa</th>
                        <th scope="col">Nama Mata Kuliah</th>
                        <th scope="col">Keterangan</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($absensi as $data)
                        <tr>
                            <th scope="row">{{$data->id}}</th>
                            <td>{{$data->created_at}}</td>
                            <td>{{$data->user->name}}</td>
                            <td>{{$data->matakuliah->name}}</td>
                            <td>{{$data->keterangan}}</td>
                            <td>
                                {{-- <a class="btn btn-success" href="#edit{{$data->id}}" data-bs-toggle="modal" role="button">edit</a>
                                <form action="{{url('matakuliah/'.$data->id)}}" method="post">
                                    @csrf
                                    @method('delete')
                                    <input class="btn btn-danger" type="submit"role="button" value="hapus">
                                </form> --}}
                                @include('absensi/create')
                                {{-- @include('matakuliah/edit') --}}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- End -->
@endsection
