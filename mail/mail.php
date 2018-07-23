<?php
/*
 * @author Shahrukh Khan
 * @website http://www.thesoftwareguy.in
 * @facebbok https://www.facebook.com/Thesoftwareguy7
 * @twitter https://twitter.com/thesoftwareguy7
 * @googleplus https://plus.google.com/+thesoftwareguyIn
 */

// display all error except deprecated and notice  
error_reporting(E_ALL & ~E_DEPRECATED & ~E_NOTICE);
require_once "../phpmailer/class.phpmailer.php";

$message = '<html><body>';
$message .= '';
$message .= '<h1>Thank you for registering</h1>';
$message .= '<br><h3>Registered members : </h3>';
$message .= 
$message .= "</body></html>";
        
// creating the phpmailer object
$mail = new PHPMailer(true);

// telling the class to use SMTP
$mail->IsSMTP();

// enables SMTP debug information (for testing) set 0 turn off debugging mode, 1 to show debug result
$mail->SMTPDebug = 0;

// enable SMTP authentication
$mail->SMTPAuth = true;

// sets the prefix to the server
$mail->SMTPSecure = 'ssl';

// sets GMAIL as the SMTP server
$mail->Host = 'mail.tathva.org';

// set the SMTP port for the GMAIL server
$mail->Port = 465;

// your gmail address
$mail->Username = 'submissions@tathva.org';

// your password must be enclosed in single quotes
$mail->Password = 'QkIr^?Ybb&zn';

// add a subject line
$mail->Subject = ' Sample email - www.thesoftwareguy.in ';

// Sender email address and name
$mail->SetFrom('submissions@tathva.org', 'Vishnu Poothery');

// reciever address, person you want to send
$mail->AddAddress('vishnupoothery@gmail.com');

// if your send to multiple person add this line again
//$mail->AddAddress('tosend@domain.com');

// if you want to send a carbon copy
//$mail->AddCC('tosend@domain.com');


// if you want to send a blind carbon copy
//$mail->AddBCC('tosend@domain.com');

// add message body
$mail->MsgHTML($message);


// add attachment if any
$mail->AddAttachment('time.png');

try {
    // send mail
    $mail->Send();
    $msg = "Mail send successfully";
} catch (phpmailerException $e) {
    $msg = $e->getMessage();
} catch (Exception $e) {
    $msg = $e->getMessage();
}
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="icon" href="http://www.thesoftwareguy.in/favicon.ico" type="image/x-icon" />
        <title>Send email from localhost/online server using php - www.thesoftwareguy.in</title>
        <link rel="stylesheet" href="style.css" type="text/css" />
    </head>

    <body>

        <div id="container">
            <div id="body">
                <header>
                    <div class="mainTitle" >Send email from localhost/online server using php</div>
                </header>
                <article>
                    <div class="height30"></div>
                    <div style="text-align:center;" class="title">
                        <div class="title"><a href="index.php" title="Back to homepage" >Back to home page </a></div>
                        <div class="height20"></div>
                        <div class="title" style="color: #009900"><?php echo $msg; ?></div>
                        
                        <div style="height: 40px; clear: both;"></div>
                    <div style="margin:10px 0;width:100%;float: left;">
                        <div style="width:35%;float: left;margin:0 auto;text-align: center;">
                            <iframe src="//www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2FThesoftwareguy7&amp;width&amp;height=360&amp;colorscheme=light&amp;show_faces=true&amp;header=true&amp;stream=false&amp;show_border=true&amp;appId=198210627014732" scrolling="no" frameborder="0" style="border:none; overflow:hidden; height:360px;" allowTransparency="true"></iframe>
                        </div>
                        <div style="width:35%;float: left;margin:0 auto;text-align: center;">
                            <!-- Place this tag where you want the widget to render. -->
                            <div class="g-person" data-href="https://plus.google.com/116523474604785207782"  data-rel="author" data-layout="potrait"></div>

                            <!-- Place this tag after the last widget tag. -->
                            <script type="text/javascript">
                                (function() {
                                    var po = document.createElement('script');
                                    po.type = 'text/javascript';
                                    po.async = true;
                                    po.src = 'https://apis.google.com/js/platform.js';
                                    var s = document.getElementsByTagName('script')[0];
                                    s.parentNode.insertBefore(po, s);
                                })();
                            </script>
                        </div>
                        <div style="width:30%;float: left;margin:0 auto;text-align: center;">
                            <a class="twitter-follow-button"
                               href="https://twitter.com/thesoftwareguy7"
                               data-show-count="true" 
                               data-lang="en" data-size="large" >
                                Follow @thesoftwareguy7
                            </a>
                            <script type="text/javascript">
                                window.twttr = (function(d, s, id) {
                                    var t, js, fjs = d.getElementsByTagName(s)[0];
                                    if (d.getElementById(id))
                                        return;
                                    js = d.createElement(s);
                                    js.id = id;
                                    js.src = "https://platform.twitter.com/widgets.js";
                                    fjs.parentNode.insertBefore(js, fjs);
                                    return window.twttr || (t = {_e: [], ready: function(f) {
                                            t._e.push(f)
                                        }});
                                }(document, "script", "twitter-wjs"));
                            </script>
                        </div>
                    </div>
                    <div style="height: 10px; clear: both;"></div>
                    </div>
                </article>
                <footer>
                    <div class="copyright">
                        <a href="http://www.thesoftwareguy.in" target="_blank">&copy; 2013 - <?php echo date("Y"); ?> - www.thesoftwareguy.in - All rights reserved</a>
                    </div>
                    <div class="footerlogo"><a href="http://www.thesoftwareguy.in" target="_blank"><img src="http://www.thesoftwareguy.in/thesoftwareguy-logo-small.png	" width="200" height="47" alt="thesoftwareguy logo" /></a> </div>
                </footer>
            </div></div>
    </body>
</html>