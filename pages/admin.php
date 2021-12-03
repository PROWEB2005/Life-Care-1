<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kirish</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/admin.css">
</head>
<body>
    <div class="container">
        <form action="../components/login-admin.php" method="post">
            <div class="form-floating">
                <label for="floatingInput">login</label>
                <input name="email" type="text" class="form-control" id="floatingInput" placeholder="ism@namuna.com" required>
              </div>
              <div class="form-floating">
                  <label for="floatingPassword">Parol *</label>
                <input name="password" type="password" class="form-control" id="floatingPassword" placeholder="Parol" required>
            </div>
            <button type="submit" class="btn btn-light btn-radius btn-brd grd1 effect-1">Kirish</button>
       </form>
    </div>
    <script src="../js/admin.js"></script>
</body>
</html>