<form action="<?= site_url('UmkmDataController/update/' . $umkm['id_umkm']) ?>" method="post">
    <div>
        <label for="nama_usaha">Nama Usaha UMKM</label>
        <input type="text" name="nama_usaha" id="nama_usaha" value="<?= esc($umkm['nama_usaha']) ?>" required>
    </div>
    <div>
        <label for="nama_pimpinan">Nama Pimpinan</label>
        <input type="text" name="nama_pimpinan" id="nama_pimpinan" value="<?= esc($umkm['nama_pimpinan']) ?>" required>
    </div>
    <div>
        <label for="jalan">Jalan</label>
        <input type="text" name="jalan" id="jalan" value="<?= esc($umkm['jalan']) ?>" required>
    </div>
    <div>
        <label for="desa">Desa</label>
        <input type="text" name="desa" id="desa" value="<?= esc($umkm['desa']) ?>" required>
    </div>
    <div>
        <label for="kecamatan">Kecamatan</label>
        <input type="text" name="kecamatan" id="kecamatan" value="<?= esc($umkm['kecamatan']) ?>" required>
    </div>
    <div>
        <label for="jenis_usaha">Jenis Usaha</label>
        <select name="jenis_usaha_id" id="jenis_usaha" required>
            <?php foreach ($jenis_usaha as $usaha): ?>
                <option value="<?= esc($usaha['id_usaha']) ?>" <?= $usaha['id_usaha'] == $umkm['jenis_usaha_id'] ? 'selected' : '' ?>>
                    <?= esc($usaha['nama_jenis_usaha']) ?>
                </option>
            <?php endforeach; ?>
        </select>
    </div>
    <button type="submit">Update</button>
</form>
