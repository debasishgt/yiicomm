<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Usertypes */
/* @var $form yii\bootstrap\ActiveForm */
?>

<div class="usertypes-form">

    <?php $form = ActiveForm::begin(['layout'=>'horizontal']); ?>

    <?= $form->field($model, 'Name',[
    'horizontalCssClasses' => [
        'wrapper' => 'col-sm-4',
    ]])->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'Description',[
    'horizontalCssClasses' => [
        'wrapper' => 'col-sm-4',
    ]])->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'Comment',[
    'horizontalCssClasses' => [
        'wrapper' => 'col-sm-4',
    ]])->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
