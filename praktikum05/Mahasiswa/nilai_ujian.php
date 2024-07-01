<?php
// File: nilai_ujian.php

class NilaiMahasiswa {
    var $matakuliah;
    var $nilai;
    var $nim;
    
    function __construct($matakuliah, $nilai, $nim) {
        $this->matakuliah = $matakuliah;
        $this->nilai = $nilai;
        $this->nim = $nim;
    }
    
    function grade() {
        if ($this->nilai < 56) {
            return "TIDAK LULUS";
        } else {
            return "LULUS";
        }
    }
    function hasil_ujian() {
        if ($this->nilai >= 0 && $this->nilai <= 35) {
            return "E";
        } elseif ($this->nilai >= 36 && $this->nilai <= 55) {
            return "D";
        } elseif ($this->nilai >= 56 && $this->nilai <= 69) {
            return "C";
        } elseif ($this->nilai >= 70 && $this->nilai <= 84) {
            return "B";
        } elseif ($this->nilai >= 85 && $this->nilai <= 100) {
            return "A";
        }
    }
    
}

$nim = $matakuliah = $nilai = "";
$grade = $hasil = null;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nim = $_POST['nim'];
    $matakuliah = $_POST['mk'];
    $nilai = (int)$_POST['nilai'];

    $nilaiMahasiswa = new NilaiMahasiswa($matakuliah, $nilai, $nim);
    $grade = $nilaiMahasiswa->grade();
    $hasil = $nilaiMahasiswa->hasil_ujian();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Nilai Ujian</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Form Nilai Ujian</h1>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <div class="form-group row">
                <label for="nim" class="col-4 col-form-label">NIM</label> 
                <div class="col-8">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fa fa-address-card"></i>
                            </div>
                        </div> 
                        <input id="nim" name="nim" placeholder="Masukan NIM Anda" type="text" class="form-control" required>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="mk" class="col-4 col-form-label">Pilih Matkul</label> 
                <div class="col-8">
                    <select id="mk" name="mk" class="custom-select" required>
                        <option value="Pemrograman Web 2">Pemrograman Web 2</option>
                        <option value="Dasar-Dasar Pemrograman">Dasar-Dasar Pemrograman</option>
                        <option value="Basis Data">Basis Data</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="nilai" class="col-4 col-form-label">Nilai</label> 
                <div class="col-8">
                    <input id="nilai" name="nilai" placeholder="Masukan Nilai Anda" type="number" class="form-control" required min="0" max="100">
                </div>
            </div> 
            <div class="form-group row">
                <div class="offset-4 col-8">
                    <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>

        <?php if ($_SERVER["REQUEST_METHOD"] == "POST"): ?>
            <h2>Hasil</h2>
            <p>NIM: <?php echo htmlspecialchars($nim); ?></p>
            <p>Mata Kuliah: <?php echo htmlspecialchars($matakuliah); ?></p>
            <p>Nilai: <?php echo htmlspecialchars($nilai); ?></p>
            <p>Hasil Ujian: <?php echo htmlspecialchars($hasil); ?></p>
            <p>Grade: <?php echo htmlspecialchars($grade); ?></p>
        <?php endif; ?>
    </div>
</body>
</html>
