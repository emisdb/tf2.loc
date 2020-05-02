<?php

use yii\db\Migration;

/**
 * Class m200502_001213_delete_product_groups_and_products
 */
class m200502_001213_add_product_groups extends Migration
{
 	private const RECORDS = [
		[1,'Фигуры плоские',null,1,16,0],
		[2,'с углами',1,2,9,1],
		[3,'без углов',	1,10,15,1],
		[4,'Треугольники',2,3,4,2],
		[5,'Квадраты',2,5,6,2],
		[6,'Трапеции',2,7,8,2],
		[7,'Круги',	3,11,12,2],
		[8,'Овалы',	3,13,14,2],
		[9,'Фигуры объемные',null,17,30,0],
		[10,'круглые',9,18,23,1],
		[11,'угловые',9,24,29,1],
		[12,'Шары',10,19,20,2],
		[13,'Конусы',10,21,22,2],
		[14,'Пирамиды',11,25,26,2],
		[15,'Профили',11,27,28,2],
		[16,'Детали',null,31,38,0],
		[17,'Точки',16,32,33,1],
		[18,'Углы',16,34,35,1],
		[19,'Отрезки',16,36,37,1],
	];
	/**
     * {@inheritdoc}
     */
    public function safeUp()
    {
		$this->batchInsert('product_group', ['id', 'name', 'product_group', 'lf_key', 'rg_key', 'level'], static::RECORDS);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m200502_001213_delete_product_groups_and_products cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200502_001213_delete_product_groups_and_products cannot be reverted.\n";

        return false;
    }
    */
}
