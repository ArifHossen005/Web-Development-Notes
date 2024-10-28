var myMap =  new Map();

myMap.set("name","Bangladesh");
myMap.set("Bdate","1971");
myMap.set("play","cricket");

for(let item of myMap.values())
{
    console.log(item);
}
for(let item1 of myMap.keys())
{
    console.log(item1);
}