<?php

class BooksController extends Controller
{
	public function actionIndex()
    {
        $books = Book::getAllBooks();
        $this->render('index', array('books' => $books)); 
    }

	public function actionCreate()
	{
		$model = new Book; 
    	$this->render('create', array('model' => $model));
	}

	public function actionSave()
	{
		if (isset($_POST['Book'])) {
			$model = new Book;
			$model->attributes = $_POST['Book']; 
			if ($model->save()) {
				$this->redirect(array('index')); 
			} else {
				$this->render('create', array('model' => $model));
			}
		} else {
			throw new CHttpException(400, 'Petición inválida.');
		}
		}

	public function actionEdit($id)
	{
		$model = Book::model()->findByPk($id);
		$this->render('edit', array('model' => $model));
	}

	public function actionUpdate($id)
	{
		$model = Book::model()->findByPk($id);
		if (isset($_POST['Book'])) {
			$model->attributes = $_POST['Book'];
			if ($model->save()) {
				$this->redirect(array('index'));
			} else {
			$this->render('edit', array('model' => $model));
			}
		}
		$this->render('edit', array('model' => $model));
	}

	public function actionDelete($id)
{
    $model = Book::model()->findByPk($id);
    if ($model === null) {
        throw new CHttpException(404, 'El libro solicitado no existe.');
    }
    if ($model->delete()) {
        $this->redirect(array('index'));  
    } else {
        throw new CHttpException(500, 'No se pudo eliminar el libro.');
    }
}

	

	// Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/
}