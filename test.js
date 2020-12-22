superClass = {
    language: "Javascript",
    version: 2.1
}

subClass = {
    fork: "UVAscript"
}

Object.setPrototypeOf(subClass, superClass)

third = {
    name: "idiot"
}

oneUp = (Object.getPrototypeOf(subClass))
superClass.id = 31
//Object.setPrototypeOf(oneUp, third)
//console.log(Object.getOwnPropertyNames(oneUp))

twoUp = (Object.getPrototypeOf(oneUp))
twoUpList = (Object.getOwnPropertyNames(oneUp))
console.log(twoUpList)