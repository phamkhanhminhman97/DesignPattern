p1 = {a: 'minh', b: 'man'}

function say(a,b) {
    console.log(a+b+this.a + ',....' +this.b);
}

say.call(p1,'helo', 'asss')