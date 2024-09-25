<?php
$data = [
    [
        'nama' => 'Danang Firmanto',
        'usia' => 19,
        'alamat' => 'Jawa tengah',
        'hobi' => ['Otomotif', 'Calistenic', 'Ngoprek']
    ],
    [
        'nama' => 'Mulyono Widodo',
        'usia' => 45,
        'alamat' => 'Solo',
        'hobi' => ['Pahat Kayu', 'Bersepeda', 'Otomotif']
    ],
    [
        'nama' => 'Mulyani',
        'usia' => 34,
        'alamat' => 'Jakarta',
        'hobi' => ['Menulis', 'Menyanyi', 'Memancing']
    ]
];
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Array Kompleks</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
    </style>
</head>
<body>

<h2>Data Orang</h2>

<table>
    <thead>
        <tr>
            <th>Nama</th>
            <th>Usia</th>
            <th>Alamat</th>
            <th>Hobi</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($data as $orang) : ?>
            <tr>
                <td><?php echo $orang['nama']; ?></td>
                <td><?php echo $orang['usia']; ?></td>
                <td><?php echo $orang['alamat']; ?></td>
                <td>
                    <ul>
                        <?php foreach ($orang['hobi'] as $hobi) : ?>
                            <li><?php echo $hobi; ?></li>
                        <?php endforeach; ?>
                    </ul>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
</body>
</html>
