//Type Aliases
type stringOrNumber = string | number;

type stringOrNumberArray = (string | number)[];

type Guitarist = {
    name?: string,
    active: boolean,
    albums: stringOrNumberArray
}

type userId = stringOrNumber

//Literal types
let myName: 'Dave';
myName = 'Dave';

let userName: 'Dave' | ' John' | 'Amy';
userName = 'Amy';

//Functions
const add = (a:number, b:number): number => {
    return a + b;
}

const logMsg = (message: any): void => {
    console.log(message);
}

logMsg('Hello');
logMsg(add(2,3));

let substract = function (c: number, d: number):
number {
    return c - d;
}

type mathFunction = (a: number, b: number) => number
interface mathFunction2 {
    (a: number, b: number): number
} 

function multiple(e: number, f: number): number {
    return e * f;
}

let divide: mathFunction = function(c,d) {
    return c / d;
}

logMsg(divide(4,2));

const addAll = (a: number, b: number, c?: number): 
number => {
    if(typeof c  !== 'undefined'){
        return a + b + c;
    }
    return a + b;
}

const sumAll = (a: number, b: number, c: number = 2): 
number => {
    return a + b + c;
}

//Rest parameters
const total = (...nums:number[]): number => {
    return nums.reduce((prev, curr) => prev + curr)
}
logMsg(total(1,2,3,4));

const createError = (errMsg: string) => {
    throw new Error(errMsg)
}

const isNumber = (value: any): boolean => {
    return typeof value === 'number'
    ? true : false
}

const numberOrString = (value: number | string):
string => {
    if(typeof value === 'string') return 'string'
    if(isNumber(value)) return 'number'
    return createError('This should never happen!')
}