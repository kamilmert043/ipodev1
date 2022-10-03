<!DOCTYPE html>
<html>
<head>

    <title>Dört işlemi</title>
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

.selectdiv {
  position: relative;
      width: 95%;
    margin: 10px auto;
}


select::-ms-expand {
display: none;
}

.selectdiv:after {
  content: '<>';
  font: 17px "Consolas", monospace;
  color: #333;
  -webkit-transform: rotate(90deg);
  -moz-transform: rotate(90deg);
  -ms-transform: rotate(90deg);
  transform: rotate(90deg);
  right: 11px;

  
  top: 18px;
  padding: 0 0 2px;
  border-bottom: 1px solid #999;

  position: absolute;
  pointer-events: none;
}

.selectdiv select {
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none;

  
  display: block;
  width: 100%;
  max-width: 320px;
  height: 50px;
  float: right;
  margin: 5px 0px;
  padding: 0px 24px;
  font-size: 16px;
  line-height: 1.75;
  color: #333;
  background-color: #ffffff;
  background-image: none;
  border: 1px solid #cccccc;
  -ms-word-break: normal;
  word-break: normal;
}
</style>
<body>

    <img width="150px" src="img/logo.png">
    <br>
     <form method="post">
        <h3>Dört İşlem</h3>
        <input type="text" name="sayi1" placeholder="1. Sayı"><br>

        <input type="text" name="sayi2" placeholder="2. Sayı">
<div class="selectdiv">
        <select name="islem">
          <option selected value="hislem"> İşleminizi seçin </option>
        <option value="toplama">Toplama</option>
        <option value="cikarma">Çıkarma</option> 
        <option value="carpma">Çarpma</option>
        <option value="bolme">Bölme</option>
      </select>

</div>  
<br><br><br>

     <button type="submit" name="buton">Topla</button><br>
        <?php

if(isset($_POST["buton"])){
 $sayi1=$_POST["sayi1"];
 $sayi2=$_POST["sayi2"]; 
 $islem=$_POST["islem"];

if($islem=="toplama"){
    $sonuc=$sayi1+$sayi2;
echo "<br><h3>Sonuç = $sonuc</h3>";
}
else if($islem=="cikarma"){
    $sonuc=$sayi1-$sayi2;
echo "<br><h3>Sonuç = $sonuc</h3>";
}

else if($islem=="carpma"){
    $sonuc=$sayi1*$sayi2;
echo "<br><h3>Sonuç = $sonuc</h3>";
}


else if($islem=="bolme"){
    $sonuc=$sayi1/$sayi2;
    echo "<br><h3>Sonuç = $sonuc</h3>";
}
else{
    echo "<h3>Yapmak istediğiniz işlemi seçin</h3>";
}
}



    ?>
     </form>
     
</body>
</html>
