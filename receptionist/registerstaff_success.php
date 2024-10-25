<!-- This sends an email to the staff of the hospital to verify their account -->
<?php
session_start();
include("C:\\xampp\\htdocs\\Project 2 - Ariba Naveed\\html\\subnavigation.html");
?>

<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Confirmation Email</title>
  <link rel="stylesheet" href="../css/boxes.css" />
  <script src="registerstaffemail.js"></script>

  <!-- This template is from Email Js, I created the format of template-->
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@emailjs/browser@4/dist/email.min.js"></script>
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
    <input type="text" placeholder="Email" required value="<?php echo isset($_POST['email']) ? $_POST['email'] : ''; ?>">
    <h2>Status: Pending</h2>
    <p>This email is sending a verification link.</p>

    <button onclick="SendMail()">Send Email</button>
   
</body>
</div>
</html>
