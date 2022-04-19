var Add = /** @class */ (function () {
    function Add() {
    }
    Add.prototype.excute = function (a, b) {
        return a + b;
    };
    return Add;
}());
var Sub = /** @class */ (function () {
    function Sub() {
    }
    Sub.prototype.excute = function (a, b) {
        console.log('sun');
        console.log(a - b);
        return a - b;
    };
    return Sub;
}());
var Context = /** @class */ (function () {
    function Context(strategy) {
        this.strategy = strategy;
    }
    Context.prototype.doExcute = function (a, b) {
        return this.strategy.excute(a, b);
    };
    return Context;
}());
var c = new Context(new Sub());
var e = c.doExcute(32, 23);
console.log(e);
