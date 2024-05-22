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

/* card/gameplan.html.twig */
class __TwigTemplate_7d6313e7fb8dcddf3b33064e9fc2b2ae extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "card/gameplan.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "card/gameplan.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "card/gameplan.html.twig", 1);
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

        yield "21";
        
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
        yield "
<h1>21 [PLAYING]</h1>

<div class=\"gameplan\">

    ";
        // line 11
        yield Twig\Extension\CoreExtension::include($this->env, $context, "flash.html.twig");
        yield "

    <h2 class=\"name\">BANKENS KORT</h2>
    <div class=\"card-container\">
        ";
        // line 15
        if ((array_key_exists("dealerCards", $context) && (isset($context["dealerCards"]) || array_key_exists("dealerCards", $context) ? $context["dealerCards"] : (function () { throw new RuntimeError('Variable "dealerCards" does not exist.', 15, $this->source); })()))) {
            // line 16
            yield "            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["cardSymbols"]) || array_key_exists("cardSymbols", $context) ? $context["cardSymbols"] : (function () { throw new RuntimeError('Variable "cardSymbols" does not exist.', 16, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["cardSymbol"]) {
                // line 17
                yield "                <span class=\"card\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["cardSymbol"], "html", null, true);
                yield "</span>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cardSymbol'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            yield "        ";
        } else {
            // line 20
            yield "            <p></p>
        ";
        }
        // line 22
        yield "    </div>


    <p class=\"center\">POÄNG: ";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["dealerpoints"]) || array_key_exists("dealerpoints", $context) ? $context["dealerpoints"] : (function () { throw new RuntimeError('Variable "dealerpoints" does not exist.', 25, $this->source); })()), "html", null, true);
        yield "</p>

    ";
        // line 27
        if (((isset($context["playerStopped"]) || array_key_exists("playerStopped", $context) ? $context["playerStopped"] : (function () { throw new RuntimeError('Variable "playerStopped" does not exist.', 27, $this->source); })()) && (isset($context["gameOn"]) || array_key_exists("gameOn", $context) ? $context["gameOn"] : (function () { throw new RuntimeError('Variable "gameOn" does not exist.', 27, $this->source); })()))) {
            // line 28
            yield "    <form method=\"post\" action=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dealer_card");
            yield "\">
        <p>
            <input type=\"hidden\" name=\"action\" value=\"dealer_card\">
            <input type=\"submit\" name=\"dealerCard\" value=\"BANKEN DRAR\">
        </p>
    </form>
    ";
        }
        // line 35
        yield "
    <h2 class=\"name\">DINA KORT:</h2>
    <div class=\"card-container\">
        ";
        // line 38
        if ((array_key_exists("drawnCards", $context) && (isset($context["drawnCards"]) || array_key_exists("drawnCards", $context) ? $context["drawnCards"] : (function () { throw new RuntimeError('Variable "drawnCards" does not exist.', 38, $this->source); })()))) {
            // line 39
            yield "            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["cardStrings"]) || array_key_exists("cardStrings", $context) ? $context["cardStrings"] : (function () { throw new RuntimeError('Variable "cardStrings" does not exist.', 39, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["cardString"]) {
                // line 40
                yield "                <span class=\"card\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["cardString"], "html", null, true);
                yield "</span>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cardString'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            yield "        ";
        } else {
            // line 43
            yield "            <p>Börja dra ett kort</p>
        ";
        }
        // line 45
        yield "    </div>

    <p class=\"center\">POÄNG: ";
        // line 47
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["points"]) || array_key_exists("points", $context) ? $context["points"] : (function () { throw new RuntimeError('Variable "points" does not exist.', 47, $this->source); })()), "html", null, true);
        yield "</p>

    ";
        // line 49
        if (( !(isset($context["playerStopped"]) || array_key_exists("playerStopped", $context) ? $context["playerStopped"] : (function () { throw new RuntimeError('Variable "playerStopped" does not exist.', 49, $this->source); })()) && (isset($context["gameOn"]) || array_key_exists("gameOn", $context) ? $context["gameOn"] : (function () { throw new RuntimeError('Variable "gameOn" does not exist.', 49, $this->source); })()))) {
            // line 50
            yield "    <form method=\"post\" action=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("play_card");
            yield "\">
        <p>
            <input type=\"hidden\" name=\"action\" value=\"play_card\">
            <input type=\"submit\" name=\"playCard\" value=\"DRAW CARD\">
        </p>
    </form>

    <form method=\"post\" action=\"";
            // line 57
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("player_stay");
            yield "\">
        <p>
            <input type=\"hidden\" name=\"action\" value=\"dealer_stay\">
            <input type=\"submit\" name=\"playerStay\" value=\"STANNA\">
        </p>
    </form>
    ";
        }
        // line 64
        yield "
    <form method=\"post\" action=\"";
        // line 65
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reset_game");
        yield "\">
        <button type=\"submit\">STARTA OM</button>
    </form>

