 <?php 
    session_start();
    if (isset($_SESSION['status']) && $_SESSION['status'] == "login" ) {
        header("location:dashboard/index.php");
    }
 ?>
 
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN SYSTEM</title>
    <!-- css -->
    <link rel="stylesheet" href="assets/css/style.css">
 </head>
 <body>
    <div class="container">
        <section class="wrapper">
            <h3 class="title">LOGIN SYSTEM</h3>
            <!-- notofikasi -->
            <?php 
                if(isset($_GET['message'])) {
                    $msg = $_GET['message'];
                    echo "<div class='login-notif'>$msg</div>";
                }
            ?>
            <div>
                <form action="login.php" method="POST" class="form-login">
                    <label for="">masukan nomor induk</label>
                    <input type="number" placeholder="nip" name="nip" class="input-login" required>
                    <label for="">masukan password</label>
                    <input type="password" placeholder="*****" name="password" class="input-login" required>
                    <button type="submit" class="button-login" name="login">login</button>
                </form>
            </div>
        </section>
    </div>
 </body>
 </html>