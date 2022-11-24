<?php
 session_start();

 $_SESSION['message'] = 'Pembayaran Berhasil,Terimakasih';
 header('location: view_cart.php');
?> 