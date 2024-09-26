<form action="<?= site_url('DataKriteriaController/store') ?>" method="post">
    <div>
        <label for="kode_kriteria">Kode Kriteria</label>
        <input type="text" name="kode_kriteria" id="kode_kriteria" required>
    </div>
    <div>
        <label for="nama_kriteria">Nama Kriteria</label>
        <input type="text" name="nama_kriteria" id="nama_kriteria" required>
    </div>
    <div>
        <label for="nama_bobot">Nama Bobot</label>
        <input type="text" name="nama_bobot" id="nama_bobot" required>
    </div>
    <div>
        <label for="nilai_bobot">Nilai Bobot</label>
        <input type="number" name="nilai_bobot" id="nilai_bobot" step="0.01" required>
    </div>
    <button type="submit">Save</button>
</form>
