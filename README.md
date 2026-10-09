Futbalový prehľad – evidencia tímov, hráčov a zápasov

Meno a priezvisko študenta: Gongalschi Oleg

Študijná skupina: 5ZYI35

Stručný opis projektu

Cieľom projektu je vytvoriť webovú aplikáciu na evidenciu futbalových tímov, hráčov a zápasov. Používatelia budú môcť prezerať tímy, informácie o hráčoch a výsledky zápasov.

Aplikácia bude obsahovať administrátorskú časť na správu údajov a používateľskú časť s možnosťou registrácie a prihlásenia. Projekt bude zameraný na prácu s databázou, správu údajov a zabezpečenie používateľských účtov.

Role v projekte
Návštevník: Môže prezerať tímy, hráčov a výsledky zápasov.
Registrovaný používateľ: Môže sa prihlásiť a spravovať zoznam obľúbených tímov.
Administrátor: Môže pridávať, upravovať a mazať tímy, hráčov a zápasy.
Prípady použitia podľa rolí

Návštevník

Zobrazí zoznam tímov a hráčov.
Vyhľadá tím alebo hráča.
Prezrie si výsledky zápasov.

Registrovaný používateľ

Vytvorí si účet a prihlási sa.
Pridá tím medzi obľúbené.
Zobrazí si obľúbené tímy.

Administrátor

Pridá, upraví alebo odstráni tím.
Spravuje hráčov a ich priradenie k tímom.
Pridá, upraví alebo odstráni zápas.
Plánované entity
Tím: ID, názov, krajina, rok založenia, štadión, logo.
Hráč: ID, meno, priezvisko, pozícia, číslo dresu, ID tímu.
Zápas: ID, dátum, domáci tím, hosťujúci tím, výsledok.
Používateľ: ID, meno, e-mail, heslo, rola.
Obľúbený tím: ID používateľa, ID tímu.
Vzťahy medzi entitami
Tím – Hráč (1:N): Jeden tím môže mať viacero hráčov.
Tím – Zápas (1:N): Jeden tím môže odohrať viacero zápasov ako domáci alebo hosťujúci tím.
Používateľ – Tím (M:N): Používateľ môže mať viacero obľúbených tímov a jeden tím môže byť obľúbený viacerými používateľmi.
Hlavné stránky aplikácie
Domovská stránka: Prehľad tímov a posledných zápasov.
Zoznam tímov: Zobrazenie a vyhľadávanie tímov.
Detail tímu: Informácie o tíme a jeho hráčoch.
Zoznam hráčov: Prehľad a filtrovanie hráčov.
Zápasy: Zobrazenie dátumov a výsledkov zápasov.
Prihlásenie a registrácia: Správa používateľského účtu.
Administrácia: Správa tímov, hráčov a zápasov.
Rozdelenie funkcionality
Základné funkcie
Zobrazovanie a vyhľadávanie tímov, hráčov a zápasov.
Kompletné CRUD operácie nad tímami a hráčmi.
Pridávanie, úprava a mazanie zápasov.
Registrácia a prihlásenie používateľov.
Rozdelenie oprávnení podľa používateľských rolí.
Dve AJAX operácie, napríklad filtrovanie hráčov a odosielanie formulára.
Nahrávanie a správa log tímov.
Validácia vstupov a zabezpečenie aplikácie.
Responzívne používateľské rozhranie.
Technické požiadavky
PHP a framework VAJKO.
Oddelenie aplikačnej logiky od prezentačnej vrstvy.
Minimálne 5 dynamických stránok.
Minimálne 3 používané doménové databázové entity.
Vlastný JavaScript a CSS.
Spustenie aplikácie cez Docker s ukážkovými dátami.