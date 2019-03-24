<!DOCTYPE html>
<html>
<head>
    <title>Core Gamer.com</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="header">
        <h2>Giriş Yap</h2>   
    </div>

    <form method="post" action="login.php">
    	<div class="input-group">
    		<label>Username</label>
    		<input type="text" name="username">
    	</div>

    	

    	<div class="input-group">
    		<label>Password</label>
    		<input type="password" name="password_1">
    	</div>

    	
    	<div class="input-group">
    		<button type="submit" name="login" class="btn">Giriş Yap</button>
    	</div>

    	<p>
    		Hesabınız yok mu? <a href="register.php">Kayıt Ol!</a>
    	</p>

    </form>

</body>
</html>