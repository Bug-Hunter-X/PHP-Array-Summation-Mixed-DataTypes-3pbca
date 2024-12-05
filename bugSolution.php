```php
function calculateSum($numbers) {
  $sum = 0;
  foreach ($numbers as $number) {
    if (is_numeric($number)) {
      $sum += $number;
    } else {
      // Handle non-numeric values appropriately
      // For example: you could throw an exception, skip the value, or use a default value
      trigger_error("Non-numeric value encountered in array: " . $number, E_USER_WARNING);
    }
  }
  return $sum;
}

$numbers = [1, 2, 3, 4, 5];
echo calculateSum($numbers); // Output: 15

$numbers = [];
echo calculateSum($numbers); // Output: 0

$numbers = [1, 2, 'a', 4, 5];
echo calculateSum($numbers); // Output: A warning message will be shown, and the sum will be 12.
```