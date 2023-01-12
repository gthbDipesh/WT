const prmpt = require("prompt-sync")({sigint:true});
const bigNumber = prompt('Enter bigger number: ');
const smallNumber = prompt('Enter smaller number: ');

let add=0;
for (let i = smallNumber; i <= bigNumber; i++) {
    let c = 0;
    for (let j = 2; j < i; j++) {
        if (i % j == 0) {
            c = 1;
        }
}
    if (i > 1 && c== 0) {
        add=add+i;
    }
}
console.log(` The sum of prime numbers from ${smallNumber} to ${bigNumber} is:  ${add}`);