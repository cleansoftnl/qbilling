<?php
    error_reporting(E_ALL ^ E_NOTICE);

    if (stristr($_SERVER['HTTP_ACCEPT'], 'application/xhtml+xml')) {
        header('Content-type: application/xhtml+xml');
    } else {
        header('Content-type: text/xml');
    }
    echo "<?xml version=\"1.0\" encoding=\"iso-8859-1\"?>\n";
?>
<rows>
	<?php
        for ($i = 0; $i < 50; $i++) {
            echo "<row id='r$i'><first>index is $i</first><second>altermative xml format</second><third>xmlB</third></row>";
        }
    ?>
</rows>	