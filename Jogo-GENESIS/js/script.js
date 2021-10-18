let order = [];
let clickedOrder = [];
let score = 0;

/*
0 - gree
1 - red
2 - yellow
3 - blue
*/

const blue = document.querySelector('.blue');
const red = document.querySelector('.red');
const green = document.querySelector('.green');
const yellow = document.querySelector('.yellow');

//creates a random order of colors
let shuffleOrder = () => {
    let colorOrder = Math.floor(Math.random() * 4);
    order[order.length] = colorOrder;
    clickedOrder = [];

    for(let i in order) {
        let elementColor = createColorElement(order[i]);
        lightColor(elementColor, Number(i) + 1);
    }
}

//lights up the next color
let lightColor = (element, number) => {
    number = number * 500;

    setTimeout(() => {
        element.classList.add('selected');
    }, number - 250);

    setTimeout(() => {
        element.classList.remove('selected');
    });
}

//Checks if the buttons clicked are the same as the order generated in the game
let checkOrder = () => {
    for(let i in clickedOrder) {
        if(clickedOrder[i] != order[i]) {
            gameOver();
            break;
        }
    }
    if(clickedOrder.length == order.length) {
        alert(`Score: ${score}\nYou win!`);
        nextLevel();
    }
}

//usuary click function
let click = (color) => {
    clickedOrder[clickedOrder.length] = color;
    createColorElement(color).classList.add('selected');

    setTimeout(() => {
        createColorElement(color).classList.remove('selected');
        checkOrder();
    },250);
}

//return color function
let createColorElement = (color) => {
    if(color == 0) {
        return green;
    } else if(color == 1) {
        return red;
    } else if (color == 2) {
        return yellow;
    } else if (color == 3) {
        return blue;
    }
}

//nextlevel function
let nextLevel = () => {
    score++;
    shuffleOrder();
}

//gameover function
let gameOver = () => {
    alert(`Score: ${score}!\nYou lost!\n`);
    order = [];
    clickedOrder = [];

    playGame();
}

//play function
let playGame = () => {
    alert('Welcome to Genesis!');
    score = 0;

    nextLevel();
}

//Click events
green.onclick = () => click(0);
red.onclick = () => click(1);
yellow.onclick = () => click(2);
blue.onclick = () => click(3);


//Start
playGame();