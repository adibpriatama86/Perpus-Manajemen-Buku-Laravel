<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Infor</title>
</head>
<body>
    <h1>Aku adalah mahasiswa</h1>
    <?php
    if($progdi=="TI")
        echo "Tekink informatika";
    elseif($progdi=="SI")
        echo "Sistem Informasi";
    elseif($progdi=="IK")
        echo "Ilmu Komunikasi";
    else
        echo "Tidak ada progdi tersebut di fakultas TIK";
    ?>
</body>
</html>