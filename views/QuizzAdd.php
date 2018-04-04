<?php echo validation_errors(); ?>
<?php echo form_open('Quizz/Add'); ?>
<div>n° de fiche : <input type="text" name="idFiche" value="<?php echo $this->input->post('idFiche'); ?>" /></div>
<button type="submit">Save</button>
<?php echo form_close(); ?>