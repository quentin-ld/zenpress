const { exec } = require('child_process');
const path = require('path');

// Obtenir le nom du dossier courant
const currentDir = path.basename(__dirname);

// Commande de zippage
const zipCommand = `
  zip -r ${currentDir}-temp.zip . \
  -x "*.git*" \
	-x "*.github*" \
	-x "*.wordpress-org*" \
  -x "node_modules/*" \
  -x "vendor/*" \
  -x ".vscode/*" \
	-x ".distignore" \
  -x ".editorconfig" \
  -x ".gitignore" \
	-x ".gitattributes" \
  -x ".php-cs-fixer.php" \
  -x "composer.json" \
  -x "composer.lock" \
  -x "package-lock.json" \
  -x "package.json" \
  -x "phpstan.neon" \
  -x "workflow.md" \
  -x "zip-plugin.js" \
  -x "*.zip" \
  -x "*.tar.gz" \
  -x ".DS_Store" \
  && mkdir ${currentDir} && unzip ${currentDir}-temp.zip -d ${currentDir} && zip -r ${currentDir}.zip ${currentDir} && rm -rf ${currentDir} ${currentDir}-temp.zip
`;

// Exécute la commande
exec(zipCommand, (error, stdout, stderr) => {
  if (error) {
    console.error(`Erreur d'exécution: ${error.message}`);
    return;
  }
  if (stderr) {
    console.error(`Erreurs: ${stderr}`);
    return;
  }
  console.log(`Sortie: ${stdout}`);
});
