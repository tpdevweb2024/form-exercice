<?php
$title = "Enregistrez-vous";

$hobbies = [
    "Tennis",
    "Golf",
    "Cinéma",
    "Fitness",
    "Pêche",
    "Balades",
    "Chasse",
    "Football"
];

require_once "./inc/header.php";
// MON CONTENU
?>
<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ea, nobis. Nisi expedita odit quia dolorum nesciunt soluta minus quod officia!</p>

<form action="requests/req_register.php" method="post" enctype="multipart/form-data">
    <div class="form_inputs">
        <div class="input_group">
            <label for="last_name">nom</label>
            <input type="text" name="last_name" id="last_name" placeholder="Votre nom">
        </div>
        <div class="input_group">
            <label for="first_name">prénom</label>
            <input type="text" name="first_name" id="first_name" placeholder="Votre prénom">
        </div>
        <div class="input_group">
            <label for="pwd">mot de passe</label>
            <input type="password" name="pwd" id="pwd">
        </div>
        <div class="input_group">
            <label for="birth_date">date de naissance</label>
            <input type="date" name="birth_date" id="birth_date">
        </div>
        <div class="input_group">
            <label for="hobbies">vos hobbies - plusieurs choix possibles</label>
            <div class="hobbies">
                <?php foreach ($hobbies as $hobby) : ?>
                    <div class='hobby'>
                        <input type='checkbox' name='hobbies[]' value='<?= $hobby ?>' /> <?= $hobby ?>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="input_group">
            <label for="avatar">avatar</label>
            <input type="file" name="avatar" id="avatar" accept=".jpg, .jpeg, .png">
        </div>
    </div>
    <div class="submit">
        <input type="submit" value="Envoyer" class="submit_btn">
    </div>
</form>

<?php
// FIN DE MON CONTENU
require_once "./inc/footer.php";
