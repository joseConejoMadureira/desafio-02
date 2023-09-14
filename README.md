# docker 
estrutura em docker que Contempla container 
laravel 
vuejs 
mysql 
bootstrap
### clone do repostorio do projeto DOCKER 
```
git clone https://github.com/joseConejoMadureira/desafio-02
```

### diretorio  do projeto laravue
```
cd  desafio-02
```
### usuarios com privilégios
```
sudo su
```

### cria e inicia os containers 
```
docker-compose up -d
```
### instalação das dependencias php 
```
docker-compose exec web composer install
```
### instalação das migrates 
```
docker-compose exec web php artisan migrate
```
### instalação das migrates 
```
docker-compose exec web php artisan db:seed
```
### instalação das dependencias vuejs (frontend) 
```
docker-compose exec web npm install
```

### build do frontend(vuejs) 
```
docker-compose exec web npm run build
```
### host 
```
http://localhost:8000/
```
