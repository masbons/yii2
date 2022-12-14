<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Personal $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="personal-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama_lengkap')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nama_panggilan')->textInput(['maxlength' => true]) ?>

    <?php /*$form->field($model, 'jenis_kelamin')->textInput(['maxlength' => true])*/ ?>
    <label> Jenis Kelamin</label>
    <p>
        Laki-Laki:
        <input type="radio" class="flat" name="Personal[jenis_kelamin]" id="jenis_kelamin" value="Laki-Laki" checked="" required /> Perempuan:
        <input type="radio" class="flat" name="Personal[jenis_kelamin]" id="jenis_kelamin2" value="Perempuan" />
    </p>

      <?= $form->field($model, 'tempat_lahir')->textInput(['maxlength' => true]) ?>

      <?= $form->field($model, 'tanggal_lahir')->textInput() ?>

      <?= $form->field($model, 'status')->textInput(['maxlength' => true]) ?>

      <?= $form->field($model, 'agama')->textInput(['maxlength' => true]) ?>

      <?= $form->field($model, 'pendidikan')->textInput(['maxlength' => true]) ?>

      <?= $form->field($model, 'alamat')->textInput(['maxlength' => true]) ?>

      <?= $form->field($model, 'no_ktp')->textInput(['maxlength' => true]) ?>

      <?= $form->field($model, 'no_hp')->textInput(['maxlength' => true]) ?>

      <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

  <div class="form-group">
    <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
</div>

<?php ActiveForm::end(); ?>

</div>
