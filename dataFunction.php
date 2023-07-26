<?php
echo "<pre>";
print_r($_REQUEST);
echo "</pre>";
?>


<?php
function printError($numbers)
{
    if (is_array($numbers)) {
        $result = print_r($numbers);
        return $result;
    }
    // elseif () {
    //     # code...
    // }
}
;


?>



<?php



?>