const prmpt = require("prompt-sync")
({sigint:true});
let str = prompt("Enter any String");
let final = str.split('').reverse().join('');
console.log(`Reverse of ${str} is ${final}`);