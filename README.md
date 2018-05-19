# tw-user-link
[![Build Status](https://travis-ci.org/naogify/tw-user-link.svg?branch=master)](https://travis-ci.org/naogify/tw-user-link)

## Require

-   WordPress environment.

If you use [VCCW](https://github.com/vccw-team/vccw) follow this.

```
$ wp scaffold vccw vccw.test --host=vccw.test --ip=192.168.33.10
$ cd vccw.test
$ vagrant up
$ cd wordpress/wp-content/plugins/
$ git clone https://github.com/naogify/tw-user-link
```

## Create test environment

```
$ vagrant ssh 
$ cd /var/www/html/wp-content/plugins/tw-user-link/
$ bash bin/install-wp-tests.sh wordpress_test root wordpress localhost latest
```

### Running automated testing:

```
$ phpunit
```
