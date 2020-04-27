<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>
    <div id = "app">
        
        <ul class="contacts">
        <li>
            Контактное лицо: <b>{{name}}</b>
        </li>
       <li>
            Телефон рабочий: <b>{{phone}}</b>
        </li>
        <li>
            Телефон мобильный: <b>{{phone2}}</b>
        </li>
       <li>
            Email: <a href="mailto:{{email}}">{{email}}</a>
        </li>
               <li>
                    Портфолио:
                   <ul>
                       <li>
                        <a href='/docs/Portfolio.pdf' target='_blank'>Скачать в формате PDF на русском</a>            </li>

                    <li>
                        <a href='/docs/Port_eng.pdf' target='_blank' >English Portfolio in PDF format</a>            </li>
                    </ul>
            </li>
        </ul>
    </div>


<?php $this->beginContent('@app/views/vues/about.php'); ?>
<?php $this->endContent(); ?>
</div>
