<?php
    print "This app returns a random funny quote.\n"
?>

<?php
$greet = getenv('HELLO_GREETING');
#$person = getenv('HELLO_MESSAGE');
$person = $_ENV["HELLO_MESSAGEE"]

echo "$greet $person";
?>
