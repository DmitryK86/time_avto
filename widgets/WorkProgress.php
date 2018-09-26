<?php
namespace app\widgets;

use yii\base\Widget;

class WorkProgress extends Widget
{
    public $model;

    public function run()
    {
        $path = $this->getFolderPath();
        return $this->render('workProgress', ['model' => $this->model, 'files' => $this->getFilesNames($path)]);
    }

    protected function getFolderPath()
    {
        return \Yii::getAlias('@webroot') . '/img/progress/' . $this->model->slug . DIRECTORY_SEPARATOR;
    }

    protected function getFilesNames($path)
    {
        $result  = [];
        foreach (scandir($path) as $file){
            if (is_dir($file)){
                continue;
            }

            $result[] = $file;
        }

        return $result;
    }
}