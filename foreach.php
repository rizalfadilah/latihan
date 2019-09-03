<?php
$array = array('saya <br>',10);
$aso = [
  [
      'Judul' => '<h1>JUDUL:Belajar PHP & Mysql untuk pemula',
      'Penulis' => '<h5>PENULIS:Admin SMK',
  ],
  [
      'Judul' => '<h1>Tutorial PHP dari Nol hingga Mahir',
      'Penulis' => '<h5>Admin SMK',
  ],
  [
      'Judul' => '<h1>Membuat Aplikasi Web dengan PHP',
      'Penulis' => '<h5>SMK assalam'
  ]
];
foreach ($aso as $value) {
    echo $value["Judul"] . "<br>";
    echo $value["Penulis"] . "<br>";
    echo "<hr>";
}

?>