@extends('layout')

@section('konten')

    <div class="d-flex">
        <h4 class="text-center">List Siswa</h4>
        <div class="ms-auto">
            <a class="btn btn-success" href="{{route('siswa.tambah')}}">Tambah</a>
        </div>
    </div>

    <table class="table">
        <tr>
            <th>No</th>
            <th>NIS</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>No Hp</th>
            <th>Jenis Kelamin</th>
            <th>Hobi</th>
            <th>Aksi</th>
        </tr>

        @foreach ($siswa as $no=>$data)
        <tr>
            <td>{{$no+1}}</td>
            <td>{{$data->nis}}</td>
            <td>{{$data->nama}}</td>
            <td>{{$data->alamat}}</td>
            <td>{{$data->no_hp}}</td>
            <td>{{$data->jenis_kelamin}}</td>
            <td>{{$data->hobi}}</td>
            <td>
                <a href="{{route('siswa.edit', $data->id)}}" class="btn btn-sm btn-warning">Edit</a>
            </td>
        </tr>
        @endforeach
    </table>

@endsection