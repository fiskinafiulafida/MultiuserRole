@extends('layouts.LoginRegister')

@section('title', 'Register Pemohon')

@section('main')
<!-- Sign up form -->
<section class="signup">
    <div class="container">
        <div class="signup-content">
            <div class="signup-form">
                <h2 class="form-title">Sign up</h2>
                <form method="POST" class="register-form" id="register-form">
                    <div class="form-group">
                        <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                        <input type="text" name="name" id="name" placeholder="Nama" />
                    </div>
                    <div class="form-group">
                        <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                        <input type="text" name="name" id="name" placeholder="NIK" />
                    </div>
                    <div class="form-group">
                        <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                        <input type="text" name="name" id="name" placeholder="No Telephone" />
                    </div>
                    <div class="form-group">
                        <label for="name"><i class="zmdi zmdi-email material-icons-name"></i></label>
                        <input type="text" name="name" id="name" placeholder="Alamat" />
                    </div>
                    <div class="form-group">
                        <label for="email"><i class="zmdi zmdi-email"></i></label>
                        <input type="email" name="email" id="email" placeholder="Email" />
                    </div>
                    <div class="form-group">
                        <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                        <input type="text" name="name" id="name" placeholder="Usia" />
                    </div>
                    <div class="form-group">
                        <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                        <input type="text" name="name" id="name" placeholder="Pekerjaan" />
                    </div>
                    <div class="form-group">
                        <div><i class="zmdi zmdi-account material-icons-name"></i>
                            Jenis Kelamin
                        </div>
                        <input type="radio" name="jenis_kelamin" value="Laki-laki">Laki-laki
                        <input type="radio" name="jenis_kelamin" value="Perempuan">Perempuan
                    </div>
                    <div class="form-group">
                        <div><i class="zmdi zmdi-account material-icons-name"></i>
                            Pendidikan Terakhir
                        </div>
                        <input type="radio" name="jenis_kelamin" value="Tidak Sekolah">Tidak Sekolah
                        <input type="radio" name="jenis_kelamin" value="SD/MI /Sederajat">SD/MI /Sederajat
                        <input type="radio" name="jenis_kelamin" value="SMP/MTs/Sederajat">SMP/MTs/Sederajat
                        <input type="radio" name="jenis_kelamin" value="SMA/MA/SMK/Sederajat">SMA/MA/SMK/Sederajat
                        <input type="radio" name="jenis_kelamin" value="D-III/Sederajat">D-III/Sederajat
                        <input type="radio" name="jenis_kelamin" value="S1 / D-VI / Sederajat">S1 / D-VI / Sederajat
                        <input type="radio" name="jenis_kelamin" value="S2">S2
                        <input type="radio" name="jenis_kelamin" value="S3">S3
                        <input type="radio" name="jenis_kelamin" value="Yang Lainnya ...">Yang Lainnya ...
                    </div>
                    <div class="form-group">
                        <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                        <input type="password" name="pass" id="pass" placeholder="Password" />
                    </div>
                    <div class="form-group form-button">
                        <input type="submit" name="signup" id="signup" class="form-submit" value="Register" />
                    </div>
                </form>
            </div>
            <div class="signup-image">
                <figure><img src="{{ asset ('LogReg/images/jdih.png')}}" alt="sing up image"></figure>
                <a href="LoginPemohon" class="signup-image-link">I am already member</a>
            </div>
        </div>
    </div>
</section>
@endsection