<form action="<?= site_url('JenisUsahaController/update/' . $jenis_usaha['id_usaha']) ?>" method="post">
    <div>
        <label for="nama_jenis_usaha">Nama Jenis Usaha</label>
        <input type="text" name="nama_jenis_usaha" id="nama_jenis_usaha" value="<?= $jenis_usaha['nama_jenis_usaha'] ?>" required>
    </div>
    <button type="submit">Update</button>
</form>
