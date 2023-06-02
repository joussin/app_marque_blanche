

# deployment steps

### as root
```bash
docker-compose down  
```

### as stephane

```bash
su stephane  
```

```bash
cd /home/stephane/  
```

```bash
git clone git@github.com:joussin/api_allopico.git  
```

```bash 
cd api_allopico  
```

### as root

```bash
su root  
```

```bash
docker-compose up --build -d  
```

```bash
docker exec -it api_picolo_php_container bash  
```

### as stephane

```bash
su stephane  
```

```bash
composer update  
```

```bash
cp .env.example .env  
```

```bash
php artisan key:generate  
```

```bash
chmod -R 777 /var/www/html/storage/logs  
chmod -R 777 /var/www/html/storage/app  
chmod -R 777 /var/www/html/storage/framework  
```


```bash
open http://jouss.in/  
```  
  
---  

## Local

Launch server
``` bash
docker-compose up --build -d  
```  

SWAGGER
``` bash
open http://127.0.0.1:4444/  
```
