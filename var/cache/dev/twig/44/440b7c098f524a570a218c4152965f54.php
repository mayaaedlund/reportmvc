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

/* metric/metrics.html.twig */
class __TwigTemplate_383693af019c708f07c6e429ad0af028 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "metric/metrics.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "metric/metrics.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "metric/metrics.html.twig", 1);
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

        yield "Home";
        
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
    <h1>INTRODUKTION</h1>
    <p> Att uppnå en god kodkvalitet är viktigt inom kodning för att säkerhetsställa att koden är lätt för andra att läsa samt göra det lättare att underhålla och vidareutveckla koden. För att uppnå god kodkvalitet kan vi följa de sex C:na, steg som leder oss till snyggare och bättre kod.  </p>
    
    <h2>CodeStyle:</h2>
    <p>Detta handlar om att hålla en god kodstil. Att följa kodningsstandarder, vilket inkluderar namngivning, indentering och kommentarer. Det ska gå att läsa och förstå vad koden gör. </p>

    <h2>Coverage:</h2>
    <p>Coverage står för kodtäckning vilket syftar på hur mycket av koden som täcks av olika tester. Om kodtäckningen är hög innebär det en mindre risk för buggar i koden. Att testa sin kod är en viktig egenskap för att kolla om koden fungerar som förväntat.</p>

    <h2>Complexity:</h2>
    <p>Om koden har hög komplexitet (complexity) kan det vara svårt att förstå koden och därmed också svårt att underhålla den. Långa och invecklade funktioner kan ge hög komplexitet och även göra det svårt att testa och underhålla sin kod.</p>

    <h2>Cohesion:</h2>
    <p>Om delarna i en modul eller klass har en hög sammanhållning (cohesion) gör det att koden håller samman bra och gör det lättare att underhålla koden eftersom det inte påverkar större delar av koden. </p>

    <h2>Coupling:</h2>
    <p>Coupling syftar på koppling mellan moduler. Om det är stora kopplingar mellan moduler blir koden svår att underhålla då ändringar i ena modulen kan påverka den andra. Därför är det bra att ha låga kopplingar och att de olika modulerna är oberoende av varandra. </p>

    <h2>CRAP:</h2>
    <p>Change Risk Analysis and Predictions. Detta är ett mått som bedömer kodkomplexitet och kodtäckning i syfte att bedöma risken med att ändra i koden. Om koden har ett högt CRAP-score betyder det att ändringar i koden har större risk att leda till buggar, troligtvis på grund av komplex kod och få tester.</p>

    <h1>PHPMETRICS</h1>
    <p>I min phpmetrics report hittar jag class violations med “probably bugged” vilket betyder att jag bör se över dessa klasser samt göra tester för dem. Dessa hittar jag bland annat i CardGameController, DiceGameController och LuckyControllerJson. I rapporten finner jag också att 13 klasser (65%) kallas aldrig i några tester, vilket också är ett tecken på att jag bör testa mer av min kod. Om jag kollar i complexity and defects ser jag att jag har 4 controllers som verkar vara mer komplexa än övriga.</p>

    <h1>SCRUTINIZER</h1>

    
   
   <a href=\"https://scrutinizer-ci.com/g/mayaaedlund/reportmvc/?branch=main\" target=\"_blank\">
        <img src=\"https://scrutinizer-ci.com/g/mayaaedlund/reportmvc/badges/quality-score.png?b=main\" alt=\"Quality Score Badge\">
    </a>

    <a href=\"https://scrutinizer-ci.com/g/mayaaedlund/reportmvc/code-structure/main?elementType=class&orderField=test_coverage&order=desc&changesExpanded=0\" target=\"_blank\">
        <img src=\"https://scrutinizer-ci.com/g/mayaaedlund/reportmvc/badges/coverage.png?b=main\" alt=\"Coverage Badge\">
    </a>
   

    <a href=\"https://scrutinizer-ci.com/g/mayaaedlund/reportmvc/inspections/5c760764-71d9-40d9-a198-b641d4b6626a/log\" target=\"_blank\">
        <img src=\"https://scrutinizer-ci.com/g/mayaaedlund/reportmvc/badges/build.png?b=main\" alt=\"Coverage Badge\">
    </a>

    <p>I Scrutinizer-rapporten får min kod en 9.7 (very good). Det hittades 20 issues och coveragen var 11%. Issues verkar främst vara unused code samt buggar. CardGameController har också högst komplexitet, mer än dubbelt så komplex som andraplatsen LibraryController. Största problemet här verkar vara komplex kod, otestad kod och buggar.</p>

    <h1>Förbättringar</h1>
    <h2> Fixa Issues </h2>
    <p> I rapporten stod det att majoriteten av mina issues är unused code. Om jag rättar till dessa leder det direkt till en renare och mer lättläst kod </p>
    <p> Efter issues:</p>

    <h2> Minska komplexitet </h2>
    <p>Genom att minska komplexiteten genom att exemeplvis bryta upp mina klasser kommer min kod bli snyggare och lättare att underhålla samt testa.</p>
    <p>efer: </p>
    
    <h2> Öka kodtäckning </h2>
    <p>Genom att skapa fler tester och öka coverage blir min kod renare, enklare att förstå och mindre komplex.</p>
    <p> Efter: </p>


    <h2> Rapporten efter: </p>

    <h1>Diskussion</h1>
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
        return "metric/metrics.html.twig";
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

