# Instruções
```
composer init -q
composer require phpunit/phpunit --dev

```
- Criar pasta `src` onde ficará a base de código da aplicação
- Criar pasta `tests` onde ficarão os testes unitários
- Add autoload no `composer.json`
```
"autoload": {
    "psr-4":{
        "App\\": "src/"
    }
}
```
> Obs: A cada mudança no auoload é necessário usar o comando ``composer du`` para atualizar
- Add script no `composer.json` para usar phpunit (evitando necessidade de instalá-lo)
```
"scripts": {
    "test": "./vendor/bin/phpunit"
}
```
> Para testar basta digitar: composer test
