<?

function test($my_string){
// creating an array by split command
$my_array=split(" ",$my_string);
return $my_array; // returning the array
}

// sending a string to function as input //
$collect_array=test("Hello welcome to plus2net");

// displaying the elements of the collected array
while (list ($key, $val) = each ($collect_array)) {
echo "$key -> $val <br>";
}

?>