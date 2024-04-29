
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>welcome</title>
</head>
<h1>SELAMAT DATANG!</h1> 
<div class="hiasan"> <br>
Welcome <?php echo $_POST["nama"]; ?>!<br/>Your First Name <?php echo $_POST["nama"]; ?> Your LastName.<?php echo $_POST["nama1"]; ?> <br>
Your Gender <?php echo $_POST["gender"]; ?>  <br>
Your Languange <?php echo $_POST["nationality"]; ?>  <br>
Your Country <?php
        if(isset($_POST['language'])) {
            $languages = $_POST["language"];
            echo "Menggunakan bahasa ";
            foreach($languages as $language) {
                echo $language . ", ";
            }
            echo "<br>";
        } else {
            echo "Anda belum memilih bahasa<br>";
       }; ?><br>
Your message <?php echo $_POST["message"]; ?> <br>
<br><br>
</body>