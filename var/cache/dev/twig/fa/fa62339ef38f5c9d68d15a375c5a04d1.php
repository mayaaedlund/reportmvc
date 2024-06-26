<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* report.html.twig */
class __TwigTemplate_8a2e3e589c0ff056e5dfe7942f345f11 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "report.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "report.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "report.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Report";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "<div class=\"content\">
    <h1>Report</h1>

    <h2>Kursmoment:</h2>
    <ul>
        <li><a href=\"#kmom01\">Kmom01</a></li>
        <li><a href=\"#kmom02\">Kmom02</a></li>
        <li><a href=\"#kmom03\">Kmom03</a></li>
        <li><a href=\"#kmom04\">Kmom04</a></li>
        <li><a href=\"#kmom05\">Kmom05</a></li>
        <li><a href=\"#kmom06\">Kmom06</a></li>
        <li><a href=\"#kmom07\">Kmom07</a></li>
        <li><a href=\"#kmom10\">Kmom10</a></li>
    </ul>

    <h2 id=\"kmom01\">Kmom01</h2>
    <p>Jag har tidigare erfarenhet av objektorienterad programmering
    i Python från tidigare kurs. Jag blev där bekant med begrepp som
    bland annat klasser och objekt. </p>

    <p> I PHP defineras klasser med 'class', på samma sätt som klasser
    i oopython-kursen gjorde. I PHP skapas ett objekt med operatorn 'new'. </p> 

    <p> I början kändes det som att det var mycket att hålla koll på i koden
    men efter att ha arbetat med detta kursmoment har jag fått förståelse över
    hur koden är uppbygd och tycker att det känns smidigt att jobba med den.

    <p> Efter att ha läst PHP The Right Way, känns det som att det finns extremt
    mycket att lära sig om PHP och som man kan ta nytta av. Det jag tycker känns viktigast
    är att jag lär mig ha en bra och strukturerad kod som gör det lätt för andra
    att förstå. </p>

    <p> Jag ser fram emot att lära mig att koppla samman PHP kod och databaser, i artikeln finns
    det tips på hur man skriver den koden för att underlätta tester, debugging och göra den lättare
    att förstå. Det ser jag fram emot att lära mig och ta nytta av. </p>

    <p> I detta kursmoment har jag lärt mig hur jag skapar en hemsida med symfony
    och hur jag skapar routes med hjälp av PHP. </p>

    <h2 id=\"kmom02\">Kmom02</h2>
    <p>I PHP tillåter arv en klass att ärva egenskaper och metoder från en annan klass.
    I min kod ärver exempelvis CardGraphic från Card genom att använda \"extends\".
    Detta betyder att CardGraphic kommer ha åtkomst till alla egenskaper som Card har. </p>

    <p> Komposition gör att en klass innehåller andra klasser. Exempelvis innehåller ett deck kort. 

    Interface är ett kontrakt, en klass lovar att erbjuda visst många metoder. 

    Ett trait definerar en eller flera metoder som en klass kan implementera och återanvända.
    Detta gör det enkelt att återanvända kod och hålla den renare. </p>


    <p> Jag löste uppgiften genom att använda mig av informationen jag fick i övningen.
    Jag skapade mina klasser och min CardGameController. Jag skapade en landningssida,
    Cards, där man kan välja att visa hela kortleken i ordning, i oordning, dra ett
    random kort (utan påverkan av sessionen) och en route till \"draw cards to your deck\".
    Där kan man välja att dra ett kort åt gången eller flera kort åt gången.
    Allt som händer där sparas i sessionen. Sessionen finns lättillgängligt i navbaren och
    man kan se vad som sparas samt rensa den. Jag är nöjd med hur det blev men om jag hade
    haft mer tid hade jag lagt mer tid på CSS och stylingen. </p>

    <p> Jag tycker att det känns kul att jobba i Symfony med applikationskod! Känns som det finns
    mycket att lära sig vilket jag tycker känns utmanande på ett lagom sätt :D </p>

    <p> Mitt TIL för detta kmom är att jag lärt mig hur man jobbar med sessioner för denna
    applikation. </p>

    <h2 id=\"kmom03\">Kmom03</h2>
    <p>Jag tyckte det var ett smart och effektivt sätt att påbörja problemlösningen med att skissa i ett anteckningsblock. Där fick jag en ide vad som behövdes och hur själva flödet i spelet skulle fungera. Jag försökte också fundera ut vad för kod jag redan hade och hur jag kunde skapa spelet med hjälp av den. Detta hjälpte mig otroligt mycket i starten och fick mig att kunna påbörja uppgiften. </p>
    <p> Jag löste uppgiften genom att tillämpa två nya klasser, en CardPoints som tilldelar poäng till varje kort, för att kunna tilldela poäng till spelarna, samt CardPlay som innehåller logik för spelet. När spelet startar satte jag playerStopped till false och gameOn till true. När spelaren stannar, ändras playerStopped till true. Med detta kunde jag på ett enkelt sätt använda det i HTML-sidan för att ta bort spelarens knappar och visa dealerns knappar. Dealern har bara en knapp för att dra kort men inte för att stanna, jag implementerade en if-sats för att automatiskt stanna dealern om den får över 16 poäng. När spelet är över kallar den på funktionen evaluateWinner för att kolla vem som vann, och gameOn sätts till false - vilket gör att alla knappar utom \"Starta om\"-knappen försvinner. Detta för att visa tydligt när spelet är igång och när det är avslutat.</p>
    <p> Jag är nöjd med uppgiften och att jag lyckades få till spelet utan att krångla till det för mycket. Jag hade dock velat göra att dealerna kort tas automatiskt istället för att man ska behöva trycka på en knapp. </p>
    <p> Min känsla av Symfony är hittills positiv, det känns som att den erbjuder många verktyg för att kunna bygga och underhålla webb applikationer. </p>
    <p> Mitt TIL för detta kursmoment är vikten av problemlösning! :D </p>



    <h2 id=\"kmom04\">Kmom04</h2>
    <p>Jag kände igen test-processen från tidigare kursmoment och kände mig relativt bekväm med att börja med kursmomentet. Jag upplevde det som en bra process för att testa sin kod men också för att förstå hur koden bör skrivas för att få den lättare att testa. </p>
    <p>Jag lyckades få 84% kodtäckning - på grund av tidsbrist nöjde jag mig där. De viktiga och stora delarna av koden testas vilket kändes mest relevant.</p>
    <p>Jag tycker att mina klasser är lätta att testa men att jag hade kunnat förenkla strukturen i mina routes. </p>
    <p>I början skrev jag mina klasser med användning av sessioner, vilket för mig blev extremt svårt att testa, så jag fick skriva om koden relativt mycket. Detta ledde till mycket mer strukturerade klasser, men om jag hade haft mer tid skulle jag lägga den på att rensa upp och få mindre kod i mina routes. Jag tycker att arbetet med att göra sin kod testbar har varit enormt viktig och gett mig mycket mer förståelse i arbetet med koden.</p>
    <p>Jag tycker att snygg och ren kod är kopplad till en testbar kod. Det är lättare att förstå flödet och koden blir mycket enklare att läsa och underhålla.</p>
    <p>Mitt TIL för detta kursmoment är vikten av att skriva en testbar kod. Det ger en förståelse men bidrar också till att det blir lättare att underhålla koden.</p>


    <h2 id=\"kmom05\">Kmom05</h2>
    <p>Jag tyckte att det gick bra att jobba igenom övningen, det gick mycket smidigare än tidigare övningar. Det var en givande övning för att förstå hur man implementerar CRUD-operationer och också intressant att se hut symfony används för databasineraktioner.</p>
    <p> Jag skapade min Library med attributen id, book, ISBN, author, image. Jag gjorde att i library routen kan man välja vad man vill göra, antingen se alla böcker, lägga till böcker eller radera. I biblioteket kan man sedan klicka för att få mer information om en enskild bok. På den enskilda sidan har man möjlighet att ändra information om just den boken. Detta flöde tyckte jag gjorde sidan mycket användarvänlig.</p>
    <p>Jag tyckte att det fanns många fördelar med Doctrine ORM, det största fördelen och det som har skilt sig från tidigare kurser är att behovet av att skriva SQL-kod är mycket mindre. Det känns mycket lättare att använda eftersom ORM gör det mesta automatiserat, vilket gör arbetet effektivare.</p>
    <p>I detta kursmoment lärde jag mig hur man använder Doctrine ORM tillsammans med Symfony samt alla ORM's fördelar.</p>

    <h2 id=\"kmom06\">Kmom06</h2>
    <p>Jag uppfattade PHP Metrics som ett användbart verktyg för att analysera sin kodkvalitet. Det fanns många olika analyser som man kunde kolla på,
    jag kollade främst på Complexity och Maintainability för att se hur komplex koden var och hur lätt den är att underhålla.</p>
    <p> Jag föredrog Scrutinizer framför PHP Metrics då jag tyckte att det var mer konkreta förslag på hur jag skulle förbättra koden.
    Jag fick coverage 11% och kodkvalitet 9.7 i första betyget. Jag tyckte att det som var svårt i detta kursmoment var att öka coverage för sin kod, då majoriteten
    av det som saknas är för Controllers och hittade väldigt lite information om hur jag skulle tillämpa detta. Tänker att jag ger mig på ett försök för det i projektet. </p>

    <p> Jag tror att kodkvalitet är en otroligt viktig aspekt i sitt arbete med koden och att det är något man bör ta hänsyn till redan i början av sitt kodskrivande, för att
    undvika problem och lätt kunna underhålla sin kod. Jag tror definitivt att man kan påvisa kodkvalitet genom PHP Metrics och Scrutinizer. Badges ger ett bra första intryck på
    projektets kod. </p>

    <p> Under detta kursmoment lärde jag mig hur jag använder dessa verktyg och fick mer förståelse för hur man mäter kodkvalitet. </p>


    <h2 id=\"kmom10\">Kmom10</h2>
    <h3> Del 1, implementation av krav 1,2,3 </h3>
    <p>Jag skapade ProjectController som ansvarar för samtliga sidor för mitt projekt. Denna controller hanterar navigationen och innehållet på projektets specifika sidor.</p>
    <p>För att ge projektet en unik design som skiljer sig från tidigare kursmoment skapade jag en helt ny stylesheet, “proj.css”, och en grundmall, “projbase.html.twig”. Denna grundmall inkluderar en specifik navbar specifikt för projektet som enbart innehåller relevanta länkar för projektet (förutom report - som tar dig tillbaka till reportsidan). </p>
    <p>Jag valde en simpel design med ljusblå toner för att representera projektets fokus på hav och marina frågor. Detta innebar att jag modifierade färger, typsnitt men också utseendet på headern och footern för att skapa en kontrast från tidigare design. </p>
    <p>Landningssidan ligger under “/proj” och kan nås via navbaren på rapport-sidan. Denna sida är projektets förstasida och ger en introduktion till projektets fokus och ämne. En mer detaljerad introduktion med syfte till projektet ligger i en separat sida “/proj/about”, som nås via navbaren.</p>
    <p>Jag har inkluderat information om rapportens kodkvalitet i “README.md”-filen. Här finns även instruktioner om hur man klonar och kör webbplatsen. Här visar jag även mina badges för kodkvalitet från Scrutinizer.</p>
    <p>Kodtäckningen för mina nya klasser och databaser är i snitt 100%. Totalt för hela webbplatsen, inklusive äldre kursmoment, är 71%. Det som är i snitt 100% är allting som är relevant för projektet, vilket inkluderar alla kontrollerklasser som MarineCoverageController, MarineProtectionController, ProjectController, och SustainableFishController, samt alla entiteter och repositories skapade under projektets gång.</p>
    <p>Genom att följa dessa steg har jag skapat en webbsida för projektet med en unik style som gör det lätt för användaren att navigera och förstå projektets mål och syfte. Den höga kodkvaliten och dokumentationen gör att jag säkerställer att mitt projekt innehåller snygg kod som är lätt att vidareutveckla.</p>
    <p>För att implementera JSON API i mitt projekt la jag till en route för varje databas. I varje controller har jag en route som hämtar all data från databasen och sedan formatterar om den till en JSON-struktur som innehåller all information. JSON-datan returneras som ett svar på GET-förfrågan. I varje route har jag också en route som skapar och en som raderar data via POST. Efter att ha gjort sin POST-förfrågan (radera eller skapa) returnerar metoden ett meddelande på att allting har genomförts framgångsrikt. Metoderna använder JSONResponse för att säkerhetsställa att svaren returneras i rätt format. Genom att utnyttja Doctrine ORM kan applikationen enkelt hämta och skicka till databasen, vilket gör det effektivt att använda CRUD-operationer. </p>
    <h3> Del 2 </h3>
    <p>Att genomföra detta projekt gick smidigt med tanke på den kunskap jag fått med mig i tidigare kursmoment. </p>
    <p>En av de största utmaningarna var att visa upp data från databasen på ett visuellt tilltalande sätt. Efter att ha gjort en del research beslutade jag mig för att använda Chart.js för att skapa diagrammen. Denna del av projektet tog mest tid, tillsammans med att skapa testklasser för controllerna. Eftersom vi inte har gått igenom detta i tidigare kursmoment, fick jag lägga ner mycket tid på att läsa på och komma fram till hur jag skulle implementera detta.</p>
    <p>Att sätta upp grundstrukturen för projektet var en av de lättare delarna, tillsammans med att skapa README.md filen. </p>
    <p> Jag tyckte projektet var lagom utmanande och rimligt för den tidsramen vi fått.</p>
    <h3> Del 3 </h3>
    <p> Kursen har i helhet varit mycket lärorik och intressant. Jag har fått en djup förståelse för Symfony och tycker att övningarna och genomgångarna har varit hjälpsamma för att klara kursmomenten. Det jag saknade var mer läsanvisningar eller genomgångar för skapande av tester för controllers. Sammanfattningsvis är jag nöjd med kursen och skulle definitivt rekommendera den till vänner. Den får 9/10 i betyg.</p>


