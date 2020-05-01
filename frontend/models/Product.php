<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "product".
 *
 * @property int $ckey
 * @property string|null $tnam
 * @property int|null $cgr
 * @property int|null $it
 *
 * @property ExpD[] $expDs
 * @property InvD[] $invDs
 * @property ProductGroup $cgr0
 * @property Item $it0
 * @property ProductId[] $products
 */
class Product extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'product';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['cgr', 'it'], 'integer'],
            [['tnam'], 'string', 'max' => 102],
            [['cgr'], 'exist', 'skipOnError' => true, 'targetClass' => ProductGroup::className(), 'targetAttribute' => ['cgr' => 'ckey']],
            [['it'], 'exist', 'skipOnError' => true, 'targetClass' => Item::className(), 'targetAttribute' => ['it' => 'id']],
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
            'it' => 'It',
        ];
    }

    /**
     * Gets query for [[ExpDs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getExpDs()
    {
        return $this->hasMany(ExpD::className(), ['product' => 'ckey']);
    }

    /**
     * Gets query for [[InvDs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getInvDs()
    {
        return $this->hasMany(InvD::className(), ['product' => 'ckey']);
    }

    /**
     * Gets query for [[Cgr0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCgrs()
    {
        return $this->hasOne(ProductGroup::className(), ['ckey' => 'cgr']);
    }

    /**
     * Gets query for [[It0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getIts()
    {
        return $this->hasOne(Item::className(), ['id' => 'it']);
    }

    /**
     * Gets query for [[Products]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProducts()
    {
        return $this->hasMany(ProductId::className(), ['id' => 'ckey']);
    }
}
