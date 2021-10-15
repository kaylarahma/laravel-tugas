@extends('layout.admin')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Halaman Daftar Buku</h1>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">

    <!-- Default box -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Daftar Buku</h3>
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
            @foreach ($buku as $data)
            Pengarang Buku : {{ $data->pengarang->nama_pengarang }} <br>
            Email Pengarang : {{ $data->pengarang->email }} <br>
            Nama Buku : {{ $data->nama_buku }} <br>
            @if($data->jumlah_halaman > 1)
            Jumlah Halaman Buku : {{ $data->jumlah_halaman }} <br>
            @else
            Jumlah Halaman Buku : <b>Belum mempunyai jumlah halaman</b> <br>
            @endif
            Translate Judul Buku : {!! $data->translate_judul_buku ?? '<i>Translate Buku Belum Tersedia</i>' !!} <br>
            <hr>
            @endforeach
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            @foreach ($pengarang as $data)
            Nama Pengarang Buku :{{ $data->nama_pengarang }} <br>
            Email Pengarang :{{ $data->email }} <br>
            Tlp Pengarang :{{ $data->tlp }} <br>
                <b>Daftar Buku</b> <br>
                @foreach ($data->book as $item)
                    Nama Buku : {{ $item->nama_buku }} <br>
                    @if($item->jumlah_halaman > 1)
                    Jumlah Halaman Buku : {{ $item->jumlah_halaman }} <br>
            @else
            Jumlah Halaman Buku : <b>Belum mempunyai jumlah halaman</b> <br>
            @endif
            Translate Judul Buku : {!! $data->translate_judul_buku ?? '<i>Translate Buku Belum Tersedia</i>' !!} <br>
            <hr>
            @endforeach
                @endforeach

        </div>
        <!-- /.card-footer-->
    </div>
    <!-- /.card -->

</section>
<!-- /.content -->
@endsection
