@extends('layout/main')

@section('title', 'Form Tambah Data Mahasiswa')

@section('container')

        <div class="container">
          <div class="row">
            <div class="col-8">
              <h1 class="mt-3">Form Tambah Data Mahasiswa</h1>

                <form method="POST" action="/students">
                    @csrf
                   <div class="form-group my-3">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Masukkan Nama" name="nama">
                        
                        @error('nama')
                        <div id="validationServerUsernameFeedback" class="invalid-feedback">
                            {{ $message }} </div>
                        @enderror

                   </div>
                   <div class="form-group my-3">
                        <label for="nrp">NRP</label>
                        <input type="text" class="form-control @error('nrp') is-invalid @enderror" id="nrp" placeholder="Masukkan NRP" name="nrp">
                   
                        @error('nrp')
                        <div id="validationServerUsernameFeedback" class="invalid-feedback">
                            {{ $message }} </div>
                        @enderror

                   </div>
                   <div class="form-group my-3">
                        <label for="email">Email</label>
                        <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Masukkan Email" name="email">
                   
                        @error('email')
                        <div id="validationServerUsernameFeedback" class="invalid-feedback">
                            {{ $message }} </div>
                        @enderror

                   </div>
                   <div class="form-group my-3">
                        <label for="jurusan">Jurusan</label>
                        <input type="text" class="form-control @error('jurusan') is-invalid @enderror" id="jurusan" placeholder="Masukkan Jurusan" name="jurusan">

                        @error('jurusan')
                        <div id="validationServerUsernameFeedback" class="invalid-feedback">
                            {{ $message }} </div>
                        @enderror

                   </div>
                   <button type="submit" class="btn btn-primary my-3">Tambah Data!</button>
                </form>
            </div>
          </div>
        </div>

@endsection