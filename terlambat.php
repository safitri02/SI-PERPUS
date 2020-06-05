<?php 

function terlambat($tgl_deadline, $tgl_kembali) {
	
	$tgl_deadline_pecah= explode("_", $tgl_deadline);
	$tgl_deadline_pecah= $tgl_deadline[2]."_".$tgl_deadline[1]."_".$tgl_deadline[0];

	$tgl_kembali_pecah= explode("_", $tgl_kembali);
	$tgl_kembali_pecah= $tgl_kembali[2]."_".$tgl_kembali[1]."_".$tgl_kembali[0];

	$selisih= strtotime($tgl_kembali_pecah) - strtotime($tgl_deadline_pecah);

	$selisih= $selisih/86400;

	if ($selisih >-1) {
		$hasil_tgl= floor($selisih);

	} else{
		$hasil_tgl= 0;
	}

	return $hasil_tgl;

}
?>