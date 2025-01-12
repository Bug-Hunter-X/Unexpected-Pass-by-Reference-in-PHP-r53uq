```php
function increment_array_values(array &$arr): void {
  foreach ($arr as &$value) {
    $value++;
  }
}

$arr = [1, 2, 3];
increment_array_values($arr);
print_r($arr); // Output: Array ( [0] => 2 [1] => 3 [2] => 4 )

$arr = [1, 2, 3];
$arr2 = $arr;
increment_array_values($arr2);
print_r($arr); //Output: Array ( [0] => 1 [1] => 2 [2] => 3 )
```