<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<?php $form = ActiveForm::begin(); ?>
<p>Ingrese 1 palabra por favor...</p>
<div class="row">
	<div class="col-lg-5">
			
			<?= $form->field($model, 'palabra')->input('string') ?>
		
	</div>	
</div>	

<div class="form-group">
	<?= Html::submitButton('Subir', ['class'=> 'btn btn-primary']) ?>
</div>
 
<?php ActiveForm::end(); ?>


