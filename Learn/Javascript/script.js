var num1 = 5;
var str = 'string';
var boo1 = true;
var boo2 = false;
var num2 = 5.6;

console.log(num1); // 5
console.log(str); // "string"
console.log(boo1); // true
console.log(boo2); // false
console.log(num2); // 5.6

console.log(typeof num1); // "number"
console.log(typeof str); // "string"
console.log(typeof boo1); // "boolean"
console.log(typeof boo2); // "boolean"
console.log(typeof num2); // "number"

var var1 = [1,2,4];
console.log(var1);
console.log(typeof var1);

var var2 = [1,2,4,'5'];
console.log(var2);
console.log(typeof var2);

var var2 = [1,2,4,'5',]; // After comma also it won't show error, ! declared
console.log(var2[0]); // 1
console.log(var2[1]); // 2
console.log(var2[2]); // 4
console.log(var2[3]); // "5"
console.log(var2[4]); // undefined

var undef = undefined;
console.log(undef); // undefined // not recommended
console.log(typeof undefined); // "undefined"

var nu = null;
console.log(nu); // null 
console.log(typeof nu); // "object"
