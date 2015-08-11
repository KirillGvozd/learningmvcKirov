<h1>Kirov</h1>

<?php
if (!empty($_POST['text']))
echo kirov::transliterate($_POST['text']);
?>

<form action="" method="post">
    <textarea name="text" style="width:600px; height: 400px"></textarea>
    <br>
    <input type="submit" />
</form>




