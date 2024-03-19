<html>

<head>
    <title>LatSol P5 Dff</title>
</head>

<html>

<form action="" method="post">
    <table>

        <td>
            <center>
                <h2>Buku Tamu<br></h2>
            </center>
        </td>

        <tr>
            <td>Nama</td>
            <td>: <input type="text" name="nama" required></td>
        </tr>
        <tr>
            <td>Email</td>
            <td>: <input type="text" name="email" required></td>
        </tr>

        <tr>
            <td>Komentar</td>
            <td>: <textarea name="komentar" id="komentar" cols="50"  rows="5"></td></textarea>
        </tr>

        <td><button type="submit" name="submit" style="display: block; padding: 10px; margin: 15px 30px; cursor: pointer;">Simpan</button></td>

</form>
</table>


<body>
    <?php
    $namaFile = "bukutamu.dat";
    if(isset($_POST['submit'])) {
        if(!file_exists($nameFile)) {
            $file = fopen($namaFile, 'w');
            fclose($file);
        }

        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $komentar = $_POST['komentar'];

        $file = fopen($namaFile , 'a+');
        $txt = "Nama : $nama\n" . 
                "Email : $email\n" . 
                "Komentar : $komentar\n";


        fwrite($file, $txt);
        fclose($file);


    } 

    ?>
</body>

</html>

