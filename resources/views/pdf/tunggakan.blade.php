<!DOCTYPE html>
<html>
<head>
    <title>Data Tunggakan Santri</title>
    <style>
@page {
        size: A4;
        margin: 10mm;
    }

    body {
        font-family: Arial, sans-serif;
    }

    table {
        width: 100%;
        border-collapse: collapse;
    }

    th, td {
        border: 1px solid black;
        padding: 8px;
        text-align: left;
        word-wrap: break-word;
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
    <h1>Data Tunggakan Santri</h1>
    <table>
        <thead>
            <tr>
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
                    <td>
                        @if ($record->January == 1)
                            <span style="color: green;"> Lunas</span>
                        @else
                            <span style="color: red;">Belum Lunas</span>
                        @endif
                    </td>
                    <td>
                        @if ($record->February == 1)
                            <span style="color: green;"> Lunas</span>
                        @else
                            <span style="color: red;">Belum Lunas</span>
                        @endif
                    </td>
                    <td>
                        @if ($record->March == 1)
                            <span style="color: green;"> Lunas</span>
                        @else
                            <span style="color: red;">Belum Lunas</span>
                        @endif
                    </td>
                    <td>
                        @if ($record->April == 1)
                            <span style="color: green;"> Lunas</span>
                        @else
                            <span style="color: red;">Belum Lunas</span>
                        @endif
                    </td>
                    <td>
                        @if ($record->May == 1)
                            <span style="color: green;"> Lunas</span>
                        @else
                            <span style="color: red;">Belum Lunas</span>
                        @endif
                    </td>
                    <td>
                        @if ($record->June == 1)
                            <span style="color: green;"> Lunas</span>
                        @else
                            <span style="color: red;">Belum Lunas</span>
                        @endif
                    </td>
                    <td>
                        @if ($record->July == 1)
                            <span style="color: green;"> Lunas</span>
                        @else
                            <span style="color: red;">Belum Lunas</span>
                        @endif
                    </td>
                    <td>
                        @if ($record->August == 1)
                            <span style="color: green;"> Lunas</span>
                        @else
                            <span style="color: red;">Belum Lunas</span>
                        @endif
                    </td>
                    <td>
                        @if ($record->September == 1)
                            <span style="color: green;"> Lunas</span>
                        @else
                            <span style="color: red;">Belum Lunas</span>
                        @endif
                    </td>
                    <td>
                        @if ($record->October == 1)
                            <span style="color: green;"> Lunas</span>
                        @else
                            <span style="color: red;">Belum Lunas</span>
                        @endif
                    </td>
                    <td>
                        @if ($record->November == 1)
                            <span style="color: green;"> Lunas</span>
                        @else
                            <span style="color: red;">Belum Lunas</span>
                        @endif
                    </td>
                    <td>
                        @if ($record->December == 1)
                            <span style="color: green;"> Lunas</span>
                        @else
                            <span style="color: red;">Belum Lunas</span>
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
