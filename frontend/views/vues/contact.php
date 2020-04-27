<h6> VUE.JS PRACTICE</h6>
<?php   $this->registerJsFile('https://cdn.jsdelivr.net/npm/vue/dist/vue.js', ['position' => \yii\web\View::POS_END]); ?>
<?php  $this->registerJs(<<<JS
        new Vue({
        el:'#app',
        data:{
            name: 'Денис',
            link: 'http://emisdb.ru',
            brand: 'EMIS.DB',
            mail: '<a href="mailto:dentsi@yahoo.com">Mail to me</a>',
        },
        methods:{
            changeName: function(e){
             this.name = e.target.value;
            },
            mouseOn: function(e){
                e.target.style.color="red";
                e.target.style.fontWeight="bold";
               e.target.style.textAlign="center";
            },
            mouseOut: function(e){
                e.target.style.color="black";
                e.target.style.fontWeight="normal";
               e.target.style.textAlign="left";
            },
        }
    })
JS
); ?>


