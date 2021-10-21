<div id="label-page"><h3>Tampil Data Buku</h3></div>
<div id="content">
	<p id="tombol-tambah-container"><a href="index.php?p=buku-input" class="tombol">Tambah Data Buku</a></p>
	<table class="table table-bordered" id="tabel-tampil">
		<tr>
			<th id="label-tampil-no">No</td>
			<th>ID Buku</th>
			<th>Judul Buku</th>
			<th>Kategori</th>
			<th>Pengarang</th>
			<th>Penerbit</th>
			<th id="label-opsi2">Opsi</th>
		</tr>
		<?php

		$sql="SELECT * FROM tbbuku ORDER BY idbuku DESC";
		$q_tampil_buku = mysqli_query($db, $sql);

		$nomor=1;
		while($r_tampil_buku=mysqli_fetch_array($q_tampil_buku)){
		?>
		<tr>
			<td><?php echo $nomor++; ?></td>
			<td><?php echo $r_tampil_buku['idbuku']; ?></td>
			<td><?php echo $r_tampil_buku['judulbuku']; ?></td>
			<td><?php echo $r_tampil_buku['kategori']; ?></td>
			<td><?php echo $r_tampil_buku['pengarang']; ?></td>
			<td><?php echo $r_tampil_buku['penerbit']; ?></td>
			<td>
				<div class="tombol-opsi-container"><a class="btn btn-primary" href="index.php?p=buku-edit&id=<?php echo $r_tampil_buku['idbuku'];?>" class="tombol">Edit</a></div>
				<!-- <div class="tombol-opsi-container"><a class="btn btn-danger" href="proses/buku-hapus.php?id=<?php echo $r_tampil_buku['idbuku']; ?>" class="tombol">Hapus</a></div> -->
				<button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
				Hapus 
				</button>

				<!-- Modal -->
				<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Hapus Data ?</h5>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
										<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
						<div class="tombol-opsi-container"><a class="btn btn-danger" href="proses/buku-hapus.php?id=<?php echo $r_tampil_buku['idbuku']; ?>" class="tombol">Hapus</a></div>
					</div>
					</div>
				</div>
				</div>
			</td>
		</tr>
		<?php } ?>
	</table>
	<br>
	<br>
	<br>
</div>