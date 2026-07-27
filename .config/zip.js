/**
 * Build a distribution ZIP archive, excluding development files listed in the ignore array.
 */
const fs = require('fs');
const path = require('path');
const archiver = require('archiver');

const startTime = Date.now();
const currentDir = path.basename(process.cwd());
const zipFileName = `${currentDir}.zip`;
const output = fs.createWriteStream(path.join('.', zipFileName));
const archive = archiver('zip', { zlib: { level: 9 } });

output.on('close', () => {
	const duration = Date.now() - startTime;
	const size = archive.pointer();
	const sizeStr =
		size < 1024 ? `${size} bytes` : `${(size / 1024).toFixed(2)} KB`;
	console.log(`Zipped: ${zipFileName} (${sizeStr}) in ${duration}ms`);
});

archive.on('error', (err) => {
	throw err;
});

archive.pipe(output);

archive.glob('**/*', {
	ignore: [
		'.agents/**',
		'.cache/**',
		'.config/**',
		'.cursor/**',
		'.github/**',
		'.git/**',
		'.phpunit.cache/**',
		'.sublime/**',
		'.vscode/**',
		'.wordpress-org/**',
		'assets/src/**',
		'bin/**',
		'docs/**',
		'node_modules/**',
		'tests/**',
		'vendor/**',
		'*.sql',
		'*.tar.gz',
		'*.zip',
		'.distignore',
		'.DS_Store',
		'.editorconfig',
		'.eslintrc',
		'.eslintrc.js',
		'.gitattributes',
		'.gitignore',
		'.gitlab-ci.yml',
		'.gitmodules',
		'.php-cs-fixer.php',
		'.phpunit.result.cache',
		'.prettierrc',
		'.prettierrc.js',
		'.travis.yml',
		'behat.yml',
		'circle.yml',
		'composer.json',
		'composer.lock',
		'eslintrc',
		'eslintrc.js',
		'FEATURE_REQUEST.md',
		'Gruntfile.js',
		'multisite.xml',
		'multisite.xml.dist',
		'package-lock.json',
		'package.json',
		'php-cs-fixer.php',
		'phpcs.ruleset.xml',
		'phpcs.xml',
		'phpcs.xml.dist',
		'phpstan-bootstrap.php',
		'phpstan.neon',
		'phpunit.xml',
		'phpunit.xml.dist',
		'postcss.config.sort.js',
		'prettierrc',
		'prettierrc.js',
		'README.md',
		'Thumbs.db',
		'workflow.md',
		'wp-cli.local.yml',
		'yarn.lock',
		'.phpactor.json',
		'AGENTS.md',
		'.php-cs-fixer.cache',
	],
});

archive.finalize();