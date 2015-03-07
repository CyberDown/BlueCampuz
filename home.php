<?php   

function konten() {

?>

	<script src="file/tema/<?php  echo $_SESSION['temaweb'] ;?>/js/slides.min.jquery.js"></script>
	<script>
		$(function(){
			$('#slides').slides({
				preload: true,
				preloadImage: 'file/tema/<?php  echo $_SESSION['temaweb'] ;?>/img/loading.gif',
				play: 4000,
				pause: 2000,
				hoverPause: true,
				animationStart: function(current){
					$('.caption').animate({
						bottom:-275
					},100);
					if (window.console && console.log) {
						// example return of current slide number
						console.log('animationStart on slide: ', current);
					};
				},
				animationComplete: function(current){
					$('.caption').animate({
						bottom:0
					},200);
					if (window.console && console.log) {
						// example return of current slide number
						console.log('animationComplete on slide: ', current);
					};
				},
				slidesLoaded: function() {
					$('.caption').animate({
						bottom:0
					},200);
				}
			});
		});
	</script>
	    <script type="text/javascript"> 
$(document).ready(function() {

	//When page loads...
	$(".tab_content").hide(); //Hide all content
	$("ul.tabs li:first").addClass("active").show(); //Activate first tab
	$(".tab_content:first").show(); //Show first tab content

	//On Click Event
	$("ul.tabs li").click(function() {

		$("ul.tabs li").removeClass("active"); //Remove any "active" class
		$(this).addClass("active"); //Add "active" class to selected tab
		$(".tab_content").hide(); //Hide all tab content

		var activeTab = $(this).find("a").attr("href"); //Find the href attribute value to identify the active tab + content
		$(activeTab).fadeIn(); //Fade in the active ID content
		return false;
	});

});
	</script>
<div id="konten">	

	<?php    
include "konfigurasi/koneksi.php";	
		$cek_slidehome=mysql_query("SELECT * FROM ".$DB_KODE."_berita WHERE status_terbit='1' AND status_headline='1'");
		$hasil_slide=mysql_num_rows($cek_slidehome);
		
		if($hasil_slide > 0){
		?>
		<div id="headlineFrame">
			<div id="headline">
			<div id="slides">
				<div class="slides_container">
					<?php    
					$slide_berita=mysql_query("SELECT * FROM ".$DB_KODE."_berita, ".$DB_KODE."_users WHERE ".$DB_KODE."_berita.s_username=".$DB_KODE."_users.s_username AND status_terbit='1' AND status_headline='1' LIMIT 10");
					while ($sb=mysql_fetch_array($slide_berita)){
					$isi_berita = strip_tags($sb['isi_berita']); 
					$isi = substr($isi_berita,0,100);
							$judul = strtolower(preg_replace("/\s/","9a9z9",$sb['judul_berita']));						
								$judul = preg_replace('#\W#', '', $judul);								
							$judul = str_replace("9a9z9","-",$judul);
							$url_link = "info-".$sb['id_berita']."-".$judul.".html";
					?>
					<div class="slide"> 
					<a href="<?php    echo $url_link; ?>" title="<?php    echo $sb['judul_berita'];?>"><img src="images/<?php    echo $sb['gambar_kecil']?>" width="648" height="280" alt="Slide 1"></a>
						<div class="caption" style="bottom:0">
							<p><b style="font-size: 16px"><?php    echo $sb['judul_berita']?></b><br>
							<small style="color: #fff">Tanggal: <?php     echo $sb['tanggal_posting']?>, Oleh: <?php     echo $sb['nama_lengkap_users']?></small><br>
							<?php     echo $isi ?><a href="<?php    echo $url_link;; ?>" style="color: #ffff00">Baca selengkapnya...</a></p>
						</div>
					</div>
					<?php     } ?>
					
					<!--<a href="" title="" target="_blank"><img src="images/1.jpg" width="930" height="280" alt="Slide 1"></a>
					<a href="" title="" target="_blank"><img src="images/2.jpg" width="930" height="280" alt="Slide 1"></a>
					<a href="" title="" target="_blank"><img src="images/3.jpg" width="930" height="280" alt="Slide 1"></a>-->
				</div>
			</div>
			</div>
		</div>
		<?php     } ?>
		
					<div id="lebar" style="background:#13458C;border-radius:5px;border:1px solid #0168EB;padding:1px>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<script type="text/javascript" src="file/tema/<?php  echo $_SESSION['temaweb'] ;?>/js/jquery1.js"></script><script type="text/javascript" src="file/tema/<?php  echo $_SESSION['temaweb'] ;?>/js/interface.js"></script><script type="text/javascript">$(document).ready(function(){$('#dock').Fisheye({maxWidth: 50,items: 'a',itemsText: 'span',container: '.dock-container',itemWidth: 90,proximity: 90,halign : 'center'})});</script>

    <div style="display: block;" class="dock" id="dock">
    <div class="dock-container">
    <a style="width: 90px; left: 0px;" class="dock-item" href="Link1" title="Direktori Sekolahku"><img src="file/tema/<?php  echo $_SESSION['temaweb'] ;?>/sta/beranda.png" alt="home"><span style="display:block;"></span></a>
    <a style="width: 90px; left: 90px;" class="dock-item" href="Link2" title="Informasi Sekolah"><img src="file/tema/<?php  echo $_SESSION['temaweb'] ;?>/sta/media.png" alt="Giá»�i thiá»�u"><span style="display:block;"></span></a>
    <a style="width: 90px; left: 180px;" class="dock-item" href="Link3" title="Isi Buku Tamu"><img src="file/tema/<?php  echo $_SESSION['temaweb'] ;?>/sta/btamu.png" alt="Dá»�ch vá»¥"><span></span></a>
    <a style="width: 90px; left: 270px;" class="dock-item" href="Link4" title="Portal E-Learning"><img src="file/tema/<?php  echo $_SESSION['temaweb'] ;?>/sta/forum.png" alt="Site � �� £ thiáº¿t káº¿"></a>
    <a style="width: 90px; left: 360px;" class="dock-item" href="Link5" title="Galeri Sekolah"><img src="file/tema/<?php  echo $_SESSION['temaweb'] ;?>/sta/foto.png" alt="Template"><span style="display: block;"></span></a>
    <a style="width: 90px; left: 450px;" class="dock-item" href="Link6" title="Digital Library"><img src="file/tema/<?php  echo $_SESSION['temaweb'] ;?>/sta/rpp.png" alt="history"><span style="display:block;"></span></a>
    <a style="width: 140px; left: 674.979px;" class="dock-item" href="Link7" title="Kirim Email"><img src="file/tema/<?php  echo $_SESSION['temaweb'] ;?>/sta/mail.png" alt="rss"><span style="display:block;"></span></a>
    </div>
    </div>
</body>
</html>
</div>				
			
<div id="kecil" style="width:902px;  padding:10px 3px 10px 10px;
float: right; margin-right: 0px" >
<div class="kecil_tengah">
				    
<ul>
					<?php    
					$berita=mysql_query("SELECT * FROM ".$DB_KODE."_berita, ".$DB_KODE."_kategori, ".$DB_KODE."_users WHERE 
					".$DB_KODE."_berita.id_kategori=".$DB_KODE."_kategori.id_kategori AND ".$DB_KODE."_berita.s_username=".$DB_KODE."_users.s_username AND
					status_terbit='1' ORDER BY id_berita DESC LIMIT 4");
					$hitungberita=mysql_num_rows($berita);
					
					if($hitungberita > 0){
					while($b=mysql_fetch_array($berita)){
							$judul = strtolower(preg_replace("/\s/","9a9z9",$b['judul_berita']));						
								$judul = preg_replace('#\W#', '', $judul);								
							$judul = str_replace("9a9z9","-",$judul);
							$url_link = "info-".$b['id_berita']."-".$judul.".html";
							$url_tgl = "info-tanggal-".$b['tanggal_posting'].".html";
							$url_kat = "info-kategori-".$b['id_kategori']."-".$b['nama_kategori'].".html";
							$url_penulis = "info-penulis-".$b['s_username'].".html";
					?>
						<li><a href="<?php    echo $url_link;?>" title="<?php    echo $b['judul_berita'];?>"><?php    echo "<h3>$b[judul_berita]</h3>";?></a>
						<br><small>Kategori: <a href="<?php    echo $url_kat ?>"><?php    echo $b['nama_kategori']?></a>
						&nbsp;Komentar : 
						<?php    
						$hitungkomentar=mysql_query("SELECT * FROM ".$DB_KODE."_komentar WHERE id_berita='$b[id_berita]'");
						$jumlahkomentar=mysql_num_rows($hitungkomentar);
						echo $jumlahkomentar?></small>
						<?php    
						$isi_berita = strip_tags($b['isi_berita']); 
						$isi = substr($isi_berita,0,300);
						if ($b['gambar_kecil']!= 'no_image.jpg'){
						echo "<p><a href='$url_link' title=' $b[judul_berita]'><img src='images/$b[gambar_kecil]' width='100px' style='float:left; margin: 5px 10px 0 0; padding: 3px; background: #fff; border: 1px solid #dcdcdc'></a>$isi...<a href='$url_link' title='$b[judul_berita]'>Baca selengkapnya...</a></p><br>";}
						else {
						echo "<p>$isi...<a href='$url_link' title='$b[judul_berita]'>Baca selengkapnya...</a></p>";
						}
						?>
						</li>
					<?php     }}

					else {?>
					<li><a href=""><b>Data berita belum ada</b></a></li>
					<?php     } ?>
					</ul>
					</div>
</div>
<div class="clear"></div>
<div id="kecil" style="width:895px;  float: right; margin: 0px 0px 10px" >	
<div class="galeri_dalam" style="padding-left:7px">		
			<?php    
			$poto=mysql_query("SELECT * FROM ".$DB_KODE."_galeri ORDER BY id_galeri DESC LIMIT 6");
			$hitungfoto=mysql_num_rows($poto);
			
			if($hitungfoto > 0){
			while($ph=mysql_fetch_array($poto)){
			?>
			<p class="thumb"><a id="thumb1" href="images/foto/galeri/<?php    echo "$ph[nama_galeri]";?>" class="highslide" onclick="return hs.expand(this)">
			<img src="images/foto/galeri/<?php    echo "$ph[nama_galeri]";?>" alt="Highslide JS" title="Klik untuk memperbesar foto <?php    echo "$ph[judul]";?> | <?php    echo "$ph[deskripsi]";?>"/></a>
			</p>
			<?php     }}
			else {?>
			<b>Foto belum ada</b></center>
			<?php     } ?>
			</div></div>
</div>
		<div class="clear"></div>
</div>		
		<div id="kecil" style="width:895px;margin-left:22px">
							
<div id="afooter">
<div class="kotak">
<div class="afooter1">
<h3 style="text-shadow: 1px 1px 0px #fff;color:#003100;font-size:18px;font-weight:700;background:url(file/tema/<?php echo $_SESSION['temaweb'];?>/sta/menu.png)no-repeat left center; padding:5px 0 5px 40px;"> Komentar Terbaru</h3>
 <hr />
<div style="overflow:auto; height:200px; font-weight:400;">
				    <ul style="padding:12px;padding-top:0px;">
					<?php    
					$komentar=mysql_query("SELECT * FROM ".$DB_KODE."_komentar, ".$DB_KODE."_berita WHERE ".$DB_KODE."_komentar.id_berita=".$DB_KODE."_berita.id_berita AND status_terima ='1' AND status_terbit='1' ORDER BY id_komentar DESC limit 3");
					$hitungkomentar=mysql_num_rows($komentar);
					
					if($hitungkomentar > 0){
					while($kom=mysql_fetch_array($komentar)){
							$judul = strtolower(preg_replace("/\s/","9a9z9",$kom['judul_berita']));						
								$judul = preg_replace('#\W#', '', $judul);								
							$judul = str_replace("9a9z9","-",$judul);
							$url_link = "info-".$kom['id_berita']."-".$judul.".html";
					?>
						<li style="line-height:1.3;list-style:circle;padding-left:-10px;margin-bottom:5px;border-bottom:1px dotted #056794;"><a href=""><b><?php    echo "$kom[nama_komentar]";?></b></a> 
						<i><?php    echo "$kom[isi_komentar]";?></i></li>
					<?php     }}
					
					else {?>
					<li><a href=""><b>Data komentar belum ada</b></a></li>
					<?php     } ?>
					</ul></div>		
    
</div>


<div class="afooter2">
<h3 style="text-shadow: 1px 1px 0px #fff;color:#003100;font-size:18px;background:url(file/tema/<?php echo $_SESSION['temaweb'];?>/sta/menu3.png) no-repeat left center; padding:5px 0 5px 40px;">Daftar Isi</h3>

 <hr />
<div style="height:200px; overflow:auto">
<ul style="padding:12px;padding-top:0px;">
<?php    	$batas= 30;
		if (isset($_GET['halaman'])){
		$halaman=ceknomor($_GET['halaman']);		
		}
		
		
		If (empty($halaman)){
		$posisi=0;
		$halaman=1;
		}

		else { $posisi=($halaman-1) * $batas;
		}
		$tampil2 = mysql_query ("SELECT * FROM ".$DB_KODE."_berita WHERE status_terbit='1'");
		$jmldata = mysql_num_rows($tampil2);
		$jmlhal = ceil($jmldata/$batas);
$berita =mysql_query("SELECT * FROM ".$DB_KODE."_berita, ".$DB_KODE."_kategori, ".$DB_KODE."_users WHERE ".$DB_KODE."_berita.id_kategori=".$DB_KODE."_kategori.id_kategori AND ".$DB_KODE."_berita.s_username=".$DB_KODE."_users.s_username AND status_terbit='1' ORDER BY id_berita DESC LIMIT $posisi, $batas");
$cek_berita=mysql_num_rows($berita);

if($cek_berita > 0){
while ($r=mysql_fetch_array($berita)){
$idberita=$r['id_berita'];
$hitung_komen=mysql_query("SELECT * FROM ".$DB_KODE."_komentar WHERE id_berita='$idberita'");
$jml_komen=mysql_num_rows($hitung_komen);
						    $judul = strtolower(preg_replace("/\s/","9a9z9",$r['judul_berita']));						
								$judul = preg_replace('#\W#', '', $judul);								
							$judul = str_replace("9a9z9","-",$judul);
							$url_link = "info-".$r['id_berita']."-".$judul.".html";
							$url_tgl = "info-tanggal-".$r['tanggal_posting'].".html";
							$url_kat = "info-kategori-".$r['id_kategori']."-".$r['nama_kategori'].".html";
							$url_penulis = "info-penulis-".$r['s_username'].".html";
?>
<?php     echo "<li style='line-height:1.3;list-style:circle;padding-left:-10px;margin-bottom:5px;border-bottom:1px dotted #056794;'><a href='$url_link' title='Baca Selengkapnya $r[judul_berita]'><b>$r[judul_berita]</b></a></li>";
}
echo "<br>";
		if ($halaman > 1){
		$prev=$halaman-1;
		echo 	"	<div class='hal' style='float: left'><a href='halaman-$prev-daftar-isi.html' title='Halaman Sebelumnya'>&laquo; Sebelumnya</a></div>";
		}
		if ($halaman < $jmlhal) {
		$next=$halaman+1;
		echo "	<div class='hal' style='float: right'><a href='halaman-$next-daftar-isi.html' title='halaman Berikutnya'>Berikutnya &raquo;</a></div>"; }

}else { ?>
<b>Data berita belum tersedia</b>
<?php     } ?></ul>
</div>
</div>

<div class="afooter3">
<h3 style="text-shadow: 1px 1px 0px #fff;color:#003100;font-size:18px;background:url(file/tema/<?php echo $_SESSION['temaweb'];?>/sta/menu.png) no-repeat left center; padding:5px 0 5px 40px;">Visitor Counter</h3>
 <div style="height:200px; overflow:auto">

			<table width="100%" style="margin: 0 0 20px 0">
			<?php    
			  $ip      = $_SERVER['REMOTE_ADDR'];
              $tanggal = date("Ymd");
              $waktu   = time();

              $cekstatistik = mysql_query("SELECT * FROM ".$DB_KODE."_statistik WHERE ip_addres='$ip' AND tanggal='$tanggal'");
              // Kalau belum ada, simpan data user tersebut ke database
              if(mysql_num_rows($cekstatistik) == 0){
                mysql_query("INSERT INTO ".$DB_KODE."_statistik(ip_addres, tanggal ,mengunjungi, online) VALUES('$ip','$tanggal','1','$waktu')");
              } 
              else{
                mysql_query("UPDATE ".$DB_KODE."_statistik SET mengunjungi=mengunjungi+1, online='$waktu' WHERE ip_addres='$ip' AND tanggal='$tanggal'");
              }

              $pengunjung       = mysql_num_rows(mysql_query("SELECT * FROM ".$DB_KODE."_statistik WHERE tanggal='$tanggal' GROUP BY ip_addres"));
              $totalpengunjung  = mysql_result(mysql_query("SELECT COUNT(mengunjungi) FROM ".$DB_KODE."_statistik"), 0); 
              $hits             = mysql_fetch_assoc(mysql_query("SELECT SUM(mengunjungi) as kunjunganhariini FROM ".$DB_KODE."_statistik WHERE tanggal='$tanggal' GROUP BY tanggal")); 
              $totalhits        = mysql_result(mysql_query("SELECT SUM(mengunjungi) FROM ".$DB_KODE."_statistik"), 0); 
              $bataswaktu       = time() - 300;
              $pengunjungonline = mysql_num_rows(mysql_query("SELECT * FROM ".$DB_KODE."_statistik WHERE online > '$bataswaktu'"));
			?>
			<tr><td style="padding: 5px 0px 5px 10px; color:#000000;"><?php    echo "$totalhits";?></td>
				<td style="padding: 5px 0px 5px 10px"><img src="file/tema/<?php echo $_SESSION['temaweb'];?>/sta/v5.png"></td>
				<td style="padding: 5px 0px 5px 10px; color:#000000;">Total Hits Halaman</td>
			</tr>
			<tr><td style="padding: 5px 0px 5px 10px; color:#000000;"><?php    echo "$totalpengunjung";?></td>
				<td style="padding: 5px 0px 5px 10px"><img src="file/tema/<?php echo $_SESSION['temaweb'];?>/sta/v2.png"></td>
				<td style="padding: 5px 0px 5px 10px; color:#000000;">Total Pengunjung</td>
			</tr>
			<tr><td style="padding: 5px 0px 5px 10px; color:#000000;"><?php    echo "$hits[kunjunganhariini]";?></td>
				<td style="padding: 5px 0px 5px 10px"><img src="file/tema/<?php echo $_SESSION['temaweb'];?>/sta/v3.png"></td>
				<td style="padding: 5px 0px 5px 10px; color:#000000;">Hits Hari Ini</td>
			</tr>
			<tr><td style="padding: 5px 0px 5px 10px; color:#000000;"><?php    echo "$pengunjung";?></td>
				<td style="padding: 5px 0px 5px 10px"><img src="file/tema/<?php echo $_SESSION['temaweb'];?>/sta/v4.png"></td>
				<td style="padding: 5px 0px 5px 10px; color:#000000;">Pengunjung Hari Ini</td>
			</tr>
			<tr><td style="padding: 5px 0px 5px 10px; color:#000000;"><?php    echo "$pengunjungonline";?></td>
				<td style="padding: 5px 0px 5px 10px"><img src="file/tema/<?php echo $_SESSION['temaweb'];?>/sta/v1.png"></td>
				<td style="padding: 5px 0px 5px 10px; color:#000000;">Pengunjung Online</td>
			</tr>
			</table>
<div class="temax">
			<center>CMS Formulasi - Theme :&nbsp;<a href="http://www.roomantik.com/" target="_blank"><strong>Blue_Campuz</strong></a></center>
			</div>
			
                       
</div>
</div>
</div>
</div>
				<div class="clear"></div>
				
<?php    }


/* Forum Multimedia Edukasi www. formulasi.or.id cms.formulasi.or.id
 * @copyright	Copyright (C) 2013 CMS Formulasi Open Source, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 * Ari Rusmanto ariecupu@ymail.com
 * Fauzan A Mahanani fauzan.mahanani@formulasi.or.id
 */
?>	