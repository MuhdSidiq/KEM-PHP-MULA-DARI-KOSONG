<?php

// function beriSalam($nama , $umur) {

//     echo "Selamat Pagi $nama dan umur saya $umur";

// }

// beriSalam("Budi", 20);


function KiraHargaSaham ($hargaSahamSemasa, $kuantitiSaham) {

    $hargaSahamSemasa = $hargaSahamSemasa * $kuantitiSaham;

    return $hargaSahamSemasa;

}


// function StockProfile($NilaiSaham) {

//     switch ($NilaiSaham) {

//         case $NilaiSaham < 200:
//             $remarks = "Budget Stock";
//             break;
//         case $NilaiSaham >= 200 and $NilaiSaham <= 500:
//             $remarks = "Mid-Range Stock";

//         case $NilaiSaham >= 500 and $NilaiSaham <= 1000:
//             $remarks = "Premium Stock";
//             break;
//         case $NilaiSaham > 1000:
//             $remarks = "High-Value Stock";
//             break;
//         default:
//             $remarks = "Price Analysis Needed";
//     }

//     echo "profile saham ini adalah " . $remarks;
// }

// echo StockProfile(1000);



function StockProfile($NilaiSaham) {

    switch ($NilaiSaham) {

        case $NilaiSaham < 200:
            $remarks = "Budget Stock";
            break;
        case $NilaiSaham >= 200 and $NilaiSaham <= 500:
            $remarks = "Mid-Range Stock";

        case $NilaiSaham >= 500 and $NilaiSaham <= 1000:
            $remarks = "Premium Stock";
            break;
        case $NilaiSaham > 1000:
            $remarks = "High-Value Stock";
            break;
        default:
            $remarks = "Price Analysis Needed";
    }

    return  "profile saham ini adalah " . $remarks;
}

$ManipulateStockProfile = StockProfile(1000);


$hargaSahamDalamPortfolio = KiraHargaSaham(100, 10);

$hargaSahamBersamaMargin = KiraHargaSaham(100, 10) * (1.2);

$untungRugi = $hargaSahamBersamaMargin - $hargaSahamDalamPortfolio;

echo $untungRugi;

?>