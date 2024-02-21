# TODO LIST

This is a **Todo List** made by *Kilian MINETTO*, using symfony 7 as an API and ElectronJs for the interface.

## Prerequiresites

* Docker
* Docker-compose
* Nodejs

## Installation

> To turn on/off containers

```bash
# Turn on Containers
docker-compose up -d
# Turn off Containers
docker-compose down
```

> To install composer dependencies

```bash
docker exec -it www_todo-list bash
composer install
composer database-init
exit
```

> To install Node dependencies

```bash
cd /app
# Install node dependencies
npm install
# Start Electron app
npm run start
```