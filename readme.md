# PHP

[Installation XAMMP](https://www.apachefriends.org/fr/download.html)

Les fichiers **php** se trouvent dans le dossier `c:/xampp/htdocs`

[PHP documentation](https://www.php.net/manual/fr/)

---

Afin d'encapsuler notre application il faut :

Ajouter dans le fichier `C:\xampp\apache\conf\extra\httpd-vhosts.conf`:

```
<VirtualHost *:80>
    DocumentRoot "C:/xampp/htdocs/php"
    ServerName phpnotes.com
</VirtualHost>
```

Et ajouter un fichier `.htaccess`

---

# PDO

[Documentation connection PDO](https://www.php.net/manual/fr/pdo.connections.php)

---

## Ce qui faut savoir

- Définition d'une route
- Définition d'un controller
- Définition d'une vue
- Passer et récuper un paramétre à une route