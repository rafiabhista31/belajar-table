@extends('template.masterlimbad')

@section('judul')

<h1>DAFTAR USER</h1>

@endsection

@section('content')

<div class="card">
    <div class="card-header">
        <a href="{{ route('akun-create') }}" class="btn btn-dark" >
            <i class="fas fa-solid fa-user-plus" ></i> TAMBAH USER</a>
        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                <i class="fas fa-times"></i>
            </button>
        </div>
    </div>
    <div class="card-body">
        <h1>Media Online</h1>
<h3>Sosial Media Developer</h3>
<p>Belajar dan berbagi agar hidup menjadi lebih baik</p>
<h4>Benefit Join di Media Online</h4>
<ul>
    <li>Mendapatkan motivasi dari sesama Developer</li>
    <li>Sharing knowledge</li>
    <li>Dibuat oleh calon web developer terbaik</li>
</ul>
<h4>Cara Bergabung ke media online</h4>
<ol>
    <li>Mengunjungi website ini</li>
    <li>Mendaftarkan di
        <a href="form.html"> Form Sign Up </a>
    </li>
    <li>Selesai</li>
</ol>
    </div>
    <!-- /.card-body -->
</div>


@endsection