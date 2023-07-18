<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>Robot Controller</title>
    <link rel="icon" type="image/png" href="robot-assistant.png"/>
</head>
<body>
        <div class="top">
        <form action="insert_forward.php" method="POST"> <button type="submit", name='forward' value="f">Forward</button></form>
        </div>
        <div class="middle">
            <form action="insert_left.php" method="POST"><button type="submit", name='left' value="l">Left</button></form>
            <form action="insert_stop.php" method="POST"><button class="stop-button" type="submit", name='stop' value="s">Stop</button></form>
            <form action="insert_right.php" method="POST"><button class="right-button" type="submit", name='right' value="r">Right</button></form>
        </div>
        <div class="bottom">
        <form action="insert_backward.php" method="POST"><button type="submit", name='backward' value="b">Backward</button></form>
        </div>
</body>
</html>
