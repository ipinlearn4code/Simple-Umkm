<!-- app/Views/jenis_usaha/index.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jenis Usaha List</title>
</head>
<body>
    <h1>Jenis Usaha List</h1>
    <a href="<?= base_url('JenisUsahaController/create') ?>">Add New Jenis Usaha</a>
    <table border="1">
        <thead>
            <tr>
                <th>No.</th>
                <th>Nama Jenis Usaha</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php if(!empty($jenis_usaha)): ?>
                <?php foreach ($jenis_usaha as $index => $item): ?>
                    <tr>
                        <td><?= $index + 1 ?></td>
                        <td><?= esc($item['nama_jenis_usaha']) ?></td>
                        <td>
                            <a href="<?= base_url('JenisUsahaController/edit/' . $item['id_usaha']) ?>">Edit</a>
                            <a href="<?= base_url('JenisUsahaController/delete/' . $item['id_usaha']) ?>" onclick="return confirm('Are you sure?')">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="3">No data found.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</body>
</html>
