
let stringArr = ['one', 'hey', 'Dave']

let guitars = ['Strat', 'Les Paul', 5150]

let mixedData = ['EVH', 1984, true]

stringArr[0] = 'John'
stringArr.push('hey')

guitars[0] = 1984
guitars.unshift('Jim')

mixedData = stringArr

let test = []
let bands: string[] = []
bands.push('Van Halen')

let myTuple: [string, number, boolean] = ['Dave', 42, true]

let mixed = ['John', 1, false]

mixed = myTuple

myTuple[1] = 42

let myObject: Object;
myObject = [];
console.log(typeof(myObject));
myObject = 'Bands'
myObject = {}

const exampleObject = {
    prop1: 'Dave',
    prop2: true
}
exampleObject.prop1 = 'John';

interface Guitarist {
    name?: string,
    active: boolean,
    albums: (string | number)[]
}

let evh: Guitarist = {
    active: true,
    albums: [1984, 5150, 'OU812']
}

const greetGuitarist = (guitarist: Guitarist) => {
    if(guitarist.name){
        return guitarist.name;
    }
    return "Hello";
}
console.log(greetGuitarist(evh));

enum Grade {
    U = 1,
    D,
    C,
    B,
    A,
}

console.log(Grade.C)