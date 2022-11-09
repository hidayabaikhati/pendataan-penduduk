<!DOCTYPE html>
<html lang="en">
<head>
    <title>Aplikasi Pendataan Warga Ds.Sukamududur</title>
</head>
<body>
    <h1>Aplikasi Pendataan Warga Ds.Sukamududur</h1>
    <form action="proses_tambah.php" method="POST">
        <form>
            <fieldset>
     <p>
        <label for="NIK">NIK:</label>
        <input type="number" name="NIK"/>
</p>
    <p>
        <label for="Nama">Nama:</label>
        <input type="text" name="Nama"/>
</p>
<p>
    <label for="Agama">Agama:</label>
    <input type="radio" name="Agama" value="islam"/>Islam</lebel>
    <input type="radio" name="Agama" value="katolik"/>Katolik</lebel>
    <input type="radio" name="Agama" value="budha"/>Budha</lebel>
    <input type="radio" name="Agama" value="hindu"/>Hindu</lebel>
    <input type="radio" name="Agama" value="kristen"/>Kristen</lebel>
    <input type="radio" name="Agama" value="konghucu"/>Konghucu</lebel>
</p>
<p>
    <input type="submit" value="Kirim Data" name="tambah"/>
</p>
</fieldset>
</form>
</body>
</html>