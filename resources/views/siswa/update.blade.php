@extends('layouts.main', ['active' =>'UpdateSiswa'])

@section('container')

<section class="guestbook">
    <h1 class="title">Isi Data</h1>


    <div class="container">
        <div class="contact-form row">
            <form action="{{ url('siswa/'.$model->id) }}" method="POST" >
            @csrf
            <input type="hidden" name="_method" value="PATCH">
                <div class="form-field col-lg-6">
                    <label for="nis">NIS</label>
                    <input class="input-text" type="text" name="nis" value="{{ $model->nis }}">
                </div>
                <div class="form-field col-lg-6">
                    <label for="nama">Nama</label>
                    <input class="input-text" type="text" name="nama" value="{{ $model->nama }}">
                </div>
                <div class="form-field col-lg-6">
                    <label for="jk">Jenis Kelamin</label>
                    <input class="input-text" type="text" name="jk" value="{{ $model->jk }}">
                </div>
                <div class="form-field col-lg-6">
                    <label for="kelas">Kelas</label>
                    <input class="input-text" type="text" name="kelas" value="{{ $model->kelas }}">
                </div>
                <div class="form-field col-lg-6">
                    <button class="submit-btn" type="submit">Edit</button>
                </div>
                <div class="form-field col-lg-8">
                    <a class="back-btn text-decoration-none text-center" href="{{ url('siswa') }}">Back</a>
                </div>
            </form>
        </div>
    </div>

<br>
</section>

    {{-- <form method="POST" action="{{ url('siswa/'.$model->id) }}" >
        @csrf
        <input type="hidden" name="_method" value="PATCH">
        Nis  : <input type="text" name="nis" value="{{ $model->nis }}"><br/>
        Nama  : <input type="text" name="nama" value="{{ $model->nama }}"><br/>
        Jenis Kelamin  : <input type="text" name="jk" value="{{ $model->jk }}"><br/>
        Kelas  : <input type="text" name="kelas" value="{{ $model->kelas }}"><br/>




        <button class="btn btn-info mt-3" type="submit">Edit</button>
        <a class="btn btn-info mt-3" href="{{ url('siswa') }}">Back</a>
    </form> --}}
@endsection
