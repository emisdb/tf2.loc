<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "product_group".
 *
 * @property int $ckey
 * @property string $tnam
 * @property int|null $cgr
 * @property int|null $lf_key
 * @property int|null $rg_key
 * @property int|null $level
 *
 * @property Product[] $products
 * @property ProductGroup $cgr0
 * @property ProductGroup[] $productGroups
 * @property ProductgroupId[] $productgroups
 */
class ProductGroup extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'product_group';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tnam'], 'required'],
            [['cgr', 'lf_key', 'rg_key', 'level'], 'integer'],
            [['tnam'], 'string', 'max' => 32],
            [['cgr'], 'exist', 'skipOnError' => true, 'targetClass' => ProductGroup::className(), 'targetAttribute' => ['cgr' => 'ckey']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ckey' => 'Ckey',
            'tnam' => 'Tnam',
            'cgr' => 'Cgr',
            'lf_key' => 'Lf Key',
            'rg_key' => 'Rg Key',
            'level' => 'Level',
        ];
    }

    /**
     * Gets query for [[Products]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProducts()
    {
        return $this->hasMany(Product::className(), ['cgr' => 'ckey']);
    }

    /**
     * Gets query for [[Cgr0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCgr0()
    {
        return $this->hasOne(ProductGroup::className(), ['ckey' => 'cgr']);
    }

    /**
     * Gets query for [[ProductGroups]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProductGroups()
    {
        return $this->hasMany(ProductGroup::className(), ['cgr' => 'ckey']);
    }

 }
