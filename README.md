# Mylibraries
Merupakan kumpulan library yang sering saya gunakan, diantaranya :

* Generating random code
* etc

Bisa di install lewat composer dengan cara :

```composer require updu/mylibraries```

contoh penggunaan :
```
use updu\Mylibraries\RandomCodeGenerator;

public function test(){
    $generate = new RandomCodeGenerator();
    echo $generate->CharNum(10);
}
```

terima kasih