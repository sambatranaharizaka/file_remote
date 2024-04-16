<?php
// Obtient le chemin du répertoire courant
$directory = __DIR__;

// Ouvre le répertoire
if ($handle = opendir($directory)) {
    // Affiche un en-tête pour la liste des fichiers
    echo "Liste des fichiers dans le répertoire :\n";
    // Parcourt chaque fichier dans le répertoire
    while (false !== ($file = readdir($handle))) {
        // Exclut les répertoires spéciaux '.' et '..'
        if ($file != "." && $file != "..") {
            // Affiche le nom du fichier
            echo "$file\n";
        }
    }
    // Ferme le gestionnaire du répertoire
    closedir($handle);
}
?>
