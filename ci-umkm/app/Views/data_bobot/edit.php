<form action="<?= site_url('DataBobotController/update/' . $data_bobot['id']) ?>" method="post">
    <div>
        <label for="kode_kriteria">Kode Kriteria</label>
        <input type="text" name="kode_kriteria" id="kode_kriteria" value="<?= $data_bobot['kode_kriteria'] ?>" required>
    </div>
    <div>
        <label for="nama_kriteria">Nama Kriteria</label>
        <input type="text" name="nama_kriteria" id="nama_kriteria" value="<?= $data_bobot['nama_kriteria'] ?>" required>
    </div>
    <div>
        <label for="nilai_kriteria">Nilai Kriteria</label>
        <input type="number" name="nilai_kriteria" id="nilai_kriteria" value="<?= $data_bobot['nilai_kriteria'] ?>" step="0.01" required>
    </div>
    <div>
        <label for="tipe_kriteria">Tipe Kriteria</label>
        <input type="text" name="tipe_kriteria" id="tipe_kriteria" value="<?= $data_bobot['tipe_kriteria'] ?>" required>
    </div>
    <button type="submit">Update</button>
</form>
