@servers(['web' => 'root@121.41.53.212'])

@task('deploy', ['on' => ['web'], 'confirm' => true])
cd /var/www/laravel-blog-57
git pull
@endtask