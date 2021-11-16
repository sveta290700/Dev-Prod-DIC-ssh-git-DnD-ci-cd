#### Лабораторная №6
##### 1) Dev-окружение (http://178.62.205.95:8080/health):
<a href="https://ibb.co/mBk2rv4"><img src="https://i.ibb.co/sPnNp5q/1.png" alt="1" border="0"></a>
##### 2) Prod-окружение (http://178.62.205.95:8880/health):
<a href="https://ibb.co/q7xTXkV"><img src="https://i.ibb.co/MZ9FWMQ/2.png" alt="2" border="0"></a>
#### Лабораторная №7
Для проверки отработки скриптов build_dev.sh и build_prod.sh были проведены следующие действия:
##### 1) build_prod.sh
Был заранее создан ЕП /deploy, выдающий json-сообщение 'Successful dev deploy!'.
Для проверки отправки изменений сообщение по ЕП /deploy было изменено на 'Successful prod deploy!'.
Далее на локальной машине через Git Bash был запущен скрипт build_prod.sh.

<a href="https://ibb.co/0Mbq8TP"><img src="https://i.ibb.co/6PCYVz6/3.png" alt="3" border="0"></a>

Как видно из сообщений при работе скрипта, изменения были успешно отправлены (https://github.com/sveta290700/lab67/commit/e000ae6ffe7fd47882a134dedec8510c6eb01551).
Проверим это (http://178.62.205.95:8880/deploy):

<a href="https://ibb.co/xqZqKjq"><img src="https://i.ibb.co/zVdVWRV/4.png" alt="4" border="0"></a>
##### 2) build_dev.sh
Для проверки отправки изменений сообщение по ЕП /deploy было изменено на 'Successful dev deploy!'.
Далее на локальной машине через Git Bash был запущен скрипт build_dev.sh.

<a href="https://ibb.co/wWCn7Lr"><img src="https://i.ibb.co/bBL4F3R/5.png" alt="5" border="0"></a>

Как видно из сообщений при работе скрипта, изменения были успешно отправлены (https://github.com/sveta290700/lab67/commit/b6f41552bae19d6d09bcf341f9bfba7690ce0330).
Проверим это (http://178.62.205.95:8080/deploy):

<a href="https://ibb.co/9ykLwY2"><img src="https://i.ibb.co/CV3ZJ0v/6.png" alt="6" border="0"></a>