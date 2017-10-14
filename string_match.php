<?php
/*
This function finds if the permutation of a given word is present in a given string or not
It takes 2 parameters: $word and $text
*/

function string_match($word, $text)
{
    $word_arr = str_split($word);
    $text_arr = str_split($text);
    $word_len = count($word_arr);
    $text_len = count($text_arr);
    
    $matched = false;
    $word_hash = [];
    $text_hash = [];
    $index = 0;
    $bool = true;
    
    $counter = 0;
    $index_output = '';

    //Associative array of characters of word with count
    for ($i = 0; $i < $word_len; $i++) {
        $word_hash[$word_arr[$i]] = empty($word_hash[$word_arr[$i]])?1:$word_hash[$word_arr[$i]] + 1; 
    }

    for ($i = 0; $i < $text_len; $i++) {
        $index_output .= "$i ";
        //Associative array of characters of text with count
        $text_hash[$text_arr[$i]] = empty($text_hash[$text_arr[$i]])?1:$text_hash[$text_arr[$i]] + 1;
        $counter++;
        if ($counter == $word_len) { //Check word_len at a time 
            //print_r($text_hash);
            
            //Check the counts 
            foreach ($text_hash as $char => $count) {
                if (empty($word_hash[$char]) || $word_hash[$char]!=$count ) {
                    $matched = false;
                    $index_output = ''; //Match not found
                    break;
                }

                $matched = true;
            }

            $index++;
            
            $i = $index - 1; //(-1) as $i is again incremented before next iteration
            $text_hash = [];
            $counter = 0;
            
            
        }

        if ($matched) {
            break;
        } 
        


    }

    if ($matched) {
        print "Match found. ". $index_output;
            
    } else {
        print "Not matched";
    }
    
}


string_match("use", "question");

?>