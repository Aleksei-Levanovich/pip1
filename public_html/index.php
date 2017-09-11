<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Programming of Internet Applications</title>
    <link href="style.css" rel="stylesheet" type="text/css"/>
</head>
<body>
<header>
    <div style="text-align: center;">
        <h1>Lab PIA №1</h1>
        <h2>Authors: Yegor Biryukov, Aleksei Levanovich</h2>
        <h3>Group P3211, Variant 301</h3>
    </div>
</header>
<table>
    <tr>
        <td>
<form>
    <p>Change of X</p>
    <input type="radio" name="xvalue" value="-3" /> -3
    <input type="radio" name="xvalue" value="-2" /> -2
    <input type="radio" name="xvalue" value="-1" /> -1
    <input type="radio" name="xvalue" value="0" /> 0
    <input type="radio" name="xvalue" value="1" /> 1
    <input type="radio" name="xvalue" value="2" /> 2
    <input type="radio" name="xvalue" value="3" /> 3
    <input type="radio" name="xvalue" value="4" /> 4
    <input type="radio" name="xvalue" value="5" /> 5
    <p>Change of Y</p>
    <input type="text" name="yvalue" title="From -3 to 5" pattern="(-3|-2|-1|0|1|2|3|4|5)"/>
    <p>Change of R</p>
    <select>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
    </select>
    <br>
    <input type="submit">
</form>
        </td>
        <td>
        <img src="img/YOX.png"/>
        </td>
    </tr>
</table>
</body>
</html>