<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta htp-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="asset/css/style_vid-23.css">
</head>
<body>
    <h3>Change account</h3>

    <form action="includes/userupdate.inc.php" method="post">
        <input type="text" name="username" placeholder="Username">
        <input type="password" name="pwd" placeholder="Password"> 
        <input type="text" name="email" placeholder="E-Mail">
        <button>Update</button> 
    </form>

    <h3>Delete account</h3>

    <form action="includes/userdelete.inc.php" method="post">
        <input type="text" name="username" placeholder="Username">
        <input type="password" name="pwd" placeholder="Password"> 
        <button>Delete</button> 
    </form>
    
</body>
</html>