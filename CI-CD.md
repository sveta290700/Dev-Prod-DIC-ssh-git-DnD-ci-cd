#### Лабораторная №9 ci/cd
Был использован репозиторий и его копии на сервере из лабораторной 6 (разделение на 2 окружения).

Состояние staging окружения до изменений и запуска пайплайна (обратить внимание на время):

<a href="https://ibb.co/tK6TqZv"><img src="https://i.ibb.co/LRyXxQc/1.png" alt="1" border="0"></a>
<a href="https://ibb.co/kHkgqLh"><img src="https://i.ibb.co/NVQ6W0L/3.png" alt="3" border="0"></a>
<a href="https://ibb.co/gMvL6wp"><img src="https://i.ibb.co/3yf9kWq/3.png" alt="3" border="0"></a>

Состояние prod окружения до изменений и запуска (обратить внимание на время):

<a href="https://ibb.co/MnxgFK0"><img src="https://i.ibb.co/G74dzGS/2.png" alt="2" border="0"></a>
<a href="https://ibb.co/0nJn1p6"><img src="https://i.ibb.co/D1K1mPv/4.png" alt="4" border="0"></a>
<a href="https://ibb.co/XXcpmpP"><img src="https://i.ibb.co/fMjtmtW/4.png" alt="4" border="0"></a>

Внесём изменения в код и проверим работу пайплайна. В endpoint deploy заменим сообщение "Successful staging deploy!" на "CI/CD deploy!".

1) build-and-test

Выполняется копирование репозитория, установка зависимостей,... 

<a href="https://ibb.co/rpMDmtx"><img src="https://i.ibb.co/wQC5RLS/5.png" alt="5" border="0"></a>

...unit-тестирование, проверка качества кода (phpstan)...

<a href="https://ibb.co/J5m7298"><img src="https://i.ibb.co/V2JSDsb/6.png" alt="6" border="0"></a>

...и создание артефакта проекта для дальнейшего деплоя собранного и протестированного проекта на сервер.

<a href="https://ibb.co/kGYg552"><img src="https://i.ibb.co/Bf8Vcc2/7.png" alt="7" border="0"></a>

2) deploy-staging

После сборки и тестирования выполняется автоматический деплой проекта согласно указанным secret окружения staging.

<a href="https://ibb.co/xsJHz1F"><img src="https://i.ibb.co/VN2mMgw/8.png" alt="8" border="0"></a>

Теперь staging окружение выглядит так (обратить внимание на время и новое сообщение):

<a href="https://ibb.co/R2ydJPb"><img src="https://i.ibb.co/v1YRMmq/9.png" alt="9" border="0"></a>
<a href="https://imgbb.com/"><img src="https://i.ibb.co/WtHjG0M/10.png" alt="10" border="0"></a>

3) deploy-prod

Деплой на prod окружение ручной. Пайплайн дожидается одобрения инспектора.

<a href="https://ibb.co/FYFLx0L"><img src="https://i.ibb.co/Zg0pLYp/11.png" alt="11" border="0"></a>
<a href="https://ibb.co/MGgb7jV"><img src="https://i.ibb.co/nnwTjVc/12.png" alt="12" border="0"></a>

После одобрения осуществляется деплой собранного и протестированного проекта согласно указанным secret окружения prod.

<a href="https://ibb.co/tKJ0bzD"><img src="https://i.ibb.co/xL7nMY6/13.png" alt="13" border="0"></a>

Теперь prod окружение выглядит так (обратить внимание на время и новое сообщение):

<a href="https://ibb.co/GHRjZJW"><img src="https://i.ibb.co/FHztQW5/14.png" alt="14" border="0"></a>
<a href="https://ibb.co/C8LQWKq"><img src="https://i.ibb.co/qj6pxYz/15.png" alt="15" border="0"></a>

Пайплайн выполнен.

<a href="https://ibb.co/6XGDbVr"><img src="https://i.ibb.co/Y0Jf8YP/16.png" alt="16" border="0"></a>