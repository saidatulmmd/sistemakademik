
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
                        <a href="/pelajaran" class="buttona">Kembali ke Halaman Data Pelajaran</a>
		        <h2 align="center">Tambah Data Pelajaran</h2><br><br>
                        <form method="post" action="/pelajaran/store" align="center">
                        {{ csrf_field() }}
							<label for="nama_pelajaran"> 
								Nama Pelajaran
								<span> * </span>
							</label>
							<div class="form-input">
								<input type="text" name="nama_pelajaran" placeholder="Masukkan Nama Pelajaran" required >
                                                        </div>
                                                        @if($errors->has('nama_pelajaran'))
                                                                {{ $errors->first('nama_pelajaran')}}
                                                        @endif     
						<br> 

                            <label for="pengajar">
                                                                Nama Pengajar
							   <span> * </span>
							</label>
							<div class="form-input">
								<input type="text" name="pengajar" placeholder="Masukkan Nama Pengajar" required >
                                                        </div>
                                                        @if($errors->has('pengajar'))
                                                                {{ $errors->first('pengajar')}}
							@endif
						<br>
						<br> 
					<input type="submit" value="Tambah Data">
				</form>	
			</div>
		</div>
	</div>
</body>
</html>