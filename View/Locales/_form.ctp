<div class="row">
  <div class="col-md-6">
    <?= $this->Form->create( 'Language') ?>
      <?= $this->Form->hidden( 'Language.id') ?>
        
        <?= $this->Form->input( 'Language.name', array(
            'type' => 'text',
            'label' => __d( 'admin', "Nombre"),
        )) ?>
        
        <?= $this->Form->input( 'Language.iso2', array(
            'type' => 'select',
            'label' => __d( 'admin', "Idioma"),
            'options' => $locales
        )) ?>

      <?= $this->Form->submit( __( "Guardar")) ?>
    <?= $this->Form->end() ?>
  </div>
</div>
