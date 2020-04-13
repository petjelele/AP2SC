<?php
/**
 * Created by PhpStorm.
 * User: Doe
 * Date: 8/25/2017
 * Time: 12:35 AM
 */

function indonesian_date($date)
{
    $BulanIndo = array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");

    $tahun = substr($date, 0, 4);
    $bulan = substr($date, 5, 2);
    $tgl   = substr($date, 8, 2);

    $nama = date("l", mktime(0,0,0,$bulan,$tgl,$tahun));
    $nama_hari = "";
    if($nama=="Sunday") {$nama_hari="Minggu";}
    else if($nama=="Monday") {$nama_hari="Senin";}
    else if($nama=="Tuesday") {$nama_hari="Selasa";}
    else if($nama=="Wednesday") {$nama_hari="Rabu";}
    else if($nama=="Thursday") {$nama_hari="Kamis";}
    else if($nama=="Friday") {$nama_hari="Jum'at";}
    else if($nama=="Saturday") {$nama_hari="Sabtu";}

    $result = $nama_hari . ", " . $tgl ." ". $BulanIndo[(int)$bulan-1] . " ". $tahun;
    return($result);
}

function indonesian_standar_date($date)
{
    $tahun = substr($date, 0, 4);
    $bulan = substr($date, 5, 2);
    $tgl   = substr($date, 8, 2);

    return $tgl."-".$bulan."-".$tahun;
}

?>

