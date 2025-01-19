<!DOCTYPE html>
<html>
<head>
    <title>Data Tunggakan Santri</title>
    <style>
        @page {
            size: A4 landscape; /* Mengatur orientasi menjadi landscape */
            margin: 10mm;
        }

        body {
            font-family: Arial, sans-serif;
            font-size: 10px; /* Mengecilkan ukuran font */
        }

        table {
            width: 100%;
            border-collapse: collapse;
            table-layout: fixed; /* Membuat lebar kolom tetap */
        }

        th, td {
            border: 1px solid black;
            padding: 6px;
            text-align: left;
            word-wrap: break-word; /* Memastikan teks membungkus */
            text-align: center; /* Memusatkan teks dalam kolom */
        }

        th {
            background-color: #f2f2f2;
        }

        h1 {
            text-align: center;
            font-size: 14px; /* Mengecilkan ukuran font judul */
        }

        /* Mengatur lebar maksimum kolom */
        th, td:nth-child(1) { width: 12%; } /* Nama Santri */
        td:nth-child(2), td:nth-child(3) { width: 12%; } /* Nama Ayah/Ibu */
        td:nth-child(4), td:nth-child(5) { width: 8%; } /* Tingkat Pendidikan dan JK */
        td:nth-child(n+6) { width: 5%; } /* Bulan-bulan */

        .icon-success {
            color: green;
            font-weight: bold;
        }

        .icon-fail {
            color: red;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <h1>Data Tunggakan Santri</h1>
    <table>
        <thead>
            <tr>
                <th>Nama Santri</th>
                <th>Alamat Santri</th>
                <th>Tempat Tanggal</th>
                <th>Nama Ayah</th>
                <th>Nama Ibu</th>
                <th>Tingkat Pendidikan</th>
                <th>JK</th>
                <th>January</th>
                <th>February</th>
                <th>March</th>
                <th>April</th>
                <th>May</th>
                <th>June</th>
                <th>July</th>
                <th>August</th>
                <th>September</th>
                <th>October</th>
                <th>November</th>
                <th>December</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($records as $record)
                <tr>
                    <td>{{ $record->santri->nama }}</td>
                    <td>{{ $record->santri->alamat }}</td>
                    <td>{{ $record->santri->tempat_tgl }}</td>
                    <td>{{ $record->santri->waliSantri->nama_ayah }}</td>
                    <td>{{ $record->santri->waliSantri->nama_ibu }}</td>
                    <td>{{ $record->santri->tingkat_pendidikan }}</td>
                    <td>{{ $record->santri->jenis_kelamin }}</td>
                    <td>@if ($record->January == 1) <span class="icon-success">-</span> @else <span class="icon-fail">X</span> @endif</td>
                    <td>@if ($record->February == 1) <span class="icon-success">-</span> @else <span class="icon-fail">X</span> @endif</td>
                    <td>@if ($record->March == 1) <span class="icon-success">-</span> @else <span class="icon-fail">X</span> @endif</td>
                    <td>@if ($record->April == 1) <span class="icon-success">-</span> @else <span class="icon-fail">X</span> @endif</td>
                    <td>@if ($record->May == 1) <span class="icon-success">-</span> @else <span class="icon-fail">X</span> @endif</td>
                    <td>@if ($record->June == 1) <span class="icon-success">-</span> @else <span class="icon-fail">X</span> @endif</td>
                    <td>@if ($record->July == 1) <span class="icon-success">-</span> @else <span class="icon-fail">X</span> @endif</td>
                    <td>@if ($record->August == 1) <span class="icon-success">-</span> @else <span class="icon-fail">X</span> @endif</td>
                    <td>@if ($record->September == 1) <span class="icon-success">-</span> @else <span class="icon-fail">X</span> @endif</td>
                    <td>@if ($record->October == 1) <span class="icon-success">-</span> @else <span class="icon-fail">X</span> @endif</td>
                    <td>@if ($record->November == 1) <span class="icon-success">-</span> @else <span class="icon-fail">X</span> @endif</td>
                    <td>@if ($record->December == 1) <span class="icon-success">-</span> @else <span class="icon-fail">X</span> @endif</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
