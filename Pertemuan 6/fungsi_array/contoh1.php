//Inisialiasasiarray
$buah=array(“Apel”,”Mangga”,”Jeruk”,”Pisang”);

//inisialisasi$jml_elemen
$jml_elemen=count($buah);
Menampilkanisidarivariabel$jml_elemen;
echo$jml_elemen;
contoh2

//inisialisasiarray
$pegawai=array(array(“nip”=>”123456”,
”nama”=>”Joko”,
“alamat”=>”jakarta”.
‘jabatan”=>”manager”),
array(“nip”=>”123457”,
”nama”=>”Bobi”,
“alamat”=>”Depok”.
‘jabatan”=>”adm”),
array(“nip”=>”123458”,
”nama”=>”Sandi”,
“alamat”=>”TangerangSelatan”.
‘jabatan”=>”Teknisi”),
array(“nip”=>”123459”,
”nama”=>”Dina”,
“alamat”=>”Jakarta”.
‘jabatan”=>”operator”));
Menampilkanisidarivariabelmultidimensionalarray
echo$pegawai[0][“nip”];
echo$pegawai[0][“nama”];
echo$pegawai[0][“alamat”];

echo$pegawai[0][“jabatan”];
echo$pegawai[1][“nip”];
echo$pegawai[1][“nama”];
echo$pegawai[1][“alamat”];
echo$pegawai[1][“jabatan”];
echo$pegawai[2][“nip”];
echo$pegawai[2][“nama”];
echo$pegawai[2][“alamat”];
echo$pegawai[2][“jabatan”];
echo$pegawai[3][“nip”];
echo$pegawai[3][“nama”];
echo$pegawai[3][“alamat”];
echo$pegawai[3][“jabatan”];

// atau

$jml_pegawai=count($pegawai);
for($i=0;$i<$pegawai;$i++)
{
echo$pegawai[$i][“nip”];
echo$pegawai[$i][“nama”];
echo$pegawai[$i][“alamat”];
echo$pegawai[$i][“jabatan”];
}