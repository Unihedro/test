<html><body>
<?php
// A simple web site in Cloud9 that runs through Apache
// Press the 'Run' button on the top to start the web server,
// then click the URL that is emitted to the Output tab of the console

echo 'Hello worldz!';

$file = file_get_contents('best person.txt');

echo $file.' is best person in the world';

?>
</body>
</html>
