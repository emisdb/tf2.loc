<?php

use yii\db\Migration;

/**
 * Class m200501_234230_rename_columns
 */
class m200501_234230_rename_columns extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->renameColumn('item', 'sh_name', 'short_name');
        $this->renameColumn('product', 'ckey', 'id');
        $this->renameColumn('product', 'tnam', 'name');
      $this->renameColumn('product', 'cgr', 'product_group');
      $this->renameColumn('product', 'it', 'item');
        $this->renameColumn('product_group', 'ckey', 'id');
        $this->renameColumn('product_group', 'tnam', 'name');
     $this->renameColumn('product_group', 'cgr', 'product_group');



    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m200501_234230_rename_columns cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200501_234230_rename_columns cannot be reverted.\n";

        return false;
    }
    */
}
