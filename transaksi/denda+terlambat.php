
	<?php 
		$data= mysqli_query($koneksi, "SELECT * FROM tb_transaksi JOIN tb_siswa ON 
		tb_transaksi.id_siswa= tb_siswa.id_siswa JOIN tb_buku ON tb_transaksi.id_buku= tb_buku.id_buku WHERE status='Pinjam' ");


	$no = 1;
	while($a = mysqli_fetch_assoc($data)) : ?>

	<tr role="row" class="odd">
	<td class="sorting_1"><?= $no++ ?> </td>
	<td> <?= $a["nama"]; ?> </td>
	<td> <?= $a["judul_buku"]; ?> </td>
	<td> <?= $a["tgl_pinjam"]; ?> </td>
	<td> <?= $a["tgl_kembali"]; ?> </td>
	<td> <?= $a["status"]; ?> </td>

<!-- 		<td> 
			<?php 
				//$tgl_pinjam= $a["tgl_pinjam"];
				//$tgl_kembali= $a["tgl_kembali"];

				//$selisih= (abs(strtotime($tgl_kembali) - strtotime($tgl_pinjam)))/(60*60*24);

				//if ($selisih >= 7) {
					//echo $selisih. "Hari";
				//} else{
					//echo "0 Hari";
				}
			?>
		</td>

		<td> 
			<?php 
				//$denda= "5000";
				//$selisih = (abs(strtotime ($a["tgl_kembali"]) - strtotime ($a["tgl_pinjam"])))/(60*60*24);
				//$bayar= $selisih * $denda;

				//if ($selisih >= 7) {
				//	echo "Rp.".$bayar;
				//} else{
				//	echo "Rp". 0;
				}
			 ?>
		</td> -->
	<td>
		<a href="" class="btn btn-sm btn-success"><i class="fas fa-pencil-alt"></i>&nbsp;&nbsp;Ubah</a>
		<a href="" class="btn btn-sm btn-danger" onclick="return confirm('apakah anda yakin?')"><i class="fas fa-trash-alt"></i>&nbsp;&nbsp;Hapus</a>
	</td>
		</tr>
			<?php endwhile; ?>
	</tbody>
			</table>
		</div>
	</div>
</div>
</div>