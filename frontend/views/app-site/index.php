<?php
use yii\helpers\Html;
/* @var $this yii\web\View */

$this->title = 'My Yii Application';
	$pg=new frontend\models\ProductGroup;	$pgtree=$pg->getTree(); 

?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Congratulations!</h1>

        <p class="lead"><?= Yii::$app->formatter->asDate($date, 'php: d mm Y'); ?></p>

        <p><a class="btn btn-lg btn-success" href="http://www.yiiframework.com">Get started with Yii</a></p>
    </div>

    <div class="body-content">
		<div id = "app">
			<ul class='list-unstyled'>
				<li v-for="product in products"  >
					<a href="#" v-bind:value="product.id" v-bind:style="{'margin-left': margin * product.level + 'px'}">{{product.name}}</a>	
				</li>
			</ul>
		</div>
		<hr>
		<div class="dropdown">
			 <a id="dLabel" role="button" data-toggle="dropdown" class="btn btn-primary" data-target="#" href="#">
                Товары в группах <span class="caret"></span>
            </a>
			<ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
				<?php $level=0; $item=[]; $par_item=[]; $in_items=&$item; $counter=0; ?>
				<?php foreach ($pgtree as $product): ?>
					<?php if ($product['level'] < $level): ?>
						<?php $item = &$par_item[$product['level']]; ?>
						<?php for ($i = $product['level']; $i < $level; $i++): ?>
								</ul>
							  </li>
						<?php endfor ?>
					<?php endif ?>				
					<?php 
						$level=$product['level'];
					?>
					<?php if ($product['parent'] == 0): ?>
						<li>
							<?= Html::a($product['name'], '#',['value'=>$product['id']]) ?>
							<?php
							$item[] = ['label' => $product['name'], 'url' => '#', 'lvl' => $product['level']];							
							?>
						</li>
					<?php else: ?>
						<?php 
								$curitem = &$item[];
								$curitem = ['label' => $product['name'], 'url' => '#','lvl' => $product['level'],'items'=>[]];
								$par_item[$product['level']] =&$item;
								$item = &$curitem['items'];
							?>
						<li class="dropdown-submenu">
							<?= Html::a($product['name'], '#',['value'=>$product['id'], 'tabindex'=>"-1"]) ?>
								<ul class="dropdown-menu">
					<?php endif ?>
				<?php endforeach ?>
				<?php for ($i = 0; $i < $level; $i++): ?>
						</ul>
					  </li>
				<?php endfor ?>
			</ul>
 		</div>
		<hr>
		  <?php
//		  echo "<pre>";
//				var_dump($in_items);
//				echo '<hr>';
//				var_dump($par_item);
//		  echo "</pre>";
				echo dmstr\widgets\Menu::widget(
		  [
                'options' => ['class' => 'sidebar-menu tree', 'data-widget'=> 'tree'],
                'items' => $in_items,
			  ]);
						?>

		<hr>

  <div class="dropdown">
      <a id="dLabel" role="button" data-toggle="dropdown" class="btn btn-primary" data-target="#" href="#">
                Dropdown <span class="caret"></span>
            </a>
	  <ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
        <li><a href="#">Some action</a></li>
        <li class="divider"></li>
       <li><a href="#">Some other action</a></li>
         <li class="dropdown-submenu">
          <a tabindex="-1" href="#">Hover me for more options</a>
          <ul class="dropdown-menu">
            <li><a tabindex="-1" href="#">Second level</a></li>
            <li class="dropdown-submenu">
              <a href="#">Even More..</a>
              <ul class="dropdown-menu">
                <li><a href="#">3rd level</a></li>
                <li><a href="#">3rd level</a></li>
              </ul>
            </li>
            <li><a href="#">Second level</a></li>
            <li><a href="#">Second level</a></li>
          </ul>
        </li>
      </ul>
 		</div>
        <div class="row">

        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Responsive Hover Table</h3>

              <div class="box-tools">
                <div class="input-group input-group-sm hidden-xs" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tbody><tr>
                  <th>ID</th>
                  <th>User</th>
                  <th>Date</th>
                  <th>Status</th>
                  <th>Reason</th>
                </tr>
                <tr>
                  <td>183</td>
                  <td>John Doe</td>
                  <td>11-7-2014</td>
                  <td><span class="label label-success">Approved</span></td>
                  <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                </tr>
                <tr>
                  <td>219</td>
                  <td>Alexander Pierce</td>
                  <td>11-7-2014</td>
                  <td><span class="label label-warning">Pending</span></td>
                  <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                </tr>
                <tr>
                  <td>657</td>
                  <td>Bob Doe</td>
                  <td>11-7-2014</td>
                  <td><span class="label label-primary">Approved</span></td>
                  <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                </tr>
                <tr>
                  <td>175</td>
                  <td>Mike Doe</td>
                  <td>11-7-2014</td>
                  <td><span class="label label-danger">Denied</span></td>
                  <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                </tr>
              </tbody></table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        </div>
    </div>
<?php $this->beginContent('@app/views/vues/app-site-index.php'); ?>
<?php $this->endContent(); ?>
</div>
