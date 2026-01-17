let stringArr = ['one', 'hey', 'Dave'];
let guitars = ['Strat', 'Les Paul', 5150];
let mixedData = ['EVH', 1984, true];
stringArr[0] = 'John';
stringArr.push('hey');
guitars[0] = 1984;
guitars.unshift('Jim');
mixedData = stringArr;
let test = [];
let bands = [];
bands.push('Van Halen');
let myTuple = ['Dave', 42, true];
let mixed = ['John', 1, false];
mixed = myTuple;
myTuple[1] = 42;
let myObject;
myObject = [];
console.log(typeof (myObject));
myObject = 'Bands';
myObject = {};
const exampleObject = {
    prop1: 'Dave',
    prop2: true
};
exampleObject.prop1 = 'John';
let evh = {
    active: true,
    albums: [1984, 5150, 'OU812']
};
const greetGuitarist = (guitarist) => {
    if (guitarist.name) {
        return guitarist.name;
    }
    return "Hello";
};
console.log(greetGuitarist(evh));
var Grade;
(function (Grade) {
    Grade[Grade["U"] = 1] = "U";
    Grade[Grade["D"] = 2] = "D";
    Grade[Grade["C"] = 3] = "C";
    Grade[Grade["B"] = 4] = "B";
    Grade[Grade["A"] = 5] = "A";
})(Grade || (Grade = {}));
console.log(Grade.C);
export {};
//# sourceMappingURL=main.js.map