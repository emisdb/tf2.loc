<?php   $this->registerJsFile('https://unpkg.com/vue', ['position' => \yii\web\View::POS_END]); ?>
<?php  $this->registerCSS(<<<CSS
	figure {
		background: #5f6ab2; /* Цвет фона */
		padding: 10px; /* Поля вокруг */
		display: block; /* Блочный элемент */
		width: 300px; /* Ширина */
		float: left; /* Блоки выстраиваются по горизонтали */
		margin: 0 10px 10px 0; /* Отступы */
		text-align: center; /* Выравнивание по центру */
   }
	figure img{
		height: 150px;
	}
   figcaption {
		background: #533; /* Цвет фона */
		color: #ff5; /* Цвет текста */
   }
		
CSS
); ?>
<?php  $this->registerJs(<<<JS
	Vue.component('figure-item', {
		props: ['item'],
		template: '#v-figure',
		style: 'figure {border: black 2px;}',
	}) 
        new Vue({
        el:'#app',
        data:{
		
			places: [
			{ title:'FORWARD IRIS',url:'https://www.velodrive.ru/upload/resize_cache/iblock/caa/300_300_1/forward_26_iris_1_gold.jpg'},	
			{ title:'STELS Navigator',url:'https://www.velodrive.ru/upload/iblock/38c/9a1ec878b2d9a8477f6b5c9b5f580bc0.jpeg'},	
			{ title:'FORWARD FLASH',url:'https://www.velodrive.ru/upload/iblock/16d/forward_26_flash_1_black_gray.jpg'},	
			{ title:'STELS Miss 5000',url:'https://www.velodrive.ru/upload/iblock/9f7/Miss_5000_MD_26_V010_turquoise.jpg'},	
			{ title:'Aist Citizen 26 ',url:'https://www.velodrive.ru/upload/resize_cache/iblock/e43/300_300_1/Citizen.jpg'},	
			{ title:'DEWOLF Ridly',url:'https://www.velodrive.ru/upload/resize_cache/iblock/0d6/300_300_1/Ridly_20_1_.jpg'},	
			],
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


