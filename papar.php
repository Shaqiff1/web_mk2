<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Papar</title>
</head>
<body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["cerita"])) {
    $cerita = $_POST["cerita"];

    $wordCount = str_word_count($cerita);

    $alphabetCount = strlen(preg_replace('/[^a-zA-Z]/', '', $cerita));

    $reversedSentence = strrev($cerita);
    ?>

    <p>Ayat ini mengandungi <?php echo $wordCount; ?> patah perkataan.</p>
    <p>Ayat ini mengandungi <?php echo $alphabetCount; ?> huruf</p>
    <p>Ayat terbalik: <?php echo $reversedSentence; ?></p>

    <?php
} else {
    echo "<p style='color: red;'>Form tidak dikirim atau 'cerita' tidak ditemukan.</p>";
}
?>

<a href="index.php">Kembali</a>
</body>
</html>
