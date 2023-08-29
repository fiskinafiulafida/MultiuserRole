@extends('layouts.app')

@section('content')

<section class="bg-light">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <br>
                <thead>
                    <tr>
                        <th>Judul Berita</th>
                        <th>Isi Berita</th>
                        <th>Gambar</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($berita as $berita)
                    <tr>
                        <td class="text-center">
                            <img src="{{ Storage::url('public/image/'.$berita->gambar_berita) }}" class="rounded" style="width: 100px">
                        </td>
                        <td>{{ $berita->judul_berita }}</td>
                        <td>{{ $berita->isi_berita }}</td>
                    </tr>
                    @empty
                    <div class="alert alert-danger">
                        Data Berita belum Tersedia.
                    </div>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</section>
@endsection
