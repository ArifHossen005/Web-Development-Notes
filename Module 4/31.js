// Create a new Set
var mySet = new Set();

// Add values to the Set
mySet.add("Bangladesh");
mySet.add("1971");
mySet.add("cricket");

console.log("Initial Set:", mySet);

// Check the size of the Set
console.log("Set size:", mySet.size);

// Check if a value exists in the Set
console.log("Has 'Bangladesh':", mySet.has("Bangladesh"));  // true
console.log("Has 'football':", mySet.has("football"));  // false

// Delete a value from the Set
mySet.delete("1971");
console.log("After deleting '1971':", mySet);

// Display all values of the Set
console.log("Set values:", mySet.values());  // SetIterator { 'Bangladesh', 'cricket' }

// Clear the Set
mySet.clear();
console.log("Set after clear:", mySet);
console.log("Set size after clear:", mySet.size);
