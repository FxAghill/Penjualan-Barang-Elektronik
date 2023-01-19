<html>
<head>
	<title>Halaman Login</title>
	<link rel="stylesheet" type="text/css" href="css/Login.css">
</head>
<body>
	<div class="container">
		<h1>LOGIN</h1>
		<?php
			if(isset($_GET['pesan'])){
				if($_GET['pesan']=="gagal"){
					echo "Login gagal! username dan password salah!";
				}
				else if($_GET['pesan']=="logout"){
					echo "Anda telah berhasil logout";
				}
				else if($_GET['pesan']=="belum_login"){
					echo "Anda harus login untuk mengakses halaman admin";
				}
			}
		?>
            <form method="POST" action="login.php">
                <label>Username</label><br>
                <input type="text" name="username" placeholder="username"><br>
                <label>Password</label><br>
                <input type="password" name="password" placeholder="password"><br>
                <button type="submit">Log in</button>
            </form>
        </div>
    </body>
</html>
