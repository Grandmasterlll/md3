<?php

/*
 *  otdel1 страница  []
 */
/*
 * include_once
 */
//require('core/main_core.php');
//connect_Boostrap
require_once('classes.php');
$main = new main();

$otdel = new otdel();
//$index = new index();
?>
<!DOCTYPE html>
<html lang="ru">
<!--
<head>

    <meta http-equiv="Refresh" content="15" />
    <meta charset="UTF-8">
    <title>название (изменить)</title>    (изменить)
    <link rel="stylesheet" href="css/main.css" />
    -->
<?php
//  $main_core->connect_Boostrap();
//  $main_core->connec_css();
$title="ГУ «Территориальный центр социального обслуживания населения Любанского района»";
$main->head($title);
$main->boot();
?>



<body>

<?php
$main->nad_nav();
$main->nav();
$otdel->otdel1();
$main->footer();
/*

$index->btr();
$index->carysel();
$index->btr();
$index->blok_inf();
$main->footer();
*/

?>

</body>
</html>