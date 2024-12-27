<!-- json en_code project -->

<!DOCTYPE html>
<html>
<body>



<?php
$jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';
 
var_dump(json_decode($jsonobj));
?>



<?php
$age = array("Peter"=>35, "Ben"=>37, "Joe"=>43);

echo json_encode($age);
?>




<?php
$user = "someone@example.com";
$hash = ezmlm_hash($user);

echo "The hash value for $user is: $hash.";
?>





<?php
// the message
$msg = "First line of text\nSecond line of text";

// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg,70);

// send email
mail("someone@example.com","My subject",$msg);
?>


<!-- // infinite function -->
<?php
echo is_finite(2) . "<br>";
echo is_finite(log(0)) . "<br>";
echo is_finite(2000);
?>


</body>
</html>
