<? $this->AdminNav->setTitle( '<i class="icon-flag"></i> ' . 'Idiomas', 'Edición')?>

<div class="col-xs-12">
  <div class="table-responsive">
	<table id="" class="table table-striped table-bordered table-hover dataTable" aria-describedby="">
	  <thead>
  	  <tr>
        <th class="sorting_asc header" role="columnheader" tabindex="0" aria-controls="" aria-sort="ascending"><?= $this->Paginator->sort('id');?></th>
        <th class="hidden-480 sorting header" role="columnheader" aria-controls=""><?= $this->Paginator->sort('title');?></th>
        <th class="header"><?= __('Actions') ?></th>
    	</tr>
  	</thead>
  	<? foreach ($contents as $content): ?>
  	  <tbody>
    	  <tr>
      		<td><?= h($content['Locale']['id']); ?>&nbsp;</td>
      		<td><?= h($content['Locale']['name']); ?>&nbsp;</td>
      		<td class="">
      		 	<div class="visible-md visible-lg hidden-sm hidden-xs btn-group">
							<?= $this->Html->link( '<i class="icon-pencil bigger-120"></i>', array(
      			      'action' => 'edit',
      			      $content ['Locale']['id']
      			  ), array(
      			      'class' => 'btn btn-xs btn-success',
      			      'escape' => false
      			  )) ?>
      			  
      			  <?= $this->Html->link( '<i class="icon-trash bigger-120"></i>', array(
      			      'action' => 'delete',
      			      $content ['Locale']['id']
      			  ), array(
      			      'class' => 'btn btn-xs btn-danger',
      			      'escape' => false
      			  ), __( "¿Estás seguro de que quieres borrarlo?")) ?>
						</div>
      		</td>
      	</tr>
    	</tbody>
    <? endforeach ?>
	</table>
	</div>
	<?= $this->element( 'pagination');?>
</div>