</div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "report.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %}Report{% endblock %}

{% block body %}
<div class=\"content\">
    <h1>Report</h1>

    <h2>Kursmoment:</h2>
    <ul>
        <li><a href=\"#kmom01\">Kmom01</a></li>
        <li><a href=\"#kmom02\">Kmom02</a></li>
        <li><a href=\"#kmom03\">Kmom03</a></li>
        <li><a href=\"#kmom04\">Kmom04</a></li>
        <li><a href=\"#kmom05\">Kmom05</a></li>
        <li><a href=\"#kmom06\">Kmom06</a></li>
        <li><a href=\"#kmom07\">Kmom07</a></li>
        <li><a href=\"#kmom10\">Kmom10</a></li>
    </ul>

    <h2 id=\"kmom01\">Kmom01</h2>
    <p>Jag har tidigare erfarenhet av objektorienterad programmering
    i Python från tidigare kurs. Jag blev där bekant med begrepp som
    bland annat klasser och objekt. </p>

    <p> I PHP defineras klasser med 'class', på samma sätt som klasser
    i oopython-kursen gjorde. I PHP skapas ett objekt med operatorn 'new'. </p> 

    <p> I början kändes det som att det var mycket att hålla koll på i koden
    men efter att ha arbetat med detta kursmoment har jag fått förståelse över
    hur koden är uppbygd och tycker att det känns smidigt att jobba med den.

    <p> Efter att ha läst PHP The Right Way, känns det som att det finns extremt
    mycket att lära sig om PHP och som man kan ta nytta av. Det jag tycker känns viktigast
    är att jag lär mig ha en bra och strukturerad kod som gör det lätt för andra
    att förstå. </p>

    <p> Jag ser fram emot att lära mig att koppla samman PHP kod och databaser, i artikeln finns
    det tips på hur man skriver den koden för att underlätta tester, debugging och göra den lättare
    att förstå. Det ser jag fram emot att lära mig och ta nytta av. </p>

    <p> I detta kursmoment har jag lärt mig hur jag skapar en hemsida med symfony
    och hur jag skapar routes med hjälp av PHP. </p>

    <h2 id=\"kmom02\">Kmom02</h2>
    <p>I PHP tillåter arv en klass att ärva egenskaper och metoder från en annan klass.
    I min kod ärver exempelvis CardGraphic från Card genom att använda \"extends\".
    Detta betyder att CardGraphic kommer ha åtkomst till alla egenskaper som Card har. </p>

    <p> Komposition gör att en klass innehåller andra klasser. Exempelvis innehåller ett deck kort. 

    Interface är ett kontrakt, en klass lovar att erbjuda visst många metoder. 

    Ett trait definerar en eller flera metoder som en klass kan implementera och återanvända.
    Detta gör det enkelt att återanvända kod och hålla den renare. </p>


    <p> Jag löste uppgiften genom att använda mig av informationen jag fick i övningen.
    Jag skapade mina klasser och min CardGameController. Jag skapade en landningssida,
    Cards, där man kan välja att visa hela kortleken i ordning, i oordning, dra ett
    random kort (utan påverkan av sessionen) och en route till \"draw cards to your deck\".
    Där kan man välja att dra ett kort åt gången eller flera kort åt gången.
    Allt som händer där sparas i sessionen. Sessionen finns lättillgängligt i navbaren och
    man kan se vad som sparas samt rensa den. Jag är nöjd med hur det blev men om jag hade
    haft mer tid hade jag lagt mer tid på CSS och stylingen. </p>

    <p> Jag tycker att det känns kul att jobba i Symfony med applikationskod! Känns som det finns
    mycket att lära sig vilket jag tycker känns utmanande på ett lagom sätt :D </p>

    <p> Mitt TIL för detta kmom är att jag lärt mig hur man jobbar med sessioner för denna
    applikation. </p>

    <h2 id=\"kmom03\">Kmom03</h2>
    <p>Jag tyckte det var ett smart och effektivt sätt att påbörja problemlösningen med att skissa i ett anteckningsblock. Där fick jag en ide vad som behövdes och hur själva flödet i spelet skulle fungera. Jag försökte också fundera ut vad för kod jag redan hade och hur jag kunde skapa spelet med hjälp av den. Detta hjälpte mig otroligt mycket i starten och fick mig att kunna påbörja uppgiften. </p>
    <p> Jag löste uppgiften genom att tillämpa två nya klasser, en CardPoints som tilldelar poäng till varje kort, för att kunna tilldela poäng till spelarna, samt CardPlay som innehåller logik för spelet. När spelet startar satte jag playerStopped till false och gameOn till true. När spelaren stannar, ändras playerStopped till true. Med detta kunde jag på ett enkelt sätt använda det i HTML-sidan för att ta bort spelarens knappar och visa dealerns knappar. Dealern har bara en knapp för att dra kort men inte för att stanna, jag implementerade en if-sats för att automatiskt stanna dealern om den får över 16 poäng. När spelet är över kallar den på funktionen evaluateWinner för att kolla vem som vann, och gameOn sätts till false - vilket gör att alla knappar utom \"Starta om\"-knappen försvinner. Detta för att visa tydligt när spelet är igång och när det är avslutat.</p>
    <p> Jag är nöjd med uppgiften och att jag lyckades få till spelet utan att krångla till det för mycket. Jag hade dock velat göra att dealerna kort tas automatiskt istället för att man ska behöva trycka på en knapp. </p>
    <p> Min känsla av Symfony är hittills positiv, det känns som att den erbjuder många verktyg för att kunna bygga och underhålla webb applikationer. </p>
    <p> Mitt TIL för detta kursmoment är vikten av problemlösning! :D </p>



    <h2 id=\"kmom04\">Kmom04</h2>
    <p>Jag kände igen test-processen från tidigare kursmoment och kände mig relativt bekväm med att börja med kursmomentet. Jag upplevde det som en bra process för att testa sin kod men också för att förstå hur koden bör skrivas för att få den lättare att testa. </p>
    <p>Jag lyckades få 84% kodtäckning - på grund av tidsbrist nöjde jag mig där. De viktiga och stora delarna av koden testas vilket kändes mest relevant.</p>
    <p>Jag tycker att mina klasser är lätta att testa men att jag hade kunnat förenkla strukturen i mina routes. </p>
    <p>I början skrev jag mina klasser med användning av sessioner, vilket för mig blev extremt svårt att testa, så jag fick skriva om koden relativt mycket. Detta ledde till mycket mer strukturerade klasser, men om jag hade haft mer tid skulle jag lägga den på att rensa upp och få mindre kod i mina routes. Jag tycker att arbetet med att göra sin kod testbar har varit enormt viktig och gett mig mycket mer förståelse i arbetet med koden.</p>
    <p>Jag tycker att snygg och ren kod är kopplad till en testbar kod. Det är lättare att förstå flödet och koden blir mycket enklare att läsa och underhålla.</p>
    <p>Mitt TIL för detta kursmoment är vikten av att skriva en testbar kod. Det ger en förståelse men bidrar också till att det blir lättare att underhålla koden.</p>


    <h2 id=\"kmom05\">Kmom05</h2>
    <p>Jag tyckte att det gick bra att jobba igenom övningen, det gick mycket smidigare än tidigare övningar. Det var en givande övning för att förstå hur man implementerar CRUD-operationer och också intressant att se hut symfony används för databasineraktioner.</p>
    <p> Jag skapade min Library med attributen id, book, ISBN, author, image. Jag gjorde att i library routen kan man välja vad man vill göra, antingen se alla böcker, lägga till böcker eller radera. I biblioteket kan man sedan klicka för att få mer information om en enskild bok. På den enskilda sidan har man möjlighet att ändra information om just den boken. Detta flöde tyckte jag gjorde sidan mycket användarvänlig.</p>
    <p>Jag tyckte att det fanns många fördelar med Doctrine ORM, det största fördelen och det som har skilt sig från tidigare kurser är att behovet av att skriva SQL-kod är mycket mindre. Det känns mycket lättare att använda eftersom ORM gör det mesta automatiserat, vilket gör arbetet effektivare.</p>
    <p>I detta kursmoment lärde jag mig hur man använder Doctrine ORM tillsammans med Symfony samt alla ORM's fördelar.</p>

    <h2 id=\"kmom06\">Kmom06</h2>
    <p>Jag uppfattade PHP Metrics som ett användbart verktyg för att analysera sin kodkvalitet. Det fanns många olika analyser som man kunde kolla på,
    jag kollade främst på Complexity och Maintainability för att se hur komplex koden var och hur lätt den är att underhålla.</p>
    <p> Jag föredrog Scrutinizer framför PHP Metrics då jag tyckte att det var mer konkreta förslag på hur jag skulle förbättra koden.
    Jag fick coverage 11% och kodkvalitet 9.7 i första betyget. Jag tyckte att det som var svårt i detta kursmoment var att öka coverage för sin kod, då majoriteten
    av det som saknas är för Controllers och hittade väldigt lite information om hur jag skulle tillämpa detta. Tänker att jag ger mig på ett försök för det i projektet. </p>

    <p> Jag tror att kodkvalitet är en otroligt viktig aspekt i sitt arbete med koden och att det är något man bör ta hänsyn till redan i början av sitt kodskrivande, för att
    undvika problem och lätt kunna underhålla sin kod. Jag tror definitivt att man kan påvisa kodkvalitet genom PHP Metrics och Scrutinizer. Badges ger ett bra första intryck på
    projektets kod. </p>

    <p> Under detta kursmoment lärde jag mig hur jag använder dessa verktyg och fick mer förståelse för hur man mäter kodkvalitet. </p>


    <h2 id=\"kmom10\">Kmom10</h2>
    <h3> Del 1, implementation av krav 1,2,3 </h3>
    <p>Jag skapade ProjectController som ansvarar för samtliga sidor för mitt projekt. Denna controller hanterar navigationen och innehållet på projektets specifika sidor.</p>
    <p>För att ge projektet en unik design som skiljer sig från tidigare kursmoment skapade jag en helt ny stylesheet, “proj.css”, och en grundmall, “projbase.html.twig”. Denna grundmall inkluderar en specifik navbar specifikt för projektet som enbart innehåller relevanta länkar för projektet (förutom report - som tar dig tillbaka till reportsidan). </p>
    <p>Jag valde en simpel design med ljusblå toner för att representera projektets fokus på hav och marina frågor. Detta innebar att jag modifierade färger, typsnitt men också utseendet på headern och footern för att skapa en kontrast från tidigare design. </p>
    <p>Landningssidan ligger under “/proj” och kan nås via navbaren på rapport-sidan. Denna sida är projektets förstasida och ger en introduktion till projektets fokus och ämne. En mer detaljerad introduktion med syfte till projektet ligger i en separat sida “/proj/about”, som nås via navbaren.</p>
    <p>Jag har inkluderat information om rapportens kodkvalitet i “README.md”-filen. Här finns även instruktioner om hur man klonar och kör webbplatsen. Här visar jag även mina badges för kodkvalitet från Scrutinizer.</p>
    <p>Kodtäckningen för mina nya klasser och databaser är i snitt 100%. Totalt för hela webbplatsen, inklusive äldre kursmoment, är 71%. Det som är i snitt 100% är allting som är relevant för projektet, vilket inkluderar alla kontrollerklasser som MarineCoverageController, MarineProtectionController, ProjectController, och SustainableFishController, samt alla entiteter och repositories skapade under projektets gång.</p>
    <p>Genom att följa dessa steg har jag skapat en webbsida för projektet med en unik style som gör det lätt för användaren att navigera och förstå projektets mål och syfte. Den höga kodkvaliten och dokumentationen gör att jag säkerställer att mitt projekt innehåller snygg kod som är lätt att vidareutveckla.</p>
    <p>För att implementera JSON API i mitt projekt la jag till en route för varje databas. I varje controller har jag en route som hämtar all data från databasen och sedan formatterar om den till en JSON-struktur som innehåller all information. JSON-datan returneras som ett svar på GET-förfrågan. I varje route har jag också en route som skapar och en som raderar data via POST. Efter att ha gjort sin POST-förfrågan (radera eller skapa) returnerar metoden ett meddelande på att allting har genomförts framgångsrikt. Metoderna använder JSONResponse för att säkerhetsställa att svaren returneras i rätt format. Genom att utnyttja Doctrine ORM kan applikationen enkelt hämta och skicka till databasen, vilket gör det effektivt att använda CRUD-operationer. </p>
    <h3> Del 2 </h3>
    <p>Att genomföra detta projekt gick smidigt med tanke på den kunskap jag fått med mig i tidigare kursmoment. </p>
    <p>En av de största utmaningarna var att visa upp data från databasen på ett visuellt tilltalande sätt. Efter att ha gjort en del research beslutade jag mig för att använda Chart.js för att skapa diagrammen. Denna del av projektet tog mest tid, tillsammans med att skapa testklasser för controllerna. Eftersom vi inte har gått igenom detta i tidigare kursmoment, fick jag lägga ner mycket tid på att läsa på och komma fram till hur jag skulle implementera detta.</p>
    <p>Att sätta upp grundstrukturen för projektet var en av de lättare delarna, tillsammans med att skapa README.md filen. </p>
    <p> Jag tyckte projektet var lagom utmanande och rimligt för den tidsramen vi fått.</p>
    <h3> Del 3 </h3>
    <p> Kursen har i helhet varit mycket lärorik och intressant. Jag har fått en djup förståelse för Symfony och tycker att övningarna och genomgångarna har varit hjälpsamma för att klara kursmomenten. Det jag saknade var mer läsanvisningar eller genomgångar för skapande av tester för controllers. Sammanfattningsvis är jag nöjd med kursen och skulle definitivt rekommendera den till vänner. Den får 9/10 i betyg.</p>


</div>

{% endblock %}
", "report.html.twig", "/home/maya/dbwebb-kurser/mvc/me/report/templates/report.html.twig");
    }
}
