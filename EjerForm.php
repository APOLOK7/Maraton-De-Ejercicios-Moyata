<?php
namespace app\models;

use yii\base\Model;

class EjerForm extends Model
{
	public $num;
	public function rules(){
		return[
			[['num'], 'required'],
			[['num'], 'integer', 'min'=>3,'max'=>30]
		];
	}
}