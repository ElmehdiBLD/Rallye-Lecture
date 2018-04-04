<?php echo validation_errors(); ?>
<?php echo form_open('Question/Add'); ?>
<div>Question : <input type="text" name="question" value="<?php echo $this->input->post('question'); ?>" /></div>
<div>Points : <input type="text" name="points" value="<?php echo $this->input->post('points'); ?>" /></div>
<div>id Quizz : <input type="text" name="idQuizz" value="<?php echo $this->input->post('idQuizz'); ?>" /></div>
<button type="submit">Save</button>
<?php echo form_close(); ?>