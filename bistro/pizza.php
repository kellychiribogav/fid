<!DOCTYPE html >
<html>
<head>
  <meta charset="utf-8" >
  <title>Thanks for ordering!</title>
  <style type="text/css">

    body {
        background-color: #fff2e7;
        margin: 0 10%;
        font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
    }

    h1 {
        text-align: center;
        font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
        font-weight: normal;
        text-transform: uppercase;
        border-bottom: 2px solid #57b1dc;
        margin: 30px 0px;
    }

    h2 {
        color: #d1633c;
        font-size: 1em;
    }

    ol,
    ul {
        list-style-type: none;
    }

    li {
        padding: 2px 0px;
    }

    legend {
        font-weight: bold;
        color: #94482c;
    }

    fieldset {
        border-color: #ca9785;
        border-style: dotted;
        width: max-content;
        margin: 5px;
    }

    .button {
        background-color:#3388af;
        color: white;
        border: none;
        padding: 5px 8px;
        margin: 0px 2px;
        cursor: pointer;
        text-decoration: none;
        font-size: 16px;
        display: inline-block;
    }

    a:hover, .button:hover {
        transform:scale(1.1);
    }

    p.disclaimer { 
      border-top: 2px solid #57b1dc;
      padding-top: 1em;
    }

  </style>
</head>

<body>
  <?php if (isset($_POST['toppings']) && !is_array($_POST['toppings'])) {
    $toppings_problem = TRUE;
    $toppings = is_string($_POST['toppings']) ? $_POST['toppings'] : '<em>empty</em>';
  }
  else {
    $toppings_problem = FALSE;
    $toppings = isset($_POST['toppings']) ? implode(', ', $_POST['toppings']) : '<em>empty</em>';
  } ?>
<h1>THANK YOU</h1>

<p>Thank you for ordering from Black Goose Bistro. We have received the following information about your order:</p>

<h2>Your Information</h2>
<ul>
<li><strong>Name:</strong> <?php print $_POST['customername'] ? $_POST['customername'] : '<em>empty</em>'; ?></li>
<li><strong>Address:</strong> <?php print $_POST['address'] ? $_POST['address'] : '<em>empty</em>'; ?></li>
<li><strong>Telephone number:</strong> <?php print $_POST['telephone'] ? $_POST['telephone'] : '<em>empty</em>'; ?></li>
<li><strong>Email Address:</strong> <?php print $_POST['email'] ? $_POST['email'] : '<em>empty</em>'; ?></li>
</ul>
<p><strong>Delivery instructions:</strong> <?php print $_POST['instructions'] ? $_POST['instructions'] : '<em>empty</em>'; ?></p>

<h2>Your pizza</h2>

<?php if (!isset($_POST['crust']) && !isset($_POST['toppings']) && !isset($_POST['pizzas'])) { ?>
<em>Sorry, we did not receive your information. <a href="http://www.blackgoosebistro.com/pizza.html">Try again.</a></em>
<?php } 
  else { ?>
    <ul>
    <li><strong>Crust:</strong> <?php print isset($_POST['crust']) && $_POST['crust'] ? $_POST['crust'] : '<em>empty</em>'; ?></li>
    <li><strong>Toppings:</strong> <?php
      print $toppings;
      if ($toppings_problem) { ?>
        <span style="color:red">*</span>
     <?php } ?></li>
    <li><strong>Number:</strong> <?php print isset($_POST['pizzas']) && $_POST['pizzas'] ? $_POST['pizzas'] : '<em>empty</em>'; ?></li>
    </ul>
<?php  }
if ($toppings_problem) { ?>
  <hr />
  <p>&nbsp;</p>
<?php } ?>

<a href="index.html" class="button" >Back to Home</a>

<p class="disclaimer"><small>This site is for educational purposes only. No pizzas will show up at your door.</small></p>

</body>
</html>
