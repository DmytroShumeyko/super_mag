<?php



class SiteController
{

    public function actionIndex()
    {
        $categories = array();
        $categories = Category::getCategoriesList();

        $latestProducts = array();
        $latestProducts = Product::getLatestProducts(6);

        require_once (ROOT . '/views/site/index.php');

        return true;
    }

    public function actionContact(){

        $userEmail = '';
        $userText = '';
        $result = false;

        if (isset($_POST['submit'])){
            $userEmail = $_POST['userEmail'];
            $userText = $_POST['userText'];

            $errors = false;

            if (!User::checkEmail()){
                $errors[] = 'wrong mail';
            }
            if ($errors == false){

                $adminEmail = 'magistrzp@mail.ru';
                $subject = 'Тема письма';
                $message = 'Текст: {$userText}. От {$userEmail}';
                $result = mail($adminEmail, $subject, $message);
                $result = true;

            }
        }
        require_once (ROOT . '/views/site/contact.php');
        return true;
    }
}
