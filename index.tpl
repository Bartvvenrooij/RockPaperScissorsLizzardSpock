<!doctype html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>{title}</title>
    <link rel="stylesheet" href="Css/style.css"/>
</head>
<body>

<header>
    <h1>Rock Paper Scissors Lizzard Spock!</h1>
</header>

<div role="main">
    <section id="imagesection">
        <form action="index.php" method="POST">
            <input class="images" value="rock" type="image" name="PlayersChoice" src="Images/rock.png"/>
            <input class="images" value="paper" type="image" name="PlayersChoice" src="Images/paper.png"/>
            <input class="images" value="scissors" type="image" name="PlayersChoice" src="Images/scissors.png"/>
            <input class="images" value="lizard" type="image" name="PlayersChoice" src="Images/lizard.png"/>
            <input class="images" value="spock" type="image" name="PlayersChoice" src="Images/spock.png"/>
        </form>
    </section>
    <section id="information">
        <form action="index.php" method="POST">
            <fieldset>
                <legend>Score Board:</legend>
                <label for="player">Your Choice:</label>
                <input type="text" name="player" value="{playersChoice}" disabled/>
                <label for="player">Computers Choice:</label>
                <input type="text" name="player" value="{computersChoice}" disabled/>
                <label for="player">Result:</label>
                <input type="text" name="player" value="{result}" disabled/>
                <label for="player">Score:</label>
                <input type="text" name="player" value="You: {playerScore} Computer: {compScore}" disabled/>
                <input type="submit" name="submit" value="Reset"/>
            </fieldset>
        </form>
    </section>
</div>

</body>
</html>