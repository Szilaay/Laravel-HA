@extends('Layout.main')

@section('content')
<main class="container pb-2">
    <h2 class="text-center display-6 py-3">Világ országai</h2>
    <p class="fs-5">
        A Föld kontinensekre történő felosztásában nincs elfogadott konszenzus, különböző felfogások szerint a kontinensek száma 4 és 7 között van. A legmagasabb szintű területi egységek számának meghatározása a folyamatosan változó politikai helyzet miatt szintén bizonytalan – 260 körül van. A 260 területi egység közül: 193 független ország, 4 társult ország, 8 de facto ország, 1 nemzetközi terület (az Antarktisz), 3 vitatott államiságú terület, 51 pedig külbirtok (melyek közül 19 lakatlan).
    </p>
    <p class="fs-5">
        <img src=" {{ asset('assets/img/world-map.jpg') }} " alt="world-map.jpg" class="world_map">
        A Föld legnagyobb területű és népességű kontinense Ázsia, a legnagyobb területű országa Oroszország, a legnagyobb népességű országok pedig Kína és India. A Föld legnagyobb népsűrűségű kontinense is Ázsia, a legritkábban lakott pedig Ausztrália és Óceánia. A Föld jelentősebb országai közül a legnagyobb népsűrűségűek Banglades, Tajvan, Dél-Korea és Hollandia, a legkisebb népsűrűségűek pedig Nyugat-Szahara és Mongólia. A Föld legnépesebb városai Tokió, New York, São Paulo és Mexikóváros, amelyek egyben Japán, az Amerikai Egyesült Államok, Brazília és Mexikó központjai is. A Föld népessége mindenütt folyamatosan nő, kivéve a közép-európai és kelet-európai országokat, amelyek lakossága csökken.
        <p class="fs-5">
            Az egy főre eső GDP alapján – a PPP (vásárlóerő-paritás) szerint számítva – a Föld leggazdagabb kontinense Észak-Amerika (25 263 USD/fő), a Föld leggazdagabb országai pedig Luxemburg, Norvégia és az Amerikai Egyesült Államok (40 000 USD/fő fölött). A legszegényebb kontinens Afrika (2000 USD/fő), a legszegényebb országok pedig Kelet-Timor, Szomália és Malawi, amelyekben az egy főre eső éves GDP 600 USD alatti. A Föld legfőbb gazdasági hatalmai az Amerikai Egyesült Államok, az Európai Unió, Kína, Japán és Brazília. Kína ma a világ leggyorsabban fejlődő gazdasága.
        </p>
    </p>
    <p class="fs-5">
        Az egyes országok részletes területi, népességi és gazdasági adatait lásd a következő szócikkekben: Európa országai, Ázsia országai, Afrika országai, Észak-Amerika országai, Dél-Amerika országai, Ausztrália és Óceánia országai, az Antarktisz területei.
    </p>
  </main>
@endsection