<?php   $this->registerJsFile('https://unpkg.com/vue', ['position' => \yii\web\View::POS_END]); ?>
<?php  $this->registerJs(<<<JS
        new Vue({
        el:'#app',
        data:{
			rows[],
			products{
			''	
		},
		
		
        }
    })
JS
); ?>


