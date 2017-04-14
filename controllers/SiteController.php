<?
namespace app\controllers;
use \yii\web\Controller;
class SiteController extends Controller
{
    public function actionIndex()
    {
        echo '<pre>';
        print_r($_SERVER["SCRIPT_NAME"]);
        echo '</pre>';
        return 'Our CRM';
        }
}