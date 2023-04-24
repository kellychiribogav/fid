<!DOCTYPE html >
<html>
<head>
  <meta charset="utf-8" >
  <title>Thank you for your order</title>
  <style type="text/css">
  ol, ul { 
     list-style-type: none;
      }
  body {  
    background-color: #faf2e4;
    margin: 0 10%;
    font-family: sans-serif;
  }
  h1 {
    text-align: center;
    font-family: serif;
    font-weight: normal;
    text-transform: uppercase;
    border-bottom: 1px solid #57b1dc;
    margin-top: 30px;
  }

  h2 {
    color: #d1633c;
    font-size: 1em;
  }
  p.disclaimer { 
    border-top: 1px solid #d1633c; 
    padding-top: 1em;
  }
  </style>
</head>

<body>

<h1>Thank You!</h1>

<p>Thank you for donating to The Shellsea Project. We have received the following information about your contribution:</p>

<h2>Your Information</h2>
<ul>
<li><strong>Name:</strong> <?php print $_POST['donorname']; ?></li>
<li><strong>Phone:</strong> <?php print $_POST['phone']; ?></li>
<li><strong>E-mail:</strong> <?php print $_POST['email']; ?></li>
<li><strong>Name:</strong> <?php print $_POST['money']; ?></li>
</ul>
<p><strong>Message:</strong> <?php print $_POST['message'] ? $_POST['message'] : '<i>No message was added.</i>'; ?></p>



<p class="disclaimer"><small>This site is for educational purposes only. No donations will be effective.</small></p>

</body>
</html>
