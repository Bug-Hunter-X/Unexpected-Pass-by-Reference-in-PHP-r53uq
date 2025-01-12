```php
function increment_array_values(array $arr): array {
  $newArray = [];
  foreach ($arr as $value) {
    $newArray[] = $value + 1;
  }
  return $newArray;
}

$arr = [1, 2, 3];
$incrementedArr = increment_array_values($arr);
print_r($arr); // Output: Array ( [0] => 1 [1] => 2 [2] => 3 )
print_r($incrementedArr); // Output: Array ( [0] => 2 [1] => 3 [2] => 4 )
```