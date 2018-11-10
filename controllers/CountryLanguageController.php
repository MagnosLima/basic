<?php

namespace app\controllers;

use Yii;
use app\models\CountryLanguage;
use app\models\CountryLanguageSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * CountryLanguageController implements the CRUD actions for CountryLanguage model.
 */
class CountryLanguageController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all CountryLanguage models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new CountryLanguageSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single CountryLanguage model.
     * @param string $CountryCode
     * @param string $Language
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($CountryCode, $Language)
    {
        return $this->render('view', [
            'model' => $this->findModel($CountryCode, $Language),
        ]);
    }

    /**
     * Creates a new CountryLanguage model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new CountryLanguage();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'CountryCode' => $model->CountryCode, 'Language' => $model->Language]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing CountryLanguage model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $CountryCode
     * @param string $Language
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($CountryCode, $Language)
    {
        $model = $this->findModel($CountryCode, $Language);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'CountryCode' => $model->CountryCode, 'Language' => $model->Language]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing CountryLanguage model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $CountryCode
     * @param string $Language
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($CountryCode, $Language)
    {
        $this->findModel($CountryCode, $Language)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the CountryLanguage model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $CountryCode
     * @param string $Language
     * @return CountryLanguage the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($CountryCode, $Language)
    {
        if (($model = CountryLanguage::findOne(['CountryCode' => $CountryCode, 'Language' => $Language])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException(Yii::t('app', 'The requested page does not exist.'));
    }
}
