Join all data from two tables together

SELECT
    *
FROM
    table1
    INNER JOIN table2
    ON table1.id = table2.id   


Aggregator function (sum) with GROUP BY clause on table


SELECT 
SUM(salary),ID FROM table1 GROUP BY ID;



Aggregator function and grouping in SQL

SELECT 
SUM(salary),ID FROM table1 GROUP BY ID;

as means Alias: AS mean_salary renames the resulting average to mean_salary for readability.

SELECT 
SUM(salary) AS mean_salary,ID FROM table1 GROUP BY ID




10 Data filtering between aggregator functions 

SELECT
    SUM(salary) AS mean_salary
FROM
    table1
    GROUP BY
    ID
HAVING
    mean_salary > 5000;

    Note :Groub by korle where use kora jabe nah 
    

