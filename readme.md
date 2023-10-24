# PHP

[Installation XAMMP](https://www.apachefriends.org/fr/download.html)

LEs fichiers **php** se trouvent dans le dossier `c:/xampp/htdocs`

[PHP documentation](https://www.php.net/manual/fr/)


Ajouter dans le fichier `C:\xampp\apache\conf\extra\httpd-vhosts.conf`:

```
<VirtualHost *:80>
    DocumentRoot "C:/xampp/htdocs/php"
    ServerName phpnotes.com
</VirtualHost>
```