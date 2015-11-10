<?php

class ProductsController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	//public $layout='//layouts/column1';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations

		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update','index','view','admin','delete','deleteImage'),
				'users'=>array('@'),
			),
			array('allow', // allow all users
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$producto_imagen = new ProductImages;

		if(isset($_POST['ProductImages'])){
			$url = Yii::app()->basePath."/../images/catalogo/";
			$producto_imagen->attributes=$_POST['ProductImages'];
			$uploadedFile=CUploadedFile::getInstance($producto_imagen,'image_url');
			$tempNameArray = explode('.',$uploadedFile->name);
			$ext = ".".$tempNameArray[sizeof($tempNameArray)-1];
			$fileName = time().$ext;

			if($uploadedFile->saveAs($url.$fileName)){
				$producto_imagen->image_url=Yii::app()->request->baseUrl."/images/catalogo/".$fileName;
				$producto_imagen->products_id=$id;
				$producto_imagen->save();
            }
		}
		$this->render('view',array(
			'model'=>$this->loadModel($id),
			'producto_imagen'=>$producto_imagen
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Products;
		$producto_imagen= new ProductImages;
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Products']))
		{
			$url = Yii::app()->basePath."/../images/catalogo/";
			$model->attributes=$_POST['Products'];
			$producto_imagen->attributes=$_POST['ProductImages'];
			$uploadedFile=CUploadedFile::getInstance($producto_imagen,'image_url');
			$tempNameArray = explode('.',$uploadedFile->name);
			$ext = ".".$tempNameArray[sizeof($tempNameArray)-1];

            $fileName = time().$ext;
            if($model->save())
	        {
				$uploadedFile->saveAs($url.$fileName);
				$producto_imagen->image_url=Yii::app()->request->baseUrl."/images/catalogo/".$fileName;
				$producto_imagen->products_id=$model->id;
				if($producto_imagen->save()){
	                $this->redirect(array('view','id'=>$model->id));
		        }
	        }

		}

		$this->render('create',array(
			'model'=>$model,
			'producto_imagen'=>$producto_imagen,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);
		$producto_imagen = new ProductImages;
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Products']))
		{
			$model->attributes=$_POST['Products'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('update',array(
			'model'=>$model,
			'producto_imagen'=>$producto_imagen,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$product = $this->loadModel($id);
		$baseUrl = Yii::app()->request->baseUrl;
		foreach ($product->productImages as $image) {
			$filePath = str_replace($baseUrl.'/images', 'images', $image->image_url);
			if (file_exists($filePath)) {
				unlink($filePath);
			}

			$image->delete();
		}
		$product->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$products = Products::model()->findAll('status=?', array(1));
		$this->render('index',array(
			'products'=>$products,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		if(Yii::app()->user->isGuest){
			$this->layout='//layouts/main';
			$model=new LoginForm;

			// if it is ajax validation request
			if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
			{
				echo CActiveForm::validate($model);
				Yii::app()->end();
			}

			// collect user input data
			if(isset($_POST['LoginForm']))
			{
				$model->attributes=$_POST['LoginForm'];
				// validate user input and redirect to the previous page if valid
				if($model->validate() && $model->login())
					$this->redirect('admin');
			}
		}
		else{
			$model=new Products('search');
			$model->unsetAttributes();  // clear any default values
			if(isset($_GET['Products']))
				$model->attributes=$_GET['Products'];
		}

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	public function actionDeleteImage()
	{
		if(isset($_POST['id'])){
			if(ProductImages::model()->find("id=?",array($_POST['id']))->delete())
				echo 0; //SI NO HAY ERROR REGRESAMOS 0
			else
				echo 1; //SI HAY ERROR REGRESAMOS 1
		}
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Products the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Products::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Products $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='products-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}

	public function getStatus($data, $row)
	{
		$status = $data->status==1?'Activo':'Inactivo';
		return $status;
	}

}
