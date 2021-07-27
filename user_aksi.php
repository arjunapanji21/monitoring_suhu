<?php 
include("koneksi.php");
if(isset($_GET['op']))
{
	if ($_GET['op'] == 'delete') {
		$qr = mysqli_query($link,"delete from tbl_suhu where time = '$_GET[time]'");
		if($qr)
		{
			echo "<script>
					alert('Data Berhasil Dihapus');
					window.location = 'index.php?m=user';
				</script>";
			exit;
		}
		else
		{
			echo "<script>
					alert('Data Gagal Dihapus');
					window.location = 'index.php?m=user';
				</script>";
			exit;	
		}
	}

 }
 ?>
