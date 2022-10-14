# kur-script-php
Web sitlesinde kur bilgileri paylaşmak isteyen kişiler için hazırlanmış ve temel olarak PHP ile kodlanmış API sistemi kullanılmaktadır. Script'i istediğiniz heryerde kullanabilirsiniz.

## Nasıl Kullanılır
- PHP ile API işlemi yaptığımız için API bilgilerinde yer alan parametreleri kullanmalır. Değerini almak istediğiniz para biriminin 1. parametresini, ardından belirtiğiniz işlem parametresini çekiniz.
- API'ler her saniye anlık olarak değişmektedirler. Genel olarak API şekili aşşağıdaki gibidir.
```
{"USD":{"satis":"18.5914","alis":"18.5865","degisim":"0.18"}
```
- Bu değerleri kodlarımızda kullanabilmek için API'lerin genel olarak paylaşıldığı 'JSON' adresine göz atabilirsiniz. https://api.genelpara.com/embed/doviz.json
- Bunu PHP olarak dillendirmek için kullanılan komut aşşağıda verilmiştir. API paramterlerine göre düzenlemeler yapabilirsiniz.
```
<?php echo @$JSON['USD']['satis']; ?>
```

## Ek Olarak
- Projenin içerisinde Font-Awesome kütüphanesi kullanılmıştır.
