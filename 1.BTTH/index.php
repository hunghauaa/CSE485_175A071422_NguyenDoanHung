<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="GET">
        <h4>Many field type</h4>
        <label for="">Account</label><br>
        <input type="text" name="txtName"><br>
        <label for="">Password</label><br>
        <input type="text" name="txtPass"><br>
        <label for="">Nick Name</label><br>
        <input type="text" name="txtNick">
        <h4>Preferenced Time</h4>
        <input type="radio" name="time" value="AM" checked>
        <span>AM</span><br>
        <input type="radio" name="time" value="PM">
        <span>PM</span><br>
        <h4>Classes takes</h4>
        <input type="checkbox" name="class[]" value="Java">
        <span>Java</span><br>
        <input type="checkbox" name="class[]" value="C#">
        <span>C#</span><br>
        <input type="checkbox" name="class[]" value="PHP" checked>
        <span>PHP</span><br>
        <h4>Which sola</h4>
        <select name="sola">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
        </select>
        <h4>Which stack</h4>
        <select name="stack">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
        </select>
        <h4>Tell us about yourself</h4>
        <textarea name="about" cols="100" rows="10">gigido</textarea>
        <h4>Which are awesome</h4>
        <select name="awesome" multiple="multiple">
            <option value="python">Python</option>
            <option value="css">CSS</option>
            <option value="html">HTML</option>
            <option value="php">PHP</option>
        </select><br>
        <input type="submit" name="submit" value="Submit">
        <input type="submit" value="Cancel">
        

    </form>
    
</body>
</html>
<?php
    include('./handle.php')
?>