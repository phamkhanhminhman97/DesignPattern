var someClass = /** @class */ (function () {
    function someClass() {
    }
    someClass.getInstance = function () {
        if (!this.instance) {
            this.instance = new someClass();
        }
        return this.instance;
    };
    return someClass;
}());
var aa = someClass.getInstance();
var bb = someClass.getInstance();
console.log(aa === bb);
