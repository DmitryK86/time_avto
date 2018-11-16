<?php

namespace app\useCases;

use app\forms\CarBrandCreateForm;
use app\forms\CarBrandUpdateForm;
use app\forms\CarModelCreateForm;
use app\forms\CarModelUpdateForm;
use app\models\CarBrand;
use app\models\CarModel;
use app\repositories\CarBrandRepository;
use app\repositories\CarModelRepository;

class CarService
{
    private $brandRepository;
    private $modelRepository;

    public function __construct(CarBrandRepository $brandRepository, CarModelRepository $modelRepository)
    {
        $this->brandRepository = $brandRepository;
        $this->modelRepository = $modelRepository;
    }

    public function addBrand(CarBrandCreateForm $form): CarBrand
    {
        $carBrand = CarBrand::create(
            $form->name,
            $form->logo,
            $form->description,
            $form->status
        );

        $this->brandRepository->save($carBrand);
        return $carBrand;
    }

    public function editBrand(CarBrandUpdateForm $form, CarBrand $brand): CarBrand
    {
        $brand->name = $form->name;
        $brand->logo = $form->logo;
        $brand->description = $form->description;
        $brand->status = $form->status;

        $this->brandRepository->save($brand);
        return $brand;
    }

    public function addModel(CarModelCreateForm $form): CarModel
    {
        $carModel = CarModel::create(
            $form->name,
            $form->description,
            $form->status,
            $form->car_brand_id
        );

        $this->modelRepository->save($carModel);
        return $carModel;
    }

    public function editModel(CarModelUpdateForm $form, CarModel $model): CarModel
    {
        $model->name = $form->name;
        $model->description = $form->description;
        $model->status = $form->status;
        $model->car_brand_id = $form->car_brand_id;

        $this->modelRepository->save($model);
        return $model;
    }

    public function toggleBrandStatus(int $id, bool $status): void
    {
        $brand = $this->brandRepository->get($id);
        $brand->status = !$status;
        $this->brandRepository->save($brand);
    }

    public function toggleModelStatus(int $id, bool $status): void
    {
        $model = $this->modelRepository->get($id);
        $model->status = !$status;
        $this->modelRepository->save($model);
    }
}