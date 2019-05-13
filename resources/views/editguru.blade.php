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
                                        <a href="/guru" class="buttona">Kembali ke Halaman Data Guru</a>
		                         <h2 align="center">Edit Data Guru</h2><br><br>
                                                        <form method="post" action="/guru/update/{{ $guru->id }}" align="center">
                                                        
                                                        {{ csrf_field() }}
                                                        {{ method_field('PUT') }} 
                                                        <label for="name">Nama
                                                        <span> * </span>
                                                        </label>
                                                        <div class="form-input">
                                                        <input type="text" name="name" placeholder="Masukkan Nama" value=" {{ $guru->name }}">
                                                        </div>
                                                        @if($errors->has('name'))
                                                                {{ $errors->first('name')}}
                                                        @endif
                                                        <br>
                                                        <label for="alamat_guru">Alamat
                                                        <span> * </span>
                                                        </label>
                                                        <div class="form-input">
                                                        <textarea name="alamat_guru" placeholder="Masukkan Alamat"> {{ $guru->alamat_guru }} </textarea>
                                                        </div>
                                                        @if($errors->has('alamat_guru'))
                                                                {{ $errors->first('alamat_guru')}}
                                                        @endif
                                                        <br>
                                                        <label for="telepon_guru">No Telepon
                                                        <span> * </span>
                                                        </label>
                                                        <div class="form-input">
                                                        <input type="text" name="telepon_guru" placeholder="Masukkan No Telepon" value=" {{ $guru->telepon_guru }}">
                                                        </div>
                                                        @if($errors->has('telepon_guru'))
                                                                {{ $errors->first('telepon_guru')}}
                                                        @endif  
                                                        <br>
                                                        <label for="jenis_kelamin_guru">Jenis Kelamin
                                                        <span> * </span>
                                                        </label><br>
                                                        <div class="form-input">
                                                                <input type="radio" value="Laki-Laki" {{ $guru->jenis_kelamin_guru == 'Laki-Laki' ? 'checked' : ''}} id="Radio1" name="jenis_kelamin_guru"/>
                                                                <label for="Radio1">Laki-Laki</label>
                                                                <input type="radio" value="Perempuan" {{ $guru->jenis_kelamin_guru == 'Perempuan' ? 'checked' : ''}} id="Radio2" name="jenis_kelamin_guru"/>
                                                                <label for="Radio2">Perempuan</label>
                                                        </div>
                                                        <br>
                                                        <label for="email">Email
                                                        <span> * </span>
                                                        </label>
                                                        <div class="form-input">
                                                        <input type="text" name="email" placeholder="Masukkan No Telepon" value=" {{ $guru->email }}">
                                                        </div>
                                                        @if($errors->has('email'))
                                                                {{ $errors->first('email')}}
                                                        @endif  
                                                        <br>
                                                        <label for="password">Password
                                                        <span> * </span>
                                                        </label>
                                                        <div class="form-input">
                                                        <input type="text" name="password" placeholder="Masukkan No Telepon" value=" {{ $guru->password }}">
                                                        </div>
                                                        @if($errors->has('password'))
                                                                {{ $errors->first('password')}}
                                                        @endif  
                                                        <br>
                                                        <br>
                                                        <input type="submit" value="Edit Data">
                                                        </form>
</body>
</html>