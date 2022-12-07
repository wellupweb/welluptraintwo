var currentNumber = generateNumber();
var guesses = [];

console.log("refresh",currentNumber);

function generateNumber(){
    var randomNumber = Math.random() * 100 // Get value Within 100;
    
    var exactRandomNumber = Math.floor(randomNumber)  

    return exactRandomNumber ;
}

document.getElementById("check-number").addEventListener('click',play);
document.getElementById("reset").addEventListener('click',resetGame)

function resetGame(){
    currentNumber = generateNumber();
    console.log("reset",currentNumber);
    document.getElementById("result").innerHTML = "";
    document.getElementById("guess-number").value = "";
    guesses = [];
    displayHistory();
}

function play(){
    var numberGuess = document.getElementById("guess-number").value ;
    if(numberGuess > currentNumber){
        document.getElementById("result").innerHTML = `
        <div class="alert alert-danger" role="alert">
            Too High
        </div>`;
    }else if(numberGuess < currentNumber){
        document.getElementById("result").innerHTML =  `
        <div class="alert alert-warning" role="alert">
            Too low
        </div>`;
    }else{
        document.getElementById("result").innerHTML = `
        <div class="alert alert-success" role="alert">
            You Won 
        </div>`;

    }

    saveHistory(numberGuess);

    displayHistory();


}

function saveHistory(guess){
   guesses.push(guess)
   console.log(guesses);
 
}

function displayHistory(){
    var i = 0;
    var list = `<ul class="list-group"> `;
    while( i < guesses.length){
        list += `<li class="list-group-item"> You Guessed ${guesses[i]}</li>`
        i++;
    }
    list += `</ul>`;

    document.getElementById("history").innerHTML = list;
    
}


