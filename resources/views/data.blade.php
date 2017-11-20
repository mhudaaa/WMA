<table border="1">
	<thead>
		<th>Bulan</th>
		<th>Barang</th>
		<th>Jumlah</th>
		<th>Peramalan</th>
	</thead>
	<tbody>
		@foreach($stok as $data)
		<tr>
			<td>{{ date("F", strtotime("2001-" . $data->bulan . "-01")) }}</td>
			<td>{{ $data->barang }}</td>
			<td>{{ $data->jumlah }}</td>
			<td>{{ $data->peramalan }}</td>
		</tr>
		@endforeach
	</tbody>
</table>
<br>
<a href="/tambah">
	<button>Tambah</button>
</a>