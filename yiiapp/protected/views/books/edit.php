<?php
/* @var $this BooksController */
/* @var $model Book */

$this->breadcrumbs = array(
    'Books' => array('/books'),
    'Editar',
);
?>

<h1>Editar Libro</h1>

<?php
// Crear un formulario activo
$form = $this->beginWidget('CActiveForm', array(
    'id' => 'book-form',
    'enableAjaxValidation' => false,
    'action' => $this->createUrl('update', array('id' => $model->id)),  // Especificamos la acción 'update' y pasamos el ID
)); ?>

<!-- Campo de Título -->
<div class="row">
    <?php echo $form->labelEx($model, 'title'); ?>
    <?php echo $form->textField($model, 'title'); ?>
    <?php echo $form->error($model, 'title'); ?>
</div>

<!-- Campo de Autor -->
<div class="row">
    <?php echo $form->labelEx($model, 'content'); ?>
    <?php echo $form->textArea($model, 'content'); ?>
    <?php echo $form->error($model, 'content'); ?>
</div>

<!-- Campo de Categoría -->
<div class="row">
    <?php echo $form->labelEx($model, 'category'); ?>
    <?php echo $form->textField($model, 'category'); ?>
    <?php echo $form->error($model, 'category'); ?>
</div>

<!-- Campo de Tags -->
<div class="row">
    <?php echo $form->labelEx($model, 'tags'); ?>
    <?php echo $form->textField($model, 'tags'); ?>
    <?php echo $form->error($model, 'tags'); ?>
</div>

<!-- Botón de envío -->
<div class="row buttons">
    <?php echo CHtml::submitButton('Guardar'); ?>
</div>

<?php $this->endWidget(); ?>
