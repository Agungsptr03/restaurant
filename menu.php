<html><head><title>Restoran Online By Agung Saputra</title></head>
<body>
<table border = "1" width = "50%"></center>
            <tr>
                <th bgcolor = "orange">Nama Makanan</th>
                <th bgcolor = "orange">Harga</th>
                <th bgcolor = "orange">Stok</th>
                </tr>
<?php
include "koneksi.php";

$query = "SELECT * FROM menu_makanan";

$sql = mysqli_query($connect, $query);

while ($data = mysqli_fetch_array($sql)){
    echo "<tr>";
    echo "<td>".$data['Nama Makanan']."</td>";
    echo "<td>".$data['Harga']."</td>";
    echo "<td>".$data['Stok']."</td>";
    echo "</tr>";
}
?>
</table>

<FORM method="POST" action="cetak_menu.php">
<br>
    Nama Pemesan <input type="text" name="nama pemesan"><br>
    Pilihlah makanan yang ingin anda pesan :<br>
    <input type="checkbox" name="pil_Ayam Goreng" value="Ayam Goreng">Ayam Goreng<br>
    <input type="checkbox" name="pil_Nasi Goreng" value="Nasi Goreng">Nasi Goreng<br>
    <input type="checkbox" name="pil_Sate Madura" value="Sate Madura">Sate Madura<br>
    <input type="checkbox" name="pil_Bakso" value="Bakso">Bakso<br>
    <input type="checkbox" name="pil_Lalapan" value="Lalapan">Lalapan<br>
    <br>
    <b>Pilihan Sambal :</b> <br>
            <INPUT type="Radio" name="sambal" Value="Sambal Bawang">Sambal Bawang
            <INPUT type="Radio" name="sambal" Value="Sambal Ijo">Sambal Ijo<br><br>
            <INPUT type="Radio" name="sambal" Value="Sambal Matah">Sambal Matah<br><br>

            <table border = "1" width = "50%"></center>
            <tr>

                <th bgcolor = "orange">Nama Minuman</th>
                <th bgcolor = "orange">Harga</th>
                <th bgcolor = "orange">Stok</th>
                </tr>
                <?php
include "koneksi.php";

$query = "SELECT * FROM menu_minuman";

$sql = mysqli_query($connect, $query);

while ($data = mysqli_fetch_array($sql)){
    echo "<tr>";
    echo "<td>".$data['Nama Minuman']."</td>";
    echo "<td>".$data['Harga']."</td>";
    echo "<td>".$data['Stok']."</td>";
    echo "</tr>";
}
?>
</table>
<br>
    Minuman : <select name="pil_minuman">
    <option value="Es Degan">ES Degan</option>
    <option value="Es Jeruk">ES Jeruk</option>
    <option value="Es Teh">ES Teh</option>
    <option value="Kopi Senja 420%">Kopi Senja 420%</option>
    </select>
    <br><br>
    <input type="submit" value="Cetak Pesanan!">
</FORM>
</body>
</html>