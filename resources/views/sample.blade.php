<?php
/**
 * Created by PhpStorm.
 * User: webby
 * Date: 14/01/2019
 * Time: 12:41 PM
 */
?>

<!DOCTYPE html>

<html>
<head>
    <title> Sample page </title>
</head>
<body>
<div>
    <p> This is our sample page for now</p>
    @foreach($products as $product)
        {{ $product['name'] }}
    @endforeach

</div>

</body>
</html>
