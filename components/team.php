<div class="container">
    <div class="row">
        <?php

        $peoples = array(
            array('name' => 'Roberto Halania', 'skill' => ' pizzaiolo', 'image' => 'chef-1.jpg'),
            array('name' => 'Giovanni Cortano', 'skill' => 'Glacier', 'image' => 'chef-2.jpg'),
            array('name' => 'Massimo Pandrico', 'skill' => 'Sauce master', 'image' => 'chef-3.jpg')
        );

        foreach ($peoples as $person) {
            ?>
            <div class="col card">
                <div class="card-team">
                    <img class="card-team-image" src="assets/images/<?= $person['image'] ?>">
                    <div class="card-team-content">
                        <p><?= $person['name'] ?></p>
                        <em><?= $person['skill'] ?></em>
                    </div>
                </div>
            </div>
            <?php
        }
        ?>

    </div>
</div>