
<?php 
$data = array(
    1=> array(
        "Logo Perusahaan" => "<img src = 'Microsoft.jpeg.jpeg' width ='100' height = '80'>",  
        "Nama Perusahaan" => "Microsoft Corporation",
        "Kategori" => "Perusahaan Teknologi",
        "Deskripsi" => "Menawarkan Software komputer elektronik, konsumen, PC dan jasa",
        "Tahun Berdiri" => "1975",
    ),
    2 => array(
        "Logo Perusahaan" => "<img src = 'IBM.JPEG.jpeg' width ='100' height = '80'>",  
        "Nama Perusahaan" => "IBM(Internasinal bisnis machine)",
        "Kategori" => "Perusahaan Teknologi",
        "Deskripsi" => "Perusahaan dibidang IT, sudag terkemuka didunia, dan banyak juga pengaruh yang dihasilkan",
        "Tahun Berdiri" => "1911",
    ),
    3 => array(
        "Logo Perusahaan" => "<img src = 'Oracle.jpeg.jpeg' width ='100' height = '80'>",  
        "Nama Perusahaan" => "Oracle corporation",
        "Kategori" => "Perusahaan Teknologi",
        "Deskripsi" => "Perusahaan yang bertranformasi menjadi perusahaan software sekaigus hadware",
        "Tahun Berdiri" => "1977",
    ),
    4 => array(
        "Logo Perusahaan" => "<img src = 'Accenture.jpeg.jpeg' width ='100' height = '80'>",  
        "Nama Perusahaan" => "Accenture",
        "Kategori" => "Perusahaan Teknologi",
        "Deskripsi" => "Merupakan perusahaan raksasa didunia bahkan namanya telah terdaftar diNewyork exchange",
        "Tahun Berdiri" => "1989",
    ),
    5 => array(
        "Logo Perusahaan" => "<img src = 'SAP.jpeg.jpeg' width ='100' height = '80'>",  
        "Nama Perusahaan" => "SAP(Systemanalyse and programentwiclung",
        "Kategori" => "Perusahaan Teknologi",
        "Deskripsi" => "Perusahaan multinasional yang memproduksi perangkat lunak perusahaan untuk mengelola operasi bisnis dan hubungan dengan klien",
        "Tahun Berdiri" => "1972",
    ),
    6 => array(
        "Logo Perusahaan" => "<img src = 'TAS.jpeg.jpeg' width ='100' height = '80'>",  
        "Nama Perusahaan" => "TCS(Tata Consultancy Services)",
        "Kategori" => "Perusahaan Teknologi",
        "Deskripsi" => "Perusahaan terkemuka di India, berdasarkan pendapat mereka dapatkan",
        "Tahun Berdiri" => "1968",
    ),
    7 => array(
        "Logo Perusahaan" => "<img src = 'Cognizant.jpeg.jpeg' width ='100' height = '80'>",  
        "Nama Perusahaan" => "CTS(Cognizant Technologi Solution)",
        "Kategori" => "Perusahaan Teknologi",
        "Deskripsi" => "Perusahaan yang memfokuskan pada inovasi teknologi",
        "Tahun Berdiri" => "1994",
    ),
    8 => array(
        "Logo Perusahaan" => "<img src = 'Infosys.jpeg.jpeg' width ='100' height = '80'>",  
        "Nama Perusahaan" => "Infosys",
        "Kategori" => "Perusahaan Teknologi",
        "Deskripsi" => "Menawarkan jasa bisnis TI, manajemen infastruktur, jasa konsultasi, solusi bisnis, dan produk juga sistem integrasi",
        "Tahun Berdiri" => "1981",
    ),
    9 => array(
        "Logo Perusahaan" => "<img src = 'Capgemini.jpeg.jpeg' width ='100' height = '80'>",  
        "Nama Perusahaan" => "Capgemini",
        "Kategori" => "Perusahaan Teknologi",
        "Deskripsi" => "Awalnya hanya perusahaan manajemen dan pemrosesan data",
        "Tahun Berdiri" => "1967",
    ),
    10 => array(
        "Logo Perusahaan" => "<img src = 'vm ware inc.jpeg.jpeg' width ='100' height = '80'>",  
        "Nama Perusahaan" => "Vm ware inc",
        "Kategori" => "Perusahaan Teknologi",
        "Deskripsi" => "Menawarkan platfrom virtualisasi yang paling tersohor dan juga terpercaya, pusat data serta aplikasi-aplikasi",
        "Tahun Berdiri" => "1998",
    ),
    // Lanjutkan sampai 10 data
);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <style type="text/css">
        .foto {
            width: 100px;
            height: 80px;
        }
    </style>
</head>
<body>
    <!--Pemilihan tabel perusahaan teknologi-->
<b>Nama : Isti Markamah</b>
</br>
<b>NIM : 701220131</b>
</br>
<b> NRP %5 = 131% * 5 = 6,55 => Perusahaan teknologi </b>
    <?php
    // Menampilkan data dalam bentuk tabel HTML
echo "<center><b>PERUSAHAAN TEKNOLOGI</b></center>";
echo "</br>";
echo "<table border='1'>";
echo "<tr><th>NO</th><th>Logo Perusahaan</th><th>Nama Perusahaan</th><th>Kategori<th>Deskripsi</th><th>Tahun Berdiri</th></tr>";
$nomor = 1;

// Menggunakan loop untuk menampilkan data ke dalam tabel
foreach ($data as $data) {
    echo "<tr>";
    echo "<td>$nomor</td>";
    echo "<td>" . $data['Logo Perusahaan'] . "</td>";
    echo "<td>" . $data['Nama Perusahaan'] . "</td>";
    echo "<td>" . $data['Kategori'] . "</td>";
    echo "<td>" . $data['Deskripsi'] . "</td>";
    echo "<td>" . $data['Tahun Berdiri'] . "</td>";
    echo "</tr>";
    $nomor++;
}

echo "</table>";


    ?>

</body>
</html>