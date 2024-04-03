<?php  
if (isset($_POST['submit'])) {
    $submit = $_POST['submit'];
    $nama = $_POST['nama'];    
    $mata_kuliah = $_POST['matkul'];    
    $nilai_uts = $_POST['nilai_uts'];    
    $nilai_uas = $_POST['nilai_uas'];    
    $nilai_tugas = $_POST['nilai_tugas'];        
    
    echo '<br/>Nama Lengkap : '.$nama;
    echo '<br/>Mata Kuliah : '.$mata_kuliah;
    echo '<br/>Nilai UTS : '.$nilai_uts;
    echo '<br/>Nilai UAS : '.$nilai_uas;
    echo '<br/>Nilai Tugas/Praktikum : '.$nilai_tugas;

$total_nilai = floor(($nilai_uts * 0.30) + ($nilai_uas * 0.35) + ($nilai_tugas * 0.35 ));
    
    echo "<br/>Total Nilai Siswa adalah : $total_nilai</br>";

    if($total_nilai > 55 && $total_nilai <= 100){
        echo "LULUS MATA KULIAH!</br>";
    } elseif($total_nilai >= 0 && $total_nilai <= 55){
        echo "Maaf anda belum bisa lulus di mata kuliah ini </br>";
    } else {
        echo "Maaf nilai yang anda miliki tidak terdefinisi</br>";
    }

    switch (true) {
        case ($total_nilai >= 0 && $total_nilai <= 35):
            $grade = "E";
            $predikat = "Sangat Kurang";
            break;
        case ($total_nilai >= 36 && $total_nilai <= 55):
            $grade = "D";
            $predikat = "Kurang";
            break;
        case ($total_nilai >= 56 && $total_nilai <= 69):
            $grade = "C";
            $predikat = "Cukup";
            break;
        case ($total_nilai >= 70 && $total_nilai <= 84):
            $grade = "B";
            $predikat = "Memuaskan";
            break;
        case ($total_nilai >= 85 && $total_nilai <= 100):
            $grade = "A";
            $predikat = "Sangat Memuaskan";
            break;
        default:
            $grade = "I";
            $predikat = "Tidak ada";
            break;
    }

    echo "Grade Anda Adalah : $grade</br>";
    echo "Predikat nilai anda adalah : $predikat</br>";
}
?>