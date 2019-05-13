<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>EDIT</title>
    <style>
		textarea {
                width: 30%;
                height: 150px;
                padding: 12px 20px;
                box-sizing: border-box;
                border: 2px solid #ccc;
                border-radius: 4px;
                background-color: #f8f8f8;
                font-size: 16px;
                resize: none;
                }
                input[type=text] {
                width: 30%;
                padding: 12px 20px;
                margin: 8px 0;
                box-sizing: border-box;
                border: 3px solid #ccc;
                -webkit-transition: 0.5s;
                transition: 0.5s;
                outline: none;
                }

                input[type=text]:focus {
                border: 3px solid #555;
                }
                input[type=date] {
                width: 30%;
                padding: 12px 20px;
                margin: 8px 0;
                box-sizing: border-box;
                border: 3px solid #ccc;
                -webkit-transition: 0.5s;
                transition: 0.5s;
                outline: none;
                }
                input[type=submit] {
                background-color: #85929E;
                color: white;
                padding: 12px 20px;
                border: none;
                border-radius: 4px;
                cursor: pointer;
                }
                .buttona {
                    background-color: #616A6B;
                    border: none;
                    color: white;
                    padding: 15px 32px;
                    text-align: center;
                    text-decoration: none;
                    display: inline-block;
                    font-size: 16px;
                    margin: 4px 2px;
                    cursor: pointer;
                    }
	</style>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>
