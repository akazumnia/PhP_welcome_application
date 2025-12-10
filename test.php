<!doctype html>
<html lang="pl">
<head>
    <title>Wiek urodzenia</title>
</head>
<body>
<h1>Aplikacja powitalna</h1>

<form action="test.php" method="POST">
    <label for="imie">Imię:</label> 
    <input type="text" name="name"><br>

    <label for="rok_urodzenia">Rok urodzenia:</label>
    <input type="number" name="births_day" id="rok_urodzenia"><br>

    <label for="ulubiony_kolor">Ulubiony kolor:</label>
    <input type="text" name="favorite_colour"><br>

    <label for="miasto">Miasto w którym mieszkam:</label>
    <input type="text" name="town"><br>

    <input type="submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $imie = $_POST["name"];
    $ulubiony_kolor = $_POST["favorite_colour"];
    $miasto = $_POST["town"];
    $rok_urodzenia = $_POST["births_day"];

    // Sprawdzenie czy rok jest liczbą
    if (is_numeric($rok_urodzenia)) {
        $wiek = 2025 - $rok_urodzenia;

        echo "<p>Cześć, nazywam się $imie i mam $wiek lat. 
        Mieszkam w $miasto, a mój ulubiony kolor to $ulubiony_kolor.</p>";
    } else {
        echo "<p>Podano nieprawidłowy rok urodzenia!</p>";
    }
}
?>
</body>
</html>
