<?php    
				$tema=$_SESSION['temaweb'];
			$temaheader=mysql_query("SELECT * FROM ".$DB_KODE."_header WHERE tema='$tema' ORDER BY id_header DESC limit 1");
			$header=mysql_fetch_array($temaheader);
			if($header['file_header']){
				$image_header=$header['file_header'];
				$back='style="background: url(images/header/'.$image_header.') no-repeat center;"';
			}else{
				$back='';
			}
?>
<div id="wrapper">
	<div id="header" <?php  echo $back;?> >
		<?php     include "kontenweb/tema/header.php";?>
	</div>	
		<div id="menu">
			<?php     include "kontenweb/tema/menu.php";?>
		</div>
		<div id="sidebar">
		<?php  blok_kiri();?>  
		<?php  blok_kanan();?>  
		</div>		

      <?php  blok_atas();?>           	
  		<?php     konten() ?>
   <?php  blok_bawah();?>
		

	<div class="clear"></div>
	
		<?php     include "kontenweb/tema/footer.php"; ?>
	
	<div class="clear"></div>
	</div>