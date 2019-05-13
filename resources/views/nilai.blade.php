<!DOCTYPE html>
                    <html>
                    <head>
                      <title>DATA NILAI</title>
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
                    <a href="{{ url('homeguru') }}" class="buttona">KEMBALI KE HALAMAN GURU</a>
                    <a href="{{ url('homeadmin') }}" class="buttona">KEMBALI KE HALAMAN ADMIN</a>
                    <br><br><br>
                    <a href="/nilai/tambah" class="buttona">INPUT DATA NILAI BARU</a>

                    <h2 align="center">DATA NILAI</h2>
                    <table>
                        <thead>
                            <tr>
                                <th>NO INDUK SISWA</th>
                                <th>NAMA PELAJARAN</th>
                                <th>NILAI UH</th>
                                <th>NILAI UTS</th>
                                <th>NILAI UAS</th>
                                <th>OPSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($nilai as $p)
                            <tr>
                                <td>{{ $p->no_induk_siswa }}</td>
                                <td>{{ $p->nama_pelajaran }}</td>
                                <td>{{ $p->nilai_uh }}</td>
                                <td>{{ $p->nilai_uts }}</td>
                                <td>{{ $p->nilai_uas }}</td>
                                <td>
                                    <a href="/nilai/edit/{{ $p->id }}" class="button">Edit</a>
                                    <a href="/nilai/hapus/{{ $p->id }}" class="button">Hapus</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table> <br><br>
                    </body>
                    </html>