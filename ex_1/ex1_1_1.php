<?php

echo "<pre>";
`chcp 1251`;
//echo convert_cyr_string(htmlspecialchars(`dir`), 'd', 'w');
echo htmlspecialchars(`dir("c:/")`);
echo "</pre>";

?>

