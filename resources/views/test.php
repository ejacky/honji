<?php
echo "name is :" . $name;

?>

<html>
<body>
<h3>this is for tests</h3>

<form action="test/store" method="post">
    <label>name:</label>
    <input type="text" name="name"/>
    <label>email:</label>
    <input type="text" name="email" />
    <input type="submit" />
</form>
</body>
</html>