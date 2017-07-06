<?php
namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use yii\data\SqlDataProvider;

class SiteController extends Controller
{
    /**
     * @inheritdoc
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
     * @inheritdoc
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
        return $this->render('index');
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
        $sql = "
        SELECT ([kode_prov]
            +[kode_kab]
            +[kode_kec]
            +[kode_desa]
            +[nbs]) AS kode_wilayah
            ,[nu]
            ,[kom]
            ,[kode_operator]
            ,[B12_R1201]
            ,(ISNULL([B12_R1201a_1], 0) + ISNULL([B12_R1201a_2], 0) + ISNULL([B12_R1201b], 0) + ISNULL([B12_R1201c], 0) + ISNULL([B12_R1201d], 0) + ISNULL([B12_R1201e], 0) + ISNULL([B12_R1201f], 0)) as TOTAL
            ,[B12_R1202]
            ,(ISNULL([B12_R1202a_1], 0) + ISNULL([B12_R1202a_2], 0) + ISNULL([B12_R1202a_3], 0) + ISNULL([B12_R1202a_4], 0) + ISNULL([B12_R1202b], 0) + ISNULL([B12_R1202c], 0) + ISNULL([B12_R1202d], 0) + ISNULL([B12_R1202e], 0) + ISNULL([B12_R1202f], 0)) AS TOTAL2
        FROM [SOUT2017Sampel].[dbo].[t_rt_ternak]
        ";
        // $sql = "
        // SELECT [kode_prov]
        //     ,[kode_kab]
        //     ,[kode_kec]
        //     ,[kode_desa]
        //     ,[nbs]
        //     ,[nu]
        //     ,[kom]
        //     ,[kode_operator]
        //     ,[B12_R1201]
        //     ,(ISNULL([B12_R1201a_1], 0) + ISNULL([B12_R1201a_2], 0) + ISNULL([B12_R1201b], 0) + ISNULL([B12_R1201c], 0) + ISNULL([B12_R1201d], 0) + ISNULL([B12_R1201e], 0) + ISNULL([B12_R1201f], 0)) as TOTAL
        //     ,[B12_R1202]
        //     ,(ISNULL([B12_R1202a_1], 0) + ISNULL([B12_R1202a_2], 0) + ISNULL([B12_R1202a_3], 0) + ISNULL([B12_R1202a_4], 0) + ISNULL([B12_R1202b], 0) + ISNULL([B12_R1202c], 0) + ISNULL([B12_R1202d], 0) + ISNULL([B12_R1202e], 0) + ISNULL([B12_R1202f], 0)) AS TOTAL2
        // FROM [SOUT2017Sampel].[dbo].[t_rt_ternak]
        // ";

        $arr_sort_attributes = [];

        return $this->render('contact', [
            'provider' => $this->getSqlDataProvider($sql, $arr_sort_attributes),
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        // Ternak
        $sql = '
            SELECT [kode_operator], [realname], COUNT([jumlah_entri]) as [count]
            FROM [SOUT2017Sampel].[dbo].[t_rt_ternak]   
            LEFT JOIN [SOUT2017Sampel].[dbo].[m_operator] 
            ON [SOUT2017Sampel].[dbo].[t_rt_ternak].[kode_operator]=[SOUT2017Sampel].[dbo].[m_operator].[id_operator]
            GROUP BY [kode_operator], [realname]
        ';

        $arr_sort_attributes = [
            'kode_operator',
            'realname',
            'count',
        ];

        // Palawija
        $sql2 = "
            SELECT [kode_operator], [realname], COUNT([jumlah_entri]) as [count]
            FROM [SOUT2017Sampel].[dbo].[t_rt_tp]
            LEFT JOIN [SOUT2017Sampel].[dbo].[m_operator] 
            ON [SOUT2017Sampel].[dbo].[t_rt_tp].[kode_operator]=[SOUT2017Sampel].[dbo].[m_operator].[id_operator]
            GROUP BY [kode_operator], [realname], [flag_dok]
            HAVING [flag_dok]='spw'
        ";

        $arr_sort_attributes2 = [
            'kode_operator',
            'realname',
            'count',
        ];

        // Padi
        $sql3 = "
            SELECT [kode_operator], [realname], COUNT([jumlah_entri]) as [count]
            FROM [SOUT2017Sampel].[dbo].[t_rt_tp]
            LEFT JOIN [SOUT2017Sampel].[dbo].[m_operator] 
            ON [SOUT2017Sampel].[dbo].[t_rt_tp].[kode_operator]=[SOUT2017Sampel].[dbo].[m_operator].[id_operator]
            GROUP BY [kode_operator], [realname], [flag_dok]
            HAVING [flag_dok]='spd'
        ";

        $arr_sort_attributes3 = [
            'kode_operator',
            'realname',
            'count',
        ];


        return $this->render('about', [
            'provider' => $this->getSqlDataProvider($sql, $arr_sort_attributes),
            'provider2' => $this->getSqlDataProvider($sql2, $arr_sort_attributes2),
            'provider3' => $this->getSqlDataProvider($sql3, $arr_sort_attributes3),
        ]);
    }

    public function getSqlDataProvider($sql, $arr_sort_attributes)
    {
        $count = Yii::$app->db->createCommand('SELECT COUNT(*) FROM (' . $sql . ') as count_alias')->queryScalar();

        $provider = new SqlDataProvider([
            'sql' => $sql,
            'totalCount' => $count,
            'pagination' => [
                'pageSize' => 10,
            ],
            'sort' => [
                'attributes' => $arr_sort_attributes,
            ],
        ]);
        return $provider;
    }
}
