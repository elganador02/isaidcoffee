<?php
	$servername = "localhost";
	$username   = "root";
	$password   = "";
	$database   = "penjualan_buku_online";

	$konek = mysqli_connect($servername, $username, $password, $database);
	if( !$konek ) {
		echo "<script>
				setTimeout( function() {
						alert('Koneksi Database Gagal!');
				}, 200);
			  </script>";
	}
?>