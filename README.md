# Match word permutation in a given string

This program is used to match if the permutation of a given word is present in another given text or not.
If matched, returns the indexes where the match was found.

## Getting Started

This program contains a function which takes 2 parameters

```
function string_match($word, $text)
```

### Example

```
string_match("use", "question"); //Match found. 1 2 3 (1 2 3 is the index where match was found)
string_match("hello", "quihlloen"); //Match found. 3 4 5 6 7
string_match("useful", "question"); //Not matched
```

### Prerequisites

php-cli

### Execute the program
```
php string_match.php
```


