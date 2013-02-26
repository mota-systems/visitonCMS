<?php

/**
 * This is the model class for table "jobs".
 *
 * The followings are the available columns in table 'jobs':
 * @property integer $id
 * @property integer $parent
 * @property string $title
 * @property string $image
 * @property string $text
 * @property string $keywords
 * @property string $description
 */
class Jobs extends CActiveRecord
{
    const ROOT = 0;
    public $uploadPath = '/pics';

    /**
     * Returns the static model of the specified AR class.
     * @param string $className active record class name.
     * @return Jobs the static model class
     */
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    /**
     * @return string the associated database table name
     */
    public function tableName()
    {
        return 'jobs';
    }

    public function children($id=0){
        $this->getDbCriteria()->mergeWith(array(
            'condition'=>'parent='.$id,
        ));
        return $this;
    }

    public static function getItemsArray($except = NULL)
    {
        $condition = '';
        if ($except AND $except = intval($except))
            $condition = "id!=$except";
        $models = self::model()->findAll($condition);
        $return = array(self::ROOT => 'Корневой каталог');
        foreach ($models as $model) {
            $return[$model->id] = $model->title;
        }
        return $return;
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules()
    {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('title', 'required'),
            array('parent', 'numerical', 'integerOnly' => TRUE),
            array('title', 'length', 'max' => 150),
            array('text, keywords, description', 'safe'),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('parent, title, text, keywords, description', 'safe', 'on' => 'search'),
        );
    }

    public function behaviors()
    {
        return array(
            // наше поведение для работы с файлом
            'uploadableFile' => array(
                'class' => 'application.components.UploadableFileBehavior',
                // конфигурируем нужные свойства класса UploadableFileBehavior
                // ...
            ),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'parent' => 'Родительский каталог',
            'title' => 'Заголовок',
            'image' => 'Изображение',
            'text' => 'Содержание',
            'keywords' => 'Мета-тег "Keywords"',
            'description' => 'Мета-тег "Description"',
        );
    }

    public static function encodeParent($parent)
    {
        if(intval($parent) == self::ROOT)
            return 'Корневой каталог';
        $model = self::model()->findByAttributes(array('parent'=>intval($parent)));
        return is_null($model) ? 'Не указан' : $model->title;
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
//        if ($this->parent)
        $criteria->compare('parent', $this->parent);
        $criteria->compare('title', $this->title, TRUE);
        $criteria->compare('text', $this->text, TRUE);
        $criteria->compare('keywords', $this->keywords, TRUE);
        $criteria->compare('description', $this->description, TRUE);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }
}