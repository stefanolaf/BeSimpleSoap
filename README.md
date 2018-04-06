# BeSimpleSoap (Symfony 3.0)

This fork aim to provide the BeSimpleSoap bundles compatibles with Symfony 3.

We forked the official
[BeSimpleSoap](https://github.com/BeSimple/BeSimpleSoap) repository in
order to sucessfully maintain some projects of ours. Therefore, **we are
not going to maintain this library**.

# Installation

If you do not yet have composer, install it like this:

```sh
curl -s http://getcomposer.org/installer | sudo php -- --install-dir=/usr/local/bin
```

Create a `composer.json` file:

```json
{
    "require": {
        "cadoles/soap": "0.3.*@dev"
    }
}
```

Now you are ready to install the library:

```sh
php /usr/local/bin/composer.phar install
```
