<!DOCTYPE html>
<html>
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box}

/* Full-width input fields */
input[type=text], input[type=email], input[type=password], input[type=date] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

textarea {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

button:hover {
  opacity:1;
}

.btncancel {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
  float: right;
}

/* Float cancel and signup buttons and add an equal width */
.signupbtn {
  width: 100%;
}

/* Add padding to container elements */
.container {
  padding: 16px;
}

/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
  .cancelbtn, .signupbtn {
     width: 100%;
  }
}
</style>
<body>

@if ($errors->any())
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
            @endif
<form action="{{ url('/registerPostSiswa') }}" method="post">
{{ csrf_field() }}
  <div class="container">
  <a href="/loginsiswa" class="btncancel">Cancel</a><br>
    <h1>Register</h1>
    <hr>

    <label for="name"><b>Name</b></label>
    <input type="text" placeholder="Masukkan Nama" id="name" name="name" required>

    <label for="no_induk_siswa"><b>No Induk Siswa</b></label>
    <input type="text" placeholder="Masukkan NIS" id="no_induk_siswa" name="no_induk_siswa" required>

    <label for="tempat_lahir_siswa"><b>Tempat Lahir</b></label>
    <input type="text" placeholder="Masukkan Tempat Lahir" id="tempat_lahir_siswa" name="tempat_lahir_siswa" required>

    <label for="tanggal_lahir_siswa"><b>Tanggal Lahir</b></label>
    <input type="date" placeholder="Masukkan Tanggal Lahir" id="tanggal_lahir_siswa" name="tanggal_lahir_siswa" required>

    <label for="jenis_kelamin_siswa"><b>Jenis Kelamin</b></label><br><br>
    <input type="radio" id="Radio1" name="jenis_kelamin_siswa" value="Laki-Laki" />
    <label for="Radio1">Laki-Laki</label>
    <input type="radio" id="Radio2" name="jenis_kelamin_siswa" value="Perempuan" />
    <label for="Radio2">Perempuan</label>
    <br><br><br>

    <label for="agama_siswa"><b>Agama</b></label><br><br>
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
		<br><br><br>

    <label for="hobi_siswa"><b>Hobi</b></label>
    <input type="text" placeholder="Masukkan Agama" id="hobi_siswa" name="hobi_siswa" required>

    <label for="alamat_siswa"><b>Alamat</b></label>
    <textarea name="alamat_siswa" placeholder="Masukkan Alamat" id="alamat_siswa" name="alamat_siswa" required></textarea> 

    <label for="no_telepon_siswa"><b>Telepon</b></label>
    <input type="text" placeholder="Masukkan Telepon" id="no_telepon_siswa" name="no_telepon_siswa" required> 

    <label for="slug"><b>Slug</b></label>
    <input type="text" placeholder="Masukkan Slug" id="slug" name="slug" required> 

    <label for="email"><b>Email</b></label>
    <input type="email" placeholder="Enter Email" id="email" name="email" required>

    <label for="password"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" id="password" name="password" required>

    <label for="confirmation"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" id="confirmation" name="confirmation" required>
    
    

    <div class="clearfix">
      <button type="submit" class="signupbtn">Submit</button>
    </div>
  </div>
</form>

</body>
</html>