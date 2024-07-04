====log=====
log means request and response er modde kichu hole tar history save kore rakhe 
Log::info(jake rakhbo tar nam);

====Session====
temporary data store er ekta way 
1.Session put diye data set 
2.session pull diye data pull kora jay 
3.session forget ba delete 
4.session flush means all clear 

===middleware===
php artisan make:middleware DemoMiddleware
eta request er pore r respons er age kaj kore 
1.Request->header
2.Request->body
3.Request->parameter

middleware e jodi next kori tahole se controller er kaj korbe noile korbe nah 
