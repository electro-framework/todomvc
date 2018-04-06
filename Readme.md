# Electro TodoMVC Example

> *Electro* is a modern PHP web framework for developing web applications and websites.
You can check [here](https://github.com/electro-framework/electro) about Electro Framework

**This repository provides an example [TodoMVC](http://todomvc.com/) of the framework.
Use it to know project based on Electro.**

## Installation

#### Runtime requirements

- PHP >= 5.6
- Composer
- Npm
- PHP Extensions:
  - PDO
  - CURL
  - Mcrypt
  - GD2

#### Install Composer

Electro uses [Composer](http://getcomposer.org) to manage its dependencies. So, before using Electro, you will need to make sure you have Composer installed on your machine.

#### Install Npm

This example uses [Npm](https://www.npmjs.com/get-npm) to manage its dependencies. So, before using the example, you will need to make sure you have Npm installed on your machine.

## Managing the installation

### #1 Using Composer

On your project's root directory, type:

```bash
composer install
```

**If you don't have Bower installed on your machine, the command will get an error caused by that. Ignore it, Bower is not required for this project.**


### #2 Using the framework's Command Line Interface (workman)

Electro comes with a command line interface (CLI), called `workman`, that allows you to perform several tasks from the command line.

> The tasks/commands that are available depend on which plugins are installed. Your application may also provide its own commands.

On your project's root directory, type:

```bash
./bin workman init
```

The command will generate an .env file.
## License

The Electro framework is open-source software licensed under the [MIT license](http://opensource.org/licenses/MIT).

**Electro framework** - Copyright &copy; Cláudio Silva and Impactwave, Lda.
