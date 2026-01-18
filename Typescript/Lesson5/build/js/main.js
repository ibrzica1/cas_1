// convert to more or less specific
let a = 'hello';
let b = a; // less specific
let c = a; // more specific
let d = 'world';
let e = 'world';
const addOrConcat = (a, b, c) => {
    if (c === 'add')
        return a + b;
    return '' + b + c;
};
let myVal = addOrConcat(2, 2, 'concat');
//Be careful! TS sees no problem - but a string is returned
let nextVal = addOrConcat(2, 2, 'concat');
const img = document.querySelector('img');
const myImage = document.getElementById('#img');
img.src;
myImage.src;
export {};
//# sourceMappingURL=main.js.map