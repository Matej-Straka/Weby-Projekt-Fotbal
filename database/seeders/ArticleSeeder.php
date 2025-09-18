<?php

namespace Database\Seeders;

// database/seeders/ArticleSeeder.php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('articles')->insert([
            [
                'link' => 'article/1-janotka',
                'title' => 'Janotka: Spokojenost s výsledkem i hrou. Byli jsme dominantní',
                'photo' => 'janotka.jpeg',
                'date' => 1751663291,
                'top' => 1,
                'text' => '<p>Stejně jako v pondělním utkání, také v pátek zvítězili Hanáci v přípravě 3:1, když ve druhém duelu v rámci rakouského soustředění porazili maďarský Debrecen. Zatímco proti Kluži padaly góly až po změně stran, tentokrát to bylo už v první půli. Trenér Tomáš Janotka byl po utkání s DVSC spokojen s výsledkem i předvedenou hrou. „<i>Byli jsme dominantní. Zejména v první půli, kdy jsme předváděli rychlé a dynamické akce</i>,“ okomentoval první půli, kdy se prosadili postupně Breite, Vašulín a z penalty Janošek.  </p>
                    <p><strong></strong><strong>Máme za sebou druhý zápas na soustředění, maďarský Debrecen jsme porazili 3:1. Jste spokojen?</strong><br>„<i>Zasloužená výhra. Jsem spokojen nejen s výsledkem, ale také s tím, jak jsme se prezentovali. Myslím si, že jsme byli dominantní. Zejména v první půli jsme předváděli rychlé, dynamické a svižné akce. Vytvářeli jsme si brankové příležitosti. Stejně tak i druhý poločas, kdy po prostřídání naše hra neztratila tempo. Další příležitosti ke skórování jsme měli, soupeř si sice nějaké příležitosti vytvořil, ale nebylo tam z jeho strany větší množství šancí, které by nás musely trápit. Skóre určitě odpovídá tomu, co se dělo na hřišti. Jednu až dvě branky jsme ještě mohli vstřelit.</i>“</p>  <p><strong>Už po utkání proti Kluži jsme se bavili o Danovi Vašulínovi. Dnes druhý zápas po sobě vstřelil gól. Zatím ideální stav?</strong><br> „<i>Myslím si, že pro útočníka jsou góly velice důležité. Jsem rád, že se zase prosadil, dokáže mít dobrý výběr ve vápně a zúročit příležitost, kterou měl.</i>“</p>  <p><strong>Poprvé hrál Dominik Janošek, který si připsal asistenci u gólu Vašulína a proměnil penaltu. Jak hodnotíte jeho výkon?</strong><br> „<i>Body hovoří za vše. Pokud si z utkání, kdy nastoupíte na pozici ofenzivního záložníka, odnesete 1+1, tak spokojeni musíte být. Dominik se snažil být aktivní, rozjíždět a doplňovat akce. Jsem rád, že si s týmem mohl poprvé zahrát, aby se s týmem sehrál.</i>“</p><p><iframe width=\"1074\" height=\"604\" src=\"https://www.youtube.com/embed/nTsZfE184UQ\" title=\"Janotka po výhře s Debrecenem\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" referrerpolicy=\"strict-origin-when-cross-origin\" allowfullscreen=\"\"></iframe><br></p>  <p><strong>Prosadil se i Radim Breite. Je fajn, když vstřelí gól i tak netypický střelec?</strong> <br> „<i>Radim skvěle trénuje, myslím, že dávky, které kluci dostávají, zvládá perfektně. Při gólové akci tam bylo z jeho strany výborné doplnění do koncovky z druhé vlny. Dostal se k míči na svou oblíbenou levou nohu, kterou nám dennodenně ukazuje na tréninku. Byla to pohotová střela po krásném centru Dana Vašulína, který vzešel z pěkné kombinace.</i>“</p>  <p><strong>Dalším debutantem byl Andres Dumitrescu. Jak se začleňuje do týmu?<br></strong> „<i>Je tady krátce, stejně tak jako Dominik. Nemůžeme tedy čekat, že výkony budou hned dokonalé. Tým se tady teprve formuje, hodně hráčů odešlo v létě po skončení sezóny hodně. Andresův výkon byl skvělý, snažil se doplňovat ofenzivu. Nějaké drobnosti tam najdeme, ale je to první zápas. Víme, co od něj můžeme očekávat.</i>“</p>  <p><strong>Na soustředění jste oba zápasy vyhráli. Jste s jeho průběhem spokojen?</strong><br> „<i>Všichni jsme spokojeni s tím, že jsme splnili to, co jsme si v rámci tréninkového procesu naplánovali. Ať už v terénu, nebo na hřišti. Dva zápasy, které jsme tady měli na programu, jsme vyhráli. Vidíme tady progres směrem do ofenzivy i defenzivy. S průběhem soustředění jsme maximálně spokojení. Nějaké lehké zranění si tento náročný program bohužel vždy vyžádá, ale věřím, že u nikoho to nebude nic vážného, a že se kluci brzy zapojí do tréninkového procesu.</i>“</p>',
                'published' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'link' => 'article/2-becko',
                'title' => 'Béčko prohrálo v Polsku se Zagłębií Sosnowiec',
                'photo' => 'becko.jpg',
                'date' => 1752095291,
                'top' => 1,
                'text' => '<p>Na soustředění v Polsku nastoupil B-tým do přípravného duelu proti Zagłębie Sosnowiec. Hrálo se ve Wodzislawi, kde naše rezerva podlehla účastníkovi druhé nejvyšší polské fotbalové soutěže 0:3.</p>
 <p>Sigma nastoupila v brance s osmnáctiletým Tomášem Ulenfeldem, šanci opět dostali Patrick Scott Riedl a David Drábek. Po návratu z Vyškova byl v sestavě také útočník Pavel Zifčák. Zápas se hrál netypicky na tři třetiny, tedy 3x30 minut a Zagłębie protočila téměř tři kompletní sestavy.</p>  <p>V první pasáži se Sigma proti silnému soupeři držela, jednou však inkasovala. Směrem dopředu měla díky presinku i dobré kombinaci z vlastní rozehrávky několik nadějných situací, které ale skončily před velkým vápnem soupeře. </p>  <p>Béčko se drželo více v zápase do 60. minuty. Sosnowiec poslal na hřiště třetí jedenáctku, po čemž už bylo pro Hanáky těžší držet s čerstvými Poláky krok, protože někteří svěřenci trenéra Westa hráli celé utkání. Soupeř přidal dvě branky a nakonec zvítězil 3:0.</p>  <p>V sobotu 12. července pak hraje béčko další přípravu v Prostějově proti domácímu celku, začátek duelu je v 17:00.</p>
   <h2\">Ohlasy</h2>
                            <b>Roman West:</b>
<br>„<i>Soupeř byl velmi kvalitní, zápas splnil svůj účel. Kluci to poctivě odmakali, ale Sosnowiec vlastně prostřídal tři sestavy, což se pak na hře i výsledku v závěru zápasu hraného za deště projevilo. Zagłębie mělo od počátku herně navrch, my jsme tahali za kratší konec a výsledek je asi zasloužený. Hodinu jsme se drželi, po dalším prostřídání soupeře jsme dvakrát inkasovali a bylo rozhodnuto. Na soustředění se nám jinak daří trénovat vše, co máme v plánu, kluci jsou zdraví. V neděli se k nám připojil Pavel Zifčák, uvidíme, zda zůstane. V pondělí by se měl vrátit do přípravy i Vojtěch Křišťál.</i>“',
                'published' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'link' => 'article/3-tkac',
                'title' => 'David Tkáč: Opouštím svou bublinu, ale tenhle krok byl potřeba',
                'photo' => 'tkac.jpeg',
                'date' => 1751922491,
                'top' => 1,
                'text' => '  <p>David Tkáč se stal posilou Sigmy na konci minulého týdne, když A-tým ještě dokončoval soustředění v Rakousku. Teď už se ale čerstvý přírůstek ze Zlína připojil k novým spoluhráčům. <i>„Sigma mě může posunout dopředu jako hráče i jako člověka. Vystupuju trochu z komfortní zóny,“</i> řekl čerstvě třiadvacetiletý fotbalista v prvním rozhovoru. </p>
                    <p><strong>Davide, vítej v Sigmě. </strong><strong>Prozraď, jak se rodil tvůj příchod do Sigmy?</strong></p><p><em>„Děkuju za uvítání. O zájmu Sigmy jsem se dozvěděl asi dva týdny zpátky od svého agenta. Když přišla nabídka, tak v podstatě nebylo nad čím váhat. Jednání potom bylo docela snadné a všechno šlo rychle. Prošel jsem zdravotní prohlídkou a jsem tady.“</em></p><p><em><iframe width=\"908\" height=\"511\" src=\"https://www.youtube.com/embed/unYex3Fgms8\" title=\"\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" referrerpolicy=\"strict-origin-when-cross-origin\" allowfullscreen=\"\"></iframe><br></em></p><p><strong>Tys strávil celou kariéru od malička ve Zlíně. Jak složité bylo rozhodnout se, že opustíš tu rodnou hroudu?</strong></p><p><em>„No, je to jiné. Opouštím trochu rodinu, bublinu svých kamarádů. Ale bylo rozhodně potřeba udělat tenhle krok. Trochu i vystoupit z komfortní zóny a jít dopředu. Myslím si, že mě to může posunout dopředu, ať už jako hráče, nebo jako člověka.“</em></p><p><strong>Co tě nejvíc do Olomouce zlákalo? Evropské poháry, které tady budeme mít po letech?</strong></p><p><em>„Určitě to byl jeden z aspektů. Zahrát si v evropských pohárech, to se nepodaří každému. Věřím, že tu šanci, kterou tady mám, chytím a že si zahraju. Sigma ale v mých očích celkově za poslední tři roky udělala velký pokrok. Beru to jako šanci zase se ukázat a zviditelnit a třeba se posunout výš.“</em></p><p><img class=\"img-fluid\" src=\"https://sigmafotbal.esports.cz/files/editor/sigma-david-tkac (6).jpg\"></p><p><strong>Tvá poslední sezóna ve druhé lize byla velmi úspěšná. Postoupili jste, střílel jsi góly. Bereš ji jako tu svou dosud nejlepší a průlomovou?</strong></p><p><em>„Byla to určitě jedna z těch lepších sezon. I když si myslím, že ještě lepší byla ta má první, kdy jsem jako mladý naskočil do ligy. Ta mi asi zůstane v hlavě napořád, i když potom přišlo nečekané zranění, které mě zabrzdilo. Ale i tato poslední sezona, byť ve druhé lize byla neuvěřitelná. Ať už kvůli tomu, co jsme dokázali s týmem, nebo osobně. Byla to celkově velká jízda. Takže se dá říct, že to byla průlomová sezona.“</em></p><p><strong>Do ligy jsi naskočil už v 18 letech, sám jsi zmínil zranění. Teď se do ligy vracíš, navíc v novém dresu. Připravený rozbalit to naplno?</strong></p><p><em>„Ano, ta sezóna ve druhé lize, je to něco jiného než v té první. Na tu první ligu se zase těším. Na týmy, které ji hrají, na všechno okolo.“</em></p><p><strong>S jakými ambicemi přicházíš do kádru? Jsi stále ještě relativně mladý hráč, konkurence není malá.</strong></p><p><em>„Jedním z prvních cílů bude co nejdřív se aklimatizovat v novém týmu. Doufám, že mě kluci přijmou a na začátku trošku pomůžou. Bude to pro mě, jak jsem říkal, trošku výstup z komfortní zóny ze Zlína. A další ambicí je dokázat něco v tom evropském poháru. Nejlepší by bylo hned projít třeba přes předkolo do Evropské ligy, ale to teprve uvidíme. Ale těšíme se na to určitě všichni.“</em></p><p><img  class=\"img-fluid\" src=\"https://sigmafotbal.esports.cz/files/editor/sigma-david-tkac (16).jpg\"></p><p><strong>Znáš někoho z týmu osobně? Samozřejmě se nabízí členové realizačního týmu, ale třeba i spoluhráči z mládežnických reprezentací?</strong></p><p><em>„Jasně, tak z realizáku znám Otu Nováka a Míšu Molka, kteří sem do Olomouce přišli nedávno a s kterými už jsem prohodil pár slov. Přímo z týmu znám Vraštu, který byl ve Zlíně, hrával jsem s ním a je to super kluk. Taky ještě Domina Janoška, který tam byl, když jsem došel do áčka. Trošku znám Hadyho, se kterým jsem se potkal. Víceméně všechny ostatní kluky ale znám taky. Buď ze televize, nebo jsme proti sobě hrávali v mládeži. Co jsem měl možnost mluvit s trenérem, tak kabina je tady super.“</em></p><p><strong>Pomůže ti do začátku, že nejdeš do úplně neznámého prostředí někam na druhý konec republiky?</strong></p><p><em>„Určitě. Zlín je furt blízko, takže kdyby náhodou něco bych potřeboval, něco jsem třeba doma zapomněl, tak si pro to můžu zajet na otočku.“</em></p><p><strong>Jak to máš vlastně v plánu? Budeš bydlet přímo v Olomouci?</strong></p><p><em>„Určitě ano. Já na dojíždění moc nejsem, takže to by mi, myslím, po týdnu nebo po dvou už lezlo krkem, kdybych měl dojíždět každý den. Sháním si tedy bydlení přímo tady.“</em></p><p><strong>Už jsi stihnul poznat něco z Olomouce, když jsi dorazil mírně s předstihem a tým byl na soustředění?</strong></p><p><em>„Zatím nic moc extra. Vím, že město je krásné a těším se, až si ho projdu, ale zatím nebyl moc čas. Byl jsem tady jen pár měsíců zpátky na otočku.“</em></p>',
                'published' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'link' => 'article/4-dorost',
                'title' => 'Sedmnáctka na úvod přípravy zdolala starší dorost Artisu 3:0',
                'photo' => 'mladez.jpeg',
                'date' => 1752095291,
                'top' => 0,
                'text' => '',
                'published' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'link' => 'article/5-permice',
                'title' => 'Permanentky na sezonu 2025/26 jsou v prodeji',
                'photo' => 'permice.jpeg',
                'date' => 1750108091,
                'top' => 1,
                'text' => '   <p>Permanentní vstupenky na sezonu 2025/26 se prodávají od 23. června. Zůstávají zachovány slevy pro stávající permanentkáře. Všichni držitelé permanentních vstupenek budou mít předkupní právo na vstupenky v zápasech evropských pohárů. </p>
                    <p>Prodej permanentek na novou sezonu byl spuštěn online i ve fanshopu na Andrově stadionu <strong>v pondělí 23. června v 10.00.</strong>
</p><p>Stávající permanentkáři mají <strong>blokované svoje místo do 6. července.</strong> Stejně jako v minulých letech platí, že výměna permanentky vyjde levněji než nákup nové. Chceme tak ocenit vaši fanouškovskou věrnost.
</p><p>Novinkou je, že domácí fandící zóna bude za brankou na jižní tribuně, stejně jako na vítězném finále MOL Cupu, kde panovala vynikající atmosféra, která týmu pomohla až k cenné trofeji.
</p><p><strong><span style=\"background-color: rgb(255, 255, 0);\"><span style=\"color: rgb(0, 0, 0);\"><span style=\"background-color: rgb(255, 255, 255);\">DŮLEŽITÉ UPOZORNĚNÍ</span></span></span></strong>
</p><p><span style=\"background-color: rgb(255, 255, 0);\"><span style=\"color: rgb(0, 0, 0);\"><span style=\"background-color: rgb(255, 255, 255);\">Vzhledem k nutným úpravám hlediště stadionu souvisejícím s účastí v soutěžích UEFA, nepůjdou některá místa stávajících permanentkářů vůbec do prodeje. <strong>TÝKÁ SE TO NĚKTERÝCH SEDADEL V SEKTORECH X, E, D a A.</strong> V takových případech bude pro vás vybráno jiné sedadlo ve stejné kategorii, nicméně budete si moct vybrat i jakékoliv jiné podle vlastních preferencí. V případě, že si budete chtít vybrat jiné místo, než jste měli doposud, nebo které vám bylo přiděleno, obraťte se, prosím, na ticketing@sigmafotbal.cz nebo osobně na pracovníky Fanshopu a vše společně vyřešíme.</span></span></span>
</p><p><strong><strong>PODROBNÝ NÁVOD NA VÝMĚNU PERMANENTKY ONLINE SI MŮŽETE STÁHNOUT ZDE:</strong></strong>
</p><p><a href=\"https://sigmafotbal.esports.cz/files/editor/Na&#769;vod k na&#769;kupu PERMIC PP - SK Sigma 2025_26.docx\">Návod na výměnu permanentek online</a>
</p><p><a href=\"https://www.ticketportal.cz/event/SK-Sigma-Olomouc-permanentka-20252026?imedium=search\" target=\"_blank\"><img src=\"https://sigmafotbal.esports.cz/files/editor/KOUPIT PERMANENTKU4.png\" alt=\"\" width=\"700\" height=\"162\" style=\"display: block; width: 700px; height: 162px; margin: auto;\"></a>
</p><p>Také v případě jakýchkoliv jiných problémů s nákupem či výměnou se obraťte na e-mail <u><a href=\"mailto:ticketing@sigmafotbal.cz\">ticketing@sigmafotbal.cz</a></u> .
</p><h2>Na které zápasy permanentka platí?</h2><p>Permanentka platí na všechna domácí utkání v nejvyšší Chance Lize, na případná domácí utkání v MOL Cupu (s výjimkou finále) a všechny zápasy B-týmu v Moravskoslezské fotbalové lize.
</p><p>Prodej vstupenek na utkání v evropských pohárech (Evropská liga, případně Konferenční liga) bude probíhat odděleně. Držitelé permanentek ale budou mít zaručen přednostní nákup lístků.
</p><p>Kromě toho mají permanentkáři Sigmy také zajištěny výhody u klubových partnerů v rámci Bonus Programu nebo pozvánky na exkluzivní klubové akce, besedy s hráči, trenéry či funkcionáři a podobně. Při nákupu permanentky proto, prosím, nezapomeňte uvést také kontakty.
</p><p><a href=\"https://sigmafotbal.cz/cz/bonus.php\"><strong>PODROBNÝ ROZPIS BONUS PROGRAMU</strong></a>
</p><h2>Ceny permanentek</h2><p>Stejně jako v minulých letech jsou sedadla na stadionu rozdělena do čtyř kategorií s tím, že cenově nejdostupnější vstupenky budou na nekrytých místech za brankami.
</p><p><img class=\"img-fluid\" src=\"https://sigmafotbal.esports.cz/files/editor/PLANEK STADIONU_2025-261.jpg\" \"=\"\">
</p><p><br>
</p><p><strong>Ceny permanentních vstupenek na sezonu 2025/26</strong>
</p><p><strong></strong>
</p><p><strong><img  class=\"img-fluid\" src=\"https://sigmafotbal.esports.cz/files/editor/Permice5.png\" \"=\"\"></strong>
</p><strong><br></strong><h1>JEDNORÁZOVÉ VSTUPENKY</h1><p>Ceny vstupenek na jednotlivé ligové zápasy budou opět rozděleny do dvou úrovní. Duely s týmy TOP 4 (Sparta, Slavia, Ostrava a Plzeň) jsou zařazeny do první kategorie. Zápasy s ostatními týmy do druhé kategorie.
</p><p>Cena permanentky vyjde v přepočtu tedy výrazně levněji, navrch získáte všechny výhody spojené s přednostním právem nákupu lístků na evropské zápasy, Bonus Program u partnerů či pozvánky na klubové akce.
</p><h2>Ceny jednorázových vstupenek</h2><table><colgroup><col><col><col><col><col></colgroup>
<tbody>
<tr>
	<td>
	</td>
	<td>
		<p>T<strong>op zápasy (Sparta, Slavia, Ostrava, Plzeň)</strong>
		</p>
	</td>
	<td>
		<p><strong>Ostatní zápasy Chance Ligy</strong>
		</p>
	</td>
	<td>
		<p><strong>B-tým v MSFL</strong>
		</p>
	</td>
	<td>
		<p><strong>V den utkání na pokladně</strong>
		</p>
	</td>
</tr>
<tr>
	<td>
		<p><strong>I. kategorie – krytá místa v sektorech B, C, D</strong><br><br>
		</p>
	</td>
	<td>
		<p>460
		</p>
	</td>
	<td>
		<p>390
		</p>
	</td>
	<td>
		<p>100
		</p>
	</td>
	<td>
		<p>+50
		</p>
	</td>
</tr>
<tr>
	<td>
		<p><strong>II. kategorie – sektory A, E, P, R, S, T a nekrytá místa B, C, D</strong>
		</p>
	</td>
	<td>
		<p>390
		</p>
	</td>
	<td>
		<p>260
		</p>
	</td>
	<td>
		<p>100
		</p>
	</td>
	<td>
		<p>+50
		</p>
	</td>
</tr>
<tr>
	<td>
		<p><strong>III. kategorie - sektory F, G, H, O, U</strong>
		</p>
	</td>
	<td>
		<p>320
		</p>
	</td>
	<td>
		<p>200
		</p>
	</td>
	<td>
		<p>100
		</p>
	</td>
	<td>
		<p>+50
		</p>
	</td>
</tr>
<tr>
	<td>
		<p><strong>IV. kategorie – nekrytá místa V, W, X, Y, Z, J, K, L, M, N</strong>
		</p>
	</td>
	<td>
		<p>260
		</p>
	</td>
	<td>
		<p>150
		</p>
	</td>
	<td>
		<p>100
		</p>
	</td>
	<td>
		<p>+50
		</p>
	</td>
</tr>
</tbody>
</table><p><strong>Slevy:</strong><br><em>ZTP/P - 100 % a ZTP - 50 % - prodej pouze na pokladně ve Fanshopu</em>
</p><p><em>Děti do 15 let, studenti, důchodci 65 let a více – 50 %</em>
</p><p><em>Děti do 6 let – 100 % bez nároku na místo</em>
</p><p><strong>Porovnání ceny vstupenek za jednotlivé zápasy vs. permanentka</strong>
</p><table><colgroup><col><col><col><col></colgroup>
<tbody>
<tr>
	<td>
	</td>
	<td>
		<p><strong>Jednotlivé nákupy</strong>
		</p>
	</td>
	<td>
		<p><strong>Nová Permanentka</strong>
		</p>
	</td>
	<td>
		<p><strong>Úspora</strong>
		</p>
	</td>
</tr>
<tr>
	<td>
		<p><strong>I. kategorie</strong>
		</p>
	</td>
	<td>
		<p>6910
		</p>
	</td>
	<td>
		<p>5300
		</p>
	</td>
	<td>
		<p>- 1610
		</p>
	</td>
</tr>
<tr>
	<td>
		<p><strong>II. kategorie</strong>
		</p>
	</td>
	<td>
		<p>5200
		</p>
	</td>
	<td>
		<p>4000
		</p>
	</td>
	<td>
		<p>- 1210
		</p>
	</td>
</tr>
<tr>
	<td>
		<p><strong>III. kategorie</strong>
		</p>
	</td>
	<td>
		<p>4080
		</p>
	</td>
	<td>
		<p>3000
		</p>
	</td>
	<td>
		<p>- 1080
		</p>
	</td>
</tr>
<tr>
	<td>
		<p><strong>IV. kategorie</strong>
		</p>
	</td>
	<td>
		<p>3140
		</p>
	</td>
	<td>
		<p>2400
		</p>
	</td>
	<td>
		<p>- 740
		</p>
	</td>
</tr>
</tbody>
</table>',
                'published' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'link' => 'article/6-janosek',
                'title' => 'Janošek zapsal při debutu 1+1. Byl jsem natěšený, hlásil',
                'photo' => 'janosek.jpeg',
                'date' => 1751617693,
                'top' => 1,
                'text' => '<p>První zápas v dresu Sigmy proti maďarskému Debrecenu vyšel Dominiku Janoškovi téměř na výbornou. Zapsal asistenci u gólu Daniela Vašulína a následně s přehledem proměnil penaltu a přispěl tak k vítězství Hanáků 3:1. <i>„Hrálo se mi parádně, byl jsem natěšený,“</i> vykládal pak Dominik Janošek bezprostředně po zápase před kamerou klubové televize. </p>
                    <p><strong>Na závěr soustředění jsme zapsali druhou výhru. Jak se ti hrál první zápas za Sigmu?</strong></p><p>„<i>Hrálo se mi parádně. Byl jsem natěšený, protože už jsem byl asi měsíc a půl bez zápasu. Těšil jsem se i proto, že jsem v novém klubu. Jsem rád, že jsme to zvládli vítězně a ukončili soustředění dobře.“</i></p><p><strong>Jak se sžíváš s novými spoluhráči?</strong></p><p>„<i>Bylo to super. Navnímali jsme se už na trénincích. Ať je to Breiťák, Lanži nebo Váša, všichni jsou chytří kreativní hráči. To pak jde všechno rychleji, doufám, že si to pak přeneseme i do ligy.“</i></p><p><i><iframe width=\"908\" height=\"511\" src=\"https://www.youtube.com/embed/kOoCZWUKjMQ\" title=\"Janošek po výhře s Debrecenem\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" referrerpolicy=\"strict-origin-when-cross-origin\" allowfullscreen=\"\"></iframe><br></i></p><p><strong>Zaznamenal jsi 1+1, což ke skvělý start. Jako první přišla asistence.</strong></p><p>„<i>Měl jsem tam takový proběh, dostal jsem skvělou průnikovku od Hadyho, ale doběhl jsem to trochu na poslední chvíli, tak jsem si řekl, že to tam naslepo nastřelím po zemi před bránu. Vášova práce je tam být, takže bych ho zdrbal, kdyby tam nebyl (směje se). Dal gól a to je super.“</i></p><p><strong>Co gól z penalty?</strong></p><p>„<i>Trénuju to. Kopal jsem penalty celou kariéru, i v Holandsku mi to šlo, tak snad to bude i tak pokračovat.“</i></p><p><strong>Odehrál jsi plus minus 65 minut. Bylo to tak akorát?</strong></p><p>„<i>Asi jo. Po té dlouhé době asi jo. Je jasné, že herní praxe se nedá ničím nahradit. Myslím si, že to bude jen lepší a lepší. Cítím se dobře i v tréninku. I díky tomuto zápasu a ještě i generálce, která nás čeká, budeme na ligu dobře připravení.“</i></p>
                               ',
                'published' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
