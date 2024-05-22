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

/* card/home.html.twig */
class __TwigTemplate_ece1d835cf1003b6adf0fb6b2e4e9246 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "card/home.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "card/home.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "card/home.html.twig", 1);
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

        yield "Card Game";
        
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
        yield "<h1>Card game</h1>

<p>Welcome to this cardgame. What do you want to do?.</p>

<!-- Knapp för att länka till card/deck -->
<a href=\"";
        // line 11
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deck");
        yield "\" class=\"btn btn-primary\">View Deck</a>

<!-- Knapp för att länka till card/deck/shuffle -->
<a href=\"";
        // line 14
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("shuffle_deck");
        yield "\" class=\"btn btn-primary\">Shuffle Deck</a>

<!-- Knapp för att länka till card/draw -->
<a href=\"";
        // line 17
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("draw_card");
        yield "\" class=\"btn btn-primary\">Draw random Card</a>

<!-- Knapp för att länka till card/init -->
<a href=\"";
        // line 20
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("card_init_get");
        yield "\" class=\"btn btn-primary\">Draw cards to your deck.</a>

<p> Detta kort-spel är uppbyggt på flera klasser.
Card-klassen är den grundläggande klassen som representerar ett enskilt kort. 
Klassen lagrar värdet på kortet och metoder för att få slumpmässigt kort.
CardGraphic ärver från Card-klassen och ger funktionaliteten att ge korten
en symbol. CardHand-klassen representerar en hand av kort. Alla dessa klasser
är inspirerade av övningen i detta kmom02. </p>

<div class=\"image-container\">
        <img src=\"";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/uml.png"), "html", null, true);
        yield "\" alt=\"\" class=\"image-size\">
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
        return "card/home.html.twig";
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
        return array (  128 => 30,  115 => 20,  109 => 17,  103 => 14,  97 => 11,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %}Card Game{% endblock %}

{% block body %}
<h1>Card game</h1>

<p>Welcome to this cardgame. What do you want to do?.</p>

<!-- Knapp för att länka till card/deck -->
<a href=\"{{ path('deck') }}\" class=\"btn btn-primary\">View Deck</a>

<!-- Knapp för att länka till card/deck/shuffle -->
<a href=\"{{ path('shuffle_deck') }}\" class=\"btn btn-primary\">Shuffle Deck</a>

<!-- Knapp för att länka till card/draw -->
<a href=\"{{ path('draw_card') }}\" class=\"btn btn-primary\">Draw random Card</a>

<!-- Knapp för att länka till card/init -->
<a href=\"{{ path('card_init_get') }}\" class=\"btn btn-primary\">Draw cards to your deck.</a>

<p> Detta kort-spel är uppbyggt på flera klasser.
Card-klassen är den grundläggande klassen som representerar ett enskilt kort. 
Klassen lagrar värdet på kortet och metoder för att få slumpmässigt kort.
CardGraphic ärver från Card-klassen och ger funktionaliteten att ge korten
en symbol. CardHand-klassen representerar en hand av kort. Alla dessa klasser
är inspirerade av övningen i detta kmom02. </p>

<div class=\"image-container\">
        <img src=\"{{ asset('img/uml.png') }}\" alt=\"\" class=\"image-size\">
    </div>

{% endblock %}
", "card/home.html.twig", "/home/maya/dbwebb-kurser/mvc/me/report/templates/card/home.html.twig");
    }
}
