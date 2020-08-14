<?php
session_start();
$product_name = '';
if ($_SESSION['product_name']) {
	$product_name = $_SESSION['product_name'];
}


// Message Vars
$msg = '';
$msgClass = '';

// Check For Submit
if (filter_has_var(INPUT_POST, 'submit')) {
	// Get Form Data
	$name = htmlspecialchars($_POST['name']);
	$email = htmlspecialchars($_POST['email']);
	$phone = htmlspecialchars($_POST['phone']);
	$message = htmlspecialchars($_POST['message']);

	// Check Required Fields
	if (!empty($email) && !empty($name) && !empty($message)) {
		// Passed
		// Check Email
		if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
			// Failed
			$msg = '無効なメールアドレスです。';
			$msgClass = 'alert-danger';
		} else {
			// Passed
			$toEmail = 'yumiya27@hotmail.co.jp';
			$subject = 'Contact Request From ' . $name;
			$body = '<h2>Contact Request</h2>
					<h4>Name</h4><p>' . $name . '</p>
					<h4>Email</h4><p>' . $email . '</p>
					<h4>Message</h4><p>' . $message . '</p>
				';

			// Email Headers
			$headers = "MIME-Version: 1.0" . "\r\n";
			$headers .= "Content-Type:text/html;charset=UTF-8" . "\r\n";

			// Additional Headers
			$headers .= "From: " . "<" . $email . ">" . "\r\n";
			// echo htmlentities($headers);
			if (mail($toEmail, $subject, $body, $headers)) {
				// Email Sent
				$msg = 'お問い合わせありがとうございます。メールが送信されました。';
				$msgClass = 'alert-success';

				header( "Refresh:5; url=http://localhost/brad_contact/index.php", true, 303);
			} else {
				// Failed
				$msg = '送信できませんでした。';
				$msgClass = 'alert-danger';
			}
		}
	} else {
		// Failed
		$msg = '全ての必要な項目に記入して下さい。';
		$msgClass = 'alert-danger';
	}
}
?>
<!DOCTYPE html>
<html>

<head>
	<title>お問い合わせ</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<link href="./style.css" rel="stylesheet">
</head>

<body>
	<div class="Hero_Back_Img">
		<div class="Inline_Center">
			<h1 class="display-4 font-weight-normal"></h1>
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
	</div>

	<div class="container Width_40vw Margin_Top">
		<?php if ($msg != '') : ?>
			<div class="alert <?php echo $msgClass; ?>"><?php echo $msg; ?></div>
		<?php endif; ?>
		<form method="post" action="">
			<div class="form-group">
				<label>お名前</label>
				<input type="text" name="name" class="form-control form-control-sm" value="<?php echo isset($_POST['name']) ? $name : ''; ?>">
			</div>
			<div class="form-group">
				<label>メール</label>
				<input type="text" name="email" class="form-control form-control-sm" value="<?php echo isset($_POST['email']) ? $email : ''; ?>">
			</div>
			<div class="form-group">
				<label>お電話番号</label>
				<input type="text" name="phone" class="form-control form-control-sm" value="<?php echo isset($_POST['phone']) ? $phone : ''; ?>">
			</div>

			
			<div class="form-group">
				<label>お問い合わせ内容</label>
				<textarea name="message" class="form-control" rows="6"><?=$product_name?><?php echo isset($_POST['message']) ? $message : ''; ?></textarea>
			</div>
			<br>
			<button type="submit" name="submit" class="btn btn-primary btn-sm btn-block">送信</button>
		</form>
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