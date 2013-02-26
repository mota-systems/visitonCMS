<?php
/**
 * Created by JetBrains PhpStorm.
 * User: mota-systems
 * Date: 08.02.13
 * Time: 1:53
 * To change this template use File | Settings | File Templates.
 */
class BaseController extends Controller
{
    public $layout = '//layouts/column1';
    public $metaKeywords, $metaDescription;

    public function getMenuItems()
    {
        $model = Page::model()->findAll();
        $items = array();
        foreach ($model as $item) {
            $items[] = empty($item->link) ? array('label' => $item->title, 'url' => array('/')) : array('label' => $item->title, 'url' => array("/$item->link"));
        }
        $menu = array();
        for ($i = 0; $i <= 1; $i++) {
            $menu[$i] = $items[$i];
            unset($items[$i]);
        }

        $menu[] = array('label' => 'Каталог', 'url' => array('/catalog/index'));
        $menu[] = array('label' => 'Виды работ', 'url' => array('/vidy_rabot'));
        foreach ($items as $item) {
            $menu[] = $item;
        }
        return $menu;
    }

}
