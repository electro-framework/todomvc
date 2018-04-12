# Electro TodoMVC Example

> *Electro* is a modern PHP web framework for developing web applications and websites.

> To find out more about the Electro framework, [click here](https://github.com/electro-framework/electro).

This repository contains a very simple example application that manages a list of TO DOs.

Although this is not a Javascript framework, we liked the concept behind [TodoMVC](http://todomvc.com), so we decided to create an example application for Electro that uses the same template and operation logic.


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

This example uses [Npm](https://www.npmjs.com/get-npm) to manage its dependencies. So, before using the example, you will need to make sure you have **npm** installed on your machine.

## Installing

### Step 1

On your project's root directory, type:

```bash
composer install
```

> If you don't have Bower installed on your machine, the command will show an error message during installation. You may ignore it, as Bower is not required for this project.

### Step 2

Electro comes with a command line interface (CLI), called `workman`, that allows you to perform several tasks from the command line.

> The tasks/commands that are available depend on which plugins are installed. Your application may also provide its own commands.

On your project's root directory, type:

```bash
bin/workman init
```

This command will perform some task and generate an `.env` file.

## License

The Electro framework is open-source software licensed under the [MIT license](http://opensource.org/licenses/MIT).

**Electro framework** - Copyright &copy; Cláudio Silva and Impactwave, Lda.
