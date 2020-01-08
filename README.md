# Battleship PHP

A simple game of Battleship, written in PHP.

# Getting started

This project requires a php7 or higher. To prepare to work with it, pick one of these
options:

## Run locally

Run battleship with composer

```bash
composer run game
```

## Execute tests with composer

Install dependencies
```bash
composer install
```

Run tests
```bash
composer run test
```

## Docker

If you don't want to install anything php-related on your system, you can
run the game inside Docker instead.

### Run a Docker Container from the Image

```bash
docker run -it -v ${PWD}:/battleship -w /battleship composer bash
```

# Launching the game

```bash
composer run game
```

# Running the Tests

Don't forget to install dependencies ;)
```bash
composer install
```

Run tests:
```
composer run test
```
