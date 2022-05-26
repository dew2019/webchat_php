# webchat

<br/>

#### Install:

- Dependencies: php, webserver (apache2/nginx), js-compatible browser
- Download project archive into your web directory and unpack it
- Do: "chmod 777" or "chown www-data:www-data" to databases/files.json and databases/messages.json
- Change config variables in files if you need
- On Linux systems you can just use embedded php server instead of nginx or apache2. Do "php -S 127.0.0.1:8000" in unpacked project and enjoy it!

<br/>

#### Features:

- This project is in active development. Nope
- Basically ready to use
- Stack: js, html, css, php, json, noSQL
- It uses json as portable databases
- Multiple file uploading
- Fully manual code (no frameworks)
- Fully open-source
- You don't need to register to use it
- You can share files with it
- Pretty good style
- Very good client security
- Databases "encryption"
- It have pretty good compability with old browsers
- A detailed description will come later
- File viewer
- Many other! (See the sources)

<br/>

#### TODO:

- no flex: content position in div centered fullscreened, panel on top fixed и налепить кнопку скрытия/показа ?¿?
- найти способ отцентрировать контент в просмотрщике, сделать красиво (юзать flex) | html, css
- полный экран в просмотрщик | html, css, js
- определение высоты картинки относительно именно высоты страницы? | html, css

<br/>

- найти более правильный/безопасный chmod или chown для баз
- поправить вид функций (кривовато)
- комментарии в коде
- тень внизу сообщений??? (Может всё-таки да?)
- title style?
- больше инфы через title (ник, время, дата, адрес)
- custom время и GMT php
- кол-во непрочитанных сообщений
- autocomplete html on/off
- форматированные всплывающие подсказки (инфо)
- ввести переменную версии (и может быть взаимодействие на основе этой инфы)
- поменять некоторые переменные на php-серверные для универсальности
- соль для адресов и не только (антибрутфорс)
- счетчик пропущенных сообщений?
- даты (не время) сообщений и файлов красиво
- глянуть, какие нотифи можно ещё выводить
- клиентские настройки ввода
- решить косяк с форматированием текста при копировании из чата
- кнопка "назад" при переходе с другого места для тесной интеграции с другими сервисами
- поработать над условиями воспроизведения звукового уведомления (она ведь не постоянно должна отыгрывать)
- может в целом звуков добавить?
- анимация автопрокрутки инфы о файлы в инпуте
- эффект нажимания отсутствует на кнопках просмотра и скачивания

<br/>

- сразу проверять файл на требования, чтобы не захламлять базу
- custom limits for file size?
- custom limits for messages count?
- затирание баз (лимит, время, удаление старых вместо перезаписи (всё опционально))
- скрипты для редактирования/удаления файлов/сообщений (мб примитивную админку всё-таки сделать)
- возможность ограничить вывод на клиентской стороне?
- удаление сообщений пользователем с проверками
- кастомные ограничения по типу файла
- кастомнные ограничения по размеру сообщения | php

<br/>

- функция получения списка файлов
- переменную для префикса для клиента
- префикс для скачивания файлов если клиент
- remote files sending

<br/>

- окна ошибок/отказа
- окно процесса 
- дописать фул хелпу
- может сделать граф. пункт настройки??? Вынести переменные в базы и привязать к адресу с шифровкой
- можно кинуть хелпу в настройки потом

<br/>

- шифровка вместо кодировки (опционально)
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

<br/>

- авто закрытие ненужной вкладки (не знаю есть косяк или нет, просто)
- ники юзеров разными цветами
- может всё-таки локаль?
- drag-n-drop? Во все инпуты
- рекурсивный выбор файлов в папке

<br/>

- на мобильных скрыть некоторые кнопки
- сделать адаптацию для мобильных устройств (в последнюю очередь) | js, css

<br/>

- потом добавить файлы с кодом от комнат, хтпасс и т.д.
- обновить дефолтные базы (произойд[ут|шли] некоторые изменения)
- на мобильных (когда доберусь) фоновоую работу, уведомления, светодиод, вибро

<br/>

- true material default theme (щас не тру)
- сделать дефолтную тему без голубых элементов (на основе нынешней, нынешнюю переименовать)
- разные темы понаделать
- угловатая тема (светлая + темная) | css
- очень компактная тема (светлая + темная) | css
- темная тема (в самую последнюю очередь) | css

<br/>

- по итогу протестить на безопасность ещё раз

<br/>

- описание концепта комнат, т.к. не всем они нужны | html, css, markdown
- описание | markdown
- описание basic auth | markdown, cfg
- документацию по итогу

<br/>

#### Keywords:

- webchat chat messenger chatroom anonim
