<table border="1">
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Nik</th>
        <th>No HP</th>
        <th>Jenis Kelamin</th>
        <th>Alamat</th>
    </tr>
    @foreach($karyawan as $data)
    <tr>
        <td>{{ $data->id }}</td>
        <td>{{ $data->nama }}</td>
        <td>{{ $data->nik }}</td>
        <td>{{ $data->no_hp }}</td>
        <td>{{ $data->jenis_kelamin }}</td>
        <td>{{ $data->alamat }}</td>
    </tr>
    @endforeach
</table>