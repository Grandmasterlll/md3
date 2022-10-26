<?php

/*
 *  admin страница  []
 */
require_once('classes.php');
$main = new main();
$index = new index();
$links = new links();
$admin = new admin();
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
$title="admin";
$main->head($title);
?>



<body>

<?php
/*
$index->nad_nav();
$index->nav();
$index->btr();
$index->carysel();
$index->btr();
$index->blok_inf();
$main->footer();
*/

?>

</body>
</html>