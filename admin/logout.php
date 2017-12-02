<?php

// Inialize session
session_start();

// Delete certain session
unset($_SESSION['name']);
session_destroy();
// Delete all session variables
// session_destroy();

// Jump to login page
header('Location: index');

?>
<SCRIPT type="text/javascript">
    window.history.forward();
    function noBack() { window.history.forward();
	window.location.href="index"; }
</SCRIPT>
<html>
<BODY onload="noBack();"
    onpageshow="if (event.persisted) noBack();" onunload="">
    </BODY>
    </html>