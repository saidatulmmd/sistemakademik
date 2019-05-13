<!DOCTYPE html>
                    <html>
                    <head>
                      <title>BIODATA SISWA</title>
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
                    <a href="{{ url('homesiswa') }}" class="buttona">KEMBALI KE HALAMAN SISWA</a>

                    <h2 align="center">BIODATA SISWA</h2>
                    <table>
                        <thead>
                            <tr>
                                <th>NIS</th>
                                <th>NAMA</th>
                                <th>TEMPAT LAHIR</th>
                                <th>TANGGAL LAHIR</th>
                                <th>JENIS KELAMIN</th>
                                <th>AGAMA</th>
                                <th>HOBI</th>
                                <th>ALAMAT</th>
                                <th>NO TELEPON</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($biodata_siswa as $p)
                            <tr>
                                <td>{{ $p->no_induk_siswa }}</td>
                                <td>{{ $p->name }}</td>
                                <td>{{ $p->tempat_lahir_siswa }}</td>
                                <td>{{ $p->tanggal_lahir_siswa }}</td>
                                <td>{{ $p->jenis_kelamin_siswa }}</td>
                                <td>{{ $p->agama_siswa }}</td>
                                <td>{{ $p->hobi_siswa }}</td>
                                <td>{{ $p->alamat_siswa }}</td>
                                <td>{{ $p->no_telepon_siswa }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table> <br><br>
                    </body>
                    </html>