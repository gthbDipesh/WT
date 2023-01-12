const prmpt = require("prompt-sync")({sigint:true});
let palindrome= function (number){
    let tem, reverse=0, r;
    tem=number;
    while (number!=0) {
        r= number%10;
        reverse= reverse*10+r;
        number= parseInt(number/10);
    }
    if (reverse==tem) {
        console.log(`${tem} : Palindrome`);
    }
    else{
        console.log(`${tem} : Not a Palindrome`);
    }
};
let number = prmpt("Enter any number:");
palindrome(number);