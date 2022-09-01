@extends('layouts.main', ['active' =>'SiswaPage'])


@section('container')
    <br>
    <a class="btn btn-info text-light mb-3" href="{{ url('siswa/create') }}">Tambah</a>
    <div class="container p-3 my-3 bg-white">
        <table class="table table-striped">
            <tr>
                <th>Nis</th>
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>Kelas</th>
                <th colspan="2" class="text-center">Action</th>
            </tr>
            @foreach ($datas as $key=>$value )
                <tr>
                    <td>{{ $value->nis }}</td>
                    <td>{{ $value->nama }}</td>
                    <td>{{ $value->jk }}</td>
                    <td>{{ $value->kelas }}</td>
                    <td><a class="btn btn-info btn-outline-success text-decoration-none text-light" href="{{ url('siswa/'.$value->id.'/edit') }}">Edit</a></td>
                    <td>
                        <form action="{{ url('siswa/'.$value->id) }}" method="POST">
                            @csrf
                            <input type="hidden" name="_method" value="DELETE">
                            <button class="btn btn-danger btn-outline-warning" type="submit">Delete</button>

                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
