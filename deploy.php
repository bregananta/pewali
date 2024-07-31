<?php

namespace Deployer;

require 'recipe/laravel.php';
require 'contrib/npm.php';
require 'contrib/rsync.php';

set('bin/php', function () {
    return '/usr/bin/php';
});

set('application', 'Pewali.com');
set('repository', 'git@github.com:bregananta/pewali.git');

set('git_tty', true);
set('ssh_multiplexing', true);
set('git_ssh_command', 'ssh -o StrictHostKeyChecking=no');

set('keep_releases', 5);
// set('forward_agent', false);

// set('writable_mode', 'chmod'); // shared hosting

add('shared_files', ['.env']);
add('shared_dirs', ['storage']);

add('writable_dirs', [
    "bootstrap/cache",
    "storage",
    "storage/app",
    "storage/framework",
    "storage/logs",
]);

set('composer_options', '--verbose --prefer-dist --no-progress --no-interaction --no-dev --optimize-autoloader');

host('Production_Server')
    ->setHostname('185.151.51.37')
    ->set('remote_user', 'bregananta')
    ->set('port', 7822)
    ->set('branch', 'main')
    ->set('deploy_path', '/var/www/pewali-new');

task('deploy:secrets', function () {
    file_put_contents(__DIR__ . '/.env', getenv('DOT_ENV'));
    upload('.env', get('deploy_path') . '/shared');
});

desc('Build assets');
task('deploy:build', [
    'npm:install',
]);

task('deploy', [
    'deploy:prepare',
    'deploy:secrets',
    'deploy:vendors',
    'deploy:shared',
    'artisan:storage:link',
    // 'artisan:queue:restart',
    'deploy:publish',
    'deploy:unlock',
]);

after('deploy:failed', 'deploy:unlock');
before('deploy:symlink', 'artisan:migrate');
