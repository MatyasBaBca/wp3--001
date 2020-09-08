<!DOCTYPE html>
<html lang="cz">
<head>
    <title>document</title>
    
</head>

<body>

<label for="cars">Zvolte typ vozidla:</label>
<br>
<form action="submit.php" method="post">
<select name="cars">  
<?php

$types = array(
"osobní",
"nákladní",
"autobus",
"karavan",
"trolejbus"
);

foreach ($types as $type) {
    echo "<option value=".$type.">$type</option>";
}

?> 
</select>
<br>
<label for="spz">SPZ:</label>
<input type="text" name="spz" id="spz"> <br>

<input type="submit" name="submit" value="odeslat">
</form>
</body>
</html>  