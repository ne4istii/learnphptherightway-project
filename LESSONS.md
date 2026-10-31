# Конспект уроков PHP

Здесь коротко записываем, что узнали в каждом уроке. Тег позволяет открыть код именно после этого урока; ветка `course` содержит последний результат.

## Урок 36 — классы и объекты

- `class Transaction` описывает, каким будет объект. `new Transaction(300, '...')` создаёт конкретный объект.
- `__construct()` получает начальные значения. `$this` внутри методов означает «этот объект».
- `private` закрывает прямой доступ к свойству снаружи. Сумму читаем через `getAmount()`.
- `addTax()` и `applyDiscount()` меняют сумму и возвращают `$this`, поэтому вызовы можно соединить через `->`.
- `__destruct()` в нашем примере печатает сообщение при уничтожении объекта.

Пример: `300 → +8% = 324 → −10% = 291,6`.

Дополнительно: в `dynamic-class.php` имя класса хранится в строке, а `object-casting.php` показывает преобразование значений в объект.

Код с простыми комментариями: [тег `lesson-36-commented`](https://github.com/ne4istii/learnphptherightway-project/tree/lesson-36-commented).

## Урок 37 — свойства в конструкторе и `?->`

- Запись `private float $amount` прямо в параметрах конструктора сразу создаёт свойство и сохраняет переданное значение. Повторять объявление свойства и присваивание уже не нужно.
- `?Customer` означает: значение может быть объектом `Customer` или `null`.
- `?->` безопасно продолжает цепочку: если слева `null`, результат тоже `null`, а оставшаяся часть цепочки не выполняется.
- `??` задаёт запасное значение, когда результат слева равен `null`.

В нашем примере без клиента видно «Профиль не найден», а с клиентом и профилем — `42`. Классы `Customer` и `PaymentProfile` добавлены для запуска этого примера.

Код: [тег `lesson-37`](https://github.com/ne4istii/learnphptherightway-project/tree/lesson-37).

## Урок 38 — пространства имён (`namespace`)

- Два класса могут называться `Transaction`, если их полные имена различаются: `PaymentGateway\Paddle\Transaction` и `PaymentGateway\Stripe\Transaction`.
- `namespace` задаёт полное имя класса. Папки удобно называть так же, но само имя папки namespace не создаёт.
- `require_once` загружает файл с классом, а `use` позволяет писать короткое имя вместо полного. В следующем уроке автор переходит к автозагрузке файлов.
- В `use` фигурные скобки группируют классы из одного namespace: `use PaymentGateway\Paddle\{Transaction, CustomerProfile};` — то же самое, что два отдельных `use`.
- `as StripeTransaction` помогает использовать в одном файле оба класса `Transaction`.
- Если внутри namespace нужен встроенный класс PHP, его можно указать от корня: `new \DateTime()`.

Пример: открой `http://localhost:8001/namespaces.php` — `var_dump()` покажет объекты из двух разных пространств имён.

Код: [тег `lesson-38`](https://github.com/ne4istii/learnphptherightway-project/tree/lesson-38). Видео: [урок 2.4 автора](https://youtu.be/Jni9c0-NjrY).

## Урок 39 — автозагрузка, PSR-4 и Composer

- `spl_autoload_register()` вызывает нашу функцию, когда PHP впервые встречает неизвестный класс. В `manual-autoload.php` она превращает полное имя `App\PaymentGateway\Paddle\Transaction` в путь `app/PaymentGateway/Paddle/Transaction.php` и подключает файл.
- PSR-4 — общее правило такого соответствия между именем класса и путём. В `composer.json` запись `"App\\": "app/"` поручает эту работу Composer. После изменения правила запускаем `composer dump-autoload`.
- `require vendor/autoload.php` подключает загрузчик Composer один раз. Он находит и наши классы, и классы установленной библиотеки `ramsey/uuid`.
- Composer записывает точные версии зависимостей в `composer.lock`: его сохраняем в Git. Папка `vendor/` создаётся командой `composer install` и в Git не попадает.
- PSR-1 и PSR-12 описывают стиль PHP-кода; PSR-4 отвечает именно за автозагрузку.

Посмотри оба варианта: [ручная автозагрузка](http://localhost:8001/manual-autoload.php) и [Composer с UUID](http://localhost:8001/composer-autoload.php). После клонирования проекта запусти `docker compose -p learnphptherightway -f docker/docker-compose.yml up -d --build`, затем `docker compose -p learnphptherightway -f docker/docker-compose.yml exec app composer install`.

Код: [тег `lesson-39`](https://github.com/ne4istii/learnphptherightway-project/tree/lesson-39). Видео: [урок 2.5 автора](https://youtu.be/rqzYdHdyMH0).

## Следующие уроки

После каждого урока добавляем сюда несколько простых пунктов, один пример и ссылку на тег с его кодом.
