<!DOCTYPE html>
<html>
<head>
    <title>New User</title>
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>
    <?php if (isset($error)) echo "<p>$error</p>"; ?>
    <?php if (isset($success)) echo "<p>$success</p>"; ?>
    <div class="container h-100">
	<div class="d-flex justify-content-center h-100">
		<div class="user_card">
			<div class="d-flex justify-content-center">
				<div class="brand_logo_container">
					<img src="img/logo.png" class="brand_logo" alt="LOGO">
				</div>
			</div>	
			<div class="d-flex justify-content-center form_container">
    <form method="post">
        <label>Username:</label>
        <input type="text" name="username" required>
        <br>
        <label>Login ID:</label>
        <input type="text" name="login_id" required>
        <br>
        <label>Password:</label>
        <input type="password" name="password" required>
        <br>
        <label>User Category:</label>
        <select name="user_category">
            <option value="Customer">Customer</option>
            <option value="Admin">Admin</option>
        </select>
        <br>
        <input type="submit" value="Add User">
    </form>
    </div>
</div>
</body>
</html>