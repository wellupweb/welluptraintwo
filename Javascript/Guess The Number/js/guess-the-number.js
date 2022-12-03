var currentNumber = generateNumber();


function generateNumber(){
    var randomNumber = Math.random() * 100 // Get value Within 100;
    
    var exactRandomNumber = Math.floor(randomNumber)  

    return exactRandomNumber ;
}





document.getElementById("check-number").addEventListener('click',play);


function play(){
    var numberGuess = document.getElementById("guess-number").value ;
    console.log(currentNumber);
    console.log(numberGuess);
}
