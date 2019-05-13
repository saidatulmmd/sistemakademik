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
                                        <a href="/nilai" class="buttona">Kembali ke Halaman Data Nilai</a>
		                         <h2 align="center">Edit Data Nilai</h2><br><br>
                                                        <form method="post" action="/nilai/update/{{ $nilai->id }}" align="center">
                                                        
                                                        {{ csrf_field() }}
                                                        {{ method_field('PUT') }} 
                                                        <label for="no_induk_siswa">No Induk Siswa
                                                        <span> * </span>
                                                        </label>
                                                        <div class="form-input">
                                                        <input type="text" name="no_induk_siswa" placeholder="Masukkan No Induk Siswa" value=" {{ $nilai->no_induk_siswa }}">
                                                        </div>
                                                        @if($errors->has('no_induk_siswa'))
                                                                {{ $errors->first('no_induk_siswa')}}
                                                        @endif
                                                        <br>
                                                        <label for="nama_pelajaran">Nama Pelajaran
                                                        <span> * </span>
                                                        </label>
                                                        <div class="form-input">
                                                        <input type="text" name="nama_pelajaran" placeholder="Masukkan Nama Pelajaran" value=" {{ $nilai->nama_pelajaran }}">
                                                        </div>
                                                        @if($errors->has('nama_pelajaran'))
                                                                {{ $errors->first('nama_pelajaran')}}
                                                        @endif
                                                        <br>
                                                        <label for="nilai_uh">Nilai UH
                                                        <span> * </span>
                                                        </label>
                                                        <div class="form-input">
                                                        <textarea name="nilai_uh" placeholder="Masukkan Nilai UH"> {{ $nilai->nilai_uh }} </textarea>
                                                        </div>
                                                        @if($errors->has('nilai_uh'))
                                                                {{ $errors->first('nilai_uh')}}
                                                        @endif
                                                        <br>
                                                        <label for="nilai_uts">Nilai UTS
                                                        <span> * </span>
                                                        </label>
                                                        <div class="form-input">
                                                        <textarea name="nilai_uts" placeholder="Masukkan Nilai UTS"> {{ $nilai->nilai_uts }} </textarea>
                                                        </div>
                                                        @if($errors->has('nilai_uts'))
                                                                {{ $errors->first('nilai_uts')}}
                                                        @endif
                                                        <br>
                                                        <label for="nilai_uas">Nilai UAS
                                                        <span> * </span>
                                                        </label>
                                                        <div class="form-input">
                                                        <textarea name="nilai_uas" placeholder="Masukkan Nilai UAS"> {{ $nilai->nilai_uas }} </textarea>
                                                        </div>
                                                        @if($errors->has('nilai_uas'))
                                                                {{ $errors->first('nilai_uas')}}
                                                        @endif
                                                        <br>
                                                        <br>
                                                        <input type="submit" value="Edit Data">
                                                        </form>
</body>
</html>