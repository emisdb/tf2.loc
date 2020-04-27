<h6> VUE.JS PRACTICE</h6>
<?php   $this->registerJsFile('https://cdn.jsdelivr.net/npm/vue/dist/vue.js', ['position' => \yii\web\View::POS_END]); ?>
<?php  $this->registerJs(<<<JS
        new Vue({
        el:'#app',
        data:{
            name: 'Денис',
            phone: '+7(812)942-8310',
            phone2: '+7(921)942-8310',
            email: 'dentsi@yahoo.com',
        }
    })
JS
); ?>


