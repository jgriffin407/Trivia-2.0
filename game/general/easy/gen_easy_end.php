<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge" />
    <title>Congrats!</title>
    <link rel="stylesheet" href="../../../css/main.css" />
</head>
<body>
    <div class="container">
        <div id="end" class="flex-center flex-column">
            <h1>Your Score:</h1>
            <h1 id="finalScore"></h1>
            <form>
                <input 
                type="text" 
                name="username" 
                id="username" 
                placeholder="username"
                />
                <button 
                type="submit" 
                class="btn" 
                id="saveScoreBtn" 
                onclick="saveHighScore(event)"
                disabled
                >
                Save
            </button>
            </form>
            <a class ="btn" href="gen_easy.php">Play Again</a>
            <a class="btn" href="../../../main.php">Go Home</a>
        </div>
        <div class ="footer">
            <p>&copy; Copyright 2020 John Griffin - All Rights Reserved</p>
          </div>
    </div>
    <script src ="gen_easy_end.js"></script>
</body>
</html>