<?php

namespace app\modules\admin\controllers;

use app\forms\CarBrandUpdateForm;
use app\forms\CarModelCreateForm;
use app\forms\CarModelUpdateForm;
use app\repositories\CarBrandRepository;
use app\repositories\CarModelRepository;
use app\useCases\CarService;
use Yii;
use yii\base\Module;
use app\forms\CarBrandCreateForm;
use app\modules\admin\controllers\AdminBaseController;

class CarController extends AdminBaseController
{
    private $carService;
    private $brandRepository;
    private $modelRepository;

    public function __construct(
        $id,
        Module $module,
        CarService $carService,
        CarBrandRepository $brandRepository,
        CarModelRepository $modelRepository,
        array $config = [])
    {
        $this->carService = $carService;
        $this->brandRepository = $brandRepository;
        $this->modelRepository = $modelRepository;
        parent::__construct($id, $module, $config);
    }

    public function actionBrandIndex()
    {
        return $this->render('brand-index', [
            'dataProvider' => $this->brandRepository->getAllBrands()
        ]);
    }

    public function actionBrandCreate()
    {
        $form = new CarBrandCreateForm();
        if ($form->load(Yii::$app->request->post()) && $form->validate()) {
            try {
                $carBrand = $this->carService->addBrand($form);
                Yii::$app->session->setFlash('success', 'Бренд ' . $carBrand->name . ' был добавлен.');
                return $this->redirect(['/admin/car/brand-update', 'id' => $carBrand->id]);
            } catch (\Exception $e) {
                Yii::$app->session->setFlash('error', $e->getMessage());
            }
        }

        return $this->render('brand-create', [
            'form' => $form
        ]);
    }

    public function actionBrandUpdate(int $id)
    {
        $brand = $this->brandRepository->get($id);
        $form = new CarBrandUpdateForm($brand);

        if ($form->load(Yii::$app->request->post()) && $form->validate()) {
            try {
                $carBrand = $this->carService->editBrand($form, $brand);
                Yii::$app->session->setFlash('success', 'Бренд ' . $carBrand->name . ' был обновлен.');
            } catch (\Exception $e) {
                Yii::$app->session->setFlash('error', $e->getMessage());
            }
        }

        return $this->render('brand-update', [
            'form' => $form
        ]);
    }

    public function actionBrandDelete()
    {

    }

    public function actionModelIndex(int $brandId = null)
    {
        return $this->render('model-index', [
            'dataProvider' => $this->modelRepository->getAllModels($brandId)
        ]);
    }

    public function actionModelCreate()
    {
        $form = new CarModelCreateForm();

        if ($form->load(Yii::$app->request->post()) && $form->validate()) {
            try {
                $carModel = $this->carService->addModel($form);
                Yii::$app->session->setFlash('success', 'Модель ' . $carModel->name . ' была добавлена');
                return $this->redirect(['/admin/car/model-update', 'id' => $carModel->id]);
            } catch (\Exception $e) {
                Yii::$app->session->setFlash('error', $e->getMessage());
            }
        }

        return $this->render('model-create', [
            'form' => $form
        ]);
    }

    public function actionModelUpdate(int $id)
    {
        $model = $this->modelRepository->get($id);
        $form = new CarModelUpdateForm($model);

        if ($form->load(Yii::$app->request->post()) && $form->validate()) {
            try {
                $carModel = $this->carService->editModel($form, $model);
                Yii::$app->session->setFlash('success', 'Модель ' . $carModel->name . ' была обновлена');
            } catch (\Exception $e) {
                Yii::$app->session->setFlash('error', $e->getMessage());
            }
        }

        return $this->render('model-update', [
            'form' => $form
        ]);
    }

    public function actionModelDelete()
    {

    }

    public function actionToggleBrandStatus(int $brandId, bool $status)
    {
        try {
            $this->carService->toggleBrandStatus($brandId, !!$status);
        } catch (\Exception $e) {

        }
        return $this->actionBrandIndex();
    }

    public function actionToggleModelStatus(int $modelId, bool $status)
    {
        try {
            $this->carService->toggleModelStatus($modelId, !!$status);
        } catch (\Exception $e) {

        }
        return $this->actionModelIndex();
    }
}