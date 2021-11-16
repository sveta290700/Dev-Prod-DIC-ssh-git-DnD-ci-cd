cd ..
git stash
git pull origin master
composer install
bin/console cache:clear
bin/console cache:warmup