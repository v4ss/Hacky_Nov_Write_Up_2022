<?php

session_start();

if(!$_SESSION['admin']) {
    header('Location: /admin/dashboard.php');
} else {
    echo <<<html
        <table>
            <thead>
                <tr>
                    <th colspan="4">Stock Mot'Aix</th>
                </tr>
                <tr>
                    <th>Référence</th>
                    <th>Marque</th>
                    <th>Nom</th>
                    <th>Quantité</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>#A4HJ332</td>
                    <td>Suzuki</td>
                    <td>GSXR-1000</td>
                    <td>5</td>
                </tr>
                <tr>
                    <td>#B5YD487</td>
                    <td>Suzuki</td>
                    <td>Bandit 600</td>
                    <td>7</td>
                </tr>
                <tr>
                    <td>#C1PL652</td>
                    <td>Suzuki</td>
                    <td>SV-650</td>
                    <td>8</td>
                </tr>
            </tbody>
        </table>
    html;
}

?>
