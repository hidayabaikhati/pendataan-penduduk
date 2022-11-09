<html>
    <head>
</head>
<body>
    <h1>Aplikasi Pendataan Warga Ds.Sukamududur</h1>
    <table border="1">
        <tr>
            <th>Nik</th>
            <th>Nama</th>
            <th>Agama</th>
        </tr>
<?php
include("koneksi.php");
$sql='SELECT * FROM tb_warga';
$query=mysqli_query($koneksi,$sql);
while($db_warga=mysqli_fetch_array($query)){
    echo"<tr>";
    echo"<td>".$db_warga['NIK']."</td>";
    echo"<td>".$db_warga['Nama']."</td>";
    echo"<td>".$db_warga['Agama']."</td>";
    echo"</td>";
    echo"</tr>";
}
?>
</table>
</body>
</html>