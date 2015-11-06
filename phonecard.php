<?php
echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
$str=implode(" ",str_split($_REQUEST['Digits']));
echo "<Response><Say voice='woman' language='en-gb'>OK. Let me make sure I heard that number correctly.  You entered " . $str. " If that is correct, I will connect you now.  One moment please.;
</Say>
<Dial record='true'>
<Number>+1"
. $_REQUEST['Digits'] . "</Number>
</Dial>
</Response>";
?>
