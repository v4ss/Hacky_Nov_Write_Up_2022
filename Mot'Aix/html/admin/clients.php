<?php

session_start();

if(!$_SESSION['admin']) {
    header('Location: /admin/dashboard.php');
} else {
    echo <<<html
        <table>
            <thead>
                <tr>
                    <th colspan="4">Salaires Mot'Aix</th>
                </tr>
                <tr>
                    <th>id</th>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Nombre commande</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Polo</td>
                    <td>Marco</td>
                    <td>3</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Blais</td>
                    <td>Chantal</td>
                    <td>1</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Charpentier</td>
                    <td>Isaac</td>
                    <td>1</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Pinneau</td>
                    <td>Marc</td>
                    <td>4</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Begin</td>
                    <td>Maurice</td>
                    <td>2</td>
                </tr>
            </tbody>
        </table>
    html;
}

?>
