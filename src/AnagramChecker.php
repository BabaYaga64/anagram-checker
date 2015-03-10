<?php

    class AnagramChecker
    {
        function makeAnagramChecker($input_word, $list_of_words)
        {
            $compare_array = array();

            // $input_word =
            // $input_list =

            foreach ($list_of_words as $word) {
                if ($input_word == $word) {
                    array_push($compare_array, $word);
                }

                else {

                    // array_push[$compare_array, false];
                }

            }
            return $compare_array;
        }


    }


?>
