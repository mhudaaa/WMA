<form method="POST" action="/tambahData">
	{{ csrf_field() }}
	<br><br>
	<select name="bulan" required="">
		<option value="1">Januari</option>
		<option value="2">Februari</option>
		<option value="3">Maret</option>
		<option value="4">April</option>
		<option value="5">Mei</option>
		<option value="6">Juni</option>
		<option value="7">Juli</option>
	</select>
	<br><br>
	<input type="text" name="barang" placeholder="barang" required="">
	<br><br>
	<input type="number" name="jumlah" placeholder="jumlah" required="">

	<br><br>

	<button type="submit">Simpan</button>
</form>