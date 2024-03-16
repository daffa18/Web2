<html>

<head>
    <title>Penggunaan Switch- Case</title>
</head>

<body>
    Hari ini:
    <?Php
    $namahari = date("l");
    switch ($namahari) {
        case "Sunday";
            print("Minggu");
            print "Waktu untuk istirahat";
            break;
        case "Monday";
            print("Senin<br>");
            print "Meeting awal minggu jam 08.00";
            break;
        case "Tuesday";
            print("Selasa<br>");
            print "Pembukaan Workshop Diklat";
            break; 
        case "Wednesday";
            print("Rabu<br>");
            print("Seminar Launch igWindow Vista di JHCC");
            break;
        case "Thrusday";
            print("Kamis<br>");
            print "Pertemuan dengan Mahasiswa";
            break;
        case "Friday";
            print("Jum’at<br>");
            print "Jogging bersama";
            break;
        default:
            print("Sabtu<br>");
            print "Survey harga ke Dusit, Mangga Dua";
    }
    ?>
</body>

</html>

Contoh penggunaan Swicth– Case:

<?php
echo "<u>Menu Pilihan</u><br>";
echo "[1] Trapesium<br>";
echo "[2] Persegi Panjang<br>";
echo "[3] Bujus Sangkar<br><br>";
echo "<form method = 'post'>";
echo "Pilihan<input type='text'name='pilih'size=2>";
echo "<input type='submit'value='kirim'><br>";
$pil = $_POST['pilih'];
switch ($pil) {
    case 1:
        $atas = 12;
        $bawah = 17;
        $tinggi = 7;
        $luas = ($atas + $bawah) / 2 * $tinggi;
        echo "<br>MencariLuasTrapesium<br>";
        echo "Garisatas=$atascm<br>";
        echo "Garisbawah=$bawahcm<br>";
        echo "Tinggi=$tinggicm<br>";
        echo "LuasTrapesium=$luascm<sup>2</sup><br>";
        break;
    case 2:
        $panjang1 = 25;
        $lebar1 = 14;
        $luas1 = $panjang1 * $lebar1;
        echo "<br>MencariLuasPersegiPanjang<br>";
        echo "Panjang=$panjang1 cm<br>";
        echo "Lebar=$lebar1 cm<br>";
        echo "LuasBujurSangkar=$luas1 cm<sup>2</sup><br>";
        break;
    case 3:
        $sisi = 12;
        $luas = $sisi * $sisi;
        echo "<br>MencariLuasBujurSangkar<br>";
        echo "Sisi=$sisicm<br>";
        echo "LuasBujurSangkar=$luascm<sup>2</sup><br>";
        break;
    default:
        echo "<br><blink>Pilihanandasalah,silakancobalagi</blink>";
        break;
    }
?>