<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" describe="Guilherme Henrique de Sousa Jesus">
    <meta name="description" content="<?php echo $this->getDescription();?>">
    <meta name="keywords" content="<?php echo $this->getKeywords(); ?>">
    <title><?php echo $this->getTitle(); ?></title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo DIRCSS.'Layout.css' ?>">
    <script src="<?php echo DIRJS.'menu.js'?>" defer></script>
    <?php echo $this->addHead();?>

    
</head>
<body>

    <!---------------------------Header------------------------>
    <header>
        <!------------------------ Banner --------------------->
        <div class="banner">
            <img src="<?php echo DIRIMG.'Banner-fullscreen.png'?>" alt="">
        </div>
        <!------------------------ NAV ------------------------>
        <nav>
            <div class="logo">
                <h1>Menu</h1>
                <span function="click"  id="menu-icone" class="material-icons">menu</span>
            </div>
            <div class="menu" id="menu-mobille">
                    <ul>
                    <li>
                        <a href="<?php echo DIRPAGE;?>">Home</a>
                    </li>
                    <li>
                        <a href="<?php echo DIRPAGE.'contabilidade'; ?>">Contabilidade</a>
                     </li>
                    <li>
                        <a href="<?php echo DIRPAGE.'financeiro'; ?>">Financeiro</a>
                    </li>
                    <li>
                        <a href="<?php echo DIRPAGE.'estoque'; ?>">Estoque</a>
                    </li>
                    <li>
                        <a href="<?php echo DIRPAGE.'administrativo'; ?>">Administrativo</a>
                    </li>
                </ul>
            </div>
        </nav>
        <?php echo $this->addHeader(); ?>
        
    </header>

    
    <div class="breadcrumb">
        <?php
            $bread = new \Src\Classes\classBreadCrumb();
            $bread->addBreadcrumb();
        ?>
    </div>
    <hr>
     



    <!-------------------------- Main ------------------------->
    <main>
        <?php echo $this->addMain(); ?>
    </main>

    <!------------------------- Footer ------------------------>
    <footer>
        <div class="direitos-autorais"> Criado e Desenvolvido por: &copy; Guilherme Henrique de Sousa Jeus</div>
        <?php echo $this->addFooter(); ?>
    </footer>
    
    
</body>
</html>