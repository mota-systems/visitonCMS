<?php

class SiteController extends BaseController
{

    public function actionPage()
    {
        $this->render('//page/view', array('model' => Page::model()->findByAttributes(array('link' => Yii::app()->request->pathInfo))));
    }

    /**
     * This is the action to handle external exceptions.
     */
    public function actionError()
    {
        if ($error = Yii::app()->errorHandler->error) {
            if (Yii::app()->request->isAjaxRequest)
                echo $error['message'];
            else
                $this->render('error', $error);
        }
    }

}