<?php
if (!isset($_POST['submit'])) {
   echo "<h1>Error</h1>";
   echo "<p>Accessing this page directly is not allowed.</p>";
   exit();
}
if (isset($_POST['submit'])) {
  $to = "kacy.mckibben@gmail.com";
  $email = $_POST['email'];
  $subject = "Form submission";
  $subject2 = "Thank you for contacting L.A. Rights!";
  $message = $_POST['message'];
  $message2 = "Thank you for contacting L.A. Rights! We will get back to you shortly. Here is a copy of your message: " . $_POST['message'];
  $headers = "Reply-To: " . $_POST['email'];
  mail($to,$subject,$message,$headers);
  $mail_sent = mail($email,$subject2,$message2);
}
if ($mail_sent == true) { ?>
  <script language="javascript" type="text/javascript">
    alert('Thank you for contacting L.A. Rights! We will get back to you shortly.');
    window.location = 'contact.html';
  </script>
  <?php } else { ?>
  <script language="javascript" type="text/javascript">
    alert('Your message was unable to be sent. Please try again or contact us via phone at 310-906-0946.');
    window.location = 'inicio.html';
    </script>
  <?php
}
?>
