git commit -a -m "test dev deploy"
git push
ssh sammy@178.62.205.95 'cd /var/www/html/lab67_dev/scripts && sh build.sh'