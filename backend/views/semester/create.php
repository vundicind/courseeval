<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Semester */

$this->title = Yii::t('app', 'Create {modelClass}', [
    'modelClass' => 'Semester',
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Semesters'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="semester-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
