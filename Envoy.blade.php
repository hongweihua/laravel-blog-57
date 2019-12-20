@servers(['web' => 'root@118.24.249.222'])

@task('deploy', ['on' => ['web'], 'confirm' => true])
cd /www/wwwroot/laravel-blog-57
git pull
@endtask