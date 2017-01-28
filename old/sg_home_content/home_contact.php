<?php

   /*  This PHP form mailing script created by SiteGrinder 3.6 s_337  http://www.medialab.com/sitegrinder3  */

function stripFormSlashes($arr)
    {
 	    if(!is_array($arr))
 	    {
 		    return stripslashes($arr);
 	    }
 	    else
 	    {
 		    return array_map('stripFormSlashes', $arr);
 	    }
     }
 
     if(get_magic_quotes_gpc())
     {
 	    $_POST = stripFormSlashes($_POST);
     }
 if(($_POST['email']=="")||($_POST['name']==""))
 {
  echo "<html><body><p>The following fields are <strong>required</strong>.</p><ul>";
  if($_POST['email'] == ""){ echo "<li>*Email</li>"; }
  if($_POST['name'] == ""){ echo "<li>*Name</li>"; }
  echo "</ul><p>Please use your browsers <a href=\"javascript:history.back();\">Back</a> button and fill out these fields.</p></body></html>";
 }
 else
 {
  $message = "";
  $message .= "*Name: " . htmlspecialchars($_POST['name'], ENT_QUOTES) . "<br>\n";
  $message .= "*Email: " . htmlspecialchars($_POST['email'], ENT_QUOTES) . "<br>\n";
  $message .= "Subject: " . htmlspecialchars($_POST['subject'], ENT_QUOTES) . "<br>\n";
  $message .= "Comments: " . htmlspecialchars($_POST['comments'], ENT_QUOTES) . "<br>\n";
  $lowmsg = strtolower($message);
  $injection_strings = array ( "content-type:","charset=","mime-version:","multipart/mixed","bcc:","cc:");
  foreach($injection_strings as $suspect)
  {
   if((stristr($lowmsg, $suspect)) || (stristr(strtolower($_POST['name']), $suspect)) || (stristr(strtolower($_POST['email']), $suspect)))
   {
     die ( 'Illegal Input.  Go back and try again.  Your message has not been sent.' );
   }
  }
 $headers = "MIME-Version: 1.0\r\nContent-type: text/html; charset=utf-8\r\n";
 $headers .= "Content-Transfer-Encoding: 8bit\r\n";
 $headers .= "From: \"" . $_POST['name'] . "\" <" . $_POST['email'] . ">\r\n";
 $headers .= "Reply-To: " . $_POST['email'] . "\r\n";
  mail("deniece@larights.com", $_POST['subject'], $message, $headers);
  header("Location: ../thank-you.html");
 }
?>