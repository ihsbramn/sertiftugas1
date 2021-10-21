<div id="label-page"><h3>Tampil Data Anggota</h3></div>
<div id="content">
	<p id="tombol-tambah-container"><a href="index.php?p=anggota-input" class="tombol">Tambah Anggota</a></p>
	<table class="table table-bordered" id="tabel-tampil">
		<thead>
		<tr>
			<th id="label-tampil-no">No</td>
			<th>ID Anggota</th>
			<th>Nama</th>
			<th>Jenis Kelamin</th>
			<th>Alamat</th>
			<th id="label-opsi">Opsi</th>
		</tr>
		</thead>
		
		<tbody>
		<?php
		$sql="SELECT * FROM tbanggota ORDER BY idanggota DESC";
		$q_tampil_anggota = mysqli_query($db, $sql);
		$nomor=1;
		while($r_tampil_anggota=mysqli_fetch_array($q_tampil_anggota)){
			
		?>
		<tr>
			<td><?php echo $nomor++; ?></td>
			<td><?php echo $r_tampil_anggota['idanggota']; ?></td>
			<td><?php echo $r_tampil_anggota['nama']; ?></td>
			<td><?php echo $r_tampil_anggota['jeniskelamin']; ?></td>
			<td><?php echo $r_tampil_anggota['alamat']; ?></td>
			<td>

				<div class="tombol-opsi-container"><a class="btn btn-primary" href="index.php?p=anggota-edit&id=<?php echo $r_tampil_anggota['idanggota'];?>" class="tombol">Edit</a></div>
				<!-- <div class="tombol-opsi-container"><a class="btn btn-primary" href="proses/anggota-hapus.php?id=<?php echo $r_tampil_anggota['idanggota']; ?>" class="tombol">Hapus</a></div> -->
				<button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
				Hapus
				</button>

				<!-- Modal -->
				<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Delete Data ?</h5>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
										<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
						<div class="tombol-opsi-container"><a class="btn btn-primary" href="proses/anggota-hapus.php?id=<?php echo $r_tampil_anggota['idanggota']; ?>" class="tombol">Hapus</a></div>
					</div>
					</div>
				</div>
				</div>
			</td>
		</tr>
		<?php } ?>
		</tbody>
		
	</table>
</div>