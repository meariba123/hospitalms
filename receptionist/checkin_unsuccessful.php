<!-- This sends an email to the patient if they havent attended their appointment -->

<?php
session_start();
include("C:\\xampp\\htdocs\\Project 2 - Ariba Naveed\\html\\subnavigation.html");
?>

<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Checkin Email</title>
  <link rel="stylesheet" href="../css/boxes.css" />
  <script src="checkinemail.js"></script>

  <!-- This template is from Email Js, I created the format of template-->
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@emailjs/browser@4/dist/email.min.js">
</script>
<script type="text/javascript">
   (function(){
      emailjs.init({
        publicKey: "O076GmF3ofUQW1zJI",
      });
   })();
</script>
</head>
<body>
    <div>
    <input type="text" required value="<?php echo isset($_POST['full_name']) ? $_POST['full_name'] : ''; ?>">
    <p>This email is sending a message to the patient that they have missed their appointment and ask them to reschedule.</p>

    <button onclick="SendMail()">Send Email</button>

    <a href="checkin.php" class="btn btn-primary">Back to Check-in</a>

</body>
</div>
</html>