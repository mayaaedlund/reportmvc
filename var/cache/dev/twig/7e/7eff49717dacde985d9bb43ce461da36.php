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

/* card/gamedocs.html.twig */
class __TwigTemplate_faa9db6644296fda040f78b8d6090e14 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "card/gamedocs.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "card/gamedocs.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "card/gamedocs.html.twig", 1);
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

        yield "Game Docs";
        
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
        yield "<h1>Game Docs</h1>

<h2> Problemlösning </h2>

<p> Jag började med att skissa i ett anteckningsblock ungefär hur jag ville
att flödet i spelet skulle se ut. Den skissen såg ungefär ut såhär: <p>

<div class=\"image-container\">
        <img src=\"";
        // line 14
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/BLACKJACK.png"), "html", null, true);
        yield "\" alt=\"\" class=\"image-size-big\">
</div>

<p> Efter det skapade jag kod över flödet och klasserna men började inte implementera
några spelregler. Jag skapade alltså alla routes - men hade ingen logik för spelet. </p>

<div class=\"image-container\">
        <img src=\"";
        // line 21
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/spelkod.png"), "html", null, true);
        yield "\" alt=\"\" class=\"image-size-big\">
</div>

<div class=\"image-container\">
        <img src=\"";
        // line 25
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/spelkod1.png"), "html", null, true);
        yield "\" alt=\"\" class=\"image-size-big\">
</div>


<p> Jag insåg att jag inte hade någon klass som kollade poängen för korten, så jag började med
att skapa den. </p>

<div class=\"image-container\">
        <img src=\"";
        // line 33
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/klassgame2.png"), "html", null, true);
        yield "\" alt=\"\" class=\"image-size-big\">
</div>

<p> Därefter insåg jag att jag skulle behöva en klass som innehåller spellogiken.
Drar kort till vardera spelare och lägger till poäng för de korten. Jag försökte
återanvända så mycket kod jag hade. </p>

<div class=\"image-container\">
        <img src=\"";
        // line 41
        yield Twig\Extension\EscaperExtension::escape($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/klassgame.png"), "html", null, true);
        yield "\" alt=\"\" class=\"image-size-big\">
</div>

<p> Min klass CardPlay innehåller logiken för att spela BlackJack. Klassen ärver från
AbstractController för att kunna användas i applikationen och den använder också SessionInterface
för att kunna fungera. Syftet med klassen är att den ska kunna dra kort, lägga till poäng, jämföra
poängen samt hantera dealerns handlingar under spelets gång. 
Attributen den har är: <p>
<ul>
    <li> Deck: En array med korten i </li>
    <li> playerhand: instans av CardHand som är spelarens hand </li>
    <li> dealerHand: också en instans av CardHand som är dealerns hand </li>
</ul>

Metoder den har är: <p>
<ul>
    <li> __construct(): Instansierar spelarens hand och dealerns hand. </li>
    <li> getPlayerHand(): Returnerar spelarens hand. </li>
    <li> getDealerHand(): Returnerar dealerns hand. </li>
    <li> drawCardForPlayer(): Drar ett kort för spelarens hand, beräknar poäng, uppdaterar och kollar om spelaren gått över 21 poäng - isåfall avslutas spelet.</li>
    <li> drawCardForDealer(): Drar ett kort för dealern till dess hand, beräknar poängen och uppdaterar poäng.</li>
    <li> evaluateWinner(): Kollar och jämför spelarens och dealerns poäng för att kunna utse vinnare.</li>
    <li> playerStay(): Hanterar koden för när spelaren väljer att stanna. PlayerStopped sätts till true och det blir då dealerns tur. </li>
</ul>



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
        return "card/gamedocs.html.twig";
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
        return array (  139 => 41,  128 => 33,  117 => 25,  110 => 21,  100 => 14,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %}Game Docs{% endblock %}

{% block body %}
<h1>Game Docs</h1>

<h2> Problemlösning </h2>

<p> Jag började med att skissa i ett anteckningsblock ungefär hur jag ville
att flödet i spelet skulle se ut. Den skissen såg ungefär ut såhär: <p>

<div class=\"image-container\">
        <img src=\"{{ asset('img/BLACKJACK.png') }}\" alt=\"\" class=\"image-size-big\">
</div>

<p> Efter det skapade jag kod över flödet och klasserna men började inte implementera
några spelregler. Jag skapade alltså alla routes - men hade ingen logik för spelet. </p>

<div class=\"image-container\">
        <img src=\"{{ asset('img/spelkod.png') }}\" alt=\"\" class=\"image-size-big\">
</div>

<div class=\"image-container\">
        <img src=\"{{ asset('img/spelkod1.png') }}\" alt=\"\" class=\"image-size-big\">
</div>


<p> Jag insåg att jag inte hade någon klass som kollade poängen för korten, så jag började med
att skapa den. </p>

<div class=\"image-container\">
        <img src=\"{{ asset('img/klassgame2.png') }}\" alt=\"\" class=\"image-size-big\">
</div>

<p> Därefter insåg jag att jag skulle behöva en klass som innehåller spellogiken.
Drar kort till vardera spelare och lägger till poäng för de korten. Jag försökte
återanvända så mycket kod jag hade. </p>

<div class=\"image-container\">
        <img src=\"{{ asset('img/klassgame.png') }}\" alt=\"\" class=\"image-size-big\">
</div>

<p> Min klass CardPlay innehåller logiken för att spela BlackJack. Klassen ärver från
AbstractController för att kunna användas i applikationen och den använder också SessionInterface
för att kunna fungera. Syftet med klassen är att den ska kunna dra kort, lägga till poäng, jämföra
poängen samt hantera dealerns handlingar under spelets gång. 
Attributen den har är: <p>
<ul>
    <li> Deck: En array med korten i </li>
    <li> playerhand: instans av CardHand som är spelarens hand </li>
    <li> dealerHand: också en instans av CardHand som är dealerns hand </li>
</ul>

Metoder den har är: <p>
<ul>
    <li> __construct(): Instansierar spelarens hand och dealerns hand. </li>
    <li> getPlayerHand(): Returnerar spelarens hand. </li>
    <li> getDealerHand(): Returnerar dealerns hand. </li>
    <li> drawCardForPlayer(): Drar ett kort för spelarens hand, beräknar poäng, uppdaterar och kollar om spelaren gått över 21 poäng - isåfall avslutas spelet.</li>
    <li> drawCardForDealer(): Drar ett kort för dealern till dess hand, beräknar poängen och uppdaterar poäng.</li>
    <li> evaluateWinner(): Kollar och jämför spelarens och dealerns poäng för att kunna utse vinnare.</li>
    <li> playerStay(): Hanterar koden för när spelaren väljer att stanna. PlayerStopped sätts till true och det blir då dealerns tur. </li>
</ul>



{% endblock %}
", "card/gamedocs.html.twig", "/home/maya/dbwebb-kurser/mvc/me/report2/templates/card/gamedocs.html.twig");
    }
}
