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

/* library/viewone.html.twig */
class __TwigTemplate_2b9733701521503406de07f7837100ca extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "library/viewone.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "library/viewone.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "library/viewone.html.twig", 1);
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

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["library"]) || array_key_exists("library", $context) ? $context["library"] : (function () { throw new RuntimeError('Variable "library" does not exist.', 3, $this->source); })()), "getBook", [], "any", false, false, false, 3), "html", null, true);
        
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
<h1>";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["library"]) || array_key_exists("library", $context) ? $context["library"] : (function () { throw new RuntimeError('Variable "library" does not exist.', 7, $this->source); })()), "getBook", [], "any", false, false, false, 7), "html", null, true);
        yield "</h1>
<img src=\"";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["library"]) || array_key_exists("library", $context) ? $context["library"] : (function () { throw new RuntimeError('Variable "library" does not exist.', 8, $this->source); })()), "getImage", [], "any", false, false, false, 8));
        yield "\" alt=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["library"]) || array_key_exists("library", $context) ? $context["library"] : (function () { throw new RuntimeError('Variable "library" does not exist.', 8, $this->source); })()), "getBook", [], "any", false, false, false, 8));
        yield "\" style=\"max-width: 600px; max-height: 850px;\">

<ul>
    <li>ISBN: ";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["library"]) || array_key_exists("library", $context) ? $context["library"] : (function () { throw new RuntimeError('Variable "library" does not exist.', 11, $this->source); })()), "getISBN", [], "any", false, false, false, 11), "html", null, true);
        yield "</li>
    <li>Author: ";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["library"]) || array_key_exists("library", $context) ? $context["library"] : (function () { throw new RuntimeError('Variable "library" does not exist.', 12, $this->source); })()), "getAuthor", [], "any", false, false, false, 12), "html", null, true);
        yield "</li>
     <li>ID: ";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["library"]) || array_key_exists("library", $context) ? $context["library"] : (function () { throw new RuntimeError('Variable "library" does not exist.', 13, $this->source); })()), "getId", [], "any", false, false, false, 13), "html", null, true);
        yield "</li>
</ul>

<a href=\"";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("book_change", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["library"]) || array_key_exists("library", $context) ? $context["library"] : (function () { throw new RuntimeError('Variable "library" does not exist.', 16, $this->source); })()), "getId", [], "any", false, false, false, 16)]), "html", null, true);
        yield "\">Ändra information</a>

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
        return "library/viewone.html.twig";
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
        return array (  119 => 16,  113 => 13,  109 => 12,  105 => 11,  97 => 8,  93 => 7,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ library.getBook }}{% endblock %}

{% block body %}

<h1>{{ library.getBook }}</h1>
<img src=\"{{ library.getImage|e }}\" alt=\"{{ library.getBook|e }}\" style=\"max-width: 600px; max-height: 850px;\">

<ul>
    <li>ISBN: {{ library.getISBN }}</li>
    <li>Author: {{ library.getAuthor }}</li>
     <li>ID: {{ library.getId }}</li>
</ul>

<a href=\"{{ path('book_change', {'id': library.getId}) }}\">Ändra information</a>

{% endblock %}
", "library/viewone.html.twig", "/home/maya/dbwebb-kurser/mvc/me/report/templates/library/viewone.html.twig");
    }
}
