<?php
$company = htmlspecialchars($_GET['company'], ENT_QUOTES);
print "私の名前は" . $company ."<br>";
$goods = htmlspecialchars($_GET['goods'], ENT_QUOTES);
print "ご希望の商品は" . $goods ."<br>";
$oders = htmlspecialchars($_GET['oders'], ENT_QUOTES);
print "注文数は" . $oders ;