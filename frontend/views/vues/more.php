<?php   $this->registerJsFile('https://unpkg.com/vue', ['position' => \yii\web\View::POS_END]); ?>
<?php  $this->registerJs(<<<JS
	Vue.component('rec-item', {
		props: ['todo'],
		template: '<li><b>{{todo.id}}</b> : {{ todo.text }}</li>',
		style: 'li {padding: 10px;}',
	}) 
	new Vue({
	el:'#app',
		data:{
			recList: [
			{id: 'name', text : 'Денис'},
			{id: 'phone', text : '+7(812)942-8310'},
			{id: 'mobile', text : '+7(921)942-8310'},
			{id: 'email', text : 'dentsi@yahoo.com'},
			],
			month: ['Янв','Фев','Марта','Апр','Мая','Июня','Июля','Авг','Сент','Окт','Нояб','Дек'],
			weekday: ['Пн','Вт','Ср','Чт','Пт','Сб','Вс'],
        },
		computed: {
			getDate: function(){ 
				var d=new Date; 
				return this.weekday[d.getDay()] + ' ' + d.getDate() + ' ' + this.month[d.getMonth()] + ' ' + d.getFullYear();
			}
			
		}

    })
JS
); ?>


