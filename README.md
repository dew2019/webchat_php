# webchat

<br/>

#### Demo:

Main | Attachments
--- | ---
![Demo 1](demo/demo1.png) | ![Demo 2](demo/demo2.png)

<br/>

#### Install:

- Dependencies: php, webserver (apache2/nginx), js-compatible browser
- Download project archive into your web directory and unpack it
- Do: "chmod 666" or "chown %username%:www-data" to databases/files.json and databases/messages.json
- Change config variables in files if you need
- [ ! ] : On Linux systems you can just use embedded php server instead of nginx or apache2. Do "php -S 127.0.0.1:8080" in unpacked project and enjoy it! Also you don't need to make databases writeable

<br/>

#### Features:

- This project is in active development (no)
- Fully standalone
- You can use it as primary engine to build your own app
- Basically ready to use
- Stack: js, html, css, php, json, noSQL
- Fully RESTful. No sockets
- Semi-realtime work
- It uses json as portable databases
- Multiple file uploading
- Fully manual code (no frameworks)
- Fully open-source
- You don't need to register to use it
- You can share files with it
- Pretty good style
- Very good client security
- Databases encryption with openssl (optional)
- It have pretty good compability with old browsers
- A detailed description will come later
- File viewer
- Many other! (See the sources)

<br/>

#### Изменения | Changes:
- Для того чтобы понять, какие были изменения, следите за правками README

<br/>

---

#### TODO:

##### Касаемо просмотрщика файлов
- флексом отцентрировать контент в просмотрщике, сделать красиво, анимации, проверить с изменением полного экрана - в целом решено, но нужно доработать

<br/>

##### Разное
- поправить вид функций (кривовато), нужно в целом весь код привести к одному +- виду, чтобы все одинаково было
- комментарии в коде
- глянуть, какие нотифи можно ещё выводить
- решить косяк с форматированием текста при копировании из чата (задетектил на winXP)
- кнопка "назад" при переходе с другого места для тесной интеграции с другими сервисами
- поработать над условиями воспроизведения звукового уведомления (она ведь не постоянно должна отыгрывать)
- бан пользователя по адресу (либо белый список) (можно еще типо список запрещенных ников ввести)
- js выполнение функций при закрытии
- изменение имени вкладки типо в скобках кол-во новых сообщений
- экспорт сообщений из клиента
- окрасить плейсхолдеры?
- окрасить флат-кнопки? (была попытка)
- сохранять недописанное сообщение?
- авторство в хелпу
- поменять стили своих сообщений, сделать как в обычных мессенджерах
- проблемы с полным экраном на старых версиях
- html мета тэг для мобильной версии (как писали, проверить)
- попытаться сделать обрезку (функцию) названий, типов файлов, сообщений, ников
- в целом можно многое накодить на клиентской стороне
- кнопка + для добавления файлов для тупых
- косяк в чате с исчезновением кнопки (неплавное)
- косяк в просмотрщике с кнопкой фулскрина
- черный и белый списки (ip и ник)
- сжатие файлов
- оптимизировать работу базы файлов (рассосать на инфу (мету) и сами файлы, можно попробовать просто дублировать без тела)
- понадобится: https://nuancesprog.ru/p/16673/
- если делать какие-то юзер-настройки\данные, можно шифровать по паролю с проверкой на хэш
- на клиентской стороне выводить даты (начала дНя) для сообщений
- часть вещей можно спихнуть на пользователя (запоминание, настройки)
- возможность ответа на сообщения (система ответов на хэшах)
- черный/белый список слов? (опционально, пыха, жс)
- черный/белый список ников? (опционально, пыха, жс)
- черный/белый список адресов? (опционально, пыха, жс)
- скрипт для калибровки бд (бд почистить напрочь, в скрипте будут тестовые данные)

- сделать проверки на "а пишущиеся ли базы?"
- можно попробовать сделать слушатель на окно, и типо если окно закрывается слать дисконнект

