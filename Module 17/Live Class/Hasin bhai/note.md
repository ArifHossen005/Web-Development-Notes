====migrations====
1.php artisan migrate 
2.php artisan make:migration create_students_table
3.undo -      php artisan migrate:rollback 
without undo a new column add korbo 
eta kaj kore up method er vitor
((   php artisan make:migration add_section_to_students_table  ))
                                                            column name
$table->string(section);

same kaj ta down e korbe 
$table->dropColumn('section');

4.php artisan migrate:reset

5.rename column 
((   php artisan make:migration change_name_to_students_name_in_students_table  ))
up method er kaj 
$table->renameColumn('name','students_name');

down method er kaj 
$table->renameColumn('students_name','name');
===enum ===
enum (pending,doing,done)

====task management===
Tasks(table)
     *ID
     *task
     *description
     *due_date
     *status = enum(pending,doing,done)
     *user_id

Users(table)
      *id
      *name      
      *password

   $table->foreignId('user_id')->constrained();

==== Blogs ====

table
*users
*posts
        ->id
        ->title
        ->image 
        ->description 
        ->date 
        ->status
        ->user_id
*comments
       ->id 
       ->name
       ->comment
       ->email 
       ->ip_address
       ->post_id

====Ecommerce===
Table
->Users
->ptoducts
     id,name,price,stock
->orders
     id,user_id,total_amount,status 

->orders_item
  id,order_id,product_id,quantity,price
