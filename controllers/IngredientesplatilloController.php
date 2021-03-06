<?php

namespace app\controllers;

use app\models\Ingredientesplatillo;
use app\models\IngredientesplatilloSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use app\models\Platillos;
use app\models\PlatillosSearch;

/**
 * IngredientesplatilloController implements the CRUD actions for Ingredientesplatillo model.
 */
class IngredientesplatilloController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all Ingredientesplatillo models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new IngredientesplatilloSearch();

        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Ingredientesplatillo model.
     * @param int $id_ingrdte_platillo Id Ingrdte Platillo
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id_ingrdte_platillo)
    {
        return $this->render('view', [
            'model' => $this->findModel($id_ingrdte_platillo),
        ]);
    }

    /**
     * Creates a new Ingredientesplatillo model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Ingredientesplatillo();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                $modelPlatillo = Platillos::find()->where(['id_platillo'=>$model->id_platillo])->one();
                $modelPlatillo->costo_produccion = $this->calculatorCostProd($model->id_platillo);
                $modelPlatillo->save();
                return $this->redirect(['platillos/view', 'id_platillo' => $model->id_platillo]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Ingredientesplatillo model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id_ingrdte_platillo Id Ingrdte Platillo
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id_ingrdte_platillo)
    {
        $model = $this->findModel($id_ingrdte_platillo);

        $modelPlatillo = Platillos::find()->where(['id_platillo'=>$model->id_platillo])->one();

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            $modelPlatillo->costo_produccion = $this->calculatorCostProd($model->id_platillo);
            $modelPlatillo->save();
            return $this->redirect(['platillos/view', 'id_platillo' => $model->id_platillo]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
        
    }

    /**
     * Deletes an existing Ingredientesplatillo model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id_ingrdte_platillo Id Ingrdte Platillo
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id_ingrdte_platillo)
    {
        $model = Ingredientesplatillo::find()->where(['id_ingrdte_platillo'=>$id_ingrdte_platillo])->one();
        $modelPlatillo = Platillos::find()->where(['id_platillo'=>$model->id_platillo])->one();

        $this->findModel($id_ingrdte_platillo)->delete();

        $modelPlatillo->costo_produccion = $this->calculatorCostProd($modelPlatillo->id_platillo);
        $modelPlatillo->save();
        return $this->redirect(['platillos/view', 'id_platillo' => $modelPlatillo->id_platillo]);
    }

    /**
     * Finds the Ingredientesplatillo model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id_ingrdte_platillo Id Ingrdte Platillo
     * @return Ingredientesplatillo the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id_ingrdte_platillo)
    {
        if (($model = Ingredientesplatillo::findOne(['id_ingrdte_platillo' => $id_ingrdte_platillo])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    protected function calculatorCostProd($id_platillo) {
        $modelIngredientes = Ingredientesplatillo::find()->where(['id_platillo'=>$id_platillo])->all();

        $costoTotal = 0;

        foreach($modelIngredientes as $item): {            
            $costoTotal += $item->cantidad_ingrdte * $item->costo_total_ingrdte;
        }
    
        endforeach;
        return $costoTotal;
    }
}
