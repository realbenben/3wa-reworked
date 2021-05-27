<ul class="navbar">
    <?php

    $navlinks = array(
        array('title' => 'Présentation', 'icon' => 'fa-store', 'href' => 'about.php'),
        array('title' => 'Menu', 'icon' => 'fa-pizza-slice', 'href' => 'card.php'),
        array('title' => 'Accès/Contact', 'icon' => 'fa-phone', 'href' => 'contact.php'),
        array('title' => 'emporter', 'icon' => 'fa-car', 'href' => 'login.php'),
        array('title' => 'gallerie', 'icon' => 'fa-image', 'href' => 'gals.php')
    );

    foreach ($navlinks as $link) {
        ?>
        <li class="navbar-label">
            <a class="navbar-link" href="<?= $link['href'] ?>">
                <i class="fas <?= $link['icon'] ?>"></i>
                <?= $link['title'] ?>
            </a>
        </li>
        <?php
    }
    ?>
</ul>
