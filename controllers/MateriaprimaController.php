<?php

namespace app\controllers;

use app\models\Materiaprima;
use app\models\MateriaprimaSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * MateriaprimaController implements the CRUD actions for Materiaprima model.
 */
class MateriaprimaController extends Controller
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
     * Lists all Materiaprima models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new MateriaprimaSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Materiaprima model.
     * @param string $id_mp Id Mp
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id_mp)
    {
        return $this->render('view', [
            'model' => $this->findModel($id_mp),
        ]);
    }

    /**
     * Creates a new Materiaprima model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Materiaprima();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id_mp' => $model->id_mp]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Materiaprima model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $id_mp Id Mp
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id_mp)
    {
        $model = $this->findModel($id_mp);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_mp' => $model->id_mp]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Materiaprima model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $id_mp Id Mp
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id_mp)
    {
        $this->findModel($id_mp)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Materiaprima model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id_mp Id Mp
     * @return Materiaprima the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id_mp)
    {
        if (($model = Materiaprima::findOne(['id_mp' => $id_mp])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
