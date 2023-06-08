<!DOCTYPE html>
<html>
<head>
    <title>Annuaire</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        
        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
    </style>
</head>
<body>
    <?php
    include "functions.php";
    setup("SAE23");
    echo ' <div class="container mt-3">';
    pageheader('NTFExchange');
    pagenavbar();
    ?>
    <div class="mt-4 p-5 bg-dark text-warning rounded">
    <h1>Annuaire</h1>
    <div>
        <?php
        function showAccounts($accounts) {
            if (count($accounts) > 0) {
                echo '<table>';
                echo '<tr><th>Nom</th><th>Mot de passe</th><th>Email</th></tr>';
                foreach ($accounts as $account) {
                    echo '<tr>';
                    echo '<td>' . $account['username'] . '</td>';
                    echo '<td>' . $account['password'] . '</td>';
                    echo '<td>' . $account['email'] . '</td>';
                    echo '</tr>';
                }
                echo '</table>';
            } else {
                echo '<p>Aucun compte trouvé.</p>';
            }
        }
        
        // Afficher la liste des comptes à partir du fichier JSON
        $accounts = json_decode(file_get_contents('./js/comptes.json'), true);
        showAccounts($accounts);
        ?>
    </div>
    </div>
    <?php
    pagefooter();
    ?>
</body>
</html>
