<?php

//ประกาศ NameSpance ไม่ต้องงเขียนคำสั่งยาว เหมือน extend
use yii\helpers\Html;

/* @var $this yii\web\View */
$this->title = 'กรมอนามัย';
?>

<?php

$route1 = Yii::$app->urlManager->createUrl("test/test1");

?>



<a href="<?= $route1 ?>">Go Test1</a>
<br>


<?php

//create url แบบส่งค่าด้วย
$route2 = Yii::$app->urlManager->createUrl(["test/test2","name"=>"Non","lname"=>"inwYii2"]);

?>
<a href="<?php echo  $route2 ;?>" >Go Test2</a>

<br>

<?=
//create url อีกแบบ 
Html::a("ลิ้งแบบที่ 3 ",["test/test2","name"=>"Daow","lname"=>"Daowja"]);
?>

<?php
                        //create url แบบ 4
    echo "<br><a href='".yii\helpers\Url::to(["test/test2","name"=>"Daoweng","lname"=>"Noneng"])."'>Link 4</a>";

?>