<?php
namespace app\models;

use yii\base\Model;

class NumberoForm extends Model
{
	public $num;
	
	public function attributeLabels(){
		return [
			'num' => 'Número: ',
		];
	}
	public function rules(){
		return[
			[['num'], 'required'],
			[['num'], 'integer', 'min'=>3,'max'=>30]
		];
	}
}