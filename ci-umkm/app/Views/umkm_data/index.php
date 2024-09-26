<!-- app/Views/umkm/index.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UMKM List</title>
</head>
<body>
    <h1>UMKM List</h1>
    <a href="<?= base_url('UmkmDataController/create') ?>">Add New UMKM</a>
    <table border="1">
        <thead>
            <tr>
                <th>No.</th>
                <th>Nama Usaha</th>
                <th>Nama Pimpinan</th>
                <th>Jalan</th>
                <th>Desa</th>
                <th>Kecamatan</th>
                <th>Jenis Usaha</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php if(!empty($umkm)): ?>
                <?php foreach ($umkm as $index => $item): ?>
                    <tr>
                        <td><?= $index + 1 ?></td>
                        <td><?= esc($item['nama_usaha']) ?></td>
                        <td><?= esc($item['nama_pimpinan']) ?></td>
                        <td><?= esc($item['jalan']) ?></td>
                        <td><?= esc($item['desa']) ?></td>
                        <td><?= esc($item['kecamatan']) ?></td>
                        <td><?= esc($item['jenis_usaha']) ?></td>
                        <td>
                            <a href="<?= base_url('UmkmDataController/edit/' . $item['id_umkm']) ?>">Edit</a>
                            <a href="<?= base_url('UmkmDataController/delete/' . $item['id_umkm']) ?>" onclick="return confirm('Are you sure?')">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="8">No data found.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</body>
</html>
