<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Buku</title>
    <style>
        /* Reset styles */
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }
        
        /* Body styling */
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-color: #f4f4f9;
        }

        /* Form container styling */
        .form-container {
            background-color: #ffffff;
            padding: 20px 30px;
            width: 400px;
            border-radius: 8px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
        }

        /* Form title */
        .form-container h2 {
            margin-bottom: 20px;
            color: #333;
            text-align: center;
        }

        /* Label and input styling */
        label {
            font-weight: bold;
            color: #555;
            display: block;
            margin-bottom: 8px;
        }
        
        input[type="text"],
        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 14px;
        }
        
        /* Submit button styling */
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 5px;
            background-color: #4CAF50;
            color: white;
            font-size: 16px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        /* Link styling */
        .back-link {
            display: block;
            margin-top: 10px;
            text-align: center;
            color: #555;
            text-decoration: none;
        }

        .back-link:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>Tambah Buku</h2>
        <form action="{{ url('buku/save') }}" method="post" accept-charset="utf-8">
            @csrf
            <input type="hidden" name="id" value="">
            <input type="hidden" name="is_update" value="{{ $is_update }}">
            
            <label for="judul">Judul:</label>
            <input type="text" name="Judul" id="judul" value="" maxlength="150">
            
            <label for="pengarang">Pengarang:</label>
            <input type="text" name="Pengarang" id="pengarang" maxlength="150">
            
            <label for="kategori">Kategori:</label>
            <select name="Kategori" id="kategori">
                @foreach ($optkategori as $key => $value)
                    <option value="{{ $key }}">{{ $value }}</option>
                @endforeach
            </select>
            
            <input type="submit" name="btn_simpan" value="Simpan">
        </form>
        <a href="{{ url('buku') }}" class="back-link">Kembali</a>
    </div>
</body>
</html>
