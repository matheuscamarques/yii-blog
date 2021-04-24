<?php
/**
 * Controller is the customized base controller class.
 * All controller classes for this application should extend from this base class.
 */
class Controller extends CController
{
	/**
	 * @var string the default layout for the controller view. Defaults to '//layouts/column1',
	 * meaning using a single column layout. See 'protected/views/layouts/column1.php'.
	 */
	public $layout='//layouts/column1';
	/**
	 * @var array context menu items. This property will be assigned to {@link CMenu::items}.
	 */
	public $menu=array();
	/**
	 * @var array the breadcrumbs of the current page. The value of this property will
	 * be assigned to {@link CBreadcrumbs::links}. Please refer to {@link CBreadcrumbs::links}
	 * for more details on how to specify this property.
	 */
	public $breadcrumbs=array();

	public $itensMenu = array();


    public function init(){
        $this->initMenu();
    }

	public function initMenu(){

		//Have permission to view? 
		$this->itensMenu = array(
			(array)(new ItemMenu())->init('Home',   ['/site/index'] ),
			(array)(new ItemMenu())->init('About',  ['/site/page', 'view'=>'about'],Yii::app()->user->isGuest),
			(array)(new ItemMenu())->init('Contact',['/site/contact'],Yii::app()->user->isGuest),
			(array)(new ItemMenu())->init('User',   ['/user/index'],!Yii::app()->user->isGuest),
			(array)(new ItemMenu())->init('Login',  ['/site/login'],Yii::app()->user->isGuest),
			(array)(new ItemMenu())->init('Logout ('.Yii::app()->user->name.')',['/site/logout'],!Yii::app()->user->isGuest)
        );
	}
}