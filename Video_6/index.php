<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>

    <main>
        <form action="forms/formhandler.php" method="post">
            <label for="firstname">Firstname?</label>
            <input required id="firstname" type="text" name="firstname" placeholder="Firstname">

            <label for="lastname">Lastname?</label>
            <input id="lastname" type="text" name="lastname" placeholder="Lastname">

            <label for="favouritepet">Favourite Pet?</label>
            <select id="favouritepet" name="favouritepet">
                <option value="none">None</option>
                <option value="dog">Dog</option>
                <option value="cat">Cat</option>
                <option value="bird">Bird</option>
            </select>

            <button type="submit">Submit</button>
        </form>
    </main>
    
</body>
</html>