<section class='content'>
  <div class='row'>
	<div class='col-xs-12'>
	  <div class='box'>
		<div class='box-header'>
		  <h3 class='box-title'>DATA USER</h3>
		  <!-- <a href="index.php?m=user_form&aksi=tambah" class="btn btn-success btn-sm ">Tambah</a> -->
		</div><!-- /.box-header -->
		<div class='box-body'>
		<table class="table table-bordered table-striped" id="mytable">
			<thead>
				<tr>
					<th>WAKTU</th>
					<th>ID</th>
					<th>SUHU</th>
					<th>FOTO</th>
					
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<?php 
				include ("koneksi.php");
				$qr = mysqli_query($link, "SELECT * FROM tbl_suhu");
				while($row = mysqli_fetch_array($qr, MYSQLI_ASSOC)) {
				 ?>
				
				<tr>
					<td><?php echo $row['time']; ?></td>
					<td><?php echo $row['id_user']; ?></td>
					<td><?php echo $row['suhu']." °C"; ?></td>
					<td><?php echo '<img src="data:image/jpeg;base64,'.base64_encode( $row['image']).'"/>'; ?></td>
					
					<td style="text-align:center" width="140px">
							<a href="user_aksi.php?op=delete&time=<?php echo $row ['time']; ?>" title="delete" class="btn btn-danger btn-sm" 
							onclick="javasciprt: return confirm('Apakah Anda Yakin ?')">
								<i class="fa fa-trash-o"></i> Hapus
							</a>		    
					</td>
				</tr>
				<?php } ?>
			</tbody>
		</table>
		<script src="template/js/jquery-1.11.2.min.js"></script>
		<script src="template/datatables/jquery.dataTables.js"></script>
		<script src="template/datatables/dataTables.bootstrap.js"></script>
		</div><!-- /.box-body -->
	  </div><!-- /.box -->
	</div><!-- /.col -->
  </div><!-- /.row -->
</section><!-- /.content -->
