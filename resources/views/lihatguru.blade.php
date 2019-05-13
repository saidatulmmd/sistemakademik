<!DOCTYPE html>
                    <html>
                    <head>
                      <title>DATA GURU</title>
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
                    <br><br><br>

                    <h2 align="center">DATA GURU</h2>
                    <table>
                        <thead>
                            <tr>
                                <th>NAMA</th>
                                <th>ALAMAT</th>
                                <th>NO TELEPON</th>
                                <th>JENIS KELAMIN</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($guru as $p)
                            <tr>
                                <td>{{ $p->name }}</td>
                                <td>{{ $p->alamat_guru }}</td>
                                <td>{{ $p->telepon_guru }}</td>
                                <td>{{ $p->jenis_kelamin_guru }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table> <br><br>
                    </body>
                    </html>