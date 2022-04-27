<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>Mot'Aix - ADMIN</title>
    </head>
    <body>
        <style>
            table,
            td {
                border: 1px solid black;
                text-align: center;
            }
        </style>
        <?php
        session_start();
        if($_POST['login'] == 'root' && $_POST['password'] == 'root') {
            $_SESSION['admin'] = TRUE;
        }
        if(!$_SESSION['admin']) {
            echo <<<html
            <h1>Login Dashboard Administrateur</h1>
            <hr />
            <form action="#" method="post">
                <p>login : <input type="text" name="login" /></p>
                <p>password : <input type="password" name="password" /></p>
                <p><input type="submit" value="connect" /></p>
            </form>
            html;
        } else {
            echo <<<html
                <header>
                    <h1>Dashboard Administration - Mot'Aix</h1>
                </header>
                <main>
                    <hr />
                    <nav>
                        <h2>Menu</h2>
                        <ul>
                            <li><a href="/admin/dashboard.php?page=clients.php" title="Vers la liste des clients">Clients</a></li>
                            <li><a href="/admin/dashboard.php?page=stock.php" title="Vers la liste du stock">Stock</a></li>
                            <li><a href="/admin/dashboard.php?page=salaires.php" title="Vers la liste des salaires">Salaires</a></li>
                            <li><a href="/admin/dashboard.php?page=logs.php" title="Vers les logs">Logs</a></li>
                            <li><a href="/admin/dashboard.php?page=flag.php" title="Vers la page du Flag">Flag</a></li>
                        </ul>
                    </nav>
                    <hr />
            html;

            include($_GET['page']);

            echo "</main>";
        } ?>
    </body>
</html>
