<!-- app/Views/data_kriteria/index.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Kriteria List</title>
</head>
<body>
    <h1>Data Kriteria List</h1>
    <a href="<?= base_url('DataKriteriaController/create') ?>">Add New Kriteria</a>
    <table border="1">
        <thead>
            <tr>
                <th>No.</th>
                <th>Kode Kriteria</th>
                <th>Nama Kriteria</th>
                <th>Nama Bobot</th>
                <th>Nilai Bobot</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php if(!empty($data_kriteria)): ?>
                <?php foreach ($data_kriteria as $index => $item): ?>
                    <tr>
                        <td><?= $index + 1 ?></td>
                        <td><?= esc($item['kode_kriteria']) ?></td>
                        <td><?= esc($item['nama_kriteria']) ?></td>
                        <td><?= esc($item['nama_bobot']) ?></td>
                        <td><?= esc($item['nilai_bobot']) ?></td>
                        <td>
                            <a href="<?= base_url('DataKriteriaController/edit/' . $item['id']) ?>">Edit</a>
                            <a href="<?= base_url('DataKriteriaController/delete/' . $item['id']) ?>" onclick="return confirm('Are you sure?')">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="6">No data found.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</body>
</html>
