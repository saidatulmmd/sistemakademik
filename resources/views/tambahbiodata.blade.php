
<!DOCTYPE html>
<html lang="en">
<head>
	<title>TAMBAH</title>
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
</head>
<body bgcolor="#EAEDED">
	<br>
                        <a href="/biodata_siswa" class="buttona">Kembali ke Halaman Biodata Siswa</a>
		        <h2 align="center">Tambah Biodata Siswa</h2><br><br>
                        <form method="post" action="/biodata_siswa/store" align="center">
                        {{ csrf_field() }}
							<label for="no_induk_siswa"> 
								NIS
								<span> * </span>
							</label>
							<div class="form-input">
								<input type="text" name="no_induk_siswa" placeholder="Masukkan Nomor Induk" required >
                                                        </div>
                                                        @if($errors->has('no_induk_siswa'))
                                                                {{ $errors->first('no_induk_siswa')}}
                                                        @endif
						<br>
							<label for="nama_siswa"> 
								Nama 
								<span> * </span>
							</label>
							<div class="form-input">
								<input type="text" name="nama_siswa" placeholder="Masukkan Nama" required >
                                                        </div>
                                                        @if($errors->has('nama_siswa'))
                                                                {{ $errors->first('nama_siswa')}}
                                                        @endif
						<br>
							<label  for="tempat_lahir_siswa"> 
                                                                Tempat Lahir 
								<span> * </span>
							</label>
							<div class="form-input">
								<input type="text" name="tempat_lahir_siswa" placeholder="Masukkan Tempat Lahir" required >
                                                        </div>
                                                        @if($errors->has('tempat_lahir_siswa'))
                                                                {{ $errors->first('tempat_lahir_siswa')}}
                                                        @endif
						<br>
							<label for="tanggal_lahir_siswa">
                                                                Tanggal Lahir
							   <span> * </span>
							</label>
							<div class="form-input">
								<input type="date" name="tanggal_lahir_siswa" placeholder="Masukkan Tanggal Lahir" required >
                                                        </div>
                                                        @if($errors->has('tanggal_lahir_siswa'))
                                                                {{ $errors->first('tanggal_lahir_siswa')}}
                                                        @endif
						<br>
							<label for="jenis_kelamin_siswa">
                                                                Jenis Kelamin
							   <span> * </span>
							</label>
							<div class="form-input">
                                                                <input type="radio" id="Radio1" name="jenis_kelamin_siswa" value="Laki-Laki" />
                                                                <label for="Radio1">Laki-Laki</label>
                                                                <input type="radio" id="Radio2" name="jenis_kelamin_siswa" value="Perempuan" />
                                                                <label for="Radio2">Perempuan</label>
							</div>
						<br>
                                                        <label for="agama_siswa">
                                                                 Agama
							   <span> * </span>
							</label>
							<div class="form-input">
                                                                <input type="radio" id="Agama1" name="agama_siswa" value="Islam" />
                                                                <label for="Agama1">Islam</label>
                                                                <input type="radio" id="Agama2" name="agama_siswa" value="Kristen" />
                                                                <label for="Agama2">Kristen</label>
                                                                <input type="radio" id="Agama3" name="agama_siswa" value="Katolik" />
                                                                <label for="Agama3">Katolik</label>
                                                                <input type="radio" id="Agama4" name="agama_siswa" value="Hindu" />
                                                                <label for="Agama4">Hindu</label>
                                                                <input type="radio" id="Agama5" name="agama_siswa" value="Buddha" />
                                                                <label for="Agama5">Buddha</label>
							</div>
						<br> 
							<label for="hobi_siswa">
                                                                Hobi
							   <span> * </span>
							</label>
							<div class="form-input">
								<input type="text" name="hobi_siswa" placeholder="Masukkan Hobi" required >
                                                        </div>
                                                        @if($errors->has('hobi_siswa'))
                                                                {{ $errors->first('hobi_siswa')}}
                                                        @endif
						<br>
							<label for="alamat_siswa">
                                                                Alamat
							   <span> * </span>
							</label>
							<div class="form-input add">
                                                                <textarea name="alamat_siswa" placeholder="Masukkan Alamat" required></textarea>
                                                        </div>
                                                        @if($errors->has('alamat_siswa'))
                                                                {{ $errors->first('alamat_siswa')}}
                                                        @endif
						<br> 
							<label for="no_telepon_siswa">
                                                                No Telepon
							   <span> * </span>
							</label>
							<div class="form-input">
								<input type="text" name="no_telepon_siswa" placeholder="Masukkan No Telepon" required >
                                                        </div>
                                                        @if($errors->has('no_telepon_siswa'))
                                                                {{ $errors->first('no_telepon_siswa')}}
							@endif
						<br> 
					<input type="submit" value="Tambah Data">
				</form>	
			</div>
		</div>
	</div>
</body>
</html>