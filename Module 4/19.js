/*
rest parameter
*/

function show(...numbers)
{
    let sum = 0;
    for(let i of numbers)
    {
        sum = sum+i;
    }
console.log(sum);
}

show(12,12,52);
