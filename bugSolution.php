function foo(a, b) {
  if (a === b) {
    return true;
  }
  return false;
}

//Correct implementation using strict comparison
console.log(foo(0, false)); // Outputs: false

function bar(a, b) {
  if (a === b) {
    return true;
  } else {
    return false;
  }
}

console.log(bar(0, false)); // Outputs: false