<?php

namespace app\controllers;

use app\models\Appeal;
use app\models\Words;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        //$this->layout = 'new';
        $appeals = Appeal::find()->asArray()->all();
        return $this->render('index', compact('appeals'));
    }

    public function actionAppeal($id)
    {
        $app = Appeal::find()->where(['id' => $id])->asArray()->one();

        $words = Words::find()->asArray()->all();
        $words_arr = array();
        $key_words = array();
        foreach ($words as $word)
        {

            if (preg_match_all("/" . $word['text'] . "/i", mb_convert_case($app['text'], MB_CASE_LOWER, "UTF-8")))
            {
                $key_words[] = $word['tag'];
                $words_arr[] = $word;
            }
        }
        $str = '0';
        foreach ($words_arr as $item)
        {
            $str .= ',' .$item['id'];
        }

        $query = "select t.*, stat.cnt
                        from templates t 
                            join (SELECT t.id, count(*) as cnt 
                                FROM templates t, links_wt l 
                                WHERE t.id = l.template_id AND l.word_id IN(" . $str . ")
                                group by t.id) stat on stat.id = t.id
                         order by cnt desc";
        $connection = Yii::$app->getDb();
        $command = $connection->createCommand($query);

        $result = $command->queryAll();

        return $this->render('appeal', compact('app', 'result', 'key_words'));
    }

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        $model->password = '';
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about');
    }
}
