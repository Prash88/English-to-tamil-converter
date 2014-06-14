<!DOCTYPE html>
<html>
<head>
    <title>English to tamil typewriter</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet"  type="text/css" href="css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">

    <link rel="stylesheet" type="text/css" href="css/default.css">

    <script language=JavaScript src="scripts/jquery-2.1.1.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <script language=JavaScript src="scripts/common.js"></script>
    <script language=JavaScript src="scripts/tamil.js"></script>
    <script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
    <script type="text/javascript">stLight.options({publisher: "ur-a54d2d3c-f5d2-b68e-19b9-4100a82bfeca", doNotHash: false, doNotCopy: false, hashAddressBar: true});</script>
    <script>
        $( document ).ready(function() {
            //$("textarea").focus();
            //var e = $.Event('keypress');
            //e.which = 68; // Character 'A'
            //$('textarea').trigger(e);
            $("textarea").on("keypress", function(e) {
                toggleKBMode(e);
                convertThis(e);
                //onKeyDown="toggleKBMode(event)" onKeyPress="javascript:convertThis(event)"
            });
        });
    </script>
</head>
<body>

    <div class="page-header">
        <h1>English to tamil typewriter</h1>
    </div>
    <div class="container">
        <div class="row">
            <h4>Please type in the text area below to convert to tamil letters</h4>
            <br /> <br/>
            <div class=".col-md-6 .col-md-offset-3">
                <form name="post" method="post" role="form">
                    <textarea name="comment" charset="utf-8" class="form-control" id="textarea" cols="10" rows="8"></textarea>
                </form>
            </div>
            <h4>Tamil - English letter map used in conversion</h4>
            <div class="col-xs-6 col-lg-offset-3 ">
                <a href="#" class="thumbnail">
                    <img src="images/tamil.png" alt="125x125">
                </a>
            </div>
        </div>
    </div>
    <hr>
    <footer>
        <div class="container">
            <div class="pull-left"><p>Developed by Prashanth. All rights reserved.</p></div>
            <ul class="share-buttons col-lg-offset-6">
        	    <li><a href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fenglish-to-tamil.herokuapp.com%2F" target="_blank"><img src="images/flat_web_icon_set/color/Facebook.png"></a></li>
        	    <li><a href="https://twitter.com/intent/tweet?source=http%3A%2F%2Fenglish-to-tamil.herokuapp.com%2F&text=English%20to%20tamil%20typewriter: http%3A%2F%2Fenglish-to-tamil.herokuapp.com%2F" target="_blank" title="Tweet"><img src="images/flat_web_icon_set/color/Twitter.png"></a></li>
            </ul>
        </div>
    </footer>
</body>
</html>