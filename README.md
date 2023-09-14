# desafio-02 
Desafio técnico que utiliza  laravel e diversos recursos eloquent:

<ul>
  <li>migration</li>
  <li>seeder</li>
  <li>groupBy</li>
  <li>orderBy</li>
  <li>cascade</li>
</ul>

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
### copia  env.example (arquivo de configuração) 
```
docker-compose exec web cp .env.example .env
```

### instalação das dependencias php 
```
docker-compose exec web composer install
```
###  chave de app laravel
```
docker-compose exec web php artisan key:generate 
```
### instalação das migrates 
```
docker-compose exec web php artisan migrate
```
### instalação das migrates 
```
docker-compose exec web php artisan db:seed
```

### host 
```
http://localhost:8000/
```
