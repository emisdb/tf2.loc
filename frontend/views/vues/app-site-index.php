<?php
		$this->registerJsFile('https://unpkg.com/vue', ['position' => \yii\web\View::POS_END]);
		$pg=new frontend\models\ProductGroup;	$pgjson=$pg->getJSON(); 
		//					<div :style = "{margin-left: product.level * 5 + 'px'}">{{product.name}}<div>


?>
<?php  $this->registerJs(<<<JS
        new Vue({
        el:'#app',
        data:{
			rows:[],
			margin:15,
			products:
			$pgjson,
        }
    })
JS
); ?>


