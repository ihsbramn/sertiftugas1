<?php
include 'koneksi.php';
$tgl=date('Y-m-d');
?>
<!doctype html>
<html>
<head>
	<title>Sistem Informasi Perpustakaan</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body class="bg-light" >
	<div id="container">
		<br>
		<div class="container">
		<div id="header">
			<div id="logo-perpustakaan-container">
			</div>
			<div id="nama-alamat-perpustakaan-container">
				<div class="nama-alamat-perpustakaan">
					<h1 class="text-center"> PERPUSTAKAAN UMUM </h1>
				</div>
				<div class="nama-alamat-perpustakaan">
					<h4 class="text-center">Jl. Lembah Abang No 11, Telp: (021)55555555</h4>
				</div>
			</div>
		</div>
		</div>
		<br>
			<div class="row">
				<div class="col-3 bg-primary">
					<div class="container">
						<br>
						<div id="header2">
							<div id="nama-user" class="text-white"><h2>Hai Admin!</h2></div>
						</div>
						<div id="sidebar">
							<a href="index.php?p=beranda" class="text-white">Beranda</a>
							<p class="label-navigasi text-white">Entry Data Dan Transaksi</p>
							<ul>
								<li><a class="text-white hover" href="index.php?p=anggota">Data Anggota</a></li>
								<li><a class="text-white hover" href="index.php?p=buku">Data Buku</a></li>
								<li><a class="text-white hover" href="index.php?p=transaksi-peminjaman">Transaksi Peminjaman</a></li>
							</ul>
						</div>
					</div>
					
				</div>
				<div class="col-8 bg-light">
					<div id="content-container">	
							<div class="row">
								<div >
									<div >
										<div class="panel panel-warning login-panel" >
											<div class="panel-footer">
											</div>
										</div>
									</div>
								</div>
							</div>	
							<?php
								$pages_dir='pages';
								if(!empty($_GET['p'])){
									$pages=scandir($pages_dir,0);
									unset($pages[0],$pages[1]);
									$p=$_GET['p'];
									if(in_array($p.'.php',$pages)){
										include($pages_dir.'/'.$p.'.php');
									}else{
										echo'Halaman Tidak Ditemukan';
									}
								}else{
									include($pages_dir.'/beranda.php');
								}
							?>
					</div>
				</div>
			</div>
		
		
		
	</div>
	<div class="footer text-center fixed-bottom bg-light"  >
		<p>Sistem Informasi Perpustakaan (sipus) | Praktikum </p>
	</div>
</body>


</html>