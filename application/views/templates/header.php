<!DOCTYPE html>
<html lang="en">
  <head>
  <meta http-equiv="Content-Language" content="ne">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
   <meta name="description" content="">
    <meta name="keywords" content="">
    <link rel="shortcut icon" href="<?php echo base_url().'content/images/favicon.jpg'; ?>">
	<title>Chitwan Mahotsav - 2071</title>
 
<link rel="stylesheet" href="<?php echo base_url().'content/styles/custom.css'; ?>">
<link rel="stylesheet" href="<?php echo base_url().'content/bootstrap/css/bootstrap.css'; ?>">
<link rel="stylesheet" href="<?php echo base_url().'content/font-awesome/css/font-awesome.min.css'; ?>"> 
<script src="<?php echo base_url().'content/bootstrap/js/bootstrap.min.js'; ?>"></script>   
<script src="<?php echo base_url() . 'content/scripts/jquery.min.js'; ?>"></script>
<link rel="stylesheet" href="<?php echo base_url().'content/styles/range.css'; ?>">
<script language=JavaScript>
<!--

//Disable right mouse click Script
//By Maximus (maximus@nsimail.com) w/ mods by DynamicDrive
//For full source code, visit http://www.dynamicdrive.com

var message="Function Disabled!";

///////////////////////////////////
function clickIE4(){
if (event.button==2){
alert(message);
return false;
}
}

function clickNS4(e){
if (document.layers||document.getElementById&&!document.all){
if (e.which==2||e.which==3){
alert(message);
return false;
}
}
}

if (document.layers){
document.captureEvents(Event.MOUSEDOWN);
document.onmousedown=clickNS4;
}
else if (document.all&&!document.getElementById){
document.onmousedown=clickIE4;
}

document.oncontextmenu=new Function("alert(message);return false")

// --> 
</script>

 <style>
 .btn-lg, .btn-group-lg > .btn {
    border-radius: 6px;
    font-size: 40px;
    line-height: 1.33;
    padding: 25px 48px;
}
    .btn-lg, .btn-group-lg > .btn {
    border-radius: 6px;
    font-size: 40px;
    line-height: 1.33;
    padding: 25px 48px;
}  
.thumbnail
{
   background-color:#42cc2c; 
}
.thumbnail:hover, .thumbnail:active, .thumbnail:visited
{
    background-color: #cccc2c;
}
</style>
<script>
           (function() {
        var
            fullScreenApi = {
                supportsFullScreen: false,
                nonNativeSupportsFullScreen: false,
                isFullScreen: function() { return false; },
                requestFullScreen: function() {},
                cancelFullScreen: function() {},
                fullScreenEventName: '',
                prefix: ''
            },
            browserPrefixes = 'webkit moz o ms khtml'.split(' ');
     
        // check for native support
        if (typeof document.cancelFullScreen != 'undefined') {
            fullScreenApi.supportsFullScreen = true;
        } else {
            // check for fullscreen support by vendor prefix
            for (var i = 0, il = browserPrefixes.length; i < il; i++ ) {
                fullScreenApi.prefix = browserPrefixes[i];
     
                if (typeof document[fullScreenApi.prefix + 'CancelFullScreen' ] != 'undefined' ) {
                    fullScreenApi.supportsFullScreen = true;
     
                    break;
                }
            }
        }
     
        // update methods to do something useful
        if (fullScreenApi.supportsFullScreen) {
            fullScreenApi.fullScreenEventName = fullScreenApi.prefix + 'fullscreenchange';
     
            fullScreenApi.isFullScreen = function() {
                switch (this.prefix) {
                    case '':
                        return document.fullScreen;
                    case 'webkit':
                        return document.webkitIsFullScreen;
                    default:
                        return document[this.prefix + 'FullScreen'];
                }
            }
            fullScreenApi.requestFullScreen = function(el) {
                return (this.prefix === '') ? el.requestFullScreen() : el[this.prefix + 'RequestFullScreen']();
            }
            fullScreenApi.cancelFullScreen = function(el) {
                return (this.prefix === '') ? document.cancelFullScreen() : document[this.prefix + 'CancelFullScreen']();
            }
        }
        else if (typeof window.ActiveXObject !== "undefined") { // IE.
            fullScreenApi.nonNativeSupportsFullScreen = true;
            fullScreenApi.requestFullScreen = fullScreenApi.requestFullScreen = function (el) {
                    var wscript = new ActiveXObject("WScript.Shell");
                    if (wscript !== null) {
                        wscript.SendKeys("{F11}");
                    }
            }
            fullScreenApi.isFullScreen = function() {
                    return document.body.clientHeight == screen.height && document.body.clientWidth == screen.width;
            }
        }
     
        // jQuery plugin
        if (typeof jQuery != 'undefined') {
            jQuery.fn.requestFullScreen = function() {
     
                return this.each(function() {
                    if (fullScreenApi.supportsFullScreen) {
                        fullScreenApi.requestFullScreen(this);
                    }
                });
            };
        }
     
        // export api
        window.fullScreenApi = fullScreenApi;
    })();

                    </script>
                    
                    

    <script type="text/javascript">

    $(document).ready(function(){

        $(".close").click(function(){

            $("#myAlert").alert();

        });

    });  

    </script>
    <style>
        .alerts {
  margin: 20px;
  
}

