<?php

namespace frontend\controllers;

class TestController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionTest1(){
        $a = 3;
        $b = 5;
        $sum = $a+$b;
        
        $param = ['sum'=>$sum,'b'=>$a];
        
        return $this->render('test1',$param);
    } //END TEST1
    
     public function actionTest2($name = null,$lname = null){
         
         $inname = ["fname"=>$name,"lname"=>$lname] ;
         
         
         
         return $this->render("test2",$inname);
         
     }
    
}
