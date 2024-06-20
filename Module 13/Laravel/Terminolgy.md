#### Video 1-12 ####
Tools - composer ,phpstrome,vscode

Laravel Installation System - 
composer create-project laravel/laravel name
or 
composer global require laravel/installer
laravel new name

Run file - php artisan serve 

url means route 
model-database outputsow-view  requesthandle-controller 

controller - php artisan make:controller nameController 
view - name.blade.php

====File Details ====
vite.config.js - vuejs,reactjs,nextjs etc framework add this file.
README.md - readme file
phpunit.xml - system generated file.
package.json - package management,system auto generated file
composer.json - project defination and all project based information.
.env = means environment variables .constant data 
vendor - all parents folder 
route - urls api and web are importans
resources - frontend file or all view folder
public - 
database - migration
app - http( controller),middlerware(kernel-security),model (),


		  		ARTISAN COMMANDS 
**run project - php artisan serve
mantenance mode on - php artisan down
mantenance mode off - php artisan up
route list - php artisan route:list 
**cache clear - php artisan cache:clear
events clear- php artisan event:clear
route cache clear - php artisan route:clear
**view cache clear - php artisan view:clear
configuration cache clear - php artisan config:clear
**make controller - php artisan make:controller NameController
**make Model - php artisan make:model Name -m
**to do database migrate - php artisan migrate
app key generated - php artisan key:genrate

====post man===
 
steps 
1.create workplace name 
2.create new collection 
3.collection er vitor add new request 
=====server side*client side=====
1.client side - front end web browser e open(js,react)
2.server side - (backend)user dont see.

====Request -Response-Model=====
Client->-------http Request------Server
            <------http response-----Server

=====Routing and Controller =====
Route means url / path 
Controller is a function/class/code respond request and process response 
Route theke request jay controller 

====Middleware Concept====
middeware is a special types of controller executed after request but before in response.

====IntroducingJSON====
js object notation
.json
====Understanding JSON structure====
{
	{
	
	}
}//object start
====Best Practice of JSON====

===http Request throtting===
per minute how many request send  
-use middleware for doing throtting 
429 means to many request
====HTTP Request Segments====
browser is a primary http client
Body-simple string,JSON,Download,Redirect,XML
header - key value pair
cookies - key value pair

====http respons status message===
200-ok  ***
201-create
202-accepted
203-non authoritative information
204-no content
205-reset content
206-partial content 
400- bad request   ***
401-unauthorized   ***
403-forbidden        
404-not found
405-method not allowed
408-request timeout 
500-internal server error
502-bad gateway
503-server unavailable

===URI naming  Convention====
*naun use korbo 
*forward slash 
*lowercase
*underscore

===cookies===
means data storage system
create - web server 
stored - client server 

===Encryption and Decription===
