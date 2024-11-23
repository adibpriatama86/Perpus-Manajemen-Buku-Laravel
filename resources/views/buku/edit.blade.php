<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Buku</title>
    <style>
        /* Styling dasar untuk body */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        /* Container form */
        .form-container {
            background-color: #fff;
            padding: 20px 30px;
            border-radius: 8px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 500px;
        }

        /* Styling untuk judul halaman */
        h2 {
            text-align: center;
            color: #333;
        }

        /* Styling elemen input dan select */
        label {
            display: block;
            margin-top: 10px;
            font-weight: bold;
            color: #333;
        }

        input[type="text"],
        select {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 16px;
        }

        /* Tombol submit */
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            font-weight: bold;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>Edit Buku</h2>
        <form action="{{ url('buku/save') }}" method="post" accept-charset="utf-8">
            @csrf
            <input type="hidden" name="id" value="{{ $query->ID_Buku }}">
            <input type="hidden" name="is_update" value="{{ $is_update }}">

            <label for="judul">Judul:</label>
            <input type="text" name="Judul" id="judul" value="{{ $query->Judul }}" maxlength="150">

            <label for="pengarang">Pengarang:</label>
            <input type="text" name="Pengarang" id="pengarang" value="{{ $query->Pengarang }}" maxlength="150">

            <label for="kategori">Kategori:</label>
            <select name="Kategori" id="kategori">
                @foreach($optkategori as $key => $value)
                    <option value="{{ $key }}" {{ $query->Kategori == $key ? 'selected' : '' }}>{{ $value }}</option>
                @endforeach
            </select>

            <input type="submit" name="btn_simpan" value="Simpan">
        </form>
    </div>
</body>
</html>
