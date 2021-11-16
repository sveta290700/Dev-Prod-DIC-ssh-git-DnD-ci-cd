git commit -a -m "test prod deploy"
git push
ssh sammy@178.62.205.95 'cd /var/www/html/lab67_prod/scripts && sh build.sh'