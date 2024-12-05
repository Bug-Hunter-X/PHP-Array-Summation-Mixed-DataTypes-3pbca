```php
function calculateSum($numbers) {
  $sum = 0;
  foreach ($numbers as $number) {
    $sum += $number;
  }
  return $sum;
}

$numbers = [1, 2, 3, 4, 5];
echo calculateSum($numbers); // Output: 15

$numbers = []; // Empty array
echo calculateSum($numbers); // Output: 0

$numbers = [1, 2, 'a', 4, 5]; // Array with a string
echo calculateSum($numbers); // Output: 12  //Notice the unexpected behavior. String 'a' is treated as 0.
```