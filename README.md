# desafio-02 
Desafio técnico que utiliza  laravel e diversos recursos eloquent:

<ul>
  <li>migration</li>
  <li>seeder</li>
  <li>groupBy</li>
  <li>orderBy</li>
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

### host 
```
http://localhost:8000/
```
