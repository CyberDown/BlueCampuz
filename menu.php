<ul>
			<li><a class="curent" href="index.php"><img style="background:#003100" padding-top:0px;" width="15" src="file/tema/<?php echo $_SESSION['temaweb'];?>/css/img/ahome-iconputih.png"></a>
			<li><a href="">Profil<span class='lambang-panah'/></a>
				<ul>
				<?php     $profil=mysql_query("SELECT * FROM ".$DB_KODE."_info_sekolah WHERE posisi_menu='0' AND status_terbit='1' ORDER BY id_info ASC");
						while($p=mysql_fetch_array($profil)) {
						$judul=$p['nama_info'].'-'.$ns['isi_pengaturan'];
						    $judul = strtolower(preg_replace("/\s/","-",$judul));
							$url_link = "profil-sekolah-".$p['id_info']."-".$judul.".html";
	?>
					<li><a href="<?php    echo $url_link; ?>"><?php    echo "$p[nama_info]";?></a></li>
					<?php     }
											$judul=$ns['isi_pengaturan'];
						    $judul = strtolower(preg_replace("/\s/","-",$judul));
					
					?>
					
				</ul>
			</li>
			<?php    
			$menuutama=mysql_query("SELECT * FROM ".$DB_KODE."_info_sekolah WHERE posisi_menu='1' AND status_terbit='1'");
			$hitung=mysql_num_rows($menuutama);
			if ($hitung != 0){
			while($m=mysql_fetch_array($menuutama)){
									    $judul = strtolower(preg_replace("/\s/","-",$m['nama_info']));
							$url_link = "profil-sekolah-".$m['id_info']."-".$judul.".html";
			?>
			<li><a href="<?php    echo $url_link;?>"><?php    echo "$m[nama_info]";?></a></li>
			<?php     }} ?>
					<?php     
							$judul=$ns['isi_pengaturan'];
						    $judul = strtolower(preg_replace("/\s/","-",$judul));
					
					?>				
			<li><a href="#">Informasi<span class='lambang-panah'/></a>
				<ul>
                                         <li><a href="berita-<?php   echo $judul;?>.html">Update Berita</a></li>
					<li><a href="agenda-<?php   echo $judul;?>.html">Agenda Kampus</a></li>
					<li><a href="pengumuman-<?php   echo $judul;?>.html">Informasi</a></li>
				</ul>
			</li>
			<li><a href="#">Civitas Akademik<span class='lambang-panah'/></a>
				<ul>
					<li><a href="data-guru-<?php   echo $judul;?>.html">Data Dosen</a></li>
					<li><a href="data-karyawan-<?php   echo $judul;?>.html">Data Staff</a></li>
					<li><a href="data-siswa-<?php   echo $judul;?>.html">Data Mahasiswa</a></li>
					<li><a href="data-alumni-<?php   echo $judul;?>.html">Data Alumni</a></li>
				</ul>
			</li>
			<li><a href="">Jurusan<span class='lambang-panah'/></a>
				<ul>
				<?php     $profil=mysql_query("SELECT * FROM ".$DB_KODE."_info_sekolah WHERE posisi_menu='0' AND status_terbit='2' ORDER BY id_info ASC");
						while($p=mysql_fetch_array($profil)) {
						$judul=$p['nama_info'].'-'.$ns['isi_pengaturan'];
						    $judul = strtolower(preg_replace("/\s/","-",$judul));
							$url_link = "profil-sekolah-".$p['id_info']."-".$judul.".html";
	?>
					<li><a href="<?php    echo $url_link; ?>"><?php    echo "$p[nama_info]";?></a></li>
					<?php     }
											$judul=$ns['isi_pengaturan'];
						    $judul = strtolower(preg_replace("/\s/","-",$judul));
					
					?>
					
				</ul>
			</li>
			<?php    
			$menuutama=mysql_query("SELECT * FROM ".$DB_KODE."_info_sekolah WHERE posisi_menu='1' AND status_terbit='1'");
			$hitung=mysql_num_rows($menuutama);
			if ($hitung != 0){
			while($m=mysql_fetch_array($menuutama)){
									    $judul = strtolower(preg_replace("/\s/","-",$m['nama_info']));
							$url_link = "profil-sekolah-".$m['id_info']."-".$judul.".html";
			?>
			<li><a href="<?php    echo $url_link;?>"><?php    echo "$m[nama_info]";?></a></li>
			<?php     }} ?>
					<?php     
							$judul=$ns['isi_pengaturan'];
						    $judul = strtolower(preg_replace("/\s/","-",$judul));
					
					?>	
			<li><a href="foto-kegiatan-<?php   echo $judul;?>.html">Galeri</a></li>
			<li><a href="buku-tamu-<?php   echo $judul;?>.html">Buku Tamu</a></li>
			<li><a href="elearning.html">E-Learning</a></li>
<li class='buntut'><a href='#'>.</a></li>
			<?php 
			$menu1=mysql_query("SELECT * FROM ".$DB_KODE."_menu WHERE menu_id=0 AND status=1 ORDER BY urutan,menu_id ASC");
			while ($m1=mysql_fetch_array($menu1)){	
			?>
				<li><a href="<?php    echo $m1['url']; ?>"><?php    echo "$m1[judul]";?></a>
							<?php 
							$menu2=mysql_query("SELECT * FROM ".$DB_KODE."_menu WHERE menu_id=$m1[id_menu] AND status=1 ORDER BY urutan,menu_id ASC");
									$menu2x=mysql_num_rows($menu2);
									if($menu2x>0){
							?>				
						<ul>
							<?php 
							while ($m2=mysql_fetch_array($menu2)){	
							?>

									<li><a href="<?php    echo $m2['url']; ?>"><?php    echo "$m2[judul]";?></a>
											<?php 
											$menu3=mysql_query("SELECT * FROM ".$DB_KODE."_menu WHERE menu_id=$m2[id_menu] AND status=1 ORDER BY urutan,menu_id ASC");
											$menu3x=mysql_num_rows($menu3);
											if($menu3x>0){
											?>									
												<ul>
													<?php 
													while ($m3=mysql_fetch_array($menu3)){	
													?>
														
															<li><a href="<?php    echo $m3['url']; ?>"><?php    echo "$m3[judul]";?></a>
															</li>						
										
													<?php  }?>		
												</ul>
											<?php  }?>		
									</li>						
							
							<?php  }?>		
						</ul>	
						<?php  }?>							
				</li>
			<?php  }?>
			
<div id='pencarianf'>
<div class="cariform">
			
  
</form>
			<div class="logo">
				<?php    
				$logo=mysql_query("SELECT * FROM ".$DB_KODE."_pengaturan WHERE id_pengaturan='13'");
				$l=mysql_fetch_array($logo);
				
				echo "<a href='index.php' title='Halaman Depan'><img src='images/$l[isi_pengaturan]' width='130px' alt='Logo sekolah'></a>";
				?>
			</div>
			
			<div class="sekolah">
				<?php    
				$alamatsekolah=mysql_query("SELECT * FROM ".$DB_KODE."_pengaturan WHERE id_pengaturan='12'");
				$a=mysql_fetch_array($alamatsekolah);
				
				$telp=mysql_query("SELECT * FROM ".$DB_KODE."_pengaturan WHERE id_pengaturan='9'");
				$te=mysql_fetch_array($telp);
				?>
				<h3><a href="index.php" title="Kembali ke halaman utama"><?php    echo "$ns[isi_pengaturan]";?></a></h3><br>
				<p><?php    echo "$a[isi_pengaturan]<br>Telp: $te[isi_pengaturan]";?></p>
			</div>
			

			</div></div>

</ul>