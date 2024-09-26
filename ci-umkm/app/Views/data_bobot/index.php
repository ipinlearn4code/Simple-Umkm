<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Bobot List</title>
</head>
<body>
    <h1>Data Bobot List</h1>
    <a href="<?= base_url('DataBobotController/create') ?>">Add New Bobot</a>
    <table border="1">
        <thead>
            <tr>
                <th>No.</th>
                <th>Kode Kriteria</th>
                <th>Nama Kriteria</th>
                <th>Nilai Kriteria</th>
                <th>Tipe Kriteria</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php if(!empty($data_bobot)): ?>
                <?php foreach ($data_bobot as $index => $item): ?>
                    <tr>
                        <td><?= $index + 1 ?></td>
                        <td><?= esc($item['kode_kriteria']) ?></td>
                        <td><?= esc($item['nama_kriteria']) ?></td>
                        <td><?= esc($item['nilai_kriteria']) ?></td>
                        <td><?= esc($item['tipe_kriteria']) ?></td>
                        <td>
                            <a href="<?= base_url('DataBobotController/edit/' . $item['id']) ?>">Edit</a>
                            <a href="<?= base_url('DataBobotController/delete/' . $item['id']) ?>" onclick="return confirm('Are you sure?')">Delete</a>
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
