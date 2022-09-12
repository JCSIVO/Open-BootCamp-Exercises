function Fibonacci(num){
    fibo = []
    fibo[0] = 0
    fibo[1] = 1
    for(i = 2; i < num; i++){
        fibo[i] = fibo [i-2] + fibo[i-1]
    }
    return fibo
}
let f = new Fibonacci(6)
console.log(f);