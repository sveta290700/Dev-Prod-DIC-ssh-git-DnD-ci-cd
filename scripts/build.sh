cd ..
git pull
composer install
bin/console cache:clear
bin/console cache:warmup