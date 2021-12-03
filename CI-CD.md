#### Лабораторная №9 ci/cd
Был использован репозиторий и его копии на сервере из лабораторной 6 (разделение на 2 окружения).

Состояние staging окружения до изменений и запуска пайплайна:

<a href="https://ibb.co/tK6TqZv"><img src="https://i.ibb.co/LRyXxQc/1.png" alt="1" border="0"></a>
<a href="https://ibb.co/kHkgqLh"><img src="https://i.ibb.co/NVQ6W0L/3.png" alt="3" border="0"></a>
<a href="https://ibb.co/gMvL6wp"><img src="https://i.ibb.co/3yf9kWq/3.png" alt="3" border="0"></a>

Состояние prod окружения до изменений и запуска пайплайна:
<a href="https://ibb.co/MnxgFK0"><img src="https://i.ibb.co/G74dzGS/2.png" alt="2" border="0"></a>
<a href="https://ibb.co/0nJn1p6"><img src="https://i.ibb.co/D1K1mPv/4.png" alt="4" border="0"></a>
<a href="https://ibb.co/XXcpmpP"><img src="https://i.ibb.co/fMjtmtW/4.png" alt="4" border="0"></a>

Внесём изменения в код и проверим работу пайплайна. В endpoint deploy заменим сообщение "Successful staging deploy!" на "CI/CD deploy!".