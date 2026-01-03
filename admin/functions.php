<?php

$conn = mysqli_connect("localhost", "root", "", "phpdasar");

if(!$conn){
    die("Koneksi Gagal!");
}

function query($query){
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    } 
    return $rows;
}


function editData(){

};


function tambahData($data){
    global $conn;
    //ambil data dari setiap elemen pada form
    $tanggal_pesan = htmlspecialchars($data['tanggal_pesan']);
    $nama = htmlspecialchars($data['nama']);
    $QTY = htmlspecialchars($data['qty']);
    $pemasukan = htmlspecialchars($data['pemasukan']);

    //query insert data
    //id tetap harus dimasukan dengan values pertama ''
    $query = "INSERT INTO daftar_pemesanan
                VALUE
                ('', '$tanggal_pesan', '$nama', '$QTY', '$pemasukan')
                ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);

}


function hapus($id){
    global $conn;
    mysqli_query($conn, "DELETE FROM daftar_pemesanan WHERE id = $id");

    return mysqli_affected_rows($conn);
}










?>



































































