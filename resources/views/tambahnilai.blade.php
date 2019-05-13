
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

                select {
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
                        <a href="/nilai" class="buttona">Kembali ke Halaman Data Nilai</a>
		        <h2 align="center">Tambah Data Nilai</h2><br><br>
                        <form method="post" action="/nilai/store" align="center">
                        {{ csrf_field() }}
							<label for="no_induk_siswa"> 
								No Induk Siswa
								<span> * </span>
							</label>
							<div class="form-input">
                                <select name="no_induk_siswa" id="" class="form-control">
                                @foreach ($biodata_siswa as $biodata_siswa)
                                <option value="{{ $biodata_siswa->no_induk_siswa }}"> {{$biodata_siswa->name}} </option>
                                @endforeach
                                </select>
                                                        @if($errors->has('no_induk_siswa'))
                                                                {{ $errors->first('no_induk_siswa')}}
                                                        @endif 
                        <br> 
                        <label for="nama_pelajaran"> 
								Nama Pelajaran
								<span> * </span>
							</label>
							<div class="form-input">
                                <select name="nama_pelajaran" id="" class="form-control">
                                @foreach ($pelajaran as $pelajaran)
                                <option value="{{ $pelajaran->nama_pelajaran }}"> {{$pelajaran->nama_pelajaran}} </option>
                                @endforeach
                                </select>
                                                        @if($errors->has('nama_pelajaran'))
                                                                {{ $errors->first('nama_pelajaran')}}
                                                        @endif 
                        <br> 
                            <label for="nilai_uh">
                                                                Nilai UH
							   <span> * </span>
							</label>
							<div class="form-input">
								<input type="text" name="nilai_uh" placeholder="Masukkan Nilai UH" required >
                                                        </div>
                                                        @if($errors->has('nilai_uh'))
                                                                {{ $errors->first('nilai_uh')}}
							@endif
                            <br> 
                            <label for="nilai_uts">
                                                                Nilai UTS
							   <span> * </span>
							</label>
							<div class="form-input">
								<input type="text" name="nilai_uts" placeholder="Masukkan Nilai UTS" required >
                                                        </div>
                                                        @if($errors->has('nilai_uts'))
                                                                {{ $errors->first('nilai_uts')}}
							@endif
                            <br> 
                            <label for="nilai_uas">
                                                                Nilai UAS
							   <span> * </span>
							</label>
							<div class="form-input">
								<input type="text" name="nilai_uas" placeholder="Masukkan Nilai UAS" required >
                                                        </div>
                                                        @if($errors->has('nilai_uas'))
                                                                {{ $errors->first('nilai_uas')}}
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