@extends('template.master')

@section('judul')
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Manajemen Siswa</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
@endsection

@section('content')
<div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add New Student</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="/student" method="POST">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="inputNIS">Nomer Induk Siswa</label>
                    <input type="text" name="nis" class="form-control" id="inputNIS" placeholder="Enter Nomer Induk Siswa">
                  </div>
                  <div class="form-group">
                    <label for="inputNama">Nama Siswa</label>
                    <input type="text" name="nama" class="form-control" id="inputNama" placeholder="Enter Nama Siswa">
                  </div>
                  <div class="form-group">
                        <label>Alamat</label>
                        <textarea name="alamat" class="form-control" rows="3" placeholder="Alamat Siswa"></textarea>
                      </div>
                  <div class="form-group">
                <label>Jenis Kelamin</label>
                <select class="form-control" name="jenis_kelamin">
                  <option disabled selected>-- Pilih Salah Satu --</option>
                  <option value="L">Laki-laki</option>
                  <option value="P">Perempuan</option>
                </select>
              </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
            <!-- /.card -->
          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
@endsection