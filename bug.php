function foo(a, b) {
  if (a === b) {
    return true;
  }
  return false;
}

// This is incorrect because 0 == false, but 0 !== false
console.log(foo(0, false)); // Outputs: false

function bar(a, b) {
  if (a === b) {
    return true;
  } else if (a == b) {
    return true;
  } else {
    return false;
  }
}

console.log(bar(0, false)); // Outputs: true