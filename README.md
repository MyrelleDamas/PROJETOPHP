# Subindo um Projeto PHP no Linux com Apache
```
git clone https://github.com/MyrelleDAMAS/PROJETOPHP.git
cd projetophp
```

# Verificando o PHP
```
php -v
```

### Se não tiver PHP instalado:
 ```
sudo apt update
sudo apt install php -y
```

# Instalando o Apache (se não estiver)
```
sudo apt update
sudo apt install apache2 libapache2-mod-php -y
sudo systemctl enable apache2 --now
sudo systemctl status apache2
```

# Criando pasta do projeto no Apache
```
sudo mkdir -p /var/www/projetophp
sudo cp -r ~/projetophp/* /var/www/projetophp/
```

# Configurando porta personalizada no Apache
```
```
### Edita ports.conf
```
sudo nano /etc/apache2/ports.conf
```

### Adiciona no final:
```
/*#*/ Porta adicional para o projeto PHP
Listen 8094
```

### Cria VirtualHost para o projeto
```
sudo nano /etc/apache2/sites-available/projetophp.conf

<VirtualHost *:PORTA>
    ServerAdmin webmaster@localhost
    DocumentRoot /var/www/projetophp
    ServerName localhost
    
    ErrorLog ${APACHE_LOG_DIR}/projetophp-error.log
    CustomLog ${APACHE_LOG_DIR}/projetophp-access.log combined
</VirtualHost>
```

### Ativa o site e reinicia o Apache
 ```
sudo a2ensite projetophp.conf
sudo systemctl reload apache2
sudo systemctl status apache2
```
