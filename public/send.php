<?php

if(isset($_POST['submit'])){
	$name = $_POST['nama'];
	$email = $_POST['alamat'];
	$pesan = $_POST['pesanan'];
	$no_wa = $_POST['noWA'];	
	header("location:https://api.whatsapp.com/send?phone=$no_wa&text=Nama:%20$name%20%0DEmail:%20$email%20%0DPesan: %20%$pesan");
}

?>