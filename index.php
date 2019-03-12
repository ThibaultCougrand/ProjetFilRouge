<?php 
//if (isset($_GET['loc']) && !empty($_GET['loc'])) {
//    $loc = $_GET['loc'];
//} else {
//    $loc = 'home';
//}
$loc = filter_input(INPUT_GET, 'loc');
if(!$loc){
    $loc = 'home';
}
?>
<?php include "vue/template.php";