<!DOCTYPE html>
                    <html>
                    <head>
                      <title>DATA PELAJARAN</title>
                    <style>
                    table {
                    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
                    border-collapse: collapse;
                    width: 100%;
                    }

                    td, th {
                    border: 1px solid #ddd;
                    padding: 8px;
                    }

                    tr:nth-child(even){background-color: #f2f2f2;}

                    tr:hover {background-color: #ddd;}

                    th {
                    padding-top: 12px;
                    padding-bottom: 12px;
                    text-align: left;
                    background-color: #85929E;
                    color: white;
                    }

                    .button {
                    background-color: #85929E;
                    color: white;
                    padding: 5px 10px;
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
                    <body>
                    <a href="{{ url('homeadmin') }}" class="buttona">KEMBALI KE HALAMAN ADMIN</a>
                    <br><br><br>
                    <a href="/pelajaran/tambah" class="buttona">INPUT DATA PELAJARAN BARU</a>

                    <h2 align="center">DATA PELAJARAN</h2>
                    <table>
                        <thead>
                            <tr>
                                <th>NAMA PELAJARAN</th>
                                <th>NAMA PENGAJAR</th>
                                <th>OPSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($pelajaran as $p)
                            <tr>
                                <td>{{ $p->nama_pelajaran }}</td>
                                <td>{{ $p->pengajar }}</td>
                                <td>
                                    <a href="/pelajaran/edit/{{ $p->id }}" class="button">Edit</a>
                                    <a href="/pelajaran/hapus/{{ $p->id }}" class="button">Hapus</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table> <br><br>
                    </body>
                    </html>