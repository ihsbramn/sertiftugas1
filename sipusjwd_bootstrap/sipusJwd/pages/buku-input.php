<div id="label-page"><h3>Input Data Buku</h3></div>
<div id="content">
	<form action="proses/buku-input-proses.php" method="post">
	<table id="tabel-input">
		<tr>
			<td class="label-formulir" hidden>ID Buku</td>
			<td class="isian-formulir"><input type="text" class="form-control" name="id_buku" class="isian-formulir isian-formulir-border" readonly hidden></td>
		</tr>
		<tr>
			<td class="label-formulir">Judul Buku</td>
			<td class="isian-formulir"><input type="text" class="form-control" name="judul_buku" class="isian-formulir isian-formulir-border" required></td>
		</tr>
		<tr>
			<td class="label-formulir">Kategori</td>
			<td class="isian-formulir">
				<select name="kategori" class="isian-formulir isian-formulir-border form-select" required>
					<option value="" select="selected">~ Pilih Kategori ~</option>
					<option value="Ilmu Komputer">Ilmu Komputer</option>
					<option value="Ilmu Agama">Ilmu Agama</option>
					<option value="Karya Sastra">Karya Sastra</option>
				</select>
			</td>
		</tr>
		<tr>
			<td class="label-formulir">Pengarang</td>
			<td class="isian-formulir"><input type="text" class="form-control" name="pengarang" class="isian-formulir isian-formulir-border" required></td>
		</tr>
		<tr>
			<td class="label-formulir">Penerbit</td>
			<td class="isian-formulir"><input type="text" class="form-control" name="penerbit" class="isian-formulir isian-formulir-border" required></td>
		</tr>
		<tr>
			<td class="label-formulir"></td>
			<td class="isian-formulir"><input type="submit" class="btn btn-primary" name="simpan" value="Simpan" class="tombol"></td>
		</tr>
	</table>
	</form>
</div>