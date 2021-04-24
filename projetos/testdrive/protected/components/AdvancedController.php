
<?php



class AdvancedController extends Controller{
    public $itensMenu = array();


    // public function init(){
    //     $this->initMenu();
    // }
	public function initMenu(){
		$this->itensMenu = array(
			(array)(new ItemMenu())->init('Home',   ['/site/index'] ),
			(array)(new ItemMenu())->init('About',  ['/site/page', 'view'=>'about'],Yii::app()->user->isGuest),
			(array)(new ItemMenu())->init('Contact',['/site/contact'],Yii::app()->user->isGuest),
			(array)(new ItemMenu())->init('User',   ['/user/index'],Yii::app()->user->isGuest),
			(array)(new ItemMenu())->init('Login',  ['/site/login'],Yii::app()->user->isGuest),
			(array)(new ItemMenu())->init('Logout ('.Yii::app()->user->name.')',['/site/logout'],!Yii::app()->user->isGuest)
        );
	}
}