{% block title %}Home{% endblock %}

{% block body %}
<div class=\"content\">
    <h1>INTRODUKTION</h1>
    <p> Att uppnå en god kodkvalitet är viktigt inom kodning för att säkerhetsställa att koden är lätt för andra att läsa samt göra det lättare att underhålla och vidareutveckla koden. För att uppnå god kodkvalitet kan vi följa de sex C:na, steg som leder oss till snyggare och bättre kod.  </p>
    
    <h2>CodeStyle:</h2>
    <p>Detta handlar om att hålla en god kodstil. Att följa kodningsstandarder, vilket inkluderar namngivning, indentering och kommentarer. Det ska gå att läsa och förstå vad koden gör. </p>

    <h2>Coverage:</h2>
    <p>Coverage står för kodtäckning vilket syftar på hur mycket av koden som täcks av olika tester. Om kodtäckningen är hög innebär det en mindre risk för buggar i koden. Att testa sin kod är en viktig egenskap för att kolla om koden fungerar som förväntat.</p>

    <h2>Complexity:</h2>
    <p>Om koden har hög komplexitet (complexity) kan det vara svårt att förstå koden och därmed också svårt att underhålla den. Långa och invecklade funktioner kan ge hög komplexitet och även göra det svårt att testa och underhålla sin kod.</p>

    <h2>Cohesion:</h2>
    <p>Om delarna i en modul eller klass har en hög sammanhållning (cohesion) gör det att koden håller samman bra och gör det lättare att underhålla koden eftersom det inte påverkar större delar av koden. </p>

    <h2>Coupling:</h2>
    <p>Coupling syftar på koppling mellan moduler. Om det är stora kopplingar mellan moduler blir koden svår att underhålla då ändringar i ena modulen kan påverka den andra. Därför är det bra att ha låga kopplingar och att de olika modulerna är oberoende av varandra. </p>

    <h2>CRAP:</h2>
    <p>Change Risk Analysis and Predictions. Detta är ett mått som bedömer kodkomplexitet och kodtäckning i syfte att bedöma risken med att ändra i koden. Om koden har ett högt CRAP-score betyder det att ändringar i koden har större risk att leda till buggar, troligtvis på grund av komplex kod och få tester.</p>

    <h1>PHPMETRICS</h1>
    <p>I min phpmetrics report hittar jag class violations med “probably bugged” vilket betyder att jag bör se över dessa klasser samt göra tester för dem. Dessa hittar jag bland annat i CardGameController, DiceGameController och LuckyControllerJson. I rapporten finner jag också att 13 klasser (65%) kallas aldrig i några tester, vilket också är ett tecken på att jag bör testa mer av min kod. Om jag kollar i complexity and defects ser jag att jag har 4 controllers som verkar vara mer komplexa än övriga.</p>

    <h1>SCRUTINIZER</h1>

    
   
   <a href=\"https://scrutinizer-ci.com/g/mayaaedlund/reportmvc/?branch=main\" target=\"_blank\">
        <img src=\"https://scrutinizer-ci.com/g/mayaaedlund/reportmvc/badges/quality-score.png?b=main\" alt=\"Quality Score Badge\">
    </a>

    <a href=\"https://scrutinizer-ci.com/g/mayaaedlund/reportmvc/code-structure/main?elementType=class&orderField=test_coverage&order=desc&changesExpanded=0\" target=\"_blank\">
        <img src=\"https://scrutinizer-ci.com/g/mayaaedlund/reportmvc/badges/coverage.png?b=main\" alt=\"Coverage Badge\">
    </a>
   

    <a href=\"https://scrutinizer-ci.com/g/mayaaedlund/reportmvc/inspections/5c760764-71d9-40d9-a198-b641d4b6626a/log\" target=\"_blank\">
        <img src=\"https://scrutinizer-ci.com/g/mayaaedlund/reportmvc/badges/build.png?b=main\" alt=\"Coverage Badge\">
    </a>

    <p>I Scrutinizer-rapporten får min kod en 9.7 (very good). Det hittades 20 issues och coveragen var 11%. Issues verkar främst vara unused code samt buggar. CardGameController har också högst komplexitet, mer än dubbelt så komplex som andraplatsen LibraryController. Största problemet här verkar vara komplex kod, otestad kod och buggar.</p>

    <h1>Förbättringar</h1>
    <h2> Fixa Issues </h2>
    <p> I rapporten stod det att majoriteten av mina issues är unused code. Om jag rättar till dessa leder det direkt till en renare och mer lättläst kod </p>
    <p> Efter issues:</p>

    <h2> Minska komplexitet </h2>
    <p>Genom att minska komplexiteten genom att exemeplvis bryta upp mina klasser kommer min kod bli snyggare och lättare att underhålla samt testa.</p>
    <p>efer: </p>
    
    <h2> Öka kodtäckning </h2>
    <p>Genom att skapa fler tester och öka coverage blir min kod renare, enklare att förstå och mindre komplex.</p>
    <p> Efter: </p>


    <h2> Rapporten efter: </p>

    <h1>Diskussion</h1>
</div>

{% endblock %}", "metric/metrics.html.twig", "/home/maya/dbwebb-kurser/mvc/me/report/templates/metric/metrics.html.twig");
    }
}
