# web_robot
Robot slouží k vyplnění jednoduchého formuláře pro přidání známky studentovi v daném předmětu. Je to část z projektu VUT FEKT Bezpečnost ICT2 - "Návrh a testování nástroje k detekci bota na webové stránce".

Před spuštěním bota je nutné nainstalovat všechny dependencies, které robot využívá. V příkazové řádce se přesuňte se do složky s robotem. Příkazem: pip install -r requirements.txt je všechny nainstalujete.

Dalším důležitým krokem je vložení cesty k webovému ovladači (ChromeDriver), který robot využívá pro práci v prohlížeci Chrome. Stáhněte si tento ovladač na odkazu - https://chromedriver.chromium.org/ a uložte do složky: C:\webdrivers.

Tuto cestu poté uložte do systémových proměnných systému Windows.

Do vyhledávacího okna napiště: "Upravit proměnné prosředí systému",
Dále v "Proměnné prostředí",
Kde v sekci "Systémové proměnné" přidáte či upravíte proměnnou jménem Path,
Jako hodnotu proměnné nastavte C:\webdrivers v případě, že jste proměnnou vytvořili,
Pokud již vytvořená byla, cestu přidáte pomocí tlačítka "Nový".
Jako testovací stránka nám poslouží - https://230914.9e.cz/, v případě nedostupnosti stránek či pro jiné účely, můžeme využívat localhost.
