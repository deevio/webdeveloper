
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

//urobit foreach s htmlentities

echo '<pre>';
    var_dump($_SERVER);
    var_dump($_SESSION);
    var_dump($_COOKIES);
    var_dump($_POST);
echo '</pre>';
echo '<br>';

if(isset($_POST['submit'])) {

    $errors = [];

    if(!empty($_POST['email'])  &&  !empty($_POST['sprava'])){

        $errors[] =   'Vyplnil si všetko správne.';

    } else {

        $errors[] = 'Údaje neboli vyplnené!';

        if(empty($_POST['email'])) {
           $errors[] =   'Vyplnte email.' ;       
        }

        if(empty($_POST['sprava'])) {
           $errors[] =   'Vyplnete spravu.' ;       
        }

    };

};

foreach($errors as $error) {
    echo '<br>' .$error ;
};

$email = (isset($_POST['email'])) ? $_POST['email']  : '';
$sprava = (isset($_POST['sprava'])) ? $_POST['sprava']  : '';

?>

<form action="/" method="post">
    <p>
    <input class="form-control" type="test" id="email" value="<?=  $email; ?>" name="email" placeholder="email" >
    </p>
    <p>
    <textarea class="form-control" name="sprava" id="sprava" cols="30" rows="10" placeholder="Správa" ><?= $sprava; ?></textarea>
    </p>
    <input type="submit" value="Odoslať" name="submit" id="submit" class="btn btn-success"/>
</form>
<br>
<br>
