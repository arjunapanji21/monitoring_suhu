<section class='content'>
<div class='box-header'>
		  <h3 class='box-title'>DASHBOARD</h3>
		  <!-- <a href="index.php?m=user_form&aksi=tambah" class="btn btn-success btn-sm ">Tambah</a> -->
		</div><!-- /.box-header -->
	<div class='row'>
		<div class='col-xs-12'>
		<?php 
			include ("koneksi.php");
			$qr = mysqli_query($link, "SELECT * FROM tbl_suhu WHERE suhu > 37");
			while($row = mysqli_fetch_array($qr, MYSQLI_ASSOC)) {
		?>
			<div class="panel panel-danger " style="margin:10px;">	
				<div class="panel-heading"><?php echo "Suhu tubuh <b>User ID ".$row['id_user']."</b> terdeteksi <b>".$row['suhu']."°C</b> pada tanggal <b>".$row['time']."</b>"?></div>
			</div>
		<?php } ?>
		</div>
	</div>

	<div class='row'>
		<div class='col-xs-12'>
			
<canvas id="pieChart" style="height: 267px; width: 534px;" width="534" height="267"></canvas>
			
</section>
