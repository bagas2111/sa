<!DOCTYPE html>
<html>
<head>
	<style>
        h2{
            position: absolute;
            width: 253px;
            height: 38px;
            left: 655px;
            top: 35px;

            font-family: 'Krona One';
            font-style: normal;
            font-weight: 400;
            font-size: 32px;
            line-height: 40px;

            color: #000000;
        }
        .kotak{
            position: absolute;
            width: 1520px;
            height: 584px;
            top: 107px;
            background: #3C658B;
        }
        form{
            box-sizing: border-box;

            position: absolute;
            width: 402px;
            height: 412px;
            left: 555px;
            top: 72px;

            background: #FFFFFF;
            border: 1px solid #000000;
            border-radius: 6px;
        }
        p{
            font-family: 'Krona One';
            font-style: normal;
            font-weight: 400;
            font-size: 20px;
            line-height: 25px;
            width: 320px;
            height: 127px;
            color: #000000;
            margin-left:auto;
            margin-right:auto;
        }
        label{
            font-family: 'Krona One';
            font-style: normal;
            font-weight: 400;
            font-size: 16px;
            line-height: 20px;

            color: #666666;
        }
        input[name="email"]{
            width: 226px;
            height: 25px;

            background: #FFFFFF;
            border-radius: 6px;
        }
        
    </style>
</head>
<body>

	<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan']=="gagal"){
			echo "<div class='alert'>email dan Password tidak sesuai !</div>";
		}
	}
	?>

    <h2><b>HOTEL BIKA</b></h2>
	<div class="kotak">
		<form action="cek_login.php" method="post">
        <p align="left"><b>Hello! please enter your E-mail & password to login<b/></p>
			<label>email</label>
			<input type="email" name="email"  placeholder="Email .." required="required"><br> <br>
 
			<label>Password</label>
			<input type="password" name="password"  placeholder="Password .." required="required">
 
			<input type="submit" class="tombol_login" value="LOGIN">
 
			<br/>
			<br/>
		
	</div>
 
 
</body>
</html>