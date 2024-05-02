# Buggy-Code™ (Slim Framework 4 App)

This is a simple web application built on the Slim Framework.

### :triangular_ruler: Install

Prerequisites: [Git](https://git-scm.com/), [PHP](https://www.php.net/), [Composer](https://getcomposer.org/)

```bash
git clone git@github.com:eddturtle/my-simple-app.git
```

```bash
cd my-simple-app
```

```bash
composer install
```

### :running: How to Run

To run the application in development, you can run these commands 

```bash
composer start
```

Or you can use `docker-compose` to run the app with `docker`, so you can run these commands:

```bash
docker-compose up -d
```

After that, open `http://localhost:8080` in your browser.

### :boom: To Test

There's a single test which tests our route. If you would like to run it you can through:

```bash
composer test
```

## :see_no_evil: Challenges

The things to investigate within this app can mainly be found within [/app/routes.php](https://github.com/eddturtle/my-simple-app/blob/master/app/routes.php). They will be labelled with comments. Each will present a different style of challenge, relevant to PHP, HTTP and/or web programming.

If you can reply to us with how you would solve them each of the problems. If there's any you can't solve, no problem, still reply - some of these will be about how you solve them, not if you can solve them.