</div>

";
        // line 71
        yield Twig\Extension\CoreExtension::include($this->env, $context, "flash.html.twig");
        yield "




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
        return "card/gameplan.html.twig";
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
        return array (  222 => 71,  213 => 65,  210 => 64,  200 => 57,  189 => 50,  187 => 49,  182 => 47,  178 => 45,  174 => 43,  171 => 42,  162 => 40,  157 => 39,  155 => 38,  150 => 35,  139 => 28,  137 => 27,  132 => 25,  127 => 22,  123 => 20,  120 => 19,  111 => 17,  106 => 16,  104 => 15,  97 => 11,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %}21{% endblock %}

{% block body %}

<h1>21 [PLAYING]</h1>

<div class=\"gameplan\">

    {{ include('flash.html.twig') }}

    <h2 class=\"name\">BANKENS KORT</h2>
    <div class=\"card-container\">
        {% if dealerCards is defined and dealerCards %}
            {% for cardSymbol in cardSymbols %}
                <span class=\"card\">{{ cardSymbol }}</span>
            {% endfor %}
        {% else %}
            <p></p>
        {% endif %}
    </div>


    <p class=\"center\">POÄNG: {{ dealerpoints }}</p>

    {% if playerStopped and gameOn %}
    <form method=\"post\" action=\"{{ path('dealer_card') }}\">
        <p>
            <input type=\"hidden\" name=\"action\" value=\"dealer_card\">
            <input type=\"submit\" name=\"dealerCard\" value=\"BANKEN DRAR\">
        </p>
    </form>
    {% endif %}

    <h2 class=\"name\">DINA KORT:</h2>
    <div class=\"card-container\">
        {% if drawnCards is defined and drawnCards %}
            {% for cardString in cardStrings %}
                <span class=\"card\">{{ cardString }}</span>
            {% endfor %}
        {% else %}
            <p>Börja dra ett kort</p>
        {% endif %}
    </div>

    <p class=\"center\">POÄNG: {{ points }}</p>

    {% if not playerStopped and gameOn  %}
    <form method=\"post\" action=\"{{ path('play_card') }}\">
        <p>
            <input type=\"hidden\" name=\"action\" value=\"play_card\">
            <input type=\"submit\" name=\"playCard\" value=\"DRAW CARD\">
        </p>
    </form>

    <form method=\"post\" action=\"{{ path('player_stay') }}\">
        <p>
            <input type=\"hidden\" name=\"action\" value=\"dealer_stay\">
            <input type=\"submit\" name=\"playerStay\" value=\"STANNA\">
        </p>
    </form>
    {% endif %}

    <form method=\"post\" action=\"{{ path('reset_game') }}\">
        <button type=\"submit\">STARTA OM</button>
    </form>

</div>

{{ include('flash.html.twig') }}




{% endblock %}
", "card/gameplan.html.twig", "/home/maya/dbwebb-kurser/mvc/me/report/templates/card/gameplan.html.twig");
    }
}