- crud htaccess basic-based система регистрации и логина +
- сброс вывода при ошибках базы (если сообщений стало меньше, сделать после реорганизации)
- сделать проверку на пустоту полей, чтобы не выпадала форма +
- сделать анимации полей через js (это + к верхней таске) +
- сначала бахнуть все проверки на серверные исключения а потом переводить??? <-- после самой разработки всего, сначала сделать рабочий минимум, а эту задачу скинуть в туду +
- жопа с фреймами при авторизации +
- жопа при неудачных попытках авторизации +
- продумать кей-адреса при наличии авторизации +
- на хроме жопа с прокруткой и кнопкой вниз +
- оттестировать на 4 пыхе
- доделать вместо алертов на клиенте кастомные формы
- доделать dry run на регистрации?
- доделать алгоритм сообщение дисконнекта, т.к. есть косяк внесения через логаут - нужно будет сделать проверку на наличие юзера в базе (ну и мб другие стандартные и пароль) (+ часто просто не срабатывает) (ВОЗМОЖНО ДЫРА)
- везде проставить таргеты, что возможно поможет избавиться от фреймов +
- сделать потом полный рефакторинг кода, всё раздробить на функции
- исключение при попытке загрузки файла бОльшего размера +
- кодировать все запросы, ответы и креды в base64
- попробовать сделать проверку на фрейм (для хромов по крайней мере) и если в фрейме делать бланк (для комнат)
- проверить возможность регистрации если она выключена, т.к. есть вероятность спама (ВОЗМОЖНО ДЫРА) +
- везде ввести тримы
- в будущем добавить переключение видимости паролей на формы
- проверку на подключение модуля клиентских сообщений к серверу и выдача ошибки при отстутствии
- возможно продумать потом такую тему, держать базы дешифрованные в какой-нить tmp директории чтобы сервак чуть разгрузить
- постинг сообщений и файлов через жс, кодировать всё
- отвязать от фреймов получилось, теперь везде жопа с кнопкой и прокруткой и не работает фиттинг в width у вывода +
- короче придётся видимо оба делать fixed и заниматься логикой на js +
- обрабатывать 401 запросы в формах
- можно каждому пользователю выдавать уникальный ключ для получения баз

- [!] последний раз пытался сделать прогресс бар для файлов и кастомные запросы
- открой ИИ
- проблема с кнопкой в мейне при разных зумах страницы (лимит расчёт через процентное соотношение?)

- попробовать сделать мобильную через initial scale
- сделать убирание названий файлов при увеличении страницы +

<br/>

##### Настройки
- поменять некоторые переменные на php-серверные для универсальности
- клиентские настройки ввода
- больше настроек и изменяемости сделать под всёеее
- куки БД

<br/>

##### Оптимизация сети
- можно типо отсылать не всю базу сообщений а только то, чего нет у клиента (так можно разгрузить сеть, но потребуется переработка клиентского кода (возможно полностью))
- придумать как экономить и ускорить трафик (можно например не получать сообщения если свернут чат, или что-то подобное), сжимать там мб
- придумать как уменьшить кол-во/частоту запросов к серверу
- получше изучить работу соединения через сокеты, попытаться сделать максимально похожим
- синхронизация
- "забывчивость" клиента относительно кол-ва сообщения для предотвращения ошибки при удалении сообщений из базы (возможно пофиксится с изменением алгоритма, делать потом)
- вывод ошибки при отсутствии сети
- учет онлайна?

<br/>

##### Непрочитанные сообщения
- кол-во непрочитанных сообщений
- счетчик пропущенных сообщений?
- намутить такое что типо прокручивать не сразу прям вниз а до первого непрочитанного сообщения?

<br/>

##### Касаемо файлов и баз
- сразу проверять файл на требования, чтобы не захламлять базу
- custom limits for file size?
- custom limits for messages count?
- затирание баз (лимит, время, удаление старых вместо перезаписи (всё опционально))
- скрипты для редактирования/удаления файлов/сообщений (мб примитивную админку всё-таки сделать)
- возможность ограничить вывод на клиентской стороне? (резать либо не выводить слишком длинные сообщения)
- удаление сообщений пользователем с проверками
- удаление файлов
- кастомные ограничения по типу файла
- кастомнные ограничения по размеру сообщения | php
- загрузка файлов частями?
- фильтрация по типу (черный и белый список) и имени файла (pathinfo)
- ограничение по количеству файлов
- клиент-серверно ограничивать количество входящих символов
- обратная совместимость с предыдущими версиями? (По крайней мере возможность импорта бд?). Решение: намутить функцию импорта-экспорта
- экспорт в файл, импорт из файла (загрузка извне)

