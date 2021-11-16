cd ..
git stash
git pull
composer install
php bin/console cache:clear
php bin/console cache:warmup