<?php
    include("functions.php");
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>r/Place KW1C</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js" type="text/javascript"></script>
</head>
<body>

<form id="pixelForm" action="place_pixel.php" method="get">
    <input id="hiddenPixelNumber" type="hidden" name="hiddenPixelNumber" value="0">
    <input id="hiddenPixelColor" type="hidden" name="hiddenPixelColor" value="#FFFFFF">

    <div class="container">
        <div class="pixel">
            <input type="color" name="colorPixel" value="<?php echo getPixelColorFromNumber(0); ?>" onchange="submitForm(0, this.value);">
        </div>
        <div class="pixel">
            <input type="color" name="colorPixel" value="<?php echo getPixelColorFromNumber(1); ?>" onchange="submitForm(1, this.value);">
        </div>
        <div class="pixel">
            <input type="color" name="colorPixel" value="<?php echo getPixelColorFromNumber(2); ?>" onchange="submitForm(2, this.value);">
        </div>
        <div class="pixel">
            <input type="color" name="colorPixel" value="<?php echo getPixelColorFromNumber(3); ?>" onchange="submitForm(3, this.value);">
        </div>
        <div class="pixel">
            <input type="color" name="colorPixel" value="<?php echo getPixelColorFromNumber(4); ?>" onchange="submitForm(4, this.value);">
        </div>
        <div class="pixel">
            <input type="color" name="colorPixel" value="<?php echo getPixelColorFromNumber(5); ?>" onchange="submitForm(5, this.value);">
        </div>
        <div class="pixel">
            <input type="color" name="colorPixel" value="<?php echo getPixelColorFromNumber(6); ?>" onchange="submitForm(6, this.value);">
        </div>
        <div class="pixel">
            <input type="color" name="colorPixel" value="<?php echo getPixelColorFromNumber(7); ?>" onchange="submitForm(7, this.value);">
        </div>
        <div class="pixel">
            <input type="color" name="colorPixel" value="<?php echo getPixelColorFromNumber(8); ?>" onchange="submitForm(8, this.value);">
        </div>
        <div class="pixel">
            <input type="color" name="colorPixel" value="<?php echo getPixelColorFromNumber(9); ?>" onchange="submitForm(9, this.value);">
        </div>
        <div class="pixel">
            <input type="color" name="colorPixel" value="<?php echo getPixelColorFromNumber(10); ?>" onchange="submitForm(10, this.value);">
        </div>
        <div class="pixel">
            <input type="color" name="colorPixel" value="<?php echo getPixelColorFromNumber(11); ?>" onchange="submitForm(11, this.value);">
        </div>
        <div class="pixel">
            <input type="color" name="colorPixel" value="<?php echo getPixelColorFromNumber(12); ?>" onchange="submitForm(12, this.value);">
        </div>
        <div class="pixel">
            <input type="color" name="colorPixel" value="<?php echo getPixelColorFromNumber(13); ?>" onchange="submitForm(13, this.value);">
        </div>
        <div class="pixel">
            <input type="color" name="colorPixel" value="<?php echo getPixelColorFromNumber(14); ?>" onchange="submitForm(14, this.value);">
        </div>
        <div class="pixel">
            <input type="color" name="colorPixel" value="<?php echo getPixelColorFromNumber(15); ?>" onchange="submitForm(15, this.value);">
        </div>
    </div>
</form>
</body>
</html>