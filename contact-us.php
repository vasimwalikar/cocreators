<!DOCTYPE html>
<html lang="en">
<head>
  <title>COCREATORS</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>

</head>
<body>

<div class="jumbotron">
  <div class="container">
   <img src="img/background.png" class="img-responsive">
    
       
  </div>
</div>

<div class="container">
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
     
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="index.html">Home</a></li>
        <li><a href="entrepreneurs.html">Entrepreneurs</a></li>
        <li><a href="lps-investors.html">LPs | Investors</a></li>
        <li><a href="vcs-angels.html">VCs | Angels</a></li>
        <li><a href="venture-catalysts.html">Venture Catalysts</a></li>
        <li class="active"><a href="contact-us.php">Contact-Us</a></li>
      </ul>
      
    </div>
  </div>
</nav>

  
</div>

<div class="container">    
  <div class="row">
    
   <div class="container-fluid bg-grey">
    <div class="text-center">
      <?php 

      if(isset($_REQUEST['send_mail'])){

        $name = mysql_escape_string($_REQUEST['name']);
        $email = mysql_escape_string($_REQUEST['email']);
        $phone = mysql_escape_string($_REQUEST['phone']);
        $message = mysql_escape_string($_REQUEST['message']);
        
        $to = 'vasim@freenet.zone';
             
        $subject = 'Contact Message From cocreator.us';

        $msg = '<!DOCTYPE html>
<html>
<head>
<title>COCREATORS</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<style type="text/css">
    a,body,table,td{-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%}table,td{mso-table-lspace:0;mso-table-rspace:0}img{-ms-interpolation-mode:bicubic;border:0;height:auto;line-height:100%;outline:0;text-decoration:none}table{border-collapse:collapse!important}body{height:100%!important;margin:0!important;padding:0!important;width:100%!important}a[x-apple-data-detectors]{color:inherit!important;text-decoration:none!important;font-size:inherit!important;font-family:inherit!important;font-weight:inherit!important;line-height:inherit!important}@media screen and (max-width:525px){.img-max,.wrapper{max-width:100%!important;width:100%!important}.img-max,.responsive-table,.wrapper{width:100%!important}.logo img{margin:0 auto!important}.mobile-hide{display:none!important}.img-max{height:auto!important}.padding{padding:10px 5% 15px!important}.padding-meta{padding:30px 5% 0!important;text-align:center}.padding-copy{padding:10px 5%!important;text-align:center}.no-padding{padding:0!important}.section-padding{padding:50px 15px!important}.mobile-button-container{margin:0 auto;width:100%!important}.mobile-button{padding:15px!important;border:0!important;font-size:16px!important;display:block!important}}div[style*="margin: 16px 0;"]{margin:0!important}
</style>
</head>
<body style="margin: 0 !important; padding: 0 !important;">

<!-- ONE COLUMN SECTION -->
<table border="0" cellpadding="0" cellspacing="0" width="100%">
    <tr>
        <td bgcolor="#ffffff" align="center" style="padding: 15px;" class="section-padding">
            
            <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 500px;" class="responsive-table">
                <tr>
                    <td>
                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                                <td>
                                    <!-- COPY -->
                                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                        <tr>
                                            <td align="left" style="padding: 20px 0 0 0; font-size: 16px; line-height: 25px; font-family: Helvetica, Arial, sans-serif; color: #666666;" class="padding-copy">Hey Suresh,</td>
                                        </tr>
                                        <tr>
                                            <td align="left" style="padding: 20px 0 0 0; font-size: 16px; line-height: 25px; font-family: Helvetica, Arial, sans-serif; color: #666666;" class="padding-copy">'.$message.'</td>
                                        </tr>
                                        
                                        <tr>
                                            <td align="left" style="padding: 20px 0 0 0; font-size: 16px; line-height: 25px; font-family: Helvetica, Arial, sans-serif; color: #666666;" class="padding-copy">Name: '.$name.'<br>Email: '.$email.'<br>Phone No: '.$phone.'</td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
            
        </td>
    </tr>
    
</table>

</body>
</html>
' ;

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
        curl_setopt($ch, CURLOPT_USERPWD, 'api:key-1-j3498psszetjazh3-e1o5c6qgn60v4');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
        curl_setopt($ch, CURLOPT_URL,
            'https://api.mailgun.net/v3/mail.freenet.zone/messages');
        curl_setopt($ch, CURLOPT_POSTFIELDS,
            array('from' => 'auto-confirmation@freenet.zone <auto-confirmation@freenet.zone>',
                    'to' => '' . $to . '',
                    'subject' => '' . $subject . '',
                    'html' => '' . $msg . ''));
        $result1 = curl_exec($ch);
        //echo json_encode($result1);
        curl_close($ch);

        if($result1){
          echo $response = '<p style="color:green; font-weight:bold;">Message has been sent successfully, we will contact you shortly, Thank you!</p>';
        }else{
          echo $response = '<p style="color:green; font-weight:bold;">Somthing is wrong, Please try again, Thank you!</p>';
        }
        

      }

      

    ?>
    </div><br>
    <h2 class="text-center">CONTACT</h2>
  <div class="row">
    <div class="col-sm-5" style="padding-left: 10%;">
      <p>https://www.linkedin.com/in/cocreator</p>
      <p>Whatsapp - +91 9845256878</p>
      
    </div>
    <div class="col-sm-7">
    
    <form method="POST" action="">
       <div class="row">
        <div class="col-sm-4 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-4 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
        <div class="col-sm-4 form-group">
          <input class="form-control" id="phone" name="phone" placeholder="Phone" type="phone" required>
        </div>
      </div>
      <textarea class="form-control" id="message" name="message" placeholder="Message" rows="5"></textarea><br>
      <div class="row">
        <div class="col-sm-12 form-group">
          <button class="btn btn-warning pull-right" type="submit" name="send_mail">Send</button>
        </div>
      </div> 
    </div>
    </form>
     


  </div>
</div>
  </div>
</div><br>


</body>
</html>
