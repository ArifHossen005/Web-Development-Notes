/*

constructor is autometic run hoi
return kore nah 
with parameter 
*/

class myClass{
    constructor(a,b)
    {
        this.number1 = a;
        this.number2 = b;

    }

    add()
    {
        let c = this.number1+ this.number2;
        console.log(c);
    }
}

 var obj = new myClass(10,20);
 obj.add();

