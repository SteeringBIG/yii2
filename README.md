<p align="center">
    <a href="https://github.com/yiisoft" target="_blank">
        <img src="https://avatars0.githubusercontent.com/u/993323" height="100px">
    </a>
    <h1 align="center">Проект на основе Framework Yii 2.0</h1>
    <br>
</p>

Этот проект был создан для изучения Yii 2.0 Framework и языка PHP в рамках обучающего курса "PHP PRACTICE" в образовательно-событийном центре «Digital Space» https://dspace.pro


[![Latest Stable Version](https://img.shields.io/packagist/v/yiisoft/yii2-app-basic.svg)](https://packagist.org/packages/yiisoft/yii2-app-basic)
[![Total Downloads](https://img.shields.io/packagist/dt/yiisoft/yii2-app-basic.svg)](https://packagist.org/packages/yiisoft/yii2-app-basic)
[![Build Status](https://travis-ci.org/yiisoft/yii2-app-basic.svg?branch=master)](https://travis-ci.org/yiisoft/yii2-app-basic)

ТРЕБОВАНИЯ
------------

Минимальное требование для запуска этого проекта на вашем веб-сервере: PHP 5.4.0.

КОНФИГУРАЦИЯ
-------------

### База данных

Отредактируйте файл `config/db.php` в соответствии с вашими параметрами, например:

```php
return [
    'class' => 'yii\db\Connection',
    'dsn' => 'pgsql:host=localhost;dbname=yii2db',
    'username' => 'postgres',
    'password' => '',
    'charset' => 'utf8',
];
```

**ЗАМЕТКИ:**
- Yii не будет создавать базу данных для вас, это нужно сделать вручную, прежде чем вы сможете получить к ней доступ.
- Проверьте и отредактируйте другие файлы в каталоге `config /`, чтобы настроить ваше приложение по мере необходимости.
- Обратитесь к README в каталог `tests` для получения информации, относящейся к базовым испытаниям приложений.
