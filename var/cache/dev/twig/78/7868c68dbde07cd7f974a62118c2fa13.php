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

/* card/play.html.twig */
class __TwigTemplate_aaddd279e64e021a548972ebdff4b1dd extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "card/play.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "card/play.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "card/play.html.twig", 1);
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
        yield "
<h1>Card Game [PLAYING]</h1>

<p>Your cards:</p>


<div>
    ";
        // line 13
        if ((array_key_exists("drawnCards", $context) && (isset($context["drawnCards"]) || array_key_exists("drawnCards", $context) ? $context["drawnCards"] : (function () { throw new RuntimeError('Variable "drawnCards" does not exist.', 13, $this->source); })()))) {
            // line 14
            yield "        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["cardStrings"]) || array_key_exists("cardStrings", $context) ? $context["cardStrings"] : (function () { throw new RuntimeError('Variable "cardStrings" does not exist.', 14, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["cardString"]) {
                // line 15
                yield "            <span class=\"card\">";
                yield Twig\Extension\EscaperExtension::escape($this->env, $context["cardString"], "html", null, true);
                yield "</span>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cardString'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            yield "    ";
        } else {
            // line 18
            yield "        <p>No cards available.</p>
    ";
        }
        // line 20
        yield "</div>




<p>There are ";
        // line 25
        yield Twig\Extension\EscaperExtension::escape($this->env, (isset($context["cardsLeft"]) || array_key_exists("cardsLeft", $context) ? $context["cardsLeft"] : (function () { throw new RuntimeError('Variable "cardsLeft" does not exist.', 25, $this->source); })()), "html", null, true);
        yield " cards left in the deck.</p>

";
        // line 27
        yield Twig\Extension\CoreExtension::include($this->env, $context, "flash.html.twig");
        yield "

<form method=\"post\" action=\"";
        // line 29
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_card");
        yield "\">
    <p>
        <input type=\"submit\" name=\"addCard\" value=\"Draw Card\">
    </p>
</form>


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
        return "card/play.html.twig";
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
        return array (  139 => 29,  134 => 27,  129 => 25,  122 => 20,  118 => 18,  115 => 17,  106 => 15,  101 => 14,  99 => 13,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %}Card Game{% endblock %}

{% block body %}

<h1>Card Game [PLAYING]</h1>

<p>Your cards:</p>


<div>
    {% if drawnCards is defined and drawnCards %}
        {% for cardString in cardStrings %}
            <span class=\"card\">{{ cardString }}</span>
        {% endfor %}
    {% else %}
        <p>No cards available.</p>
    {% endif %}
</div>




<p>There are {{ cardsLeft }} cards left in the deck.</p>

{{ include('flash.html.twig') }}

<form method=\"post\" action=\"{{ path('add_card') }}\">
    <p>
        <input type=\"submit\" name=\"addCard\" value=\"Draw Card\">
    </p>
</form>


{% endblock %}
", "card/play.html.twig", "/home/maya/dbwebb-kurser/mvc/me/report2/templates/card/play.html.twig");
    }
}
