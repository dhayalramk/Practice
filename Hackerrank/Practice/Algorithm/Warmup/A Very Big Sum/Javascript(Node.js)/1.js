process.stdin.resume();
process.stdin.setEncoding('ascii');

var input_stdin = "";
var input_stdin_array = "";
var input_currentline = 0;

process.stdin.on('data', function (data) {
    input_stdin += data;
});

process.stdin.on('end', function () {
    input_stdin_array = input_stdin.split("\n");
    main();    
});

function readLine() {
    return input_stdin_array[input_currentline++];
}

/////////////// ignore above this line ////////////////////

function aVeryBigSum(n, ar) {
    var sum = 0;
    while(n--){
        sum += ar[n];
    }
    return sum;
}

function main() {
    var n = parseInt(readLine());
    ar = readLine().split(' ').map(Number);
    var result = 0;
    while(n--){
        result += ar[n];
    }
    process.stdout.write("" + result + "\n");
}
