Try it out:

```
$ faas tempate pull https://github.com/alexellis/php7-swoole-template

$ faas new --lang php7-swoole swoole-test

$ faas up --skip-push swoole-test

$ echo -n | faas invoke swoole-test
```
