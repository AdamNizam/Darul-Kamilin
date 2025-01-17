<!DOCTYPE html>
<html>
<head>
    <title>Data Pembayaran</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        h1 {
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>Data Pembayaran</h1>
    <table>
        <thead>
            <tr>
                <th>Nama</th>
                <th>Bulan Tunggakan Tunggakan Santri</th>
                <th>Status</th>
                <th>Metode</th>
                <th>Tanggal Pembayaran</th>
                <th>Jumlah</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($records as $record)
                <tr>
                    <td>{{ $record->nama }}</td>
                    <td>{{ $record->bulan }}</td>
                    <td>
                        @if ($record->status == 1)
                            Berhasil
                        @elseif ($record->status == 2)
                            Gagal
                        @else
                            Proses
                        @endif
                    </td>
                    <td>{{ $record->metode_pembayaran }}</td>
                    <td>{{ $record->tanggal_pembayaran }}</td>
                    <td>Rp. {{ number_format($record->tunggakanSantri->kategoriTunggakan->jumlah, 0, ',', '.') }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
