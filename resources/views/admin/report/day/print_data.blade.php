<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Laporan Harian</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            font-size: 12px;
        }
        .title {
            text-align: center;
            margin-bottom: 10px;
        }
        .title h3 {
            margin: 0;
            padding: 0;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid #000;
        }
        th {
            background: #f2f2f2;
            padding: 6px;
            text-align: center;
        }
        td {
            padding: 6px;
            text-align: center;
        }
        .status-belum {
            background: #dc3545;
            color: #fff;
            font-weight: bold;
        }
        .status-proses {
            background: #0d6efd;
            color: #fff;
            font-weight: bold;
        }
        .status-selesai {
            background: #198754;
            color: #fff;
            font-weight: bold;
        }
    </style>
</head>
<body>

    <!-- HEADER / KOP -->
    <div class="title">
        <h3>LAPORAN HARIAN</h3>
        <h3>LAPOR PAK</h3>
        <hr>
    </div>

    <!-- TABLE DATA -->
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>NIK</th>
                <th>Pengaduan</th>
                <th>Tanggal</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @forelse($data as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->nik }}</td>
                    <td style="text-align:left;">{{ $item->contents_of_the_report }}</td>
                    <td>{{ $item->date_complaint }}</td>
                    @if ($item->status == '0')
                        <td class="status-belum">Belum Diproses</td>
                    @elseif ($item->status == 'process')
                        <td class="status-proses">Proses</td>
                    @else
                        <td class="status-selesai">Selesai</td>
                    @endif
                </tr>
            @empty
                <tr>
                    <td colspan="5">Data tidak ditemukan</td>
                </tr>
            @endforelse
        </tbody>
    </table>

</body>
</html>
