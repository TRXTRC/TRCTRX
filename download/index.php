<?php
// Set any necessary headers if needed (CSP, etc)
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Test Page</title>
</head>
<body>

<!-- Your page content -->

<script data-cfasync="false" type="text/javascript">
//<![CDATA[
var wid = '441868';
var uid = '170625';
var OPCIONES = { status: true, parameter: 'utm_source' };
//]]>
</script>

<script data-cfasync="false" type="text/javascript">
//<![CDATA[

// Sample completed function (your code was incomplete)
(function() {
    var urlParams = new URLSearchParams(window.location.search);
    var paramValue = urlParams.get(OPCIONES.parameter);
    if (OPCIONES.status && paramValue) {
        console.log("UTM Source: " + paramValue);
        // You can do more here: load a script, fire pixel, etc.
    }
})();

//]]>
</script>

</body>
</html>
