interface Phone {
    show()
}

class Samsung implements Phone {
    show() {
        console.log('samsung create');
        
    }
}

class Nokia implements Phone {
    show() {
        console.log('nokia create');
        
    }
}

class Factory {
    type:any
    constructor(type:any) {
        this.type = type
    }

    createPhone() {
        switch(this.type) {
            case 1 : return new Samsung()
            case 2 : return new Nokia()
        }
    }
}

let f = new Factory(1)
let a = f.createPhone()
a.show()