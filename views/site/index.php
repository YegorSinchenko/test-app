<?php

/* @var $this yii\web\View */

use app\widgets\Alert;
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
use yii\widgets\MaskedInput;
use yii\widgets\Pjax;

$this->title = 'My Test Application';
?>


<div class="site-login">
    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
<?= Alert::widget() ?>
<?php $form = ActiveForm::begin([
        'options' => ['class' => 'form-horizontal'],
        'fieldConfig' => [
            'template' => "{label}\n<div class=\"col-lg-3\">{input}</div>\n<div class=\"col-lg-8\">{error}</div>",
            'labelOptions' => ['class' => 'col-lg-1 control-label'],
        ],
    ]); ?>

        <?= $form->field($model, 'time')->hiddenInput()->label(false)?>
        <?= $form->field($model, 'telephone')->widget(MaskedInput::className(), [
            'mask' => '(999) 999-99-99',
        ]) ?>
        <?= $form->field($model, 'email')->textInput() ?>
        <?= $form->field($model, 'comment')->textarea() ?>


        <div class="form-group">
            <div class="col-lg-offset-1 col-lg-11">
                <?= Html::submitButton('Отправить', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
            </div>
        </div>

    <?php ActiveForm::end(); ?>
    <?php Pjax::end(); ?>

</div>
