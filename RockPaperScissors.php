<!DOCTYPE html>
<html>
<head>
    <title>Let's Play</title>
</head>
<?php 
if(isset($_POST['name'])) {
    $name = $_POST['name'];
    $numGames = $_POST['numGames'];
echo "Hello $name, we will be playing $numGames games today." ; 
}


?>
<body>

<form action="RockPaperScissors.php" method="POST">
    <p>Would you like to throw rock, paper, or scissors?</p>
    <select name="playerChoice">
        <option value="rock">Rock</option>
        <option value="paper">Paper</option>
        <option value="scissors">Scissors</option>
    </select>
    <button type="submit">Submit</button>
</form>
</body>
</html>