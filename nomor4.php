<?php 

    if(isset($_POST['proses'])){
        $email = $_POST['email'];

        if(!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $email)) {
            echo "Email tidak boleh menggunakan symbol";
          }

        if(!preg_match('/[A-Z]/', $email)){
            echo " Email harus menggunakan huruf kapital";
         }

         if (!preg_match('/[0-9]/', $email)){
            echo " Email harus menggunakan angka";
         }

         if (preg_match('/^[0-9]/', $email)){
            echo " Email tidak boleh diawali dengan angka";
         }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
    <input type="text" name="email" placeholder="Masukkan Email" >
    <input type="submit" name="proses" value="Proses" class="btn btn-primary">
    </form>
</body>
</html>