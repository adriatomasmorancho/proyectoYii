<?php
/* @var $this BooksController */

$this->breadcrumbs=array(
	'Books'=>array('/books'),
	'Index',
);
?>
<h1>Lista de Libros</h1>

<table border="1">
    <thead>
        <tr>
            <th>ID</th>
            <th>Título</th>
            <th>Contenido</th>
            <th>Categoria</th>
            <th>Tags</th> 
            <th>Acciones</th> 
        </tr>
    </thead>
    <tbody>
        <?php foreach ($books as $book): ?>
            <tr>
                <td><?php echo CHtml::encode($book->id); ?></td>
                <td><?php echo CHtml::encode($book->title); ?></td>
                <td><?php echo CHtml::encode($book->content); ?></td>
                <td><?php echo CHtml::encode($book->category); ?></td>
                <td><?php echo CHtml::encode($book->tags); ?></td>
                <td>
                    <?php echo CHtml::link('Editar', array('books/edit', 'id' => $book->id)); ?> |
                    <?php echo CHtml::link('Eliminar', array('books/delete', 'id' => $book->id), array(
    'confirm' => '¿Estás seguro de que deseas eliminar este libro?'
)); ?>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?php echo CHtml::link('Crear', array('books/create')); ?>

