<!DOCTYPE html>
                    <html>
                    <head>
                      <title>SISWA</title>
                      <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
                    <style>
                    .welcome {
                    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
                    color: #C0392B;
                    text-align: center;
                    font-size: 36px;
                    }

                    .nama {
                    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
                    color: #E74C3C;
                    font-size: 20px;
                    padding-left:85px;
                    }

                    .button {
                    background-color: #EC7063;
                    color: white;
                    padding: 5px 10px;
                    border: none;
                    border-radius: 4px;
                    cursor: pointer;
                    float: right;
                    padding: 15px 30px;
                    font-size: 16px;
                    }

                    col {
                        float:right;
                    }
                    .list-group-horizontal .list-group-item {
                        display: inline-block;
                    }
                    .list-group-horizontal .list-group-item {
                      margin-bottom: 0;
                      margin-left:-4px;
                      margin-right: 0;
                    }
                    .list-group-horizontal .list-group-item:first-child {
                      border-top-right-radius:0;
                      border-bottom-left-radius:4px;
                    }
                    .list-group-horizontal .list-group-item:last-child {
                      border-top-right-radius:4px;
                      border-bottom-left-radius:0;
                    }      

                    </style>
                    </head>
                    <body>
                    <a href="/logoutsiswa" class="button">LOGOUT</a><br>
                        <h1 class="welcome">Selamat Datang, Siswa</h1>
                    <br><br>
                    <div class="row" style="padding-left:400px">
                      <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 text-center">          
                        <div class="list-group list-group-horizontal" >
                            <a href="lihatnilai" class="list-group-item">Lihat Nilai UH, UAS, UTS</a>
                            <a href="lihatbiodata" class="list-group-item">Lihat Biodata</a>
                        </div>
                      </div>
                    </div>
                    <h2 class="nama">Hallo, {{Session::get('name')}}. Apakabar?</h2>
                        <h2 class="nama">Email kamu : {{Session::get('email')}}</h2>

                     <br><br>
                    </body>
                    </html>    
    
    
    
    
        
        