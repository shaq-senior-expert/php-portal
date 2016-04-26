## Configuracao do virtual host do site do portal idoso

`ATENCAO` esses arquivo ja estao criado na pasta:

	storage/portal_idoso.conf
	storage/portal_idoso_admin.conf

Criar o arquivo `portal_idoso.conf` no caminho:

    /etc/apache2/sites-available/portal_idoso.conf

O arquivo `portal_idoso.conf` devera conter a seguinte estrutura:

```
<virtualHost *:80>
  ServerName portalidoso.dev
  DocumentRoot /var/www/portal/portalsite

  <Directory /var/www/portal/portalsite>
    <IfModule mod_rewrite.c>
      Options -MultiViews
      RewriteEngine On
      RewriteCond %{REQUEST_FILENAME} !-f
      RewriteRule ^ index.php [L]
    </IfModule>
  </Directory>
</VirtualHost>
```

Após criar o arquivo `portal_idoso.conf`, você deverá executar os seguintes comandos:
	
	cd /etc/apache2/sites-available
    a2ensite portal_idoso.conf
    service apache2 reload

Agora que voce ja criou o arquivo e fez reload do apache2 voce deve inserir um excecao de URL no arquivo `hosts` no caminho:

	/etc/

Exemplo de comando para edicao do arquivo `hosts`:
	
	vi /etc/hosts

No arquivo `hosts`, voce devera inserir a seguinte linha:

	127.0.0.1   portalidoso.dev

Caso todo o procedimento esteja correto voce ja deve conseguir acessar o projeto pela URL:

	portalidoso.dev

Agora voce deve repetir o mesmo procedimento para o admin do portal idoso o que muda e o nome do arquivo `portal_idoso_admin.conf` e no hosts devera ficar:

	127.0.0.1   adminidoso.dev