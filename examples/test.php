<?php

use Markdown\Converter;
use Markdown\Parser;

require_once '../vendor/autoload.php';

$converter = new Converter();
$parser = new Parser();
$md = '#title

*ok*


| dcecde | dcdcdc | dcecde |
| :---:  | :----  | ---:   |
| xdcdc  | dcxdc  | dcdc   |
                          
                          
```json
{ 
  "firstName": "John", 
  "lastName": "Smith", 
  "age": 25 
} 
```


Here\'s a simple footnote,[^1] and here\'s a longer one.[^bignote]
a[^bignote1]
b[^2]
c[^3]
d[^4]
d[^5]
d[^6]
d[^7]
d[^8]
d[^9]
d[^10]
d[^11]
d[^11]
d[^11]


[^bignote1]: test

[^2]: test2
[^3]: 3
[^4]: 4
[^5]: 3
[^6]: 3
[^7]: 3
[^8]: 3
[^9]: 3
[^10]: 3
[^11]: 3

[^1]: This is the first footnote.

[^bignote]: Here\'s one with multiple paragraphs and code.

    Indent paragraphs to include them in the footnote.

    `{ my code }`

    Add as many paragraphs as you like.



### My Great Heading {#custom-id}

- [x] Write the press release
- [ ] Update the website
- [ ] Contact the media


~~The world is flat.~~ We now know that the world is round.

First Term
: This is the definition of the first term.

Second Term
: This is one definition of the second term.
: This is another definition of the second term.


';

file_put_contents('test.html', $parser->text($md));
ob_start();
$converter->convert($md);
file_put_contents('test.pdf', ob_get_clean());


