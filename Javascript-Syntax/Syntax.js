// console
console.error('Este é um erro!')
console.warn('Este é um aviso!')
console.log('Esta é uma mensagem!')

// variáveis
var x = 10
let y = 15
const z = 20

console.log(x)
console.log(y)
console.log(z)

// tipos de dados
const name = 'André'
const shirtsQty = 4
const isApproved = false
let surname = null
let age
const languages = ['JavaScript', 'PHP', 'Python']
const user = { email: 'teste@teste.com', password: 'teste123' }

console.log(name)
console.log(shirtsQty)
console.log(languages)

console.log(typeof name) // String
console.log(typeof surname) // Null
console.log(typeof user) // Object

// métodos de string
const fullName = 'André Filipe'

console.log(fullName.length) // 12

const stringToArray = fullName.split(' ')

console.log(stringToArray) // ["André", "Filipe"]

console.log(fullName.toLowerCase()) // andré filipe

console.log(fullName.toUpperCase()) // ANDRÉ FILIPE

console.log(fullName.indexOf('Filipe')) // 6

console.log(fullName.slice(0, 6)) // André

// métodos de array
const list = ['a', 'b', 'c', 'd', 'e']

console.log(list.length) // 5

console.log(list[2]) // c

list[5] = 'f'

console.log(list) // ['a', 'b', 'c', 'd', 'e', 'f']

list.push('g')

console.log(list) // ['a', 'b', 'c', 'd', 'e', 'f', 'g']

console.log(list[list.length - 1]) // ultimo item - g

list.pop() // ['a', 'b', 'c', 'd', 'e', 'f']

list.shift()

console.log(list) //  ['b', 'c', 'd', 'e', 'f']

list.unshift('a')

console.log(list) // ['a', 'b', 'c', 'd', 'e', 'f']

// objetos
const product = {
  name: 'Camisa',
  price: 15.99,
  inStock: true,
  sizes: ['P', 'M', 'G'],
}

console.log(product.name) // Camisa

product.color = 'Azul' // Adicionando propriedade

console.log(product)

const { price, inStock } = product // destructuring

console.log(price)


// JSON
const dog = {
  name: 'Ivy',
  age: 9,
}

const json = JSON.stringify(dog)

console.log(json)

const obj = JSON.parse(json)

console.log(obj)

// Estruturas condiconais
const p = 10

if (p > 8) {
  console.log('p é maior que 8!')
}

const b = 'Fulano'

if (b === 'Beltrano') {
  console.log('O nome é Beltrano!')
} else if (b === 'Z') {
  console.log('O nome é Z!')
} else {
  console.log('Não encontramos o nome do usuário!')
}

const someNumber = 20

let testingANumber = someNumber < 20 ? 'Yes' : 'No'

console.log(testingANumber) // No

// Estruturas de repetição
const myList = [1, 2, 3, 4, 5]
let counter = 0

while (counter < myList.length) {
  console.log('Imprimindo: ' + myList[counter])
  counter++
}

const mySecondList = ['a', 'b', 'c', 'd', 'e']

for (let counter = 0; counter < mySecondList.length; counter++) {
  console.log('Imprimindo: ' + mySecondList[counter])
}

// array methods
const names = ['André', 'X', 'Y', 'Z']

names.forEach(function (name) {
  console.log(`O nome é: ${name}`)
})

const modifiedNames = names.map(function (name) {
  if (name === 'André') {
    return (name = 'Sr. André')
  } else {
    return name
  }
})

console.log(modifiedNames)

const bigNumbers = [1, 2, 3, 10, 50].filter((number) => {
  return number > 5
})

console.log(bigNumbers) // [10, 50]

const sumAll = [10, 20, 30, 40, 50].reduce((total, number) => {
  return total + number
})

console.log(sumAll) // 150

// Funções
function minhaFuncao() {
  console.log('Olá função!')
}

minhaFuncao()

function nomeCompleto(nome, sobrenome) {
  return `Olá ${nome} ${sobrenome}, como vai?`
}

const saudacao = nomeCompleto('André', 'Filipe')

console.log(saudacao)

const myArrowFunction = (a, b) => {
  return a + b
}

console.log(myArrowFunction(2, 2))

const mySimpleArrow = (a, b) => a + b

console.log(mySimpleArrow(5, 5))

// classes
class Product {
  constructor(name, price) {
    this.name = name
    this.price = price
  }

  productDetails() {
    return `O nome do produto é: ${this.name} e ele custa R$${this.price}`
  }
}

const ring = new Product('Aliança de Casamento', 1.832,99)

console.log(ring.productDetails())

// DOM
const title = document.getElementById('title')
const sameTitle = document.querySelector('#title')

const texts = document.querySelectorAll('.text')

texts.forEach((text) => {
  console.log(text.textContent.toUpperCase())
})

// manipulação de elementos
title.textContent = 'Texto alterado'

texts[0].innerHTML = '<span>Elemento HTML alterado</span>'

texts[1].style.backgroundColor = 'red'

texts[2].classList.add('my-class')

texts[3].remove()

// eventos
btn.addEventListener('click', function () {
  console.log('Clicado!')
})