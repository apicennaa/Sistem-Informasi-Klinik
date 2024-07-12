<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\TindakanPasien $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="tindakan-pasien-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_pendaftaran')->textInput() ?>

    <?= $form->field($model, 'id_tindakan')->textInput() ?>

    <?= $form->field($model, 'jumlah')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
