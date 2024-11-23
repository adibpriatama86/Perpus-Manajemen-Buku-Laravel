<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Buku</title>
    <style>
        /* Styling dasar untuk body */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            padding: 20px;
        }

        /* Tombol Tambah Buku */
        a.button {
            display: inline-block;
            margin-bottom: 20px;
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-size: 14px;
        }
        
        a.button:hover {
            background-color: #45a049;
        }

        /* Tabel styling */
        table {
            width: 100%;
            max-width: 800px;
            border-collapse: collapse;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
        }

        /* Header tabel */
        th {
            background-color: #4CAF50;
            color: white;
            padding: 10px;
            text-align: left;
        }

        /* Baris tabel */
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tr:hover {
            background-color: #f1f1f1;
        }

        /* Sel tabel */
        td {
            padding: 10px;
            border: 1px solid #ddd;
        }

        /* Link aksi */
        a {
            color: #4CAF50;
            text-decoration: none;
            font-weight: bold;
        }

        a:hover {
            text-decoration: underline;
        }

        /* Pusatkan tabel */
        .table-container {
            display: flex;
            justify-content: center;
            width: 100%;
        }
    </style>
</head>
<body>
    <a href="{{ url('buku/add') }}" class="button">Tambah Buku</a>
    <div class="table-container">
        <table>
            <tr>
                <th>No</th>
                <th>Judul</th>
                <th>Pengarang</th>
                <th>Kategori</th>
                <th>Aksi</th>
            </tr>
            @php $no = 1; @endphp

            @foreach($query as $row)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $row['Judul'] }}</td>
                    <td>{{ $row['Pengarang'] }}</td>
                    <td>{{ $optkategori[$row['Kategori']] ?? '-' }}</td>
                    <td>
                        <a href="{{ url('buku/edit/'.$row['ID_Buku']) }}">Edit</a> |
                        <a href="{{ url('buku/delete/'.$row['ID_Buku']) }}" onclick="return confirm('Apakah anda yakin ingin menghapus buku ini?')">Delete</a>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
</body>
</html>
