var currentNumber = generateNumber();
console.log(currentNumber);

function generateNumber(){
    var randomNumber = Math.random() * 100 // Get value Within 100;
    
    var exactRandomNumber = Math.floor(randomNumber)  

    return exactRandomNumber ;
}

document.getElementById("check-number").addEventListener('click',play);
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
}
