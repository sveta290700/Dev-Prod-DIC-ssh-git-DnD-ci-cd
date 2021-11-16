cd ..
git pull
sudo composer install
bin/console cache:clear
bin/console cache:warmup