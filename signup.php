<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php if(isset($_GET['error'])){echo $_GET['error'];}; ?>
    <form action="./handlesignup.php" method="POST">    
        <div class="row">
            <label for="username">Username</label><br>
            <input type="text" name="username" id="password">
        </div>
        <div class="row">
            <label for="password">Password</label><br>
            <input type="password" name="password" id="password">
        </div>
        <div class="row">
            <button>Signup</button>        
        </div>
    </form>
</body>
</html>