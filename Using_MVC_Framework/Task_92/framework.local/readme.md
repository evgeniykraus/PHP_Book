# Уставновка фреймворка
Для начала фреймворк необходимо скачать по следующей ссылке: скачать фреймворк. Распакуйте файлы фреймворка в
какую-нибудь папку сервера, например, в framework.local. В PhpMyAdmin создайте базу данных для вашего фреймворка. Затем
перейдите в файл /project/config/connection.php и настройте там подключение к базе данных. Для проверки работы перейдите
по следующему адресу: http://framework.local/hello/. Там вы должны увидеть приветственное сообщение. Если вы его
видите - значит все работает.

# Структура папок
После распаковки фреймворка у вас будут две папки: папка core и папка project.

В папке core размещается написанное мною ядро нашего фреймворка. Под ядром понимается код, который обеспечивает
функционал, которым вы будете пользоваться при разработке. При использовании фреймворка в эту папку заглядывать вам, как
правило, не будет нужно. В папке project будут размещаться файлы вашего проекта: контроллеры, модели, представления, а
также настройки фреймворка. Именно в этой папке и будет вестись вся работа по разработке сайта.