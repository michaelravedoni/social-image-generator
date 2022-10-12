<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Documentation | {{ config('app.name') }}</title>
        <meta name="description" content="{{ config('app.name') }} documentation">

        <!-- Style -->
        <!-- From https://github.com/charlyllo/doctemplate -->
        <link rel="stylesheet" href="./style.css">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Noto+Serif:wght@400;700&family=Open+Sans:ital,wght@0,400;0,700;1,600&display=swap" rel="stylesheet">
        <script defer src="https://use.fontawesome.com/releases/v5.7.2/js/all.js" integrity="sha384-0pzryjIRos8mFBWMzSSZApWtPl/5++eIfzYmTgBBmXYdhvxPc+XcFEk+zJwDgWbP" crossorigin="anonymous"></script>


</head>

<body>

    <div class="navbar clear nav-top">
        <div class="row content">
            <a href="#"><img class="logo" src="logo.svg"></a>
            <a class="right" style="text-decoration: underline;" href="#"><i class="fas fa-book"></i>&nbsp; Documentation</a>
            <a class="right" href="mailto:yourapp@email.com" target="_blank"><i class="fas fa-paper-plane"></i>&nbsp; yourapp@email.com</a>
        </div>
    </div>

    <div class="container clear">
        <div class="row wrapper">

            <div class="sidepanel">

                <a class="title" href="#">Introduction</a>

                <a class="section" href="#">Supported Versions</a>
                <a class="section" href="#">About this App</a>
                <a class="section" href="#technology">Technology</a>

                <div class="divider left"></div>

                <a class="title" href="#gettingstarted">Getting Started</a>

                <a class="section" href="#installingapp">Installing the App</a>
                 <a class="section" href="#openingapp">Opening the App</a>

                <div class="divider left"></div>

                <a class="title" href="#basicfeatures">Basic Features</a>

                <a class="section" href="#basicfeatures">Feature 1</a>
                <a class="section" href="#basicfeatures">Feature 2</a>
                <a class="section" href="#feature3">Feature 3</a>
                <a class="section" href="#feature3">Feature 4</a>
                <a class="section" href="#feature3">Feature 5</a>

                <div class="divider left"></div>

                <a class="title" href="#advanced">Advanced Features</a>

                <a class="section" href="#advanced">Feature A</a>
                <a class="section" href="#featureb">Feature B</a>
                <a class="section" href="#featurec">Feature C</a>
                <a class="sub-section" href="#featurec1">Feature C.1</a>
                <a class="sub-section" href="#featurec2">Feature C.2</a>
                <a class="section" href="#featured">Feature D</a>

                <div class="divider left"></div>

                <a class="title" href="#accesibility">Accesibility</a>

                <div class="divider left"></div>

                <a class="title" href="#moreinfo">More Info</a>

             <div class="space double"></div>

            </div>

            <div class="right-col">



                <h1 >Introduction</h1>

                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,
                sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

                <h2>Supported Versions:</h2>

                <p><b>App Version 1.0.0.</b> Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>

                <h2>About this App</h2>

                <p id="technology"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

                <h2>Technology</h2>

                <p>This app is built with Javascript, HTML and CSS.<br>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>

                <p id="gettingstarted"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore</p>

        <div class="divider" style="width:24%; margin:30px 0;"></div>

                <h1>Getting Started</h1>

                <h2>This is a sub-header</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,
                sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

                <p id="installingapp"><b>Important:</b> This line is for an important information.</p>


                <h2>Install the App</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

                   <ol>
                    <li>
                     The first thing you need to do to install this app.
                    </li>
                    <br>
                    <li>
                    The second thing you need to do to install this app.
                    </li>
                    <br id="openingapp">
                    <li>
                     The app is installed now.
                    </li>
                    <br>
                </ol>


                <h2>Opening the app</h2>

                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

                 <ol>
                    <li>
                     The first thing you need to do to open this app.
                    </li>
                    <br>
                    <li>
                     The second thing you need to do to open this app.
                    </li>
                    <br>
                    <li>
                      The third thing you need to do to open this app.
                    </li>
                    <br>
                    <li>
                     Open the app and start using it!
                    </li>
                    <br>
                </ol>

                <p id="basicfeatures">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>


            <div class="divider" style="width:24%; margin:30px 0;"></div>


                <h1>Basic Features</h1>

                <h2>Feature 1</h2>

                <p id="basicfeatures">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                </p>

                <h2>Feature 2</h2>

                <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                <br><br>
                <b>Explanation 1</b> Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                <br>
                <br>
                <b>Explanation 2</b> Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                <br>
                <br>
                <b>Explanation 3</b> Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                <br>
                <br id="feature3">
                <b>Explanation 4</b> Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                </p>

                <h2>Feature 3</h2>

                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                <br id="feature4">
             Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                </p>

                <h2>Feature 4</h2>

                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                  <br>
                  <br>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                 <br>
                 <br id="feature5">
                 Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </p>


                <h2>Feature 5</h2>

                <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                <br>
                <br>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                <br>
                </p>



               <h2>Feature 5</h2>

               <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                <br id="advanced">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </p>

                <div class="divider" style="width:24%; margin:30px 0;"></div>

                <h1>Advanced Features</h1>

                <h2>Feature A</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                <br>
                <br id="featureb">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>


                <h2>Feature B</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                <br>
                <br id="featurec">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>


                <h2>Feature C</h2>

                <p id="featurec1">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>


                <h2>Feature C.1</h2>

                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit:
                </p>

                   <ul>
                    <li>
                    <b>Point 1</b> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    <br>
                    <li>
                    <b>Point 2</b> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.
                    </li>
                    <br id="featurec2">
                     <li>
                    <b>Point 3</b> Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    <br>
                </ul>

                 <h2>Feauture C.2</h2>

                 <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    <br>
                    <br>
                     <b>Important:</b> Please notice that lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    <br>
                    <br>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                 </p>


                  <h2>Feature D</h2>

                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.

                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                  <br>
                  <br id="accesibility">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>


                <div class="divider" style="width:24%; margin:30px 0;"></div>

                   <h1>Accessibility</h1>

                   <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                   <br>
                   <br>
                   Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                   <br>
                   Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>

                   <p>Lorem ipsum dolor sit amet.
                      <br id="moreinfo">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

                <div class="divider" style="width:24%; margin:30px 0;"></div>

                <h1>More Info</h1>

                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.marks are protected by intellectual property rights.</p>

                <div class="doublespace"></div>
                <div class="divider" style="width:24%; margin:30px 0;"></div>


            </div>

        </div>


    </div>


</body>

</html>
