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

##### Clone this project to a folder on your computer.

One way to do it is using the command-line:

```bash
git clone https://github.com/electro-framework/todomvc.git
cd todomvc
```

### Step 2

##### Install all the required packages (including the Electro framework).

On your project's root directory, type:

```bash
composer install
```

> If you don't have Bower installed on your machine, the command will show an error message during installation. You may ignore it, as Bower is not required for this project.

### Step 3

##### Initialize the app

> Electro comes with a command line interface (CLI), called `workman`, that allows you to perform several tasks from the command line.

On your project's root directory, type:

```bash
bin/workman init
```

## Running the web application

### Step 1

##### Start a web server

You can use an Apache Web Server you have already installed, or you may use Electro's built-in web server.

##### Using the built-in web server

On your project's root directory, type:

```bash
bin/workman server:start
```

### Step 2

Open the web application on your browser at [http://localhost:8000](http://localhost:8000).

> If you are using the built-in werb server and you are done using the application, you may run the `bin/workman server:stop` command to stop it.

## License

The Electro framework is open-source software licensed under the [MIT license](http://opensource.org/licenses/MIT).

**Electro framework** - Copyright &copy; Cláudio Silva and Impactwave, Lda.
