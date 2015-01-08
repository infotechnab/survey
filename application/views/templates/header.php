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
  </head>
  
  <body id='allb'>   
           <!-- <a bhref="#" onclick="fullScreenApi.requestFullScreen(document.documentElement)" />click me</a>-->
       