<!DOCTYPE html>
 <html>
  <head>
   <title>IP Resolve</title>
   <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
   <link rel="stylesheet" href="bootstrap.css" />
  </head>
  <body>
 <center><h3><a href="#">Domain resolve | headers tool</a></h3></center>
   <div class="row">
   <div class="container">
   <div class="span5">
    
 <form action="" method="post" class="affix">
 <h3>Addresses: </h3>
 <p><b><a href="#ip_1">#1</a></b> <input type="text" name="getip1" maxlength="500"></p>
 <p><b><a href="#ip_2">#2</a></b> <input type="text" name="getip2" maxlength="500"></p>
 <p><b><a href="#ip_3">#3</a></b> <input type="text" name="getip3" maxlength="500"></p>
 <p><b><a href="#ip_4">#4</a></b> <input type="text" name="getip4" maxlength="500"></p>
 <p><b><a href="#ip_5">#5</a></b> <input type="text" name="getip5" maxlength="500"></p>
 <p><input type="submit" value="Get info" class="btn btn-small btn-primary"> <input type="button" value="Refresh" class="btn btn-small btn-primary" onClick="window.location.href='/'"></p>
 <p><a href="/" title="back" class="btn btn-small">Home</a></p>
 </form>
 <!-- engine part start -->

<?php
$url1 = $_POST['getip1'];
$url2 = $_POST['getip2'];
$url3 = $_POST['getip3'];
$url4 = $_POST['getip4'];
$url5 = $_POST['getip5'];

$ip1 = gethostbyname($_POST['getip1']);
$ip2 = gethostbyname($_POST['getip2']);
$ip3 = gethostbyname($_POST['getip3']);
$ip4 = gethostbyname($_POST['getip4']);
$ip5 = gethostbyname($_POST['getip5']);

$text1 = trim($_POST['getip1']);
$str1[""] = get_headers("http://$text1");

$text2 = trim($_POST['getip2']);
$str2[""] = get_headers("http://$text2");

$text3 = trim($_POST['getip3']);
$str3[""] = get_headers("http://$text3");

$text4 = trim($_POST['getip4']);
$str4[""] = get_headers("http://$text4");

$text5 = trim($_POST['getip5']);
$str5[""] = get_headers("http://$text5");

?>
 
 <!-- engine part end -->
 </div>
 
 <div class="span6"><br /><br /><br />
  <table class="table table-bordered">
   <tr class="info"><td><b><a name="ip_1">IP 1</a> (<?php echo "<noindex><a href='http://$url1' rel='nofollow' target=_blank>$url1</a></noindex>"; ?>):</b> <?php echo "<noindex><a href='http://www.ip-adress.com/whois/$ip1' rel='nofollow' target=_blank>$ip1</a></noindex>"; ?></td><td><?php foreach ($str1[""] as $st1) { echo $st1."<br>"; } ?></td></tr>
   <tr class="info"><td><b><a name="ip_2">IP 2</a> (<?php echo "<noindex><a href='http://$url2' rel='nofollow' target=_blank>$url2</a></noindex>"; ?>):</b> <?php echo "<noindex><a href='http://www.ip-adress.com/whois/$ip2' rel='nofollow' target=_blank>$ip2</a></noindex>"; ?></td><td><?php foreach ($str2[""] as $st2) { echo $st2."<br>"; } ?></td></tr>
   <tr class="info"><td><b><a name="ip_3">IP 3</a> (<?php echo "<noindex><a href='http://$url3' rel='nofollow' target=_blank>$url3</a></noindex>"; ?>):</b> <?php echo "<noindex><a href='http://www.ip-adress.com/whois/$ip3' rel='nofollow' target=_blank>$ip3</a></noindex>"; ?></td><td><?php foreach ($str3[""] as $st3) { echo $st3."<br>"; } ?></td></tr>
   <tr class="info"><td><b><a name="ip_4">IP 4</a> (<?php echo "<noindex><a href='http://$url4' rel='nofollow' target=_blank>$url4</a></noindex>"; ?>):</b> <?php echo "<noindex><a href='http://www.ip-adress.com/whois/$ip4' rel='nofollow' target=_blank>$ip4</a></noindex>"; ?></td><td><?php foreach ($str4[""] as $st4) { echo $st4."<br>"; } ?></td></tr>
   <tr class="info"><td><b><a name="ip_5">IP 5</a> (<?php echo "<noindex><a href='http://$url5' rel='nofollow' target=_blank>$url5</a></noindex>"; ?>):</b> <?php echo "<noindex><a href='http://www.ip-adress.com/whois/$ip5' rel='nofollow' target=_blank>$ip5</a></noindex>"; ?></td><td><?php foreach ($str5[""] as $st5) { echo $st5."<br>"; } ?></td></tr>
  </table>
 </div>
</div>
</div>

  </body>
 </html>

