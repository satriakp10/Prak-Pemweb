function Ganjil_Genap(bilangan) {
    var jumlah_Ganjil = 0;
    var jumlah_Genap = 0;

    for (var i = 1; i <= bilangan; i++) {
        if (i % 2 === 0) {
            jumlah_Genap++;
        } else {
            jumlah_Ganjil++;
        }
    }

    console.log("Total Bilangan Ganjil: " + jumlah_Ganjil);
    console.log("Total Bilangan Genap: " + jumlah_Genap);
}

Ganjil_Genap(100); 
