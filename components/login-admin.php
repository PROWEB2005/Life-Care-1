<?
include('./db.php');
$email = $_POST['email'];
$password = $_POST['password'];
$admin = adminLogin($email,$password);
if (!$admin) {
    header("Location: ../pages/admin.php");
} else {
    adminLogin($email,$password);
    header("Location: ../pages/patient.php");
};
?>