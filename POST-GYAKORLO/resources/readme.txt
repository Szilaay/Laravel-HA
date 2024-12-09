$_POST gyakorló - Laravel feladat

Források:
 - Sablon mappa, benne a felhasználandó sablon.html-el
 - Mintak mappa, benne a segítségként kiadott minta .png-k
 - post-gyakorlo.sql fájl az adatbázis kialakításához

1. Adatbázis létrehozása
Hozza létre a "post-gyakorlo" adatbázist és importálja be a mellékelt sql fájlt!

2. A projekt létrehozása
Hozzon létre egy új Laravel projektet a témához releváns néven!

3. Weboldal létrehozása
Alakítsa ki a mellékelt sablon segítségével a weboldal kinézetét, oldalszerkezetét!
A sablon a Bootswatch / Lux témáját használja, segítség az oldal kialakításához: https://bootswatch.com/lux/
A böngésző címsorában megjelenő cím --> "$_POST gyakorló feladatok" legyen!
A menü:
 - Tanulók   --> indexre mutasson
 - Klippek   --> ~/klippek útvonalra mutasson
 - Autók     --> ~/autok útvonalra mutasson
 - Színész   --> ~/szinesz útvonalra mutasson
 - Szállítás --> ~/szallitas útvonalra mutasson

A footer szöveges tartalma: "$_POST gyakorló feladatok"

4. Adatbázis elérése
Alakítsa ki az adatbázis kapcsolatot a létrehozott adatbázissal!
Hozza létre a szükséges modelleket és minden táblához hozzon létre egy-egy külön controllert!
Alakítsa ki ezek kapcsolódását egymáshoz és az útvonalakhoz!

5. Útvonalak kialakítása
Alakítsa ki az alábbi útvonalakat és hozzon hozzá létre egy-egy nézetet!
 ~/   			Tanuló hozzáadása oldal 
 ~/klippek		Klipp hozzáadása oldal
 ~/autok	   	Autó hozzáadása oldal
 ~/szinesz		Színész hozzáadása oldal
 ~/szallitas		Házhozszállítás oldal

6. Egyes nézetek részletes kialakítása, adatbázis lekérdezések
 - Minden oldalon a sablonban megtalálható grid segítségével alakítsa ki a bal hasábban az adatbeviteli form-ot, a jobb hasábban az adatok megjelenítését táblázatban. A táblázat csíkozott és keretezett. Részletesebb információkért lásd a mintákat!

7. Validálás
 - Minden oldalon vagy a mezők alatt vagy a form egy feltünő helyén egy alert-box-ban jelenítsd meg a validálási üzeneteket, kivéve a Házhozszállításnál, ott a validálást lásd a mintán!
 - Minden validálási üzenet magyarul jelenjen meg!

 - TANULÓK
	- A név, a lakhely és a nem mezők kötelezően megadandó mezők, ellenőrizz ürességet
	- A többi mezőnél a value="" paraméter oldja meg a helyes adatbevitelt
	  Az ágazat lista értékei: Elektronika és elektrotechnika, Informatika és távközlés, Rendészet és közszolgálat

 - KLIPPEK
	- Az előadó neve, a szám címe és a youtube link mezők kötelezően megadandó mezők, ellenőrizz ürességet
 	- A youtube link mezőnél ellenőrizd, hogy valid url legyen
	- A többi mezőnél a value="" paraméter oldja meg a helyes adatbevitelt
	  A perc lista értékei: 1-től 10 percig, percenként
	  A másodperc lista értékei: 1-től 59 másodpercig, másodpercenként
 
 - AUTÓK
	- Az autó rendszáma, márkája, típusa és színe mezők kötelezően megadandó mezők, ellenőrizz ürességet
	- A rendszám minimum 6, maximum 9 karakter legyen
	- A többi mezőnél a value="" paraméter oldja meg a helyes adatbevitelt
	  Az évjárat lista értékei: az aktuális évtől 1960-ig, évenként, csökkenő sorrendben

 - SZÍNÉSZ
	- A színész neve, születési ideje és nemzete mezők kötelezően megadandó mezők, ellenőrizz ürességet
	- A születési ideje mező input:date típusú, min="" értéke 1900-01-01, max="" értéke a mai dátum
	- A többi mezőnél a value="" paraméter oldja meg a helyes adatbevitelt

 - HÁZHOZSZÁLLÍTÁS
	- Validálási mintát lásd a minta-szallitas_ERROR.png-n!
	- A név, irányítószám, város, utca, házszám telefonszám mezők kötelezően megadandó mezők, ellenőrizz ürességet
	- Az emelet és ajtó opcionális mezők
	- A többi mezőnél a value="" paraméter oldja meg a helyes adatbevitelt
	  Az emelet lista értékei: --- (alapértelmezés, ha nem választott), fsz, 1. emelettől 30. emeletig, emeletenként
	  A körzetszám lista értékei: 20, 30, 70
 


