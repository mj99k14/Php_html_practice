<?php
session_start();
session_destroy();
header("Location: login.html"); // 로그아웃 후 로그인 페이지로 이동
exit();
?>
