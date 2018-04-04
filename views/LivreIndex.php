<!-- navigation -->
<div class="navigation">
    <a href="<?php echo base_url(); ?>">Home</a>
    <a href="<?php echo base_url('livre/add');?>">Ajouter</a>
    <?php
      echo validation_errors();
    echo form_open(base_url('/livre/recherche'));
    echo form_input('rechercher','');
    echo form_submit('valider','rechercher');
    echo form_close();
    ?>
</div>
<div class="ligne<?php= ($ligne_i++ % 2 == 1) ? 'impaire' : 'paire' ; ?>
"><?php echo " il y a ".$count."livres dans l'ecole"; ?>
    <?php echo $links;?>
<table>
    
    
    <tr>
        <th>#</th>
        <th>titre</th>
        <th>couverture</th>
        <th>id auteur</th>
        <th>id editeur</th>
       <th>id quizz</th>
        <th>image</th>
        <th>Actions</th>
    </tr>
        
    <?php foreach ($livres as $l): ?>
    
    <tr>
     
            <td><?php echo $l['id']; ?></td>
            <td><?php echo $l['titre']; ?></td>
            <td><?php echo $l['couverture']; ?></td>
            <td><?php echo $l['idAuteur']; ?></td>
            <td ><?php echo $l['idEditeur']; ?></td>
            <td><?php echo $l['idQuizz']; ?></td>
            <td><img src="<?php echo base_url('img/'.$l['couverture']) ?>" alt="<?php echo $l['titre']; ?>" height="50" width="50"> </td>
            <td>
                <a href="<?php echo site_url('livre/edit/'.$l['id']); ?>">Edit</a> | 
                <a href="<?php echo site_url('livre/remove/'.$l['id']); ?>">Delete</a>
            </td>
        </tr>
    <?php endforeach; ?>
        
</table>
 