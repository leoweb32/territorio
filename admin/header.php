    <header id="header-menu">
    <link rel="stylesheet" type="text/css" href="style.css">
    <?php
        include('conect.php');
        error_reporting(E_ERROR);
        $ter = $_POST['territorio'];
    ?>
        <nav class="container">
        <h1>Territórios Giestas</h1>
            <ul>
                <li><a href="ter-list.php">Territórios</a></li>
                <li><a href="admin-casas.php">Adicionar</a></li>
                <li><a href="rel-list.php">Relatórios</a></li>
                <li><a href="mensagens.php">Mensagens</a></li>
            </ul>
        </nav>
    </header>    