.alerts p {
  /* quick and dirty hack added by me, you may remove it if not needed */
  margin: 0; padding: 0;
}

.alert-message.danger, .alert-message.danger:hover, .alert-message.error, .alert-message.error:hover, .alert-message.success, alert-message.success:hover, .alert-message.info, .alert-message.info:hover {
  color: #ffffff;
}
.alert-message .close {
  font-family: Arial, sans-serif; 
  line-height: 18px;
}
.alert-message.danger, .alert-message.error {
  background-color: #c43c35;
  background-repeat: repeat-x;
  
  background-image: -khtml-gradient(linear, left top, left bottom, from(#ee5f5b), to(#c43c35));
  background-image: -moz-linear-gradient(top, #ee5f5b, #c43c35);
  background-image: -ms-linear-gradient(top, #ee5f5b, #c43c35);
  background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #ee5f5b), color-stop(100%, #c43c35));
  background-image: -webkit-linear-gradient(top, #ee5f5b, #c43c35);
  background-image: -o-linear-gradient(top, #ee5f5b, #c43c35);
  background-image: linear-gradient(top, #ee5f5b, #c43c35);
  filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#ee5f5b', endColorstr='#c43c35', GradientType=0);
  
  text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
  border-color: #c43c35 #c43c35 #882a25;
  border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);
}
.alert-message.success {
  background-color: #57a957;
  background-repeat: repeat-x;
  
  background-image: -khtml-gradient(linear, left top, left bottom, from(#62c462), to(#57a957));
  background-image: -moz-linear-gradient(top, #62c462, #57a957);
  background-image: -ms-linear-gradient(top, #62c462, #57a957);
  background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #62c462), color-stop(100%, #57a957));
  background-image: -webkit-linear-gradient(top, #62c462, #57a957);
  background-image: -o-linear-gradient(top, #62c462, #57a957);
  background-image: linear-gradient(top, #62c462, #57a957);
  filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#62c462', endColorstr='#57a957', GradientType=0);
  
  text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
  border-color: #57a957 #57a957 #3d773d;
  border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);
}
.alert-message.info {
  background-color: #339bb9;
  background-repeat: repeat-x;
  
  background-image: -khtml-gradient(linear, left top, left bottom, from(#5bc0de), to(#339bb9));
  background-image: -moz-linear-gradient(top, #5bc0de, #339bb9);
  background-image: -ms-linear-gradient(top, #5bc0de, #339bb9);
  background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #5bc0de), color-stop(100%, #339bb9));
  background-image: -webkit-linear-gradient(top, #5bc0de, #339bb9);
  background-image: -o-linear-gradient(top, #5bc0de, #339bb9);
  background-image: linear-gradient(top, #5bc0de, #339bb9);
  filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#5bc0de', endColorstr='#339bb9', GradientType=0);
  
  text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
  border-color: #339bb9 #339bb9 #22697d;
  border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);
}

:root .alert-message {
  border-radius: 0 \0;
}
.close {
  float: right;
  color: #000000;
  font-size: 20px;
  font-weight: bold;
  line-height: 13.5px;
  text-shadow: 0 1px 0 #ffffff;
  filter: alpha(opacity=25);
  -khtml-opacity: 0.25;
  -moz-opacity: 0.25;
  opacity: 0.25;
}
.close:hover {
  color: #000000;
  text-decoration: none;
  filter: alpha(opacity=40);
  -khtml-opacity: 0.4;
  -moz-opacity: 0.4;
  opacity: 0.4;
}
.alert-message {
  font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
  font-size: 13px;
  display: none;
  position: relative;
  padding: 7px 15px;
  margin-bottom: 18px;
  color: #404040;

  background-color: #eedc94;
  background-repeat: repeat-x;

  background-image: -khtml-gradient(linear, left top, left bottom, from(#fceec1), to(#eedc94));
  background-image: -moz-linear-gradient(top, #fceec1, #eedc94);
  background-image: -ms-linear-gradient(top, #fceec1, #eedc94);
  background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #fceec1), color-stop(100%, #eedc94));
  background-image: -webkit-linear-gradient(top, #fceec1, #eedc94);
  background-image: -o-linear-gradient(top, #fceec1, #eedc94);
  background-image: linear-gradient(top, #fceec1, #eedc94);
  filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#fceec1', endColorstr='#eedc94', GradientType=0);
  
  text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
  border-color: #eedc94 #eedc94 #e4c652;
  border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);
  text-shadow: 0 1px 0 rgba(255, 255, 255, 0.5);
  border-width: 1px;
  border-style: solid;
  
  -webkit-border-radius: 4px;
  -moz-border-radius: 4px;
  border-radius: 4px;
  
  -webkit-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.25);
  -moz-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.25);
  box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.25);
}
.alert-message .close {
  margin-top: 0;
}
.alert-message a {
  font-weight: bold;
  color: #404040;
  text-decoration: none;
}
.alert-message.danger p a, .alert-message.error p a, .alert-message.success p a, .alert-message.info p a {
  color: #ffffff;
}
.alert-message p a:hover {
  text-decoration: underline;
}
.alert-message p {
  margin-bottom: 0;
}
    </style>

  </head>
  
  <body id='allb'>   
           <!-- <a bhref="#" onclick="fullScreenApi.requestFullScreen(document.documentElement)" />click me</a>-->
       