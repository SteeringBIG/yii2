<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'О нас';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        Это страница About. Вы можете изменить следующий файл, чтобы настроить его содержимое:
    </p>

    <code><?= __FILE__ ?></code>
</div>
