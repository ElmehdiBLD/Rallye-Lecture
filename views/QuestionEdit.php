<?php echo validation_errors(); ?>
<?php echo form_open('question/edit/'.$question['id']); ?>
<div>Question : <input type="text" name="question" value="<?php echo ($this->input->post('question') ? $this->input->post('question') : $question['question']); ?>" /></div>
<div>Points : <input type="text" name="points" value="<?php echo ($this->input->post('points') ? $this->input->post('points') : $question['points']); ?>" /></div>
<div>id Quizz : <input type="text" name="idQuizz" value="<?php echo ($this->input->post('idQuizz') ? $this->input->post('idQuizz') : $question['idQuizz']); ?>" /></div>
<button type="submit">Save</button>
<?php echo form_close(); ?>

