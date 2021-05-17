<?php
namespace app\models;

use yii\base\Model;

class MarcoForm extends Model
{
	public $palabra;
	
	public function attributeLabels(){
		return [
			'palabra' => 'Ingrese una palabra: ',
		];
	}
	public function rules(){
		return[
			[['palabra'], 'required'],
			[['palabra'], 'string', 'min'=>3,'max'=>30]
		];
	}
}