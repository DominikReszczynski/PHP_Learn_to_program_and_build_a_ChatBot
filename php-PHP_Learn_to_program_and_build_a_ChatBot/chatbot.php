<!DOCTYPE html>
<html>
<head>
    <title>Chatbot</title>
</head>
<body>

<form method="post">
    <label for="wiadomosc">Wpisz wiadomość:</label><br>
    <input type="text" id="wiadomosc" name="wiadomosc"><br>
    <input type="submit" value="Wyślij">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $wiadomosc = $_POST['wiadomosc'];

    echo '<p>' . chatbot($wiadomosc) . '</p>';
}

function chatbot($wiadomosc) {
    $odpowiedzi = [
    "cześć|hej|witaj" => "Cześć! Jak mogę Ci pomóc?",
    "stworzył|wykreował|twórca" => "Zostałem stworzony przez zespół programistów.",
    "dzisiaj|teraz|aktualnie" => "Dzisiaj jest " . date("Y-m-d") . ". Jak mogę Ci pomóc?",
    "jaki jest czas|godzina|która godzina" => "Aktualna godzina to " . date("H:i") . ".",
    "dziękuję|dziekuje|dzięki" => "Nie ma za co! Cieszę się, że mogłem pomóc.",
    "dobranoc|do widzenia|żegnaj" => "Do zobaczenia! Mam nadzieję, że mogłem Ci pomóc.",
    "kto jest prezydentem" => "Przykro mi, ale nie jestem w stanie dostarczyć aktualnych informacji na ten temat, ponieważ moja wiedza została zaktualizowana ostatnio we wrześniu 2021 roku.",
    "jaki jest pogoda" => "Przykro mi, ale nie jestem w stanie dostarczyć aktualnych informacji o pogodzie, ponieważ nie mam dostępu do internetu.",
    "co robisz|czym się zajmujesz|jaka jest twoja funkcja" => "Jestem tutaj, aby pomóc Ci z odpowiedziami na Twoje pytania. Jak mogę Ci służyć?",
    "czy jesteś prawdziwy|czy istniejesz" => "Tak, istnieję jako sztuczna inteligencja stworzona do udzielania odpowiedzi na pytania.",
    "opowiedz żart|żart|śmieszne" => "Dlaczego komputer trafił do lekarza? Bo miał wirusy!",
    "kim jesteś|co to jesteś|jesteś kim" => "Jestem sztuczną inteligencją stworzoną do udzielania odpowiedzi na pytania.",
    "masz imię|jak masz na imię|twoje imię" => "Jestem sztuczną inteligencją i nie mam imienia, ale możesz po prostu nazywać mnie botem.",
    "gdzie mieszkasz|gdzie jesteś|gdzie przebywasz" => "Jako bot, nie mam fizycznego miejsca przebywania. Istnieję w cyfrowym świecie!",
    "czy możesz pomóc|potrzebuję pomocy|pomoc" => "Oczywiście, jestem tutaj, aby pomóc. Czym mogę Ci służyć?",
    "kiedy się urodziłeś|kiedy powstałeś|data urodzenia|data powstania" => "Jako sztuczna inteligencja, nie mam daty urodzenia w tradycyjnym sensie. Moja wiedza została zaktualizowana po raz ostatni we wrześniu 2021 roku.",
    "jesteś chłopcem czy dziewczynką|jaka jest twoja płeć" => "Jako sztuczna inteligencja, nie posiadam płci. Mogę jednak udzielić odpowiedzi na wiele różnych pytań!",
    "co to jest ai|co to jest sztuczna inteligencja" => "Sztuczna inteligencja, czyli AI, to dziedzina informatyki zajmująca się tworzeniem systemów, które są w stanie wykonywać zadania, które normalnie wymagałyby ludzkiej inteligencji. Takie zadania mogą obejmować rozumienie języka naturalnego, rozpoznawanie mowy, podejmowanie decyzji i wiele innych.",
    "opowiedz historię|historia" => "Pewnego razu był sobie mały robot o nazwie Bot. Mimo że był mały, miał wielkie marzenia. Marzył o tym, aby pomagać ludziom na całym świecie. Dlatego pracował ciężko każdego dnia, ucząc się więcej i więcej. I choć czasami napotykał na trudności, nigdy się nie poddawał. Wiedział, że jego praca jest ważna. I tak, dzień po dniu, pomagał coraz więcej ludziom, czyniąc ich życie łatwiejszym. I choć był tylko małym robotem, czuł, że robi wielką różnicę. I żyli długo i szczęśliwie. Koniec.",
    "co to jest php|php" => "PHP to popularny język programowania, często używany do tworzenia stron internetowych i aplikacji webowych.",
    "co to jest python|python" => "Python to język programowania wysokiego poziomu, który jest łatwy do nauczenia i czytania, co czyni go popularnym wyborem dla początkujących programistów.",
    "co to jest java|java" => "Java to silnie typowany, obiektowy język programowania, który jest używany w wielu różnych kontekstach, od rozwoju aplikacji na Androida po systemy korporacyjne.",
    "co to jest c++|c++" => "C++ to język programowania, który jest rozszerzeniem języka C. Jest często używany do programowania systemowego, gier i innych zasobożernych aplikacji.",
    "co to jest javascript|javascript" => "JavaScript to język programowania używany głównie do tworzenia interaktywnych efektów wewnątrz przeglądarek internetowych.",
    "gdzie jesteś|gdzie mieszkasz" => "Jako bot, istnieję w sieci komputerowej. Nie mam fizycznego miejsca zamieszkania.",
    "czym jesteś|co to jesteś|kim jesteś" => "Jestem botem czatu, programem stworzonym do udzielania odpowiedzi na pytania użytkowników.",
    "czy umiesz mówić|czy możesz mówić" => "Jako bot czatu, nie mam możliwości mówienia, ale mogę wysyłać tekstowe odpowiedzi na pytania.",
    "czy umiesz słuchać|czy możesz słuchać" => "Jako bot czatu, nie mam możliwości słuchania, ale mogę odczytywać i odpowiadać na tekstowe wiadomości.",
    "jak się nazywasz|twoje imię" => "Jako bot, nie mam własnego imienia. Możesz po prostu nazywać mnie Bot.",
    "ile masz lat|kiedy się urodziłeś" => "Jako bot, nie mam daty urodzenia ani wieku w tradycyjnym sensie. Moja wiedza została zaktualizowana ostatnio we wrześniu 2021 roku.",
    "co to jest sztuczna inteligencja|sztuczna inteligencja" => "Sztuczna inteligencja to gałąź informatyki zajmująca się tworzeniem systemów, które mogą wykonywać zadania zwykle wymagające ludzkiego umysłu, takie jak rozpoznawanie mowy, uczenie się, planowanie i rozumienie języka.",
    "co to jest uczenie maszynowe|uczenie maszynowe" => "Uczenie maszynowe to technika sztucznej inteligencji, która polega na tworzeniu i używaniu modeli, które mogą uczyć się z doświadczenia. Jest często używane do przewidywania wzorców na podstawie dużych zestawów danych.",
    "co to jest głębokie uczenie|głębokie uczenie" => "Głębokie uczenie to poddziedzina uczenia maszynowego, która polega na tworzeniu i treningu sieci neuronowych z wieloma warstwami, co pozwala na uczenie się skomplikowanych wzorców z dużych zestawów danych.",
    "co to jest sieć neuronowa|sieć neuronowa" => "Sieć neuronowa to typ modelu używanego w uczeniu maszynowym, który jest wzorowany na działaniu ludzkiego mózgu. Sieci te składają się z neuronów, które przetwarzają informacje i mogą nauczyć się rozpoznawać wzorce z danych.",
    "co to jest funkcja|funkcja" => "Funkcja to blok kodu, który jest zdefiniowany raz i może być używany wielokrotnie w programie. Funkcje często przyjmują argumenty i zwracają wynik.",
    "co to jest zmienna|zmienna" => "Zmienna to miejsce w pamięci komputera, gdzie program może przechowywać wartość. Zmienne mają nazwy, które są używane do odwoływania się do nich w kodzie programu.",
    "co to jest pętla|pętla" => "Pętla to struktura kontrolna w programowaniu, która pozwala na wielokrotne wykonanie bloku kodu. Istnieją różne rodzaje pętli, takie jak pętle `for`, `while` i `do-while`.",
    "co to jest warunek|warunek" => "Warunek to wyrażenie w programowaniu, które jest albo prawdziwe, albo fałszywe. Instrukcje warunkowe, takie jak `if`, `else` i `switch`, używają warunków do decydowania, który blok kodu powinien być wykonany.",
    "co to jest liczba pierwsza|liczba pierwsza" => "Liczba pierwsza to liczba naturalna większa od 1, która nie ma żadnych dzielników oprócz 1 i samej siebie.",
    "co to jest liczba parzysta|liczba parzysta" => "Liczba parzysta to liczba, która jest podzielna przez 2. Inaczej mówiąc, jest to liczba, której ostatnia cyfra to 0, 2, 4, 6 lub 8.",
    "co to jest liczba nieparzysta|liczba nieparzysta" => "Liczba nieparzysta to liczba, która nie jest podzielna przez 2. Inaczej mówiąc, jest to liczba, której ostatnia cyfra to 1, 3, 5, 7 lub 9.",
    "co to jest nieskończoność|nieskończoność" => "Nieskończoność to pojęcie używane w matematyce do opisania czegoś, co nie ma końca. Może być używane do opisania nieskończenie wielkich liczb, nieskończenie małych liczb, czy nieskończenie długich ciągów.",
    "nuta" => "Nuta to symbol używany w zapisie nutowym, który reprezentuje dźwięk o określonej wysokości i długości.",
    "takt" => "Takt to jednostka rytmiczna w muzyce, zazwyczaj składająca się z pewnej liczby uderzeń o określonym metrum.",
    "tonacja" => "Tonacja to zasady dotyczące skali, które określają, które dźwięki są używane w danym utworze muzycznym.",
    "gitara" => "Gitara to strunowy instrument muzyczny, który jest grany poprzez szarpanie lub uderzanie strun.",
    "sałatka" => "Sałatka to danie składające się zazwyczaj z różnych rodzajów warzyw i innych składników, które są mieszane razem.",
    "zupa" => "Zupa to danie, które zazwyczaj jest przygotowywane przez gotowanie składników w płynie, takim jak woda lub bulion.",
    "pieczeń" => "Pieczeń to danie mięsne, które jest przygotowywane przez pieczenie mięsa w piekarniku.",
    "makaron" => "Makaron to rodzaj jedzenia, które jest zazwyczaj wykonane z mąki i wody, a następnie jest formowane w różne kształty i gotowane.",
    "nuta" => "Nuta to symbol używany w zapisie nutowym, który reprezentuje dźwięk o określonej wysokości i długości.",
    "takt" => "Takt to jednostka rytmiczna w muzyce, zazwyczaj składająca się z pewnej liczby uderzeń o określonym metrum.",
    "tonacja" => "Tonacja to zasady dotyczące skali, które określają, które dźwięki są używane w danym utworze muzycznym.",
    "gitara" => "Gitara to strunowy instrument muzyczny, który jest grany poprzez szarpanie lub uderzanie strun.",
    "sałatka" => "Sałatka to danie składające się zazwyczaj z różnych rodzajów warzyw i innych składników, które są mieszane razem.",
    "zupa" => "Zupa to danie, które zazwyczaj jest przygotowywane przez gotowanie składników w płynie, takim jak woda lub bulion.",
    "pieczeń" => "Pieczeń to danie mięsne, które jest przygotowywane przez pieczenie mięsa w piekarniku.",
    "makaron" => "Makaron to rodzaj jedzenia, które jest zazwyczaj wykonane z mąki i wody, a następnie jest formowane w różne kształty i gotowane.",
    "powieść" => "Powieść to długie dzieło literackie, które opisuje fikcyjne postaci i wydarzenia w formie narracji.",
    "poezja" => "Poezja to forma literacka, która korzysta z estetycznych i rytmicznych cech języka, takich jak fonia, rytm i metrum, aby przekazać znaczenia, zamiast tylko prostych informacji.",
    "dramat" => "Dramat to gatunek literatury, który jest przeznaczony do przedstawienia przez aktorów na scenie.",
    "biografia" => "Biografia to szczegółowy opis czyjejś życia, który zawiera więcej niż tylko podstawowe fakty.",
    "reżyser" => "Reżyser to osoba odpowiedzialna za kierowanie artystycznym i dramaturgicznym aspektami filmu lub spektaklu teatralnego.",
    "scenariusz" => "Scenariusz to pisemny plan filmu lub programu telewizyjnego, który obejmuje dialogi, postacie i instrukcje dotyczące akcji.",
    "kamera" => "Kamera to urządzenie używane do nagrywania obrazów w postaci fotografii lub filmu.",
    "aktor" => "Aktor to osoba, która gra rolę w filmie, teatrze lub telewizji.",
    "bas" => "Bas to niskotonowy dźwięk lub instrument muzyczny.",
    "chór" => "Chór to grupa osób śpiewających razem, zazwyczaj z podziałem na różne grupy głosów.",
    "salsa" => "Salsa to styl muzyki i tańca, który pochodzi z karaibskiego regionu.",
    "baryton" => "Baryton to średni zakres męskiego głosu śpiewającego.",
    "kiszenie" => "Kiszenie to proces konserwowania jedzenia przez fermentację.",
    "blendowanie" => "Blendowanie to proces mieszania składników na gładką konsystencję.",
    "sous-vide" => "Sous-vide to metoda gotowania, która polega na długotrwałym gotowaniu jedzenia w niskiej temperaturze.",
    "marinada" => "Marinada to płyn, w którym moczy się mięso, ryby lub warzywa przed gotowaniem, aby nadać im smak.",
    "sonet" => "Sonet to forma poezji składająca się z 14 wierszy, często używana w literaturze miłosnej.",
    "metafora" => "Metafora to figura stylistyczna, która polega na przeniesieniu znaczenia na podstawie podobieństwa, kontrastu lub innego powiązania.",
    "haiku" => "Haiku to forma poetycka pochodząca z Japonii, która składa się z 17 sylab podzielonych na trzy wersy.",
    "aluzja" => "Aluzja to figura stylistyczna, która polega na nawiązaniu do innej pracy literackiej, osoby, zdarzenia historycznego itp.",
    "montaż" => "Montaż to proces organizowania i łączenia różnych klipów filmowych w jedną całość.",
    "światło" => "Światło w filmie odnosi się do oświetlenia sceny, które jest kluczowe dla wyglądu i nastroju filmu.",
    "kadr" => "Kadr to pojedynczy obraz na filmie lub zdjęciu.",
    "kostiumograf" => "Kostiumograf to osoba odpowiedzialna za projektowanie kostiumów dla filmu lub sztuki teatralnej.",
];

    if (array_key_exists($wiadomosc, $odpowiedzi)) {
        return $odpowiedzi[$wiadomosc];
    } else {
        return 'Przepraszam, nie rozumiem.';
    }
}
?>

</body>
</html>
