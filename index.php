<?php
include("account_information.php");
?>
<html>
    <head>
    <title>Runescape API</title>
    </head>
    <body>
    <form action="">
        <input type="text" name="username" value="<?php echo $_GET['username']; ?>">
        <button type="submit">Search</button>
    </form>
    </body>
</html>