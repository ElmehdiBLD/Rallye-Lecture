<!-- navigation -->
<div class="navigation">
    <a href="<?php echo base_url(); ?>">Home</a>
    <a href="<?php echo base_url('quizz/add'); ?>">Ajouter</a>
</div>
<table>
    <tr>
        <td>#</td>
        <td>n° de fiche</td>
        <td>Actions</td>
    </tr>
    <?php foreach ($all_quizz as $q): ?>
        <tr>
            <td><?php echo $q['id']; ?></td>
            <td><?php echo $q['idFiche']; ?></td>
            <td>
                <a href="<?php echo site_url('quizz/edit/'.$q['id']); ?>">Edit</a> | 
                <a href="<?php echo site_url('quizz/remove/'.$q['id']); ?>">Delete</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>