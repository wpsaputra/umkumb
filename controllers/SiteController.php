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

    public function actionProgress()
    {
        return $this->render('progress');
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
        // Ternak
        $sql = "
        SELECT b.kode_wilayah, b.nu, b.kom,b.kode_operator, b.realname, b.B12_R1201, b.TOTAL, b.B12_R1202, b.TOTAL2, b.b1_r113, CAST([start_entry] as DATE) as [start_entry] 
        FROM 
        (SELECT ([SOUT2017Sampel].[dbo].[t_rt_ternak].[kode_prov]
            +[SOUT2017Sampel].[dbo].[t_rt_ternak].[kode_kab]
            +[kode_kec]
            +[kode_desa]
            +[nbs]) AS kode_wilayah
            ,[nu]
            ,[kom]
            ,[b1_r113]
            ,[start_entry]
            ,[kode_operator]
            ,[realname]
            ,[B12_R1201]
            ,(ISNULL([B12_R1201a_1], 0) + ISNULL([B12_R1201a_2], 0) + ISNULL([B12_R1201b], 0) + ISNULL([B12_R1201c], 0) + ISNULL([B12_R1201d], 0) + ISNULL([B12_R1201e], 0) + ISNULL([B12_R1201f], 0)) as TOTAL
            ,[B12_R1202]
            ,(ISNULL([B12_R1202a_1], 0) + ISNULL([B12_R1202a_2], 0) + ISNULL([B12_R1202a_3], 0) + ISNULL([B12_R1202a_4], 0) + ISNULL([B12_R1202b], 0) + ISNULL([B12_R1202c], 0) + ISNULL([B12_R1202d], 0) + ISNULL([B12_R1202e], 0) + ISNULL([B12_R1202f], 0)) AS TOTAL2
            FROM [SOUT2017Sampel].[dbo].[t_rt_ternak]
            LEFT JOIN [SOUT2017Sampel].[dbo].[m_operator] 
            ON [SOUT2017Sampel].[dbo].[t_rt_ternak].[kode_operator]=[SOUT2017Sampel].[dbo].[m_operator].[id_operator]
            GROUP BY [kode_operator], [realname], [SOUT2017Sampel].[dbo].[t_rt_ternak].[kode_prov], [SOUT2017Sampel].[dbo].[t_rt_ternak].[kode_kab], [kode_kec], [kode_desa], [nbs], [nu], [kom], [kode_operator], [B12_R1201]
                ,[B12_R1201a_1]
                ,[B12_R1201a_2]
                ,[B12_R1201b]
                ,[B12_R1201c]
                ,[B12_R1201d]
                ,[B12_R1201e]
                ,[B12_R1201f]
                ,[B12_R1202]
                ,[B12_R1202a_1]
                ,[B12_R1202a_2]
                ,[B12_R1202a_3]
                ,[B12_R1202a_4]
                ,[B12_R1202b]
                ,[B12_R1202c]
                ,[B12_R1202d]
                ,[B12_R1202e]
                ,[B12_R1202f]
                ,[b1_r113]
                ,[start_entry]) b
        ";

        $arr_sort_attributes = [
            'kode_wilayah',
            'nu',
            'kom',
            'kode_operator',
            'realname',
            'B12_R1201',
            'TOTAL',
            'B12_R1202',
            'TOTAL2',
            'b1_r113',
            'start_entry'

        ];
        
        // Palawija
        $sql2 = "
        SELECT b.kode_wilayah, b.nu, b.kom,b.kode_operator, b.realname, b.b14_r1405a_k2, b.TOTAL, b.b14_r1405b_4k2, b.TOTAL2, b.b1_r113, CAST([start_entry] as DATE) as [start_entry] 
        FROM
        (SELECT ([SOUT2017Sampel].[dbo].[t_rt_tp].[kode_prov]
            +[SOUT2017Sampel].[dbo].[t_rt_tp].[kode_kab]
            +[kode_kec]
            +[kode_desa]
            +[nbs]) AS kode_wilayah
            ,[nu]
            ,[kom]
            ,[b1_r113]
            ,[start_entry]
            ,[kode_operator]
            ,[realname]
            ,[b14_r1405a_k2]
            ,(ISNULL([b14_r1405a_1k2], 0) + ISNULL([b14_r1405a_2k2], 0)) AS TOTAL
            ,[b14_r1405b_4k2]
            ,(ISNULL([b14_r1405b_4i_k2], 0) + ISNULL([b14_r1405b_4ii_k2], 0)) AS TOTAL2
        FROM [SOUT2017Sampel].[dbo].[t_rt_tp]
        LEFT JOIN [SOUT2017Sampel].[dbo].[m_operator] 
        ON [SOUT2017Sampel].[dbo].[t_rt_tp].[kode_operator]=[SOUT2017Sampel].[dbo].[m_operator].[id_operator]
        GROUP BY [kode_operator], [realname], [SOUT2017Sampel].[dbo].[t_rt_tp].[kode_prov], [SOUT2017Sampel].[dbo].[t_rt_tp].[kode_kab], [kode_kec], [kode_desa], [nbs], [nu], [kom]
                ,[b14_r1405a_k2]
                ,[b14_r1405a_1k2]
                ,[b14_r1405a_2k2]
                ,b14_r1405b_4k2
                ,[b14_r1405b_4i_k2]
                ,[b14_r1405b_4ii_k2]
                ,[flag_dok]
                ,[b1_r113]
                ,[start_entry]
        HAVING [flag_dok]='spw') b
        ";

        $arr_sort_attributes2 = [
            'kode_wilayah',
            'nu',
            'kom',
            'kode_operator',
            'realname',
            'b14_r1405a_k2',
            'TOTAL',
            'b14_r1405b_4k2',
            'TOTAL2',
            'b1_r113',
            'start_entry'

        ];

        // Padi
        $sql3 = "
        SELECT b.kode_wilayah, b.nu, b.kom,b.kode_operator, b.realname, b.b14_r1405a_k2, b.TOTAL, b.b14_r1405b_4k2, b.TOTAL2, b.b1_r113, CAST([start_entry] as DATE) as [start_entry] 
        FROM
        (SELECT ([SOUT2017Sampel].[dbo].[t_rt_tp].[kode_prov]
            +[SOUT2017Sampel].[dbo].[t_rt_tp].[kode_kab]
            +[kode_kec]
            +[kode_desa]
            +[nbs]) AS kode_wilayah
            ,[nu]
            ,[kom]
            ,[b1_r113]
            ,[start_entry]
            ,[kode_operator]
            ,[realname]
            ,[b14_r1405a_k2]
            ,(ISNULL([b14_r1405a_1k2], 0) + ISNULL([b14_r1405a_2k2], 0)) AS TOTAL
            ,[b14_r1405b_4k2]
            ,(ISNULL([b14_r1405b_4i_k2], 0) + ISNULL([b14_r1405b_4ii_k2], 0)) AS TOTAL2
        FROM [SOUT2017Sampel].[dbo].[t_rt_tp]
        LEFT JOIN [SOUT2017Sampel].[dbo].[m_operator] 
        ON [SOUT2017Sampel].[dbo].[t_rt_tp].[kode_operator]=[SOUT2017Sampel].[dbo].[m_operator].[id_operator]
        GROUP BY [kode_operator], [realname], [SOUT2017Sampel].[dbo].[t_rt_tp].[kode_prov], [SOUT2017Sampel].[dbo].[t_rt_tp].[kode_kab], [kode_kec], [kode_desa], [nbs], [nu], [kom]
                ,[b14_r1405a_k2]
                ,[b14_r1405a_1k2]
                ,[b14_r1405a_2k2]
                ,b14_r1405b_4k2
                ,[b14_r1405b_4i_k2]
                ,[b14_r1405b_4ii_k2]
                ,[flag_dok]
                ,[b1_r113]
                ,[start_entry]
        HAVING [flag_dok]='spd') b
        ";

        $arr_sort_attributes3 = [
            'kode_wilayah',
            'nu',
            'kom',
            'kode_operator',
            'realname',
            'b14_r1405a_k2',
            'TOTAL',
            'b14_r1405b_4k2',
            'TOTAL2',
            'b1_r113',
            'start_entry'

        ];



        $default_order = [];

        return $this->render('contact', [
            'provider' => $this->getSqlDataProvider($sql, $arr_sort_attributes, $default_order),
            'provider2' => $this->getSqlDataProvider($sql2, $arr_sort_attributes2, $default_order),
            'provider3' => $this->getSqlDataProvider($sql3, $arr_sort_attributes3, $default_order),

        ]);
    }

    public function actionXyz()
    {
        // Ternak
        $sql = "
        SELECT b.kode_wilayah, b.nu, b.kom,b.kode_operator, b.realname, b.B12_R1201, b.TOTAL, b.B12_R1202, b.TOTAL2, b.b1_r113, CAST([start_entry] as DATE) as [start_entry] 
        FROM 
        (SELECT ([SOUT2017Sampel].[dbo].[t_rt_ternak].[kode_prov]
            +[SOUT2017Sampel].[dbo].[t_rt_ternak].[kode_kab]
            +[kode_kec]
            +[kode_desa]
            +[nbs]) AS kode_wilayah
            ,[nu]
            ,[kom]
            ,[b1_r113]
            ,[start_entry]
            ,[kode_operator]
            ,[realname]
            ,[B12_R1201]
            ,(ISNULL([B12_R1201a_1], 0) + ISNULL([B12_R1201a_2], 0) + ISNULL([B12_R1201b], 0) + ISNULL([B12_R1201c], 0) + ISNULL([B12_R1201d], 0) + ISNULL([B12_R1201e], 0) + ISNULL([B12_R1201f], 0)) as TOTAL
            ,[B12_R1202]
            ,(ISNULL([B12_R1202a_1], 0) + ISNULL([B12_R1202a_2], 0) + ISNULL([B12_R1202a_3], 0) + ISNULL([B12_R1202a_4], 0) + ISNULL([B12_R1202b], 0) + ISNULL([B12_R1202c], 0) + ISNULL([B12_R1202d], 0) + ISNULL([B12_R1202e], 0) + ISNULL([B12_R1202f], 0)) AS TOTAL2
            FROM [SOUT2017Sampel].[dbo].[t_rt_ternak]
            LEFT JOIN [SOUT2017Sampel].[dbo].[m_operator] 
            ON [SOUT2017Sampel].[dbo].[t_rt_ternak].[kode_operator]=[SOUT2017Sampel].[dbo].[m_operator].[id_operator]
            GROUP BY [kode_operator], [realname], [SOUT2017Sampel].[dbo].[t_rt_ternak].[kode_prov], [SOUT2017Sampel].[dbo].[t_rt_ternak].[kode_kab], [kode_kec], [kode_desa], [nbs], [nu], [kom], [kode_operator], [B12_R1201]
                ,[B12_R1201a_1]
                ,[B12_R1201a_2]
                ,[B12_R1201b]
                ,[B12_R1201c]
                ,[B12_R1201d]
                ,[B12_R1201e]
                ,[B12_R1201f]
                ,[B12_R1202]
                ,[B12_R1202a_1]
                ,[B12_R1202a_2]
                ,[B12_R1202a_3]
                ,[B12_R1202a_4]
                ,[B12_R1202b]
                ,[B12_R1202c]
                ,[B12_R1202d]
                ,[B12_R1202e]
                ,[B12_R1202f]
                ,[b1_r113]
                ,[start_entry]) b
        WHERE [B12_R1201]<>[TOTAL] OR [B12_R1202]<>[TOTAL2]
        ";

        $arr_sort_attributes = [
            'kode_wilayah',
            'nu',
            'kom',
            'kode_operator',
            'realname',
            'B12_R1201',
            'TOTAL',
            'B12_R1202',
            'TOTAL2',
            'b1_r113',
            'start_entry'

        ];
        
        // Palawija
        $sql2 = "
        SELECT b.kode_wilayah, b.nu, b.kom,b.kode_operator, b.realname, b.b14_r1405a_k2, b.TOTAL, b.b14_r1405b_4k2, b.TOTAL2, b.b1_r113, CAST([start_entry] as DATE) as [start_entry] 
        FROM
        (SELECT ([SOUT2017Sampel].[dbo].[t_rt_tp].[kode_prov]
            +[SOUT2017Sampel].[dbo].[t_rt_tp].[kode_kab]
            +[kode_kec]
            +[kode_desa]
            +[nbs]) AS kode_wilayah
            ,[nu]
            ,[kom]
            ,[b1_r113]
            ,[start_entry]
            ,[kode_operator]
            ,[realname]
            ,[b14_r1405a_k2]
            ,(ISNULL([b14_r1405a_1k2], 0) + ISNULL([b14_r1405a_2k2], 0)) AS TOTAL
            ,[b14_r1405b_4k2]
            ,(ISNULL([b14_r1405b_4i_k2], 0) + ISNULL([b14_r1405b_4ii_k2], 0)) AS TOTAL2
        FROM [SOUT2017Sampel].[dbo].[t_rt_tp]
        LEFT JOIN [SOUT2017Sampel].[dbo].[m_operator] 
        ON [SOUT2017Sampel].[dbo].[t_rt_tp].[kode_operator]=[SOUT2017Sampel].[dbo].[m_operator].[id_operator]
        GROUP BY [kode_operator], [realname], [SOUT2017Sampel].[dbo].[t_rt_tp].[kode_prov], [SOUT2017Sampel].[dbo].[t_rt_tp].[kode_kab], [kode_kec], [kode_desa], [nbs], [nu], [kom]
                ,[b14_r1405a_k2]
                ,[b14_r1405a_1k2]
                ,[b14_r1405a_2k2]
                ,b14_r1405b_4k2
                ,[b14_r1405b_4i_k2]
                ,[b14_r1405b_4ii_k2]
                ,[flag_dok]
                ,[b1_r113]
                ,[start_entry]
        HAVING [flag_dok]='spw') b
        WHERE [b14_r1405a_k2]<>[TOTAL] OR [b14_r1405b_4k2]<>[TOTAL2]
        ";

        $arr_sort_attributes2 = [
            'kode_wilayah',
            'nu',
            'kom',
            'kode_operator',
            'realname',
            'b14_r1405a_k2',
            'TOTAL',
            'b14_r1405b_4k2',
            'TOTAL2',
            'b1_r113',
            'start_entry'

        ];

        // Padi
        $sql3 = "
        SELECT b.kode_wilayah, b.nu, b.kom,b.kode_operator, b.realname, b.b14_r1405a_k2, b.TOTAL, b.b14_r1405b_4k2, b.TOTAL2, b.b1_r113, CAST([start_entry] as DATE) as [start_entry] 
        FROM
        (SELECT ([SOUT2017Sampel].[dbo].[t_rt_tp].[kode_prov]
            +[SOUT2017Sampel].[dbo].[t_rt_tp].[kode_kab]
            +[kode_kec]
            +[kode_desa]
            +[nbs]) AS kode_wilayah
            ,[nu]
            ,[kom]
            ,[b1_r113]
            ,[start_entry]
            ,[kode_operator]
            ,[realname]
            ,[b14_r1405a_k2]
            ,(ISNULL([b14_r1405a_1k2], 0) + ISNULL([b14_r1405a_2k2], 0)) AS TOTAL
            ,[b14_r1405b_4k2]
            ,(ISNULL([b14_r1405b_4i_k2], 0) + ISNULL([b14_r1405b_4ii_k2], 0)) AS TOTAL2
        FROM [SOUT2017Sampel].[dbo].[t_rt_tp]
        LEFT JOIN [SOUT2017Sampel].[dbo].[m_operator] 
        ON [SOUT2017Sampel].[dbo].[t_rt_tp].[kode_operator]=[SOUT2017Sampel].[dbo].[m_operator].[id_operator]
        GROUP BY [kode_operator], [realname], [SOUT2017Sampel].[dbo].[t_rt_tp].[kode_prov], [SOUT2017Sampel].[dbo].[t_rt_tp].[kode_kab], [kode_kec], [kode_desa], [nbs], [nu], [kom]
                ,[b14_r1405a_k2]
                ,[b14_r1405a_1k2]
                ,[b14_r1405a_2k2]
                ,b14_r1405b_4k2
                ,[b14_r1405b_4i_k2]
                ,[b14_r1405b_4ii_k2]
                ,[flag_dok]
                ,[b1_r113]
                ,[start_entry]
        HAVING [flag_dok]='spd') b
        WHERE [b14_r1405a_k2]<>[TOTAL] OR [b14_r1405b_4k2]<>[TOTAL2]
        ";

        $arr_sort_attributes3 = [
            'kode_wilayah',
            'nu',
            'kom',
            'kode_operator',
            'realname',
            'b14_r1405a_k2',
            'TOTAL',
            'b14_r1405b_4k2',
            'TOTAL2',
            'b1_r113',
            'start_entry'

        ];



        $default_order = [];

        return $this->render('xyz', [
            'provider' => $this->getSqlDataProvider($sql, $arr_sort_attributes, $default_order),
            'provider2' => $this->getSqlDataProvider($sql2, $arr_sort_attributes2, $default_order),
            'provider3' => $this->getSqlDataProvider($sql3, $arr_sort_attributes3, $default_order),

        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        // UMK
        $sql = '
            SELECT b.kode_operator, b.realname, b.count 
            FROM
            (SELECT [OperatorDok] as [kode_operator], [Realname] as [realname], COUNT([JumlahEntri]) as [count]
            FROM [UMB_UMK_2017].[dbo].[UMK]   
            LEFT JOIN [UMB_UMK_2017].[dbo].[Operator] 
            ON [UMB_UMK_2017].[dbo].[UMK].[OperatorDok]=[UMB_UMK_2017].[dbo].[Operator].[ID]
            GROUP BY [OperatorDok], [Realname]) b
        ';

        $arr_sort_attributes = [
            'kode_operator',
            'realname',
            'count',
        ];

        // UMB-P
        $sql2 = "
            SELECT b.kode_operator, b.realname, b.count
            FROM
            (SELECT [OperatorDok] as [kode_operator], [Realname] as [realname], COUNT([JumlahEntri]) as [count]
            FROM [UMB_UMK_2017].[dbo].[UMB_SP]   
            LEFT JOIN [UMB_UMK_2017].[dbo].[Operator] 
            ON [UMB_UMK_2017].[dbo].[UMB_SP].[OperatorDok]=[UMB_UMK_2017].[dbo].[Operator].[ID]
            GROUP BY [OperatorDok], [Realname]) b
        ";

        $arr_sort_attributes2 = [
            'kode_operator',
            'realname',
            'count',
        ];

        // UMB-K
        $sql3 = "
            SELECT b.kode_operator, b.realname, b.count
            FROM
            (SELECT [OperatorDok] as [kode_operator], [Realname] as [realname], COUNT([JumlahEntri]) as [count]
            FROM [UMB_UMK_2017].[dbo].[UMB_JK]   
            LEFT JOIN [UMB_UMK_2017].[dbo].[Operator] 
            ON [UMB_UMK_2017].[dbo].[UMB_JK].[OperatorDok]=[UMB_UMK_2017].[dbo].[Operator].[ID]
            GROUP BY [OperatorDok], [Realname]) b
        ";

        $arr_sort_attributes3 = [
            'kode_operator',
            'realname',
            'count',
        ];

        // UMB-NK
        $sql4 = "
            SELECT b.kode_operator, b.realname, b.count
            FROM
            (SELECT [OperatorDok] as [kode_operator], [Realname] as [realname], COUNT([JumlahEntri]) as [count]
            FROM [UMB_UMK_2017].[dbo].[UMB_JNK]   
            LEFT JOIN [UMB_UMK_2017].[dbo].[Operator] 
            ON [UMB_UMK_2017].[dbo].[UMB_JNK].[OperatorDok]=[UMB_UMK_2017].[dbo].[Operator].[ID]
            GROUP BY [OperatorDok], [Realname]) b
        ";

        $arr_sort_attributes4 = [
            'kode_operator',
            'realname',
            'count',
        ];

        // Total
        $sql5 = "
            SELECT x.kode_operator, x.realname, x.count
            FROM
            (
            SELECT 
                COALESCE(a.kode_operator, b.kode_operator, c.kode_operator, d.kode_operator) as [kode_operator]
                , COALESCE(NULLIF(a.realname,''), NULLIF(b.realname,''), NULLIF(c.realname,''), d.realname) as [realname]
                , (ISNULL(a.count, 0) + ISNULL(b.count, 0) + ISNULL(c.count, 0) + ISNULL(d.count, 0)) AS [count] 
            FROM
            (SELECT [OperatorDok] as [kode_operator], [Realname] as [realname], COUNT([JumlahEntri]) as [count]
            FROM [UMB_UMK_2017].[dbo].[UMK]   
            LEFT JOIN [UMB_UMK_2017].[dbo].[Operator] 
            ON [UMB_UMK_2017].[dbo].[UMK].[OperatorDok]=[UMB_UMK_2017].[dbo].[Operator].[ID]
            GROUP BY [OperatorDok], [Realname]) a

            FULL OUTER JOIN
            (SELECT [OperatorDok] as [kode_operator], [Realname] as [realname], COUNT([JumlahEntri]) as [count]
            FROM [UMB_UMK_2017].[dbo].[UMB_SP]   
            LEFT JOIN [UMB_UMK_2017].[dbo].[Operator] 
            ON [UMB_UMK_2017].[dbo].[UMB_SP].[OperatorDok]=[UMB_UMK_2017].[dbo].[Operator].[ID]
            GROUP BY [OperatorDok], [Realname]) b
            ON a.kode_operator = b.kode_operator

            FULL OUTER JOIN
            (SELECT [OperatorDok] as [kode_operator], [Realname] as [realname], COUNT([JumlahEntri]) as [count]
            FROM [UMB_UMK_2017].[dbo].[UMB_JK]   
            LEFT JOIN [UMB_UMK_2017].[dbo].[Operator] 
            ON [UMB_UMK_2017].[dbo].[UMB_JK].[OperatorDok]=[UMB_UMK_2017].[dbo].[Operator].[ID]
            GROUP BY [OperatorDok], [Realname]) c
            ON a.kode_operator = c.kode_operator

            FULL OUTER JOIN
            (SELECT [OperatorDok] as [kode_operator], [Realname] as [realname], COUNT([JumlahEntri]) as [count]
            FROM [UMB_UMK_2017].[dbo].[UMB_JNK]   
            LEFT JOIN [UMB_UMK_2017].[dbo].[Operator] 
            ON [UMB_UMK_2017].[dbo].[UMB_JNK].[OperatorDok]=[UMB_UMK_2017].[dbo].[Operator].[ID]
            GROUP BY [OperatorDok], [Realname]) d
            ON a.kode_operator = d.kode_operator
            ) x
        ";

        $arr_sort_attributes5 = [
            'kode_operator',
            'realname',
            'count',
        ];



        $default_order = ['count' => SORT_DESC];
        // $custom_order = ['jumlah'=>SORT_DESC];


        return $this->render('about', [
            'provider' => $this->getSqlDataProvider($sql, $arr_sort_attributes, $default_order),
            'provider2' => $this->getSqlDataProvider($sql2, $arr_sort_attributes2, $default_order),
            'provider3' => $this->getSqlDataProvider($sql3, $arr_sort_attributes3, $default_order),
            'provider4' => $this->getSqlDataProvider($sql4, $arr_sort_attributes4, $default_order),
            'provider5' => $this->getSqlDataProvider($sql5, $arr_sort_attributes5, $default_order),
        ]);
    }

    public function actionAbc()
    {
        // Ternak 06/20/2017
        $sql = "
            SELECT b.kode_operator, b.realname, b.count, b.start_entry 
            FROM
            (SELECT [kode_operator], [realname], COUNT([jumlah_entri]) as [count], CAST([start_entry] as DATE) as [start_entry]
            FROM [SOUT2017Sampel].[dbo].[t_rt_ternak]   
            LEFT JOIN [SOUT2017Sampel].[dbo].[m_operator] 
            ON [SOUT2017Sampel].[dbo].[t_rt_ternak].[kode_operator]=[SOUT2017Sampel].[dbo].[m_operator].[id_operator]
            GROUP BY [kode_operator], [realname], CAST([start_entry] as DATE)) b
            WHERE datediff(day, b.start_entry, :tanggal) = 0
        ";

        $arr_sort_attributes = [
            'kode_operator',
            'realname',
            'count',
            'start_entry'
        ];

        // Palawija
        $sql2 = "
            SELECT b.kode_operator, b.realname, b.count, b.start_entry
            FROM
            (SELECT [kode_operator], [realname], COUNT([jumlah_entri]) as [count], CAST([start_entry] as DATE) as [start_entry] 
            FROM [SOUT2017Sampel].[dbo].[t_rt_tp]
            LEFT JOIN [SOUT2017Sampel].[dbo].[m_operator] 
            ON [SOUT2017Sampel].[dbo].[t_rt_tp].[kode_operator]=[SOUT2017Sampel].[dbo].[m_operator].[id_operator]
            GROUP BY [kode_operator], [realname], [flag_dok], CAST([start_entry] as DATE)
            HAVING [flag_dok]='spw') b
            WHERE datediff(day, b.start_entry, :tanggal) = 0
        ";

        $arr_sort_attributes2 = [
            'kode_operator',
            'realname',
            'count',
            'start_entry'
        ];

        // Padi
        $sql3 = "
            SELECT b.kode_operator, b.realname, b.count, b.start_entry
            FROM
            (SELECT [kode_operator], [realname], COUNT([jumlah_entri]) as [count], CAST([start_entry] as DATE) as [start_entry] 
            FROM [SOUT2017Sampel].[dbo].[t_rt_tp]
            LEFT JOIN [SOUT2017Sampel].[dbo].[m_operator] 
            ON [SOUT2017Sampel].[dbo].[t_rt_tp].[kode_operator]=[SOUT2017Sampel].[dbo].[m_operator].[id_operator]
            GROUP BY [kode_operator], [realname], [flag_dok], CAST([start_entry] as DATE)
            HAVING [flag_dok]='spd') b
            WHERE datediff(day, b.start_entry, :tanggal) = 0
        ";

        $arr_sort_attributes3 = [
            'kode_operator',
            'realname',
            'count',
            'start_entry'
        ];

        // Total
        $sql4 = "
            SELECT x.kode_operator, x.realname, x.count, x.start_entry
            FROM
            (
            SELECT 
                COALESCE(a.kode_operator, b.kode_operator, c.kode_operator) as [kode_operator]
                , COALESCE(NULLIF(a.realname,''), NULLIF(b.realname,''), c.realname) as [realname]
                , (ISNULL(a.count, 0) + ISNULL(b.count, 0) + ISNULL(c.count, 0)) AS [count]
                , COALESCE(NULLIF(a.start_entry,''), NULLIF(b.start_entry,''), c.start_entry) as [start_entry]
            FROM
            (SELECT [kode_operator], [realname], COUNT([jumlah_entri]) as [count], CAST([start_entry] as DATE) as [start_entry]
            FROM [SOUT2017Sampel].[dbo].[t_rt_ternak]   
            LEFT JOIN [SOUT2017Sampel].[dbo].[m_operator] 
            ON [SOUT2017Sampel].[dbo].[t_rt_ternak].[kode_operator]=[SOUT2017Sampel].[dbo].[m_operator].[id_operator]
            GROUP BY [kode_operator], [realname], CAST([start_entry] as DATE)) a

            FULL OUTER JOIN
            (SELECT [kode_operator], [realname], COUNT([jumlah_entri]) as [count], CAST([start_entry] as DATE) as [start_entry]
            FROM [SOUT2017Sampel].[dbo].[t_rt_tp]
            LEFT JOIN [SOUT2017Sampel].[dbo].[m_operator] 
            ON [SOUT2017Sampel].[dbo].[t_rt_tp].[kode_operator]=[SOUT2017Sampel].[dbo].[m_operator].[id_operator]
            GROUP BY [kode_operator], [realname], [flag_dok], CAST([start_entry] as DATE)
            HAVING [flag_dok]='spw') b
            ON a.kode_operator = b.kode_operator AND a.start_entry = b.start_entry

            FULL OUTER JOIN
            (SELECT [kode_operator], [realname], COUNT([jumlah_entri]) as [count], CAST([start_entry] as DATE) as [start_entry]
            FROM [SOUT2017Sampel].[dbo].[t_rt_tp]
            LEFT JOIN [SOUT2017Sampel].[dbo].[m_operator] 
            ON [SOUT2017Sampel].[dbo].[t_rt_tp].[kode_operator]=[SOUT2017Sampel].[dbo].[m_operator].[id_operator]
            GROUP BY [kode_operator], [realname], [flag_dok], CAST([start_entry] as DATE)
            HAVING [flag_dok]='spd') c
            ON a.kode_operator = c.kode_operator AND a.start_entry = c.start_entry
            ) x
            WHERE datediff(day, x.start_entry, :tanggal) = 0
        ";

        $arr_sort_attributes4 = [
            'kode_operator',
            'realname',
            'count',
            'start_entry'
        ];



        $default_order = ['count' => SORT_DESC];
        // $custom_order = ['jumlah'=>SORT_DESC];

        // Search Model
        $model = new \yii\base\DynamicModel(['tanggal']);
        $model->addRule(['tanggal'], 'string', ['max' => 128]);
        if ($model->load(Yii::$app->request->get()) && $model->validate()) {
            // do what you want
            $tanggal = $model->tanggal;
            $tanggal = date('m/d/Y', strtotime($tanggal));
            $tanggal_print = date('d F Y', strtotime($tanggal));
            // $tanggal = date('m/d/Y');
        }else{
            $tanggal = date('m/d/Y');
            $tanggal_print = date('d F Y', strtotime($tanggal));
        }



        // return $this->render('abc', [
        //     'provider' => $this->getSqlDataProvider2($sql, $arr_sort_attributes, $default_order, $tanggal),
        //     'provider2' => $this->getSqlDataProvider2($sql2, $arr_sort_attributes2, $default_order, $tanggal),
        //     'provider3' => $this->getSqlDataProvider2($sql3, $arr_sort_attributes3, $default_order, $tanggal),
        //     'provider4' => $this->getSqlDataProvider2($sql4, $arr_sort_attributes4, $default_order, $tanggal),
        //     'model' => $model,
        //     'tanggal' => $tanggal_print
        // ]);

        return $this->renderPartial('404');
    }

    public function getSqlDataProvider($sql, $arr_sort_attributes, $default_order)
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
                'defaultOrder' => $default_order
            ],
        ]);
        return $provider;
    }

    public function getSqlDataProvider2($sql, $arr_sort_attributes, $default_order, $params)
    {
        // $sql2 = str_replace(':tanggal', $params, $sql);
        $count = Yii::$app->db->createCommand('SELECT COUNT(*) FROM (' . $sql . ') as count_alias')
            ->bindParam(':tanggal', $params)
            ->queryScalar();

        $provider = new SqlDataProvider([
            'sql' => $sql,
            'params' => [':tanggal' => $params],
            'totalCount' => $count,
            'pagination' => [
                'pageSize' => 10,
            ],
            'sort' => [
                'attributes' => $arr_sort_attributes,
                'defaultOrder' => $default_order
            ],
        ]);
        return $provider;
    }


    public function actionRetotal()
    {
        // UMK
        $sql = "
            SELECT b.clean_by, b.realname, b.count 
            FROM
            (SELECT [OperatorDok] as [clean_by], [Realname] as [realname], COUNT([JumlahEntri]) as [count]
            FROM [UMB_UMK_2017].[dbo].[UMK_VAL]   
            LEFT JOIN [UMB_UMK_2017].[dbo].[Operator] 
            ON [UMB_UMK_2017].[dbo].[UMK_VAL].[OperatorDok]=[UMB_UMK_2017].[dbo].[Operator].[ID]
            WHERE [StatusDok]='C'
            GROUP BY [OperatorDok], [realname]) b
        ";

        $arr_sort_attributes = [
            'clean_by',
            'realname',
            'count',
        ];

        // UMB-P
        $sql2 = "
            SELECT b.clean_by, b.realname, b.count
            FROM
            (SELECT [OperatorDok] as [clean_by], [Realname] as [realname], COUNT([JumlahEntri]) as [count]
            FROM [UMB_UMK_2017].[dbo].[UMB_SP_VAL]   
            LEFT JOIN [UMB_UMK_2017].[dbo].[Operator] 
            ON [UMB_UMK_2017].[dbo].[UMB_SP_VAL].[OperatorDok]=[UMB_UMK_2017].[dbo].[Operator].[ID]
            WHERE [StatusDok]='C'
            GROUP BY [OperatorDok], [realname]) b
        ";

        $arr_sort_attributes2 = [
            'clean_by',
            'realname',
            'count',
        ];

        // UMB-K
        $sql3 = "
            SELECT b.clean_by, b.realname, b.count
            FROM
            (SELECT [OperatorDok] as [clean_by], [Realname] as [realname], COUNT([JumlahEntri]) as [count]
            FROM [UMB_UMK_2017].[dbo].[UMB_JK_VAL]   
            LEFT JOIN [UMB_UMK_2017].[dbo].[Operator] 
            ON [UMB_UMK_2017].[dbo].[UMB_JK_VAL].[OperatorDok]=[UMB_UMK_2017].[dbo].[Operator].[ID]
            WHERE [StatusDok]='C'
            GROUP BY [OperatorDok], [realname]) b
        ";

        $arr_sort_attributes3 = [
            'clean_by',
            'realname',
            'count',
        ];

        // UMB-NK
        $sql4 = "
            SELECT b.clean_by, b.realname, b.count
            FROM
            (SELECT [OperatorDok] as [clean_by], [Realname] as [realname], COUNT([JumlahEntri]) as [count]
            FROM [UMB_UMK_2017].[dbo].[UMB_JNK_VAL]   
            LEFT JOIN [UMB_UMK_2017].[dbo].[Operator] 
            ON [UMB_UMK_2017].[dbo].[UMB_JNK_VAL].[OperatorDok]=[UMB_UMK_2017].[dbo].[Operator].[ID]
            WHERE [StatusDok]='C'
            GROUP BY [OperatorDok], [realname]) b
        ";

        $arr_sort_attributes4 = [
            'clean_by',
            'realname',
            'count',
        ];

        // Total
        $sql5 = "
            SELECT x.clean_by, x.realname, x.count
            FROM
            (
            SELECT 
                COALESCE(a.clean_by, b.clean_by, c.clean_by, d.clean_by) as [clean_by]
                , COALESCE(NULLIF(a.realname,''), NULLIF(b.realname,''), NULLIF(c.realname,''), d.realname) as [realname]
                , (ISNULL(a.count, 0) + ISNULL(b.count, 0) + ISNULL(c.count, 0) + ISNULL(d.count, 0)) AS [count] 
            FROM
            (SELECT [OperatorDok] as [clean_by], [Realname] as [realname], COUNT([JumlahEntri]) as [count]
            FROM [UMB_UMK_2017].[dbo].[UMK_VAL]   
            LEFT JOIN [UMB_UMK_2017].[dbo].[Operator] 
            ON [UMB_UMK_2017].[dbo].[UMK_VAL].[OperatorDok]=[UMB_UMK_2017].[dbo].[Operator].[ID]
            WHERE [StatusDok]='C'
            GROUP BY [OperatorDok], [realname]) a

            FULL OUTER JOIN
            (SELECT [OperatorDok] as [clean_by], [Realname] as [realname], COUNT([JumlahEntri]) as [count]
            FROM [UMB_UMK_2017].[dbo].[UMB_SP_VAL]   
            LEFT JOIN [UMB_UMK_2017].[dbo].[Operator] 
            ON [UMB_UMK_2017].[dbo].[UMB_SP_VAL].[OperatorDok]=[UMB_UMK_2017].[dbo].[Operator].[ID]
            WHERE [StatusDok]='C'
            GROUP BY [OperatorDok], [realname]) b
            ON a.clean_by = b.clean_by

            FULL OUTER JOIN
            (SELECT [OperatorDok] as [clean_by], [Realname] as [realname], COUNT([JumlahEntri]) as [count]
            FROM [UMB_UMK_2017].[dbo].[UMB_JK_VAL]   
            LEFT JOIN [UMB_UMK_2017].[dbo].[Operator] 
            ON [UMB_UMK_2017].[dbo].[UMB_JK_VAL].[OperatorDok]=[UMB_UMK_2017].[dbo].[Operator].[ID]
            WHERE [StatusDok]='C'
            GROUP BY [OperatorDok], [realname]) c
            ON a.clean_by = c.clean_by

			FULL OUTER JOIN
            (SELECT [OperatorDok] as [clean_by], [Realname] as [realname], COUNT([JumlahEntri]) as [count]
            FROM [UMB_UMK_2017].[dbo].[UMB_JNK_VAL]   
            LEFT JOIN [UMB_UMK_2017].[dbo].[Operator] 
            ON [UMB_UMK_2017].[dbo].[UMB_JNK_VAL].[OperatorDok]=[UMB_UMK_2017].[dbo].[Operator].[ID]
            WHERE [StatusDok]='C'
            GROUP BY [OperatorDok], [realname]) d
            ON a.clean_by = d.clean_by
            ) x
            WHERE x.clean_by IS NOT NULL

        ";

        $arr_sort_attributes5 = [
            'clean_by',
            'realname',
            'count',
        ];



        $default_order = ['count' => SORT_DESC];
        // $custom_order = ['jumlah'=>SORT_DESC];


        return $this->render('retotal', [
            'provider' => $this->getSqlDataProvider($sql, $arr_sort_attributes, $default_order),
            'provider2' => $this->getSqlDataProvider($sql2, $arr_sort_attributes2, $default_order),
            'provider3' => $this->getSqlDataProvider($sql3, $arr_sort_attributes3, $default_order),
            'provider4' => $this->getSqlDataProvider($sql4, $arr_sort_attributes4, $default_order),
            'provider5' => $this->getSqlDataProvider($sql5, $arr_sort_attributes5, $default_order),
        ]);
    }

    //retanggal
    public function actionRetanggal()
    {
        // Ternak 06/20/2017
        $sql = "
            SELECT b.clean_by, b.realname, b.count, b.end_entry 
            FROM
            (SELECT [clean_by], [realname], COUNT([jumlah_entri]) as [count], CAST([end_entry] as DATE) as [end_entry]
            FROM [SOUT2017Sampel].[dbo].[t_rt_ternak]   
            LEFT JOIN [SOUT2017Sampel].[dbo].[m_operator] 
            ON [SOUT2017Sampel].[dbo].[t_rt_ternak].[clean_by]=[SOUT2017Sampel].[dbo].[m_operator].[id_operator]
            GROUP BY [clean_by], [realname], CAST([end_entry] as DATE)) b
            WHERE datediff(day, b.end_entry, :tanggal) = 0
        ";

        $arr_sort_attributes = [
            'clean_by',
            'realname',
            'count',
            'end_entry'
        ];

        // Palawija
        $sql2 = "
            SELECT b.clean_by, b.realname, b.count, b.end_entry
            FROM
            (SELECT [clean_by], [realname], COUNT([jumlah_entri]) as [count], CAST([end_entry] as DATE) as [end_entry] 
            FROM [SOUT2017Sampel].[dbo].[t_rt_tp]
            LEFT JOIN [SOUT2017Sampel].[dbo].[m_operator] 
            ON [SOUT2017Sampel].[dbo].[t_rt_tp].[clean_by]=[SOUT2017Sampel].[dbo].[m_operator].[id_operator]
            GROUP BY [clean_by], [realname], [flag_dok], CAST([end_entry] as DATE)
            HAVING [flag_dok]='spw') b
            WHERE datediff(day, b.end_entry, :tanggal) = 0
        ";

        $arr_sort_attributes2 = [
            'clean_by',
            'realname',
            'count',
            'end_entry'
        ];

        // Padi
        $sql3 = "
            SELECT b.clean_by, b.realname, b.count, b.end_entry
            FROM
            (SELECT [clean_by], [realname], COUNT([jumlah_entri]) as [count], CAST([end_entry] as DATE) as [end_entry] 
            FROM [SOUT2017Sampel].[dbo].[t_rt_tp]
            LEFT JOIN [SOUT2017Sampel].[dbo].[m_operator] 
            ON [SOUT2017Sampel].[dbo].[t_rt_tp].[clean_by]=[SOUT2017Sampel].[dbo].[m_operator].[id_operator]
            GROUP BY [clean_by], [realname], [flag_dok], CAST([end_entry] as DATE)
            HAVING [flag_dok]='spd') b
            WHERE datediff(day, b.end_entry, :tanggal) = 0
        ";

        $arr_sort_attributes3 = [
            'clean_by',
            'realname',
            'count',
            'end_entry'
        ];

        // Total
        $sql4 = "
            SELECT x.clean_by, x.realname, x.count, x.end_entry
            FROM
            (
            SELECT 
                COALESCE(a.clean_by, b.clean_by, c.clean_by) as [clean_by]
                , COALESCE(NULLIF(a.realname,''), NULLIF(b.realname,''), c.realname) as [realname]
                , (ISNULL(a.count, 0) + ISNULL(b.count, 0) + ISNULL(c.count, 0)) AS [count]
                , COALESCE(NULLIF(a.end_entry,''), NULLIF(b.end_entry,''), c.end_entry) as [end_entry]
            FROM
            (SELECT [clean_by], [realname], COUNT([jumlah_entri]) as [count], CAST([end_entry] as DATE) as [end_entry]
            FROM [SOUT2017Sampel].[dbo].[t_rt_ternak]   
            LEFT JOIN [SOUT2017Sampel].[dbo].[m_operator] 
            ON [SOUT2017Sampel].[dbo].[t_rt_ternak].[clean_by]=[SOUT2017Sampel].[dbo].[m_operator].[id_operator]
            GROUP BY [clean_by], [realname], CAST([end_entry] as DATE)) a

            FULL OUTER JOIN
            (SELECT [clean_by], [realname], COUNT([jumlah_entri]) as [count], CAST([end_entry] as DATE) as [end_entry]
            FROM [SOUT2017Sampel].[dbo].[t_rt_tp]
            LEFT JOIN [SOUT2017Sampel].[dbo].[m_operator] 
            ON [SOUT2017Sampel].[dbo].[t_rt_tp].[clean_by]=[SOUT2017Sampel].[dbo].[m_operator].[id_operator]
            GROUP BY [clean_by], [realname], [flag_dok], CAST([end_entry] as DATE)
            HAVING [flag_dok]='spw') b
            ON a.clean_by = b.clean_by AND a.end_entry = b.end_entry

            FULL OUTER JOIN
            (SELECT [clean_by], [realname], COUNT([jumlah_entri]) as [count], CAST([end_entry] as DATE) as [end_entry]
            FROM [SOUT2017Sampel].[dbo].[t_rt_tp]
            LEFT JOIN [SOUT2017Sampel].[dbo].[m_operator] 
            ON [SOUT2017Sampel].[dbo].[t_rt_tp].[clean_by]=[SOUT2017Sampel].[dbo].[m_operator].[id_operator]
            GROUP BY [clean_by], [realname], [flag_dok], CAST([end_entry] as DATE)
            HAVING [flag_dok]='spd') c
            ON a.clean_by = c.clean_by AND a.end_entry = c.end_entry
            ) x
            WHERE datediff(day, x.end_entry, :tanggal) = 0
        ";

        $arr_sort_attributes4 = [
            'clean_by',
            'realname',
            'count',
            'end_entry'
        ];



        $default_order = ['count' => SORT_DESC];
        // $custom_order = ['jumlah'=>SORT_DESC];

        // Search Model
        $model = new \yii\base\DynamicModel(['tanggal']);
        $model->addRule(['tanggal'], 'string', ['max' => 128]);
        if ($model->load(Yii::$app->request->get()) && $model->validate()) {
            // do what you want
            $tanggal = $model->tanggal;
            $tanggal = date('m/d/Y', strtotime($tanggal));
            $tanggal_print = date('d F Y', strtotime($tanggal));
            // $tanggal = date('m/d/Y');
        }else{
            $tanggal = date('m/d/Y');
            $tanggal_print = date('d F Y', strtotime($tanggal));
        }



        // return $this->render('retanggal', [
        //     'provider' => $this->getSqlDataProvider2($sql, $arr_sort_attributes, $default_order, $tanggal),
        //     'provider2' => $this->getSqlDataProvider2($sql2, $arr_sort_attributes2, $default_order, $tanggal),
        //     'provider3' => $this->getSqlDataProvider2($sql3, $arr_sort_attributes3, $default_order, $tanggal),
        //     'provider4' => $this->getSqlDataProvider2($sql4, $arr_sort_attributes4, $default_order, $tanggal),
        //     'model' => $model,
        //     'tanggal' => $tanggal_print
        // ]);

        return $this->renderPartial('404');
    }




}
