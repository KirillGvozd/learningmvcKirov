<?php
/* @var $this TranslitirateController */
/* @var $traslit array */

$this->pageTitle=Yii::app()->name . ' - Translitirate';
$this->breadcrumbs=array(
    'Translitirate',
);
?>

<h2>Введите текст для транслитерации</h2>

<form action="" method="post">
    <textarea name="text" style="width:500px; height: 150px"><?php echo $message; ?></textarea></br>
    <input type="submit" value="Транслитирировать" />
</form>