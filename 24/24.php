<?php
function convertWordsLastThreeToUpper($input) {
  
    $words = explode(" ", $input);
    $result = [];

    foreach ($words as $word) {
        $length = strlen($word);

        if ($length < 3) {
            
            $result[] = strtoupper($word);
        } else {
           
            $start = substr($word, 0, $length - 3); 
            $end = strtoupper(substr($word, -3));  
            $result[] = $start . $end; 
        }
    }

    
    return implode(" ", $result);
}


$input = "Nepal Gurung Bca Bachelor";


$output = convertWordsLastThreeToUpper($input);
echo "Original: $input<br>";
echo "Modified: $output";
?>
