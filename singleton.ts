class someClass {
	private static instance:someClass
	constructor(){}
	public static getInstance():someClass {
		if (!this.instance) {
			this.instance =  new someClass()
		}
		return this.instance
	}
}

let aa:someClass = someClass.getInstance()

let bb:someClass = someClass.getInstance()

console.log(aa === bb);