<br/>

##### Для режима клиента
- функция получения списка файлов
- переменную для префикса для клиента
- префикс для скачивания файлов если клиент
- remote files sending
- нужно в общем проработать клиент-серверный режим (защиту и т.д.)

<br/>

##### Разные новые окна
- окна ошибок/отказа
- окно процесса
- дописать фул хелпу
- может сделать граф. пункт настройки??? Вынести переменные в базы и привязать к адресу с шифровкой
- можно кинуть хелпу в настройки потом
- credits?

<br/>

##### Касаемо безопасности
- защита от xss (глупо но да)
- можно юзать шифрование для контроля доступа к бд, и попытаться гасить левые запросы
- токены/пароли для удаленных клиентов?
- обфусцировать для продакшена при необходимости
- вообще надо широко изучить вопросы безопасности и доступа (скриптов, файлов, бд)
- ускорение записи в бд доп. запись без перезаписи?
- шифрование на стороне клиента?
- шифрование при передаче инфы?
- сжатие смс/файлов/баз?
- расширить валидацию (клиентскую безопасность), добавить в просмотрщик | js, php
- php basic auth against web server
- noSQL injection?
- по итогу протестить на безопасность ещё раз
- можно закатать в докер для бОльшей безопасности (намутить готоую приложуху)
- организовать проверки на стадии ввода?
- проверять вообще всё что выводится
- js отображение тупо символов в чистом виде если есть такое (characterescape)
- xss escape через title
- защита запросов
- RFI, LFI, RCE, CSRF, IDOR
- WAF
- контроль загружаемых файлов
- htmlspecialchars (или экранирование символов)
- php вывод инфы через уже обработанные переменные
- проверять всее входящие данные и валидировать их
- фильтр ввода
- кодирование url
- найти более правильный/безопасный chmod или chown для баз

<br/>

##### Косметические удобства
- авто закрытие ненужной вкладки (не знаю есть косяк или нет, просто)
- ники юзеров разными цветами
- может всё-таки локаль?
- drag-n-drop? Во все инпуты
- рекурсивный выбор файлов в папке
- анимация автопрокрутки инфы (подсказок) в инпутах (при недостаточной широте экрана например)
- кастомный скроллбар?
- кнопка очистки инпутов?
- плавные переходы между страницами - html equiv page-enter page-exit
- тень внизу сообщений??? (Может всё-таки да?)
- мигать при слишком большом сообщении
- мигать при лимите кол-ва файлов
- расширять и возможность листать textarea? (но тогда надо убрать скроллбар)
- выводить даты посередине (теперь реально)
- анимация отправки (просто чтоб покрасивее поплавнее)

<br/>

##### Адаптивность
- на мобильных скрыть некоторые кнопки
- сделать адаптацию для мобильных устройств (в последнюю очередь) | js, css

<br/>

##### Расширения
- потом добавить файлы с кодом от комнат, хтпасс и т.д.
- обновить дефолтные базы (произойд[ут|шли] некоторые изменения)
- на мобильных (когда доберусь) фоновоую работу, уведомления, светодиод, вибро

<br/>

##### Темы
- true material default theme (щас не тру)
- сделать дефолтную тему без голубых элементов (на основе нынешней, нынешнюю переименовать)
- разные темы понаделать
- угловатая тема (светлая + темная) | css
- очень компактная тема (светлая + темная) | css
- темная тема (в самую последнюю очередь) | css

<br/>

##### Описания
- описание концепта комнат, т.к. не всем они нужны | html, css, markdown
- описание | markdown
- описание basic auth | markdown, cfg
- документацию по итогу
- расписать требования, используемые расширения и функции, и миним браузер для работы

<br/>

#### Keywords:

- webchat chat messenger chatroom anonim
