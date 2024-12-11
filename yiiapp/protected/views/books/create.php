<?php
/* @var $this BooksController */
/* @var $model Book */
/* @var $form CActiveForm */

$this->breadcrumbs = array(
    'Books' => array('index'),
    'Create',
);
?>

<h1>Crear un nuevo Libro</h1>

<?php $form = $this->beginWidget('CActiveForm', array(
    'id' => 'book-form',
    'action' => array('books/save'), // Enviar datos al action save
    'enableAjaxValidation' => false,
)); ?>

    <p class="note">Los campos con <span class="required">*</span> son obligatorios.</p>

    <?php echo $form->errorSummary($model); ?>

    <div class="row">
        <?php echo $form->labelEx($model, 'title'); ?>
        <?php echo $form->textField($model, 'title', array('size' => 60, 'maxlength' => 255)); ?>
        <?php echo $form->error($model, 'title'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'content'); ?>
        <?php echo $form->textArea($model, 'content', array('rows' => 6, 'cols' => 50)); ?>
        <?php echo $form->error($model, 'content'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'category'); ?>
        <?php echo $form->textField($model, 'category', array('size' => 60, 'maxlength' => 100)); ?>
        <?php echo $form->error($model, 'category'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'tags'); ?>
        <?php echo $form->textField($model, 'tags', array('size' => 60, 'maxlength' => 100)); ?>
        <?php echo $form->error($model, 'tags'); ?>
    </div>

    <div class="row buttons">
        <?php echo CHtml::submitButton('Guardar'); ?>
    </div>

<?php $this->endWidget(); ?>
