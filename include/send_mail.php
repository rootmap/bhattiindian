<?php

$dd=$_POST['submit'];
print_r($dd);
exit();
if (isset($_POST['submit'])) {

    $from = $_POST['email'];
    $email = "fakhrulislamtalukder@gmail.com";
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    mail($email, $name, $subject, "From:" . $from, $message);

    ?>
    <script>
        alert("Thank You. Mail has been Send Successfully");
        window.location.replace("../index.php");
    </script>
    <?php

}else{
     ?>
    <script>
        alert("Failed!!!.");
        window.location.replace("../index.php");
    </script>
    <?php
}
?>