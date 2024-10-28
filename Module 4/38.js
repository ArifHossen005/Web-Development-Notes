/*
inheritance mane uttor radhikar 
*/

class parents{

    add()
    {
        console.log("Hello world parents side ");
    }

}

class child extends parents{
//method overriding 
    add()
    {
        console.log("Hello world parents side222 ");
    }

}


let obj = new child();

obj.add();