var Samsung = /** @class */ (function () {
    function Samsung() {
    }
    Samsung.prototype.show = function () {
        console.log('samsung create');
    };
    return Samsung;
}());
var Nokia = /** @class */ (function () {
    function Nokia() {
    }
    Nokia.prototype.show = function () {
        console.log('nokia create');
    };
    return Nokia;
}());
var Factory = /** @class */ (function () {
    function Factory(type) {
        this.type = type;
    }
    Factory.prototype.createPhone = function () {
        switch (this.type) {
            case 1: return new Samsung();
            case 2: var nokia = new Nokia();
        }
    };
    return Factory;
}());
var f = new Factory(1);
var a = f.createPhone();
a.show();
