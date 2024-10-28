var myMap =  new Map();

myMap.set("name","Bangladesh");
myMap.set("Bdate","1971");
myMap.set("play","cricket");


//myMap.delete("name")
//myMap.delete("bdate")
/*myMap.clear();
for(let item of myMap.values())
{
    console.log(item);
}
for(let item1 of myMap.keys())
{
    console.log(item1);
}
    */

//myMap.get("name");

if(myMap.has("name"))
{
    console.log("Yes have ");
}
else
{
    console.log("No have here ")
}