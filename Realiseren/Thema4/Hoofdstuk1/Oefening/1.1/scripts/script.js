/*
    Name: Kaine van ommeren
    Date: 29-04-2022
    file: script.js
 */
function showAnswer(element)
{
    var onClick = element.style.filter;

    if (onClick == "blur(100px)")
    {
        element.style.filter = "blur(0px)";
    }
    else
    {
        element.style.filter = "blur(100px)";
    }
}
