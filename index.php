<!DOCTYPE html>
<html lang="en">
    <head>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <script src="https://google-code-prettify.googlecode.com/svn/loader/run_prettify.js"></script>

        <link type="text/css" rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"/>
        <link type="text/css" rel="stylesheet" href="http://fast.fonts.net/cssapi/9d098bac-e407-4fac-8dc7-43815e1e5482.css"/>
        <link type="text/css" rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>
        <link type="text/css" rel="stylesheet" href="css/code_themes/github-v2.css"/>
        <link type="text/css" rel="stylesheet" href="css/style.css"/>

    </head>
    <body>
    <a href="https://github.com/pavel123/paralaxmenu">
        <img style="position: absolute; top: 0; right: 0; border: 0;" src="https://camo.githubusercontent.com/365986a132ccd6a44c23a9169022c0b5c890c387/68747470733a2f2f73332e616d617a6f6e6177732e636f6d2f6769746875622f726962626f6e732f666f726b6d655f72696768745f7265645f6161303030302e706e67" alt="Fork me on GitHub" data-canonical-src="https://s3.amazonaws.com/github/ribbons/forkme_right_red_aa0000.png">
    </a>
    <!-- Main Content -->

    <div class="page-content container-fluid">

        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <h1 class="text-center">Paralax Menu jQuery Plugin</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <p>Paralax Menu jQuery Plugin allows you to add spark to your sticky menus by gradually changing its link font colors whenever it reaches images or elements with image backgrounds. You can check out the example  <a href="example.php">here</a>.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <h3>1. How to use</h3>
                <p>In order to add Paralax Menu to your website please do the following:</p>
                <h4>a) Download and include CSS and JS in your markup.</h4>
                <xmp class="prettyprint linenums">
    <link type="text/css" rel="stylesheet" href="css/jquery.paralaxmenu.css"/>
    <script type="text/javascript" src="js/jquery.paralaxmenu.js"></script>
                </xmp>
                <h4>b) Create menu using the syntax below.</h4>
                <xmp class="prettyprint linenums">
    <!-- Brochure Menu -->
    <div id="brochure-menu">
        <div id="sub-brochure-menu">
            <a href="kitchen">Menu</a>
            <a href="shopping">Shopping</a>
            <a href="music">Music</a>
            <a href="library">Library</a>
            <a href="location">Location</a>
            <a href="news-and-events">News & Events</a>
        </div>
    </div>
                </xmp>
                <h4>c) Initiate the script by including the following in your scripts.</h4>
    <pre class="prettyprint linenums">

    $(document).ready(function() {
        $('#sub-brochure-menu').paralaxmenu({
            container: '.page-content',
            wrappers : ['img', 'div.bg-image']
        });
    });
    </pre>

                <p>The <code>.page-container</code> is, as the names implies, the container of the page where are your elements will be (text, images etc.). The <code>#brochure-menu</code> markup for the sticky menu
                presented earlier needs to be placed immediately after opening tag so that it looks like this:</p>
                <xmp class="prettyprint linenums">
 <div class="page-content">
    <!-- Brochure Menu -->
    <div id="brochure-menu">
        <div id="sub-brochure-menu">
            <a href="kitchen">Menu</a>
            <a href="shopping">Shopping</a>
            <a href="music">Music</a>
            <a href="library">Library</a>
            <a href="location">Location</a>
            <a href="news-and-events">News & Events</a>
        </div>
    </div>
    ...
 </div>
                </xmp>
                <h3>2. Options</h3>
                <p>At the moment there are only 2 options available.</p>
                <p><code>container:</code> the container div id/class where sticky menu is going to be placed.</p>
                <p><code>wrappers:</code> which elements should make menu link colors change.</p>
                <h3>3. Example</h3>
                <p>Check out the example <a href="example.php">here</a>.</p>
            </div>

        </div>
    </body>
</html>


