<form action="<?= site_url('UmkmDataController/store') ?>" method="post">
    <div>
        <label for="nama_usaha">Nama Usaha UMKM</label>
        <input type="text" name="nama_usaha" id="nama_usaha" required>
    </div>
    <div>
        <label for="nama_pimpinan">Nama Pimpinan</label>
        <input type="text" name="nama_pimpinan" id="nama_pimpinan" required>
    </div>
    <div>
        <label for="jalan">Jalan</label>
        <input type="text" name="jalan" id="jalan" required>
    </div>
    <div>
        <label for="desa">Desa</label>
        <input type="text" name="desa" id="desa" required>
    </div>
    <div>
        <label for="kecamatan">Kecamatan</label>
        <input type="text" name="kecamatan" id="kecamatan" required>
    </div>
    <div>
        <label for="jenis_usaha">Jenis Usaha</label>
        <input type="text" name="jenis_usaha" id="jenis_usaha" required>
    </div>
    <button type="submit">Save</button>
</form>
