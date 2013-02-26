<?php

/**
 * This is the model class for table "catalog".
 *
 * The followings are the available columns in table 'catalog':
 * @property integer $id
 * @property string $title
 * @property string $text
 * @property string $keywords
 * @property string $description
 */
class Catalog extends CActiveRecord
{
    const ROOT = 0;

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return Catalog the static model class
     */
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    public static function getItemsArray($except = NULL)
    {
        if (!$except AND $except = intval($except))
            $condition = "id!=$except";
        $models = self::model()->findAll($condition ? $condition : '');
        $return = array(self::ROOT => 'Корневой каталог');
        foreach ($models as $model) {
            $return[$model->id] = $model->title;
        }
        return $return;
    }

    /**
     * @return string the associated database table name
     */
    public function tableName()
    {
        return 'catalog';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules()
    {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('title', 'length', 'max' => 150),
            array('text, keywords, description', 'safe'),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('title, text, keywords, description', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations()
    {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array();
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'id' => 'ID',
            'title' => 'Заголовок',
            'text' => 'Содержание',
            'keywords' => 'Мета-тег Keywords',
            'description' => 'Мета-тег Description',
        );
    }

    /**
     * Retrieves a list of models based on the current search/filter conditions.
     * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
     */
    public function search()
    {
        // Warning: Please modify the following code to remove attributes that
        // should not be searched.

        $criteria = new CDbCriteria;

        $criteria->compare('title', $this->title, TRUE);
        $criteria->compare('text', $this->text, TRUE);
        $criteria->compare('keywords', $this->keywords, TRUE);
        $criteria->compare('description', $this->description, TRUE);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }
}