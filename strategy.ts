interface StrategyInterface {
    excute(a: any,b: any)
}

class Add implements StrategyInterface {
    excute(a: any, b: any) {
        return a+b
    }
}

class Sub implements StrategyInterface {
    excute(a: any, b: any) {
        console.log('sun');
        console.log(a-b);
        
        return a-b
    }
}

class Context {
    private strategy
    constructor(strategy : StrategyInterface) {
        this.strategy = strategy
    }

    doExcute(a:any,b:any):any {
       return this.strategy.excute(a,b)
    }
}

let c = new Context(new Sub())

let e = c.doExcute(32,23)
console.log(e);
