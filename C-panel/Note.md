***Create sub-domain 
->Domain e click korbo or search korbo 
->create new domain e click korbo 
->Example- subdomain.domain     Ex- ostad.web-towid.com 
->submit


***Domain er vitore File Upload 
->Files 
->File manager e click korbo 
->then je namer sub domain banaisi se namer ekta folder create hobe 
->Then oi folder e click kore dhukbo 
->upore upload thakbe 
->upload korbo 


***Php versoion control in c panel 
->Search box er modde search dibo php version 
->oikhan theke jei version e jete chay seta click korbo 
->apply hoye jabe 


***Database Create in C-panel & manage 
->Databse 
->Click manage my database 
->Create er modde database er nam diye create korbo 
->Example: ostad

->Ey databaser er jonno ekti user lagbe 
->same page er niche jabo and oikhane Add new user Thakbe 


->user er sathe database er Connection korte hobe so same page er niche giye seta korbo 
->add user to databse  (user and database select korbo)
->manage user Privileges all kore dibo and make change dibo 

->local php mane amader xampp theke database ta export korbo 
->tarpor c panel er databse er php myadmin e giye amader je databse ,setar modde download kora file ta import 
korte hobe 


***C-panel e deploy or up dewa 
->Firstly zip my laravel file 
->then c panel er sub domain er vitore giye 
->files er vitore file manage e click kore 
->amader banano sub domain er vitore click kore upload korte hobe zip file 
->upload hole unzip korte hobe 

then .env filer vitore 
->DB_database = dibo 
->DB_username =dibo
->DB_Password = dibo 

then 
App_URL = dibo 
App_Debug = False kore dibo 

***ekta file create korte hobe htaccess name 
->file name (.htacess)
->paste code korbo 
<IfModule mod_rewrite.c>
    RewriteEngine On

    # Redirect Trailing Slashes If Not A Folder...
    RewriteCond %{REQUEST_FILENAME} !-d
    RewriteRule ^(.*)/$ /$1 [L,R=301]

    # Handle Front Controller...
    RewriteCond %{REQUEST_FILENAME} !-d
    RewriteCond %{REQUEST_FILENAME} !-f
    RewriteRule ^ index.php [L]

    # Ensure that your app routes to the public directory
    RewriteCond %{REQUEST_URI} !^/public/
    RewriteRule ^(.*)$ public/$1 [L]
</IfModule>

# This makes sure the public folder is used as the root folder
<IfModule mod_headers.c>
    Header set Access-Control-Allow-Origin "*"
</IfModule>

note : .env file er permission 0644 rakhbo 


