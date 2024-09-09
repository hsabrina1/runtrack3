function fizzbuzz() {
    // Boucle de 1 à 151
    for (var i = 1; i <= 151; i++) {
        // Si i est divisible par 3 et par 5
        if (i % 3 === 0 && i % 5 === 0) {
            console.log("FizzBuzz");
        } 
        // Si i est divisible par 3
        else if (i % 3 === 0) {
            console.log("Fizz");
        } 
        // Si i est divisible par 5
        else if (i % 5 === 0) {
            console.log("Buzz");
        } 
        // Sinon on affiche le nombre
        else {
            console.log(i);
        }
    }
}
