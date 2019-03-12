<?php 
if (isset($_GET['loc']) && !empty($_GET['loc'])) {
    $loc = $_GET['loc'];
} else {
    $loc = 'home';
}
?>
<?php include "vue/template.php";