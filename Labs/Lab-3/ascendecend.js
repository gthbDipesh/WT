let number = [100, 200 , 10, 300, 0, 210, 310 ];
number.sort( function( Ascending , Descending){
    if(Ascending > Descending) return 1;
    if(Ascending < Descending) return -1;
    return 0;
});
console.log(`In Ascending Order: ${number}`);
number.reverse();
console.log(`In Decending Order: ${number}`);