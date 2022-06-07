<?php

namespace app\controllers;

use app\models\Inventariomp;
use app\models\InventariompSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * InventariompController implements the CRUD actions for Inventariomp model.
 */
class InventariompController extends Controller
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
     * Lists all Inventariomp models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new InventariompSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Inventariomp model.
     * @param int $id_in Id In
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id_in)
    {
        return $this->render('view', [
            'model' => $this->findModel($id_in),
        ]);
    }

    /**
     * Creates a new Inventariomp model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Inventariomp();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id_in' => $model->id_in]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Inventariomp model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id_in Id In
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id_in)
    {
        $model = $this->findModel($id_in);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_in' => $model->id_in]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Inventariomp model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id_in Id In
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id_in)
    {
        $this->findModel($id_in)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Inventariomp model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id_in Id In
     * @return Inventariomp the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id_in)
    {
        if (($model = Inventariomp::findOne(['id_in' => $id_in])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
