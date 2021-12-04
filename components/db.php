<?
session_start();
 function pdo() {
    $dbname = 'hospital-db';
    $dbuser = 'root';
    $pass = '';
    $host = 'localhost';
    return new PDO("mysql:host=$host; dbname=$dbname",$dbuser,$pass);
}
function adminLogin($login, $pass){
    $pdo = pdo();
    $query = "SELECT * FROM admin WHERE login = ?";
    $driver = $pdo->prepare($query);
    $result = $driver->execute([$login]);
    $user = $driver->fetch(PDO::FETCH_ASSOC);

    if ($user['login'] == $login && $user['password'] == $pass) {
        $_SESSION['login'] = $user['login'];
        return $login;
    } else {
        return false;
    }
}



?>