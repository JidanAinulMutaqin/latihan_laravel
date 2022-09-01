@extends('layouts.main', ['active' =>'SiswaCreate'])

@section('container')

<section class="guestbook">
    <h1 class="title">Isi Data</h1>


    <div class="container">
        <div class="contact-form row">
            <form action="{{ url('siswa') }}" method="POST">
            @csrf
                <div class="form-field col-lg-6">
                    <label for="nis">NIS</label>
                    <input class="input-text" type="text" name="nis">
                </div>
                <div class="form-field col-lg-6">
                    <label for="nama">Nama</label>
                    <input class="input-text" type="text" name="nama">
                </div>
                <div class="form-field col-lg-6">
                    <label for="jk">Jenis Kelamin</label>
                    <input class="input-text" type="text" name="jk">
                </div>
                <div class="form-field col-lg-6">
                    <label for="kelas">Kelas</label>
                    <input class="input-text" type="text" name="kelas">
                </div>
                <div class="form-field col-lg-6">
                    <button class="submit-btn" type="submit">Submit</button>
                </div>
                <div class="form-field col-lg-8">
                    <a class="back-btn text-decoration-none text-center" href="{{ url('siswa') }}">Back</a>
                </div>
            </form>
        </div>
    </div>

<br>
</section>

    {{-- <form method="POST" action="{{ url('siswa') }}" >
        @csrf
        Nis  : <input type="text" name="nis"><br/>
        Nama  : <input type="text" name="nama"><br/>
        Jenis Kelamin  : <input type="text" name="jk"><br/>
        Kelas  : <input type="text" name="kelas"><br/>




        <button type="submit">Submit</button>
    </form> --}}
@endsection
