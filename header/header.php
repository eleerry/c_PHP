<?php
    $menuItems = [ 'home', 'sobre', 'portifolio', 'contato']
?>
<body>
<header>
    <div class="header-container">
        <div class="logo-conteiner">
            Eleérry
        </div>
        <div class="header-menu">
            <nav class="menu_conteiner">
                <ul class="menu">
                    <?php foreach($menuItems as $item): ?>
                        <li class="menu-item">
                            <a href="#" class="item">
                                <?= $item ?>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </nav>
        </div>
    </div>
</header>