@extends('layout.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Halaman Buku') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @foreach ($buku as $data)
                        Nama Buku : {{ $data->nama_buku}} <br>
                        Jumlah Halaman : {{ $data->jumlah_halaman}} <br>
                        Translate : {{ $data->translate_judul_buku ?? 'Belum di Translate'}} <br>
                        <hr>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
