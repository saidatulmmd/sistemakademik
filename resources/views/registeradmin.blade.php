<!DOCTYPE html>
<html>
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box}

/* Full-width input fields */
input[type=text], input[type=email], input[type=password] {
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
<form action="{{ url('/registerPost') }}" method="post">
{{ csrf_field() }}
  <div class="container">
  <a href="/loginadmin" class="btncancel">Cancel</a><br>
    <h1>Register</h1>
    <hr>

    <label for="name"><b>Name</b></label>
    <input type="text" placeholder="Masukkan Nama" id="name" name="name" required>

    <label for="alamat_admin"><b>Alamat</b></label>
    <textarea name="alamat_admin" placeholder="Masukkan Alamat" id="alamat_admin" name="alamat_admin" required></textarea> 

    <label for="telepon_admin"><b>Telepon</b></label>
    <input type="text" placeholder="Masukkan Telepon" id="telepon_admin" name="telepon_admin" required> 

    <label for="jenis_kelamin_admin"><b>Jenis Kelamin</b></label><br><br>
    <input type="radio" id="Radio1" name="jenis_kelamin_admin" value="Laki-Laki" />
    <label for="Radio1">Laki-Laki</label>
    <input type="radio" id="Radio2" name="jenis_kelamin_admin" value="Perempuan" />
    <label for="Radio2">Perempuan</label>
    <br><br><br>

    <label for="email"><b>Email</b></label>
    <input type="email" placeholder="Masukkan Email" id="email" name="email" required>

    <label for="password"><b>Password</b></label>
    <input type="password" placeholder="Masukkan Password" id="password" name="password" required>

    <label for="confirmation"><b>Repeat Password</b></label>
    <input type="password" placeholder="Ulangi Password" id="confirmation" name="confirmation" required>
    
    

    <div class="clearfix">
      <button type="submit" class="signupbtn">Submit</button>
    </div>
  </div>
</form>

</body>
</html>