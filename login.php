<?php
define("_CONFIG_",true);
require_once "config.php";
?>

<!DOCTYPE HTML>
<html>
<head>
    <title>login system</title>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.3/css/uikit.min.css" />
</head>
<body>
<!-- UIkit JS -->
<?php
include_once "scripts.php";
?>
<div class="uk-padding  uk-width-1-2@s">
    <form class="uk-form-stacked js-login">

        <div class="uk-margin">
            <label class="uk-form-label" for="form-stacked-text">Mail</label>
            <div class="uk-form-controls" >
                <input class="uk-input"  id="form-stacked-text" type="email" required="required" placeholder="Enter your EmailID"  >
            </div>
        </div>


        <div class="uk-margin">
            <label class="uk-form-label" for="form-stacked-password">Password</label>
            <div class="uk-form-controls" >
                <input class="uk-input"  id="form-stacked-password" required="required"  type="password" placeholder="Enter your Password"  >
            </div>

        </div>
        <button class="uk-button uk-button-default" style="display: inline-block">Login</button>

        <div class="uk-margin" style="display: inline-block">
            <button class="uk-button   ">Forget Password</button>
        </div>
        <div>
            <label><input class="uk-checkbox" type="checkbox" > Remember me</label>
        </div>
</div>
</form>
</body>
</html>
