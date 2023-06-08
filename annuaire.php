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
        
        .profile-pic {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            object-fit: cover;
        }
    </style>
</head>
<body>
    <?php
    include "functions.php";
    setup("SAE23");
    pageheader('NTFExchange');
    pagenavbar();
    ?>
    
    <h1>Annuaire</h1>
    <div>
        <?php
        function showAccounts($accounts) {
            if (count($accounts) > 0) {
                echo '<table>';
                echo '<tr><th>Nom</th><th>Mot de passe</th><th>Email</th><th>Photo</th></tr>';
                foreach ($accounts as $account) {
                    echo '<tr>';
                    echo '<td>' . $account['username'] . '</td>';
                    echo '<td>' . $account['password'] . '</td>';
                    echo '<td>' . $account['email'] . '</td>';
                    echo '<td><img src="' . $account['photo'] . '" alt="Photo de profil" class="profile-pic"></td>';
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
    
    <?php
    pagefooter();
    ?>
</body>
</html>
