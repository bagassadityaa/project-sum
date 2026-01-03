<?php

require ("functions.php");

$pemesanan = query("SELECT * FROM daftar_pemesanan");


?>











<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
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
    <!-- Navbar Start -->
    <script src="../components/navbar.js?v=<?= time() ?>"></script>
    <div id="navbar"></div>
        <!-- Navbar End -->
          
    <!-- Table Database -->
     <div class="flex justify-center mt-20">
    <h1 class="font-bold text-3xl">Daftar Pelanggan</h1>
    </div>
     <div class="mt-20 flex justify-center">
    <br>
    <table border="1" cellpadding="10" cellspacing="0" class="border border-black">
        <tr class="bg-slate-300">
            <th class="border py-2 px-4">No</th>
            <th class="border py-2 px-4">
                Aksi
            </th>
            <th class="border py-2 px-4">Tanggal Pemesanan</th>
            <th class="border py-2 px-4">Nama Pelanggan</th>
            <th class="border py-2 px-4">QTY</th>
            <th class="border py-2 px-4">Pemasukan</th>
        </tr>
        <?php $i = 1; ?>
        <?php foreach($pemesanan as $pesanan) : ?>

        <tr>
            <td class="border py-2 px-4"><?= $i;?></td>
            <td class="border py-2 px-4">
                <a href="edit.php?id=<?= $pesanan['id'] ?>" class="hover:text-[#eda351]">Edit</a> ||
                <a href="delete.php?id=<?= $pesanan ['id']?>" class="hover:text-[#eda351]">Delete</a>
            </td>
            <td class="border py-2 px-4"><?= $pesanan['tanggal_pesan'] ?></td>
            <td class="border py-2 px-4"><?= $pesanan['Nama'] ?></td>
            <td class="border py-2 px-4"><?= $pesanan['QTY'] ?></td>
            <td class="border py-2 px-4"><?= $pesanan['Pemasukan'] ?></td>
        </tr>
        
        <?php $i++ ?>
        <?php endforeach; ?>

    </table>
    </div>

</body>
</html>