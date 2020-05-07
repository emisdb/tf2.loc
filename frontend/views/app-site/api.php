<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

$this->title = "Спб данные";
$this->registerCSS(<<<CSS
.result-data td{
  padding: 3px;
}
.result-data   td:first-of-type {
    background: #CFD6D3; /* Цвет фона */
	text-align: right;
   }

CSS
); 
?>
<section class="content">

<div class="site-index">
        <h2 class="headline text-info"><i class="fa fa-warning text-yellow"></i>Данные санкт-петербургского правительства</h2>

     <div>
		 <table border="1" class="result-data">
			 <thead>
				 <tr>
					 <th>ID</th>
					 <th>Наименование</th>
				 </tr>
			 </thead>
			 <tbody>

				<?php foreach ($data as $dset): ?>
				 <tr>
					 <td><?=$dset['id'];?></td>
					 <td><?=$dset['name'];?></td>
				 </tr>
				<?php endforeach ?>
			 </tbody>
		 </table>

     </div>
</div>

</section>
