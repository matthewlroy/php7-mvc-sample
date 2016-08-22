<?php
require_once __DIR__ . '/includes/php/init.php';

$_SESSION['USER_LOGIN_STATE']=1;
$isLoggedIn = check_login_state();
if ($isLoggedIn === 0) {
	header_redirect('index.php');
}

require_once __DIR__ . '/includes/html/header.html';
require_once __DIR__ . '/includes/html/login.html';
require_once __DIR__ . '/includes/html/footer.html';
?>
