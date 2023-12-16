function hitungGanjilGenap(){
    var bilangan = parseInt(document.getElementById("inputBilangan").value);
    var jumlahGanjil = 0;
    var jumlahGenap = 0;
    
    for (var i = 1; i <= bilangan; i++){
        if (i % 2 === 0) {
            jumlahGenap++;
        } 
        else {
            jumlahGanjil++;
        }
    }
    document.getElementById("hasilGanjil").innerHTML = "Jumlah bilangan ganjil: " + jumlahGanjil;
    document.getElementById("hasilGenap").innerHTML = "Jumlah bilangan genap: " + jumlahGenap;
}