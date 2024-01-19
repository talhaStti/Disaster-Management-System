<!DOCTYPE html>

<html>
<head>
    <style>
        p>div{
            display: inline;
        }
    </style>
    <title>ex 2-c</title>
</head>

<body>
    <form id="f1" action="test1.php" method="post">
        Salutation:
        <select name="sal">
            <option value="Mr">Mr</option>
            <option value="Mrs">Mrs</option>
        </select>
        <p>name:
        <input type="text" name="i1">&nbsp<span id="n_v"></span></p>
        pass:
        <input type="password" id="pass"><br/>
        pic:
        <input type="file" name="photo"><br/>
        <input type="submit">
    </form>
    <p id="pid"></p>

</body>
</html>
