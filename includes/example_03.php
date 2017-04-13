
<br>
<br>
<br>

<?php

//etc/hosts
//httpd.conf 
//virtual host
//whatsmydns

file_get_contents();
/*
C:\xampp\apache\conf\extra\httpd-vhosts.conf

<VirtualHost *:80>
    ##ServerAdmin webmaster@dummy-host.example.com
    DocumentRoot "C:/xampp/htdocs/webdeveloper/public/examples"
    ServerName examples
    ServerAlias examples
    ##ErrorLog "logs/dummy-host.example.com-error.log"
    ##CustomLog "logs/dummy-host.example.com-access.log" common
</VirtualHost>


<VirtualHost *:80>
    ##ServerAdmin webmaster@dummy-host.example.com
    DocumentRoot "C:/xampp/htdocs/webdeveloper/public"
    ServerName localhost
    ServerAlias localhost
    ##ErrorLog "logs/dummy-host.example.com-error.log"
    ##CustomLog "logs/dummy-host.example.com-access.log" common
</VirtualHost>

/// v etc/hosts
*/

//homework
//akama
//serverless

//yagni

//xss
//csrf

?>



<?php 



echo '<pre>';
    var_dump($_SERVER);
    var_dump($_SESSION);
    var_dump($_COOKIES);
    var_dump($_POST);
echo '</pre>';

?>

<form action="/" method="post">
    <p>
    <input type="email" value"" name="email" placeholder="email">
    </p>
    <p>
    <textarea name="sprava" id="" cols="30" rows="10" placeholder="Správa"></textarea>
    </p>
    <input type="submit" value="Odoslať"  class="btn btn-success"/>
</form>
<br>
<br>