<body bgcolor="#EAEDED">
                                        <br>
                                        <a href="/biodata_siswa" class="buttona">Kembali ke Halaman Biodata Siswa</a>
		                         <h2 align="center">Edit Biodata Siswa</h2><br><br>
                                                        <form method="post" action="/biodata_siswa/update/{{ $biodata_siswa->id }}" align="center">
                                                        
                                                        {{ csrf_field() }}
                                                        {{ method_field('PUT') }} 

                                                        <label for="no_induk_siswa">NIS
                                                        <span> * </span>
                                                        </label>
                                                        <div class="form-input">
                                                        <input type="text" name="no_induk_siswa" placeholder="Masukkan Nomor Induk" value=" {{ $biodata_siswa->no_induk_siswa }}">
                                                        </div>
                                                        @if($errors->has('no_induk_siswa'))
                                                                {{ $errors->first('no_induk_siswa')}}
                                                        @endif
                                                                <br>
                                                        <label for="name">Nama
                                                        <span> * </span>
                                                        </label>
                                                        <div class="form-input">
                                                        <input type="text" name="name" placeholder="Masukkan Nama" value=" {{ $biodata_siswa->name }}">
                                                        </div>
                                                        @if($errors->has('name'))
                                                                {{ $errors->first('name')}}
                                                        @endif
                                                        <br>
                                                        <label for="tempat_lahir_siswa">Tempat Lahir Siswa
                                                        <span> * </span>
                                                        </label>
                                                        <div class="form-input">
                                                        <input type="text" name="tempat_lahir_siswa" placeholder="Masukkan Tempat Lahir" value=" {{ $biodata_siswa->tempat_lahir_siswa }}">
                                                        </div>
                                                        @if($errors->has('tempat_lahir_siswa'))
                                                                {{ $errors->first('tempat_lahir_siswa')}}
                                                        @endif
                                                        <br>
                                                        <label for="tanggal_lahir_siswa">Tanggal Lahir Siswa
                                                        <span> * </span>
                                                        </label>
                                                        <div class="form-input">
                                                        <input type="date"  name="tanggal_lahir_siswa" placeholder="Masukkan Tanggal Lahir" value=" {{ $biodata_siswa->tanggal_lahir_siswa }}">
                                                        </div>
                                                        @if($errors->has('tanggal_lahir_siswa'))
                                                                {{ $errors->first('tanggal_lahir_siswa')}}
                                                        @endif
                                                        <br>
                                                        <label for="jenis_kelamin_siswa">Jenis Kelamin
                                                        <span> * </span>
                                                        </label><br>
                                                        <div class="form-input">
                                                                <input type="radio" value="Laki-Laki" {{ $biodata_siswa->jenis_kelamin_siswa == 'Laki-Laki' ? 'checked' : ''}} id="Radio1" name="jenis_kelamin_siswa"/>
                                                                <label for="Radio1">Laki-Laki</label>
                                                                <input type="radio" value="Perempuan" {{ $biodata_siswa->jenis_kelamin_siswa == 'Perempuan' ? 'checked' : ''}} id="Radio2" name="jenis_kelamin_siswa"/>
                                                                <label for="Radio2">Perempuan</label>
                                                        </div>
                                                                <br>
                                                        <label for="agama_siswa">
                                                                 Agama
							   <span> * </span>
							</label>
							<div class="form-input">
                                                                <input type="radio" id="Agama1" name="agama_siswa" value="Islam" {{ $biodata_siswa->agama_siswa == 'Islam' ? 'checked' : ''}} />
                                                                <label for="Agama1">Islam</label>
                                                                <input type="radio" id="Agama2" name="agama_siswa" value="Kristen" {{ $biodata_siswa->agama_siswa == 'Kristen' ? 'checked' : ''}} />
                                                                <label for="Agama2">Kristen</label>
                                                                <input type="radio" id="Agama3" name="agama_siswa" value="Katolik" {{ $biodata_siswa->agama_siswa == 'Katolik' ? 'checked' : ''}} />
                                                                <label for="Agama3">Katolik</label>
                                                                <input type="radio" id="Agama4" name="agama_siswa" value="Hindu" {{ $biodata_siswa->agama_siswa == 'Hindu' ? 'checked' : ''}} />
                                                                <label for="Agama4">Hindu</label>
                                                                <input type="radio" id="Agama5" name="agama_siswa" value="Buddha" {{ $biodata_siswa->agama_siswa == 'Buddha' ? 'checked' : ''}} />
                                                                <label for="Agama5">Buddha</label>
							</div>
                                                        <br>
                                                        <label for="hobi_siswa">Hobi
                                                        <span> * </span>
                                                        </label>
                                                        <div class="form-input">
                                                        <input type="text" name="hobi_siswa" placeholder="Masukkan Hobi" value=" {{ $biodata_siswa->hobi_siswa }}">
                                                        </div>
                                                        @if($errors->has('hobi_siswa'))
                                                                {{ $errors->first('hobi_siswa')}}
                                                        @endif
                                                        <br>
                                                        <label for="alamat_siswa">Alamat
                                                        <span> * </span>
                                                        </label>
                                                        <div class="form-input">
                                                        <textarea name="alamat_siswa" placeholder="Masukkan Alamat"> {{ $biodata_siswa->alamat_siswa }} </textarea>
                                                        </div>
                                                        @if($errors->has('alamat_siswa'))
                                                                {{ $errors->first('alamat_siswa')}}
                                                        @endif
                                                        <br>
                                                        <label for="no_telepon_siswa">No Telepon
                                                        <span> * </span>
                                                        </label>
                                                        <div class="form-input">
                                                        <input type="text" name="no_telepon_siswa" placeholder="Masukkan No Telepon" value=" {{ $biodata_siswa->no_telepon_siswa }}">
                                                        </div>
                                                        @if($errors->has('no_telepon_siswa'))
                                                                {{ $errors->first('no_telepon_siswa')}}
                                                        @endif  
                                                        <br>
                                                        <label for="email">Email
                                                        <span> * </span>
                                                        </label>
                                                        <div class="form-input">
                                                        <input type="text" name="email" placeholder="Masukkan No Telepon" value=" {{ $biodata_siswa->email }}">
                                                        </div>
                                                        @if($errors->has('email'))
                                                                {{ $errors->first('email')}}
                                                        @endif  
                                                        <br>
                                                        <label for="password">Password
                                                        <span> * </span>
                                                        </label>
                                                        <div class="form-input">
                                                        <input type="text" name="password" placeholder="Masukkan No Telepon" value=" {{ $biodata_siswa->password }}">
                                                        </div>
                                                        @if($errors->has('password'))
                                                                {{ $errors->first('password')}}
                                                        @endif  
                                                        <br>
                                                        <input type="submit" value="Edit Data">
                                                        </form>
</body>
</html>