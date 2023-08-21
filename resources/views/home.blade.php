@extends('layouts.app')

@section('content')

<div class="container">
    <div class="overlay position-relative profile-cover">
        <div class="profile-cover-img height-auto" style="background-image: {{asset('img/amongtani1.jpg')}}; background-position: center; ">
            <div class="container">
                <div class="content-wrapper">
                    <div class="content text-gray py-5">
                        <div class="row">
                            <div class="col-xl-6">
                                <h2 class="font-weight-bold">Cari Produk Hukum</h2>
                                <form action="produk-hukum/search" method="get" class="input-lg legislation-filter-form">
                                    <input type="hidden" name="ob" value="latest">
                                    <div class="form-group">
                                        <label class="font-weight-bold font-size-lg">Judul:</label>
                                        <input type="text" name="title" class="form-control p-3" placeholder="Contoh: covid-19" rows="2">
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div class="form-group">
                                                <label class="font-weight-semibold">Tipe Dokumen</label>
                                                <select name="type" id="type" class="form-control select select2-hidden-accessible" data-select2-id="type" tabindex="-1" aria-hidden="true">
                                                    <option value="1" data-select2-id="2">Peraturan Perundang-undangan</option>
                                                    <option value="2">Monografi Hukum</option>
                                                    <option value="3">Artikel Hukum</option>
                                                    <option value="3">Putusan Pengadilan</option>
                                                </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="1" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-type-container"><span class="select2-selection__rendered" id="select2-type-container" role="textbox" aria-readonly="true" title="Peraturan Perundang-undangan">Peraturan Perundang-undangan</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="form-group">
                                                <label class="font-weight-semibold">Jenis Dokumen</label>
                                                <select name="class" id="class" class="form-control select-search select2-hidden-accessible" data-select2-id="class" tabindex="-1" aria-hidden="true">
                                                    <option value="" data-select2-id="6">Pilih Jenis Dokumen</option>
                                                                                                    <option value="39">Undang-Undang Dasar</option>
                                                                                                    <option value="25">Undang-Undang</option>
                                                                                                    <option value="38">Undang-Undang Darurat</option>
                                                                                                    <option value="26">Peraturan Pemerintah Pengganti Undang-Undang</option>
                                                                                                    <option value="104">Ketetapan MPR</option>
                                                                                                    <option value="27">Peraturan Pemerintah</option>
                                                                                                    <option value="28">Peraturan Presiden</option>
                                                                                                    <option value="30">Instruksi Presiden</option>
                                                                                                    <option value="29">Keputusan Presiden</option>
                                                                                                    <option value="31">Peraturan Menteri Dalam Negeri</option>
                                                                                                    <option value="55">Peraturan Menteri Pendayagunaan Aparatur Negara dan Reformasi Birokrasi Republik Indonesia</option>
                                                                                                    <option value="64">Peraturan Menteri Hukum dan Hak Asasi Manusia</option>
                                                                                                    <option value="86">Peraturan Menteri Keuangan Republik Indonesia</option>
                                                                                                    <option value="48">Peraturan Menteri Kesehatan</option>
                                                                                                    <option value="89">Peraturan Menteri Perhubungan Republik Indonesia</option>
                                                                                                    <option value="32">Keputusan Menteri Dalam Negeri</option>
                                                                                                    <option value="88">Keputusan Menteri Kesehatan Republik Indonesia</option>
                                                                                                    <option value="80">KEPUTUSAN BERSAMA MENTERI AGAMA, MENTERI KETENAGAKERJAAN DAN MENTERI PENDAYAGUNAAN APARATUR NEGARA DAN REFORMASI BIROKRASI</option>
                                                                                                    <option value="77">Keputusan Menteri Hukum dan Hak Asasi Manusia</option>
                                                                                                    <option value="81">Keputusan Komisi Pemilihan Umum Republik Indonesia</option>
                                                                                                    <option value="98">Keputusan Menteri Keuangan Republik Indonesia</option>
                                                                                                    <option value="72">PUTUSAN MAHKAMAH KONSTITUSI</option>
                                                                                                    <option value="101">Instruksi Menteri Dalam Negeri</option>
                                                                                                    <option value="74">MoU/Nota Kesepakatan Menteri Dalam Negeri</option>
                                                                                                    <option value="90">Surat Edaran Badan Kepegawaian Negara</option>
                                                                                                    <option value="67">Surat Edaran Menteri Pendidikan dan Kebudayaan Republik Indonesia</option>
                                                                                                    <option value="85">SURAT EDARAN MENTERI KESEHATAN REPUBLIK INDONESIA</option>
                                                                                                    <option value="34">Surat Edaran Menteri Dalam Negeri</option>
                                                                                                    <option value="105">ADDENDUM SURAT EDARAN</option>
                                                                                                    <option value="110">SURAT EDARAN SATGAS COVID-19</option>
                                                                                                    <option value="47">Keputusan DPRD</option>
                                                                                                </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="5" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-class-container"><span class="select2-selection__rendered" id="select2-class-container" role="textbox" aria-readonly="true" title="Pilih Jenis Dokumen">Pilih Jenis Dokumen</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-4">
                                            <div class="form-group">
                                                <label class="font-weight-semibold">Tahun</label>
                                                <input type="number" name="year" class="form-control" placeholder="Tahun" value="">
                                            </div>
                                        </div>
                                        <div class="col-xl-4">
                                            <div class="form-group">
                                                <label class="font-weight-semibold">Nomor</label>
                                                <input type="text" id="number" name="number" class="form-control" placeholder="Nomor" value="">
                                            </div>
                                        </div>
                                        <div class="col-xl-4">
                                            <div class="form-group">
                                                <label class="font-weight-semibold">Status</label>
                                                <select name="status" id="status" class="form-control select select2-hidden-accessible" data-select2-id="status" tabindex="-1" aria-hidden="true">
                                                    <option value="" data-select2-id="4">Pilih Status</option>
                                                    <option value="berlaku">Berlaku</option>
                                                    <option value="tidak berlaku">Tidak Berlaku</option>
                                                </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="3" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-status-container"><span class="select2-selection__rendered" id="select2-status-container" role="textbox" aria-readonly="true" title="Pilih Status">Pilih Status</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn bg-success btn-lg font-weight-bold btn-block"><i class="icon-search4 mr-2 font-size-base"></i>Cari</button>
                                    </div>
                                </form>
                            </div>
                            {{-- <div class="col-xl-6 mobile-none pl-4">
                                <div class="nudge pl-3 text-center nangunsatkerthi">
                                    <div class="row">
                                        <div class="col">
                                            <img src="{{asset('img/jdih.png')}}" class="img-fluid" height="94">
                                        </div>
                                        <div class="col">
                                            <img src="{{asset('img/pemkot.png')}}" class="img-fluid" height="94">
                                        </div>
                                    </div>
                                    <img src="{{asset('img/jdhin.png')}}" class="img-fluid mt-3 mb-4">
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
</div>
<section class="bg-light">
    <!-- Page content -->
    <div class="container" style="margin-top: 10px">
                <div class="row">
                    <div class="col-12 col-md-3">
                        <div class="card card-body bg-light has-bg-image summary-box shadow">
                            <a href="produk-hukum/peraturan-perundang-undangan" class="text-default" style="text-decoration:none">
                                <div class="row row-cols-2 ">
                                    <div class="media-body font-weight-semibold text-dark">
                                        <h3 class="mb-0 number-style">0</h3>
                                        <span>Peraturan Hukum</span>
                                    </div>
                                    <div>
                                        <img src="{{asset('icon/peraturan.png')}}" style="width: 40px">
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-12 col-md-3">
                        <div class="card card-body bg-light has-bg-image summary-box shadow">
                            <a href="produk-hukum/peraturan-perundang-undangan" class="text-default" style="text-decoration:none">
                                <div class="row row-cols-2 ">
                                    <div class="media-body font-weight-semibold text-dark">
                                        <h3 class="mb-0 number-style">0</h3>
                                        <span>Monografi Hukum</span>
                                    </div>
                                    <div>
                                        <img src="{{asset('icon/monografi.png')}}" style="width: 40px">
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-12 col-md-3">
                        <div class="card card-body bg-light has-bg-image summary-box shadow">
                            <a href="produk-hukum/peraturan-perundang-undangan" class="text-default" style="text-decoration:none">
                                <div class="row row-cols-2 ">
                                    <div class="media-body font-weight-semibold text-dark">
                                        <h3 class="mb-0 number-style">{{ $berita}}</h3>
                                        <span>Artikel Hukum</span>
                                    </div>
                                    <div>
                                        <img src="{{asset('icon/artikel.png')}}" style="width: 40px">
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-12 col-md-3">
                        <div class="card card-body bg-light has-bg-image summary-box shadow">
                            <a href="produk-hukum/peraturan-perundang-undangan" class="text-default" style="text-decoration:none">
                                <div class="row row-cols-2 ">
                                    <div class="media-body font-weight-semibold text-dark">
                                        <h3 class="mb-0 number-style">0</h3>
                                        <span>Putusan Pengadilan</span>
                                    </div>
                                    <div>
                                        <img src="{{asset('icon/putusan.png')}}" style="width: 40px">
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
</section>
@endsection
