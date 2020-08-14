<?php

session_start();
if ($_POST['product']) {
	
	$_SESSION['product_name'] = htmlentities($_POST['product']);

	header('Location: contact.php');
}
// echo $_POST['product'];
?>
<!DOCTYPE html>
<html>

<head>
	<title>Music Life</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<link href="./style.css" rel="stylesheet">
</head>

<body>

	<div class="Hero_Back_Img">
		<div class="Inline_Center">

			<!-- disabled -->
		</div>
	</div>
	<div class="Bg_Gray">
		<ul class="Flex_Horizon">
			<li id="getContent" class="Button"><a href="./index.php" class="link">Home</a></li>
			<!-- <li class="Button">Service</li>
			<li class="Button">Product</li>
			<li class="Button">Company</li>
			<li class="Button">Contact</li> -->
		</ul>
	</div> <!-- -->

	<div class="container marketing Margin_Top">
		<!-- Three columns of text below the carousel -->
		<div class="row Textalign_Center">
			<div class="col-lg-4">
				<img class="rounded-circle" src="https://images.salsify.com/image/upload/s--zqrNf1wG--/e_trim/h_700,w_700,c_pad,fl_keep_iptc.clip,g_center,f_auto/hxmxupdu744fq9si75sv.png" alt="Generic placeholder image" width="140" height="140">
				<h2>Chicken Noodle</h2>
				<p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
				<form action="" method="post">
					<button class="btn btn-secondary" type="submit" name="product" value="chicken">お問い合わせ</button>
				</form>
			</div><!-- /.col-lg-4 -->
			<div class="col-lg-4">
				<img class="rounded-circle" src="https://images.salsify.com/image/upload/s--ElnoT42l--/e_trim/h_700,w_700,c_pad,fl_keep_iptc.clip,g_center,f_auto/sjdko5ysa1md7xd6jmb7.png" alt="Generic placeholder image" width="140" height="140">
				<h2>Tomato</h2>
				<p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
				<form action="" method="post">
					<button class="btn btn-secondary" type="submit" name="product" value="tomato">お問い合わせ</button>
				</form>
			</div><!-- /.col-lg-4 -->
			<div class="col-lg-4">
				<img class="rounded-circle" src="https://images.salsify.com/image/upload/s--61U-GepY--/e_trim/h_700,w_700,c_pad,fl_keep_iptc.clip,g_center,f_auto/kvyqo6it1vqn92fajelc.png" alt="Generic placeholder image" width="140" height="140">
				<h2>Cream of Mushroom</h2>
				<p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
				<form action="" method="post">
					<button class="btn btn-secondary" type="submit" name="product" value="mushroom">お問い合わせ</button>
				</form>
			</div><!-- /.col-lg-4 -->
		</div><!-- /.row -->
	</div>

	<div class="container Margin_Top">
		<footer class="pt-4 my-md-5 pt-md-5 border-top">
			<div class="row">
				<div class="col-12 col-md">
					<small class="d-block mb-3 text-muted Textalign_Center">&copy; 2020 campbells</small>
				</div>
			</div>
		</footer>
	</div>
</body>

</html>