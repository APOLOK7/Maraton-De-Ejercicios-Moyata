<?php

namespace app\controllers; //escribir bien, no confudas las cosas, es "controllers"
use Yii;
use yii\web\Controller;
use app\models\NumForm;
use app\models\PerimetroForm;
use app\models\NumberoForm;
use app\models\MarcoForm;


class MoyataController extends Controller
{
	public function actionIndex()
	{
		$mens="Hola como estas?";
		return $this->render('index',['var1'=>$mens]);
	}

	public function actionCiudades()
	{
		$ciudad = ["San Cristobal", "Palpala","S.S. de jujuy", "San Pedro", "Perico"] ;
		$tam = count($ciudad);

		return $this->render('ciudades',['ciu'=>$tam, 'city'=>$ciudad]);
	}

	public function actionMoyata()
    {
        //$vmayor = yii::$app->request->get('mayor');
        $model = new NumForm; //crea un nuevo objeto de una clase que tenga ese modelo

        if ($model->load(Yii::$app->request->post()) && $model->validate()) { //load es cargar el objeto
            //el formulario qeu tiene num1 y num2 lo estoy cargando en el $model y enviando
                if ($model->num1 > $model->num2){  //$model->num1 quiere decir que estoy accediendo al objeto $model y obtengo el atributo num1
                    $mayor = $model->num1;
                }
                else 
                {    
                    $mayor = $model->num2;
                }
            return $this->render('moyata-confirm', ['model' => $model, 'vmayor'=> $mayor]);
        
        }
        else{
            return $this->render('moyata', ['model' => $model]);   
        }
    }

    //public function actionPerimetro($catA, $catB=8)
    public function actionPerimetro()
    {
    	$model = new PerimetroForm;

    	if ($model->load(Yii::$app->request->post()) && $model->validate()) {
    		//validar los datos recibidos con el modelo... Aqui has algo significativo con el modelo
    		return;
    	} else {
    		//la pagina es mostrada inicialmente o error en la validacion 

    		return;
    		}
    			
    	//$catA = isset($_GET['catA'])?$_GET['catA']:null;
    	//$catB = Yii::$app->request->get('catB');
    	$h = sqrt(pow($catA, 2)+pow($catB, 2));
    	$perimetro=4*$h;

    	return $this -> render('per',['resultado'=>$perimetro]);
    }

    
    public function actionEjernum()
    {     
    	$model = new NumberoForm;

    	if($model->load(Yii::$app->request->post()) && $model->validate()) { 
    			//Factorial
    			$fact=1;        
    			for ($i = 1; $i <= $model->num; $i++){ 
      			$fact = $fact * $i; 
    			} 
    			//Suma de N° Primos de 3
    			/*$base = 1;
    			while ( $base <= $model->num) {
    				if($base % 3 == 0){
    					$sum = $sum + $base;
    				}
    				$sum++;
    			}*/
    			
    			//Suma de pares restando impares
    			$sumpar=0; $sumimpar=0; $ressum=0;
    			for ($i = 1; $i <= $model->num; $i++){ 
      				if ($i %2 !=0) {
      				 	$sumimpar = $sumimpar+$i;
      				 } else {
      				 	$sumpar = $sumpar + $i;
      				 }
      			}
      			$ressum = $sumpar-$sumimpar;

            return $this->render('number-def', ['model' => $model, 'factorial'=> $fact, 'resulsum'=>$ressum]);
        }
        else{
            return $this->render('number', ['model' => $model]);  
        	}
			
	}

	 public function actionEjernum2()
    {     
    	$model = new NumberoForm;

    	if($model->load(Yii::$app->request->post()) && $model->validate()) { 
    			    			
    			//Suma de pares restando impares
    			
    			$primo;
    			$i;
    			for($i=1; $i<=$model->num; $i++)
  				{
   				    $primo = 0;
   				    for($j = 2; $j<$i-1 && $primo==0; $j++)
   				    {
   				     	if($i % $j == 0) $primo=1;
   				    }
   				    
   				}

            return $this->render('number2-def', ['model' => $model, 'primo'=>$i]);
        }
        else{
            return $this->render('number2', ['model' => $model]);  
        	}
			
	}

	 public function actionEjernum3()
    {     
    	$model = new MarcoForm;
    	$contador=0;
    	$aste;
    	if($model->load(Yii::$app->request->post()) && $model->validate()) { 
    		$contador =	strlen($model->palabra)+2;
				for ($i=0; $i <$contador ; $i++) { 
    			    $aste = "*";
    			    $i++;			
    			} 			
    			
            return $this->render('number3-def', ['model' => $model,'cont'=>$contador, 'aste'=>$aste]);
        }
        else{
            return $this->render('number3', ['model' => $model]);  
        	}
			
	}




}
//metodo PHP isset() determina la existencia y si es null una variable
//$_GET consulta que dato viene de la url

/*isset????????????????????	
    	$catA = isset($_GET['catA'])?$_GET['catA']:null;
    	//$catB = Yii::$app->request->get('catB');
    	$h = sqrt(pow($catA, 2)+pow($catB, 2));
    	$perimetro=4*$h;
*/