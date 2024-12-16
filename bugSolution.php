function myFunc() {
  $a = 10;
  $b = 0; //Initialize the variable outside the scope of if statement.
  if (true) {
    $b = 20;
  }
  echo $b; // No more error
}