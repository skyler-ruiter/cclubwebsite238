
<?php
    header( "refresh:0;url=confirmation.html" );
 if (isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['email'])) {
    $fw = fopen('data.txt',"a+");
    $string = "\n".$_POST['fname'].' - '.$_POST['lname'].' - '.$_POST['email']; // saves fname, lname, and email to string with a newline at the beginning.
    fwrite($fw, $string); // Write information to the file
    fclose($fw); // Close the file
 }
?>
