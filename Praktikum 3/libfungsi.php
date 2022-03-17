<?php
 function kelulusan($_nilai) {
    if ($_nilai > 55 ){
        return 'LULUS';
    }else {
        return 'TIDAK LULUS';
    }
}




function grade($_nilai) {
    if (!empty($nilai_uts & $nilai_uas & $nilai_tugas)) {
        $lulus = $nilai_uts * 30 / 100 + $nilai_uas * 35 / 100 + $nilai_tugas * 35 / 100;
        if ($lulus > 55) {
            echo '</br>Dinyatakan : Lulus';
        } else {
            echo '</br>Dinyatakan : Tidak Lulus';
        }
    
     function predikat($_grade) {
        if ($lulus >= 0 && $lulus <= 35) {
            echo '</br>Grade : ' . $grade = 'E';
        } elseif ($lulus >= 36 && $lulus <= 55) {
            echo '</br>Grade : ' . $grade = 'D';
        } elseif ($lulus >= 56 && $lulus <= 69) {
            echo '</br>Grade : ' . $grade = 'C';
        } elseif ($lulus >= 70 && $lulus <= 84) {
            echo '</br>Grade : ' . $grade = 'B';
        } elseif ($lulus >= 85 && $lulus <= 100) {
            echo '</br>Grade : ' . $grade = 'A';
        } else {
            echo '</br>Grade : ' . $grade = 'I';
        }
    
        switch ($grade) {
            case 'E':
                echo '</br>Predikat : ' . $predikat = 'Sangat Kurang';
                break;
            case 'D':
                echo '</br>Predikat : ' . $predikat = 'Kurang';
                break;
            case 'C':
                echo '</br>Predikat : ' . $predikat = 'Cukup';
                break;
            case 'B':
                echo '</br>Predikat : ' . $predikat = 'Memuaskan';
                break;
            case 'A':
                echo '</br>Predikat : ' . $predikat = 'Sangat Memuaskan';
                break;
            default:
                echo '</br>Predikat : ' . $predikat = 'Tidak Ada';
                break;
        }
    } 
}}// argumen nya E,D,C,B,A
    ?>