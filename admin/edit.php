<?php

require "functions.php";


$id = $_GET["id"];

$pelanggan = query("SELECT * FROM daftar_pemesanan WHERE id = $id")[0];



?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
     <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
         <!-- Google Fonts - Onest -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Onest:wght@100;200;300;400;500;600;700;800;900&display=swap"
      rel="stylesheet"
    />
</head>
<body class="font-[Onest]">
       <script src="../components/navbar.js"></script>
    <div id="navbar"></div>
    <h1 class="justify-center mt-20 mx-auto flex font-bold text-4xl">Edit Data Pembeli</h1>    

    <!-- Form Tambah -->

    <div class="flex justify-center mt-5 mx-auto py-3 px-4">
        <form action="" method="post">
            <ul>
                <li>
                    <label for="tanggal_pesan"> Tanggal Pesan :
                        <input type="text" name="tanggal_pesan" id="tanggal_pesan" class="w-full border-1 border-slate-800 rounded-lg hover:border-slate-500 px-2" required value="<?= $pelanggan['tanggal_pesan']?>">
                    </label>
                </li>

                 <li class="mt-5">
                    <label for="Nama"> Nama Pemesan :
                        <input type="text" name="nama" id="Nama" class="w-full border-1 border-slate-800 rounded-lg hover:border-slate-500 px-2" required value="<?= $pelanggan['Nama']?>">
                    </label>
                </li>

                  <li class="mt-5">
                    <label for="QTY"> Jumlah Pesanan :
                        <input type="text" name="qty" id="QTY" class="w-full border-1 border-slate-800 rounded-lg hover:border-slate-500 px-2" required value="<?= $pelanggan['QTY']?>">
                    </label>
                </li>
                
                 <li class="mt-5">
                    <label for="Pemasukan"> Pemasukan :
                        <input type="text" name="pemasukan" id="Pemasukan" class="w-full border-1 border-slate-800 rounded-lg hover:border-slate-500 px-2" required value="<?= $pelanggan['Pemasukan']?>">
                    </label>
                </li>
            </ul>
                <div class=" ">
                    <button name="submit" type="submit" class="text-white text-center mx-auto bg-[#803c11] py-2 px-4 rounded-lg mt-5 w-1/2 block items-center hover:bg-[#eda351] hover:text-slate-900">Submit</button>
                </div>
        </form>
</body>
</html>