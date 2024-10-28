/*
super keywords

immedately calll parents 
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


    demo()
    {
        super.add();
    }

}


let obj = new child();

obj.add();