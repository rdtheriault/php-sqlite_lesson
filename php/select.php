<?php
$myPDO = new PDO('sqlite:test.sqlite');

$result = $myPDO->query("SELECT * FROM contacts");

	foreach($result as $row)
    {
        print $row['last_name'] . "\n";
    }

?>
