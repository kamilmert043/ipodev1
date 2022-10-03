<!DOCTYPE html>
<html>
<head>

	<title>Giriş Yap</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<style type="text/css">
	body {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    flex-direction: column;
}

* {
    font-family: sans-serif;
    box-sizing: border-box;
}

form {
    width: 500px;
    border: 2px solid #ccc;
    padding: 30px;
    background: #ddd;
    border-radius: 15px;
}
input {
    display: block;
    border: 2px solid #ccc;
    width: 95%;
    padding: 10px;
    margin: 10px auto;
    border-radius: 5px;
}

button {
    float: right;
    background: #555;
    padding: 10px 15px;
    color: #fff;
    border-radius: 50px;
    margin-right: 10px;
    border: none;
}

button:hover {
    opacity: .7;
}

body{
     font-family: 'Montserrat', sans-serif;
     font-weight: 300;
     font-size: 15px;
     line-height: 1.7;
     color: #ececee;
     background-color: #1f2029;
     overflow: hidden;
  background-image: url('https://s3-us-west-2.amazonaws.com/s.cdpn.io/1462889/pat-back.svg');
  background-position: center;
  background-repeat: repeat;
  background-size: 4%;
  height: 100vh;
  width: 100%;
}
h3 {
    text-align: center;
    margin-bottom: 40px;
    color: #000000;
}
</style>
<body>

	<img width="150px" src="img/logo.png">
	<br>
     <form action="index.php" method="post">
     	<br>
     	<h3>Toplama İşlemi</h3>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<input type="text" name="sayi1" placeholder="1. Sayı"><br>

     	<input type="text" name="sayi2" placeholder="2. Sayı"><br>

     	<button type="submit" name="buton">Topla</button><br>
     	<?php
	if(isset($_POST["buton"])){
		$sayi1=$_POST["sayi1"];
		$sayi2=$_POST["sayi2"];
		$toplama=$sayi1+$sayi2;
		echo "<br><h3>Toplam = $toplama</h3>";
	}
	?>
     </form>
     
</body>
</html>