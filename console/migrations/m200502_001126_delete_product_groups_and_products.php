<?php

use yii\db\Migration;

/**
 * Class m200502_001126_delete_product_groups_and_products
 */
class m200502_001126_delete_product_groups_and_products extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
	 $this->delete('product');
	 $this->delete('product_group');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m200502_001126_delete_product_groups_and_products cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200502_001126_delete_product_groups_and_products cannot be reverted.\n";

        return false;
    }
    */
}
