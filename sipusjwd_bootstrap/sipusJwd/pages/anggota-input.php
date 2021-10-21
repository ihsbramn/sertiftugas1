<div id="label-page"><h3>Input Data Anggota</h3></div>
<div id="content">
	<form action="proses/anggota-input-proses.php" method="post">
	<table id="tabel-input">
		<tr>
			<td class="label-formulir" hidden>ID Anggota</td>
			<td class="isian-formulir"><input type="text" class="form-control" name="id_anggota" class="isian-formulir isian-formulir-border" readonly hidden></td>
		</tr>
		<tr>
			<td class="label-formulir">Nama</td>
			<td class="isian-formulir"><input type="text" class="form-control" name="nama" class="isian-formulir isian-formulir-border" required></td>
		</tr>
		<tr>
			<td class="label-formulir">Jenis Kelamin</td>
			<td class="isian-formulir">
				<select name="jenis_kelamin" class="isian-formulir isian-formulir-border form-select" required>
					<option value="" select="selected">~ Jenis Kelamin ~</option>
					<option value="Pria">Pria</option>
					<option value="Wanita">Wanita</option>
				</select>
			</td>
		<tr>
			<td class="label-formulir">Alamat</td>
			<td class="isian-formulir"><textarea rows="2" cols="40" class="form-control" name="alamat" class="isian-formulir isian-formulir-border" required></textarea></td>
		</tr>
		<tr>
			<td class="label-formulir"></td>
			<td class="isian-formulir"><input type="submit" class="btn btn-primary" name="simpan" value="Simpan" class="tombol"></td>
		</tr>
	</table>
	</form>
</div>