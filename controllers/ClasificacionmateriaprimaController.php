<?php

namespace app\controllers;

use app\models\Clasificacionmateriaprima;
use app\models\ClasificacionmateriaprimaSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ClasificacionmateriaprimaController implements the CRUD actions for Clasificacionmateriaprima model.
 */
class ClasificacionmateriaprimaController extends Controller
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
     * Lists all Clasificacionmateriaprima models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new ClasificacionmateriaprimaSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Clasificacionmateriaprima model.
     * @param string $id_clasificacion Id Clasificacion
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id_clasificacion)
    {
        return $this->render('view', [
            'model' => $this->findModel($id_clasificacion),
        ]);
    }

    /**
     * Creates a new Clasificacionmateriaprima model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Clasificacionmateriaprima();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id_clasificacion' => $model->id_clasificacion]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Clasificacionmateriaprima model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $id_clasificacion Id Clasificacion
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id_clasificacion)
    {
        $model = $this->findModel($id_clasificacion);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_clasificacion' => $model->id_clasificacion]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Clasificacionmateriaprima model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $id_clasificacion Id Clasificacion
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id_clasificacion)
    {
        $this->findModel($id_clasificacion)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Clasificacionmateriaprima model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id_clasificacion Id Clasificacion
     * @return Clasificacionmateriaprima the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id_clasificacion)
    {
        if (($model = Clasificacionmateriaprima::findOne(['id_clasificacion' => $id_clasificacion])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
