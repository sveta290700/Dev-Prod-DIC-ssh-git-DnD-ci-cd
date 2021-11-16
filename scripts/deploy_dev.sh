git add .
git commit -m "deploy_dev script test"
git push origin master
ssh sammy@178.62.205.95 'cd /var/www/html/lab67_dev/scripts && sh build.sh'