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

/* proj/database.html.twig */
class __TwigTemplate_711967fe0e221205f47a7ab7b161842e extends Template
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
        return "projbase.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "proj/database.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "proj/database.html.twig"));

        $this->parent = $this->loadTemplate("projbase.html.twig", "proj/database.html.twig", 1);
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
    <h1>ORM</h1>
    <div class=\"image-container\">
        <img src=\"";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/projectmvc.png"), "html", null, true);
        yield "\" alt=\"\" class=\"image-size\">
    </div>

    <h3> MarineCoverage </h3>

    <p> I denna databas sparas data för \"Coverage of protected areas in relation to marine
    areas\", för olika regioner i procent. </p> 

    <h3> MarineProtection </h3>
    <p> Här sparas data för marint skydd i olika regioner för olika årtal. </p>

    <h3> SustainableFish </h3>
    <p> I denna databas sparas data av antal hållbara bestånd och antal bedömda bestånd för
    hållbart fiskande. </p>

    <h2> Om databaserna </h2>

    <p> Jag använde SQLite för min databas i applikationen och valde den på grund av att jag tyckte
    den kändes smidigast att arbeta med. Jag skapade databasen på samma sätt som vi gjorde i kursmomentet,
    via Doctrine Orm. </p>

    <p> Jag genomförde några enhetstester mot controllerna för databaserna, något jag inte lyckades med i tidigare
    kursmoment. Med hjälp av andra i discord-chatten lyckades jag till slut! </p>

    <p> Att använda ett ORM-verktyg som Doctrine har enligt mig många fördelar. För det första, gör det processen att skapa
    och underhålla databasen väldigt enkel. Det minskar behovet av att behöva skriva egen SQL-kod och sparar därmed mycket tid
    i sitt arbete. Dessutom genererar den automatiskt Controllers och kod för hantering av sin databas. Detta sparar tid och minskar
    risken för fel. Jag kan inte se några nackdelar med Doctrine för mina ändamål. Jag kan tänka mig att det kan vara svårt att skriva mer
    komplexa databaser med flera kopplingar mellan varandra, men för min databas som var så pass lite, tycker jag att detta var ett utmärkt
    verktyg. </p>
    
    
    Det finns många fördelar med att jobba med ORM. Främst att det är ett effektivt och enkelt sätt att intergera
    databas mot sin symfony-applikation. Den skapar Controllers och kod utan att man själv behöver göra det, vilket är
    mycket tidseffektivt. 


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
        return "proj/database.html.twig";
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
        return array (  95 => 9,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"projbase.html.twig\" %}

{% block title %}Home{% endblock %}

{% block body %}
<div class=\"content\">
    <h1>ORM</h1>
    <div class=\"image-container\">
        <img src=\"{{ asset('img/projectmvc.png') }}\" alt=\"\" class=\"image-size\">
    </div>

    <h3> MarineCoverage </h3>

    <p> I denna databas sparas data för \"Coverage of protected areas in relation to marine
    areas\", för olika regioner i procent. </p> 

    <h3> MarineProtection </h3>
    <p> Här sparas data för marint skydd i olika regioner för olika årtal. </p>

    <h3> SustainableFish </h3>
    <p> I denna databas sparas data av antal hållbara bestånd och antal bedömda bestånd för
    hållbart fiskande. </p>

    <h2> Om databaserna </h2>

    <p> Jag använde SQLite för min databas i applikationen och valde den på grund av att jag tyckte
    den kändes smidigast att arbeta med. Jag skapade databasen på samma sätt som vi gjorde i kursmomentet,
    via Doctrine Orm. </p>

    <p> Jag genomförde några enhetstester mot controllerna för databaserna, något jag inte lyckades med i tidigare
    kursmoment. Med hjälp av andra i discord-chatten lyckades jag till slut! </p>

    <p> Att använda ett ORM-verktyg som Doctrine har enligt mig många fördelar. För det första, gör det processen att skapa
    och underhålla databasen väldigt enkel. Det minskar behovet av att behöva skriva egen SQL-kod och sparar därmed mycket tid
    i sitt arbete. Dessutom genererar den automatiskt Controllers och kod för hantering av sin databas. Detta sparar tid och minskar
    risken för fel. Jag kan inte se några nackdelar med Doctrine för mina ändamål. Jag kan tänka mig att det kan vara svårt att skriva mer
    komplexa databaser med flera kopplingar mellan varandra, men för min databas som var så pass lite, tycker jag att detta var ett utmärkt
    verktyg. </p>
    
    
    Det finns många fördelar med att jobba med ORM. Främst att det är ett effektivt och enkelt sätt att intergera
    databas mot sin symfony-applikation. Den skapar Controllers och kod utan att man själv behöver göra det, vilket är
    mycket tidseffektivt. 


</div>
{% endblock %}", "proj/database.html.twig", "/home/maya/dbwebb-kurser/mvc/me/report/templates/proj/database.html.twig");
    }
}
