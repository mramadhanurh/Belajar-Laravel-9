<h1>Create Karyawan</h1>

<form action="/karyawan/store" method="POST">
    @csrf
    <input type="text" name="nama" placeholder="Nama"><br>
    <input type="text" name="nik" placeholder="NIK"><br>
    <input type="text" name="no_hp" placeholder="No HP"><br>
    <select name="jenis_kelamin">
        <option value="">-Pilih Jenis Kelamin</option>
        <option value="L">Laki-laki</option>
        <option value="P">Perempuan</option>
    </select><br>
    <textarea name="alamat" cols="50" rows="10"></textarea><br>
    <input type="submit" name="submit" value="Save">
</form>