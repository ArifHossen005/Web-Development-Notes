====Client Side and Server Side====
<>Client Side is  public directory er moode ja  ache,view file also is client side ,also means frontend
<>Server side is all coding code all file ,means backend code 

====Request -response routing&controller====
request--->Routing--->Controller----->Return--->Response


steps
1.create controller 
2.create function 
3.response return 
4.routing connect 

====setting csrf =====
laravel 11
->bootstrap/app.php
->with middleware er vitore paste korbo 
      

$middleware->validateCsrfTokens(except: [
'*'
]);



laravel 10
->http
->middle ware
->varifyCsrfToken giye paste korbo 
        '*'
=====Middle Ware====
means login,logout.
mane ekta step par korei then onno kaj korte hoy amon jinis gulai middle ware 
====JSON Object====
response()->json([

]);// associative array etay json hoi ya jay 

====Request Throating====
some user per minutes to get request 
====Cookie====
data store personalized 
HTTP cookies are small blocks of data created by a web server.
while a user is browsing a website and placed on the user's web browser

====og image /meta image====
====
svg animation
three js
lottie animation 


