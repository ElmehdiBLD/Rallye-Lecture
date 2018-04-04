<?php echo validation_errors(); ?>
<?php echo form_open('Quizz/Edit/'.$quizz['id']); ?>
<div>n° de fiche : <input type="text" name="idFiche" value="<?php echo ($this->input->post('idfiche') ? $this->input->post('idFiche') : $quizz['idFiche']); ?>" /></div>
<button type="submit">Save</button>
<?php echo form_close(); ?>