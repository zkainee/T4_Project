function submitForm(pixelNr, pixelColor)
{
    // Plaats het pixelnummer in een hidden <input>
    document.getElementById("hiddenPixelNumber").value = pixelNr;

    // Plaats de pixelkleur in een hidden <input>
    document.getElementById("hiddenPixelColor").value = pixelColor;

    // Verstuur het formulier
    document.getElementById("pixelForm").submit();
}