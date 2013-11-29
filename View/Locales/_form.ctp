<div class="row">
  <div class="col-md-6">
    <?= $this->Form->create( 'Locale') ?>
      <?= $this->Form->hidden( 'Locale.id') ?>
        
        <?= $this->Form->input( 'Locale.name', array(
            'type' => 'text',
            'label' => __d( 'admin', "Nombre"),
        )) ?>
        
        <?= $this->Form->input( 'Locale.iso2', array(
            'type' => 'select',
            'label' => __d( 'admin', "Idioma"),
            'options' => $locales
        )) ?>

      <?= $this->Form->submit( __( "Guardar")) ?>
    <?= $this->Form->end() ?>
  </div>
</div>
