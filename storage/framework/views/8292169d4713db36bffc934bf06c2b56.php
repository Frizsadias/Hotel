<!DOCTYPE html>
<html>

<head>
    <style>
        #customers {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        #customers td,
        #customers th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        #customers tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        #customers tr:hover {
            background-color: #ddd;
        }

        #customers th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #04AA6D;
            color: white;
        }

        h1 {
            text-align: center;
            font-family: Arial, Helvetica, sans-serif;
        }

        #penutup {
            font-style: italic;
            font-family: Arial, Helvetica, sans-serif;
        }

        h3 {
            font-family: Arial, Helvetica, sans-serif;
        }
    </style>
</head>

<body>

    <h1>Tiket Reservasi Kamar Hotel</h1>
    <h3><strong>Catatan : </strong>Silahkan membawa tiket Anda tersebut pada saat mengunjungi parawisata
        <strong>"<?php echo e($tiket->Kamar->kamar); ?>"</strong> dengan melakukan pembayaran sebesar <strong>Rp.
            <?php echo e(number_format($tiket->harga)); ?></strong>
    </h3>

    <table id="customers">
        <tr>
            <th>Kamar</th>
            <th>:</th>
            <th><?php echo e($tiket->Kamar->kamar); ?></th>
        </tr>
        
        <tr>
            <th>Harga Kamar</th>
            <th>:</th>
            <th>Rp. <?php echo e(number_format($tiket->Kamar->harga)); ?></th>
        </tr>
        <tr>
            <th>Nama Pemesan</th>
            <th>:</th>
            <th><?php echo e($tiket->pesanan->user->name); ?></th>
        </tr>
        
        <tr>
            <th>email Pemesan</th>
            <th>:</th>
            <th><?php echo e($tiket->Pesanan->User->email); ?></th>
        </tr>
        <tr>
            <th>No. Handphone</th>
            <th>:</th>
            <th><?php echo e($tiket->Pesanan->User->nohp); ?></th>
        </tr>
        <tr>
            <th>Jumlah Tiket</th>
            <th>:</th>
            <th><?php echo e($tiket->jumlah); ?></th>
        </tr>
        <tr>
            <th>Total Harga</th>
            <th>:</th>
            <th>RP. <?php echo e(number_format($tiket->harga)); ?></th>
        </tr>
    </table>

    <h3 id="penutup">Semoga dengan adanya website ini Anda merasa puas dan nyaman dalama melakukan pemesanan Tiket
        Parawisata</h3>
    <h3>Kontak Admin</h3>
    <h4>Frizsa Dias : Wa 085855822070</h4>

</body>

</html>
<?php /**PATH C:\Users\user\LaravelReservasiHotel\resources\views/User/Pesanan/DataPdf.blade.php ENDPATH**/ ?>