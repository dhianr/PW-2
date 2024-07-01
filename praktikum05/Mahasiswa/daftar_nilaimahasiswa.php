<?php
// File: daftar_nilaimahasiswa.php

include 'class_nilaimahasiswa.php';

$daftar_nilaimahasiswa = [];

// Menambahkan objek NilaiMahasiswa ke dalam array
$daftar_nilaimahasiswa[] = new NilaiMahasiswa("Pemrograman Web 2", 90, "0110123046");
$daftar_nilaimahasiswa[] = new NilaiMahasiswa("Pemrograman Web 2", 78, "0110123113");
$daftar_nilaimahasiswa[] = new NilaiMahasiswa("Pemrograman Web 2", 60, "0110123030");
$daftar_nilaimahasiswa[] = new NilaiMahasiswa("Pemrograman Web 2", 45, "0110123270");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Nilai Mahasiswa</title>
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
    <h1>Daftar Nilai Mahasiswa</h1>
    <table>
        <thead>
            <tr>
                <th>Mata Kuliah</th>
                <th>Nilai</th>
                <th>NIM</th>
                <th>Grade</th>
                <th>Hasil</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($daftar_nilaimahasiswa as $nilaiMahasiswa): ?>
                <tr>
                    <td><?php echo htmlspecialchars($nilaiMahasiswa->matakuliah); ?></td>
                    <td><?php echo htmlspecialchars($nilaiMahasiswa->nilai); ?></td>
                    <td><?php echo htmlspecialchars($nilaiMahasiswa->nim); ?></td>
                    <td><?php echo htmlspecialchars($nilaiMahasiswa->grade()); ?></td>
                    <td><?php echo htmlspecialchars($nilaiMahasiswa->hasil()); ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
