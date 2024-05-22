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

/* library/change.html.twig */
class __TwigTemplate_893fbc98ca31c9711de5acb007a78103 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "library/change.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "library/change.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "library/change.html.twig", 1);
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

        yield " Ändra ";
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
<ul>
    <li>ISBN: ";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["library"]) || array_key_exists("library", $context) ? $context["library"] : (function () { throw new RuntimeError('Variable "library" does not exist.', 9, $this->source); })()), "getISBN", [], "any", false, false, false, 9), "html", null, true);
        yield "</li>
    <li>Author: ";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["library"]) || array_key_exists("library", $context) ? $context["library"] : (function () { throw new RuntimeError('Variable "library" does not exist.', 10, $this->source); })()), "getAuthor", [], "any", false, false, false, 10), "html", null, true);
        yield "</li>
    <li>Image: <img src=\"";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["library"]) || array_key_exists("library", $context) ? $context["library"] : (function () { throw new RuntimeError('Variable "library" does not exist.', 11, $this->source); })()), "getImage", [], "any", false, false, false, 11));
        yield "\" alt=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["library"]) || array_key_exists("library", $context) ? $context["library"] : (function () { throw new RuntimeError('Variable "library" does not exist.', 11, $this->source); })()), "getBook", [], "any", false, false, false, 11));
        yield "\" style=\"max-width: 100px; max-height: 150px;\"></li>
</ul>

<form action=\"";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("update_Book", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["library"]) || array_key_exists("library", $context) ? $context["library"] : (function () { throw new RuntimeError('Variable "library" does not exist.', 14, $this->source); })()), "getId", [], "any", false, false, false, 14)]), "html", null, true);
        yield "\" method=\"post\">
    <div>
        <label for=\"book\">Book Name:</label>
        <input type=\"text\" id=\"book\" name=\"book\">
    </div>
    <div>
        <label for=\"isbn\">ISBN:</label>
        <input type=\"text\" id=\"isbn\" name=\"isbn\">
    </div>
    <div>
        <label for=\"author\">Author:</label>
        <input type=\"text\" id=\"author\" name=\"author\">
    </div>
    <div>
        <label for=\"image\">Image URL:</label>
        <input type=\"text\" id=\"image\" name=\"image\">
    </div>
    <div>
        <button type=\"submit\">Save Changes</button>
    </div>
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
        return "library/change.html.twig";
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
        return array (  115 => 14,  107 => 11,  103 => 10,  99 => 9,  94 => 7,  91 => 6,  81 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %} Ändra {{ library.getBook }}{% endblock %}

{% block body %}

<h1>{{ library.getBook }}</h1>
<ul>
    <li>ISBN: {{ library.getISBN }}</li>
    <li>Author: {{ library.getAuthor }}</li>
    <li>Image: <img src=\"{{ library.getImage|e }}\" alt=\"{{ library.getBook|e }}\" style=\"max-width: 100px; max-height: 150px;\"></li>
</ul>

<form action=\"{{ path('update_Book', {'id': library.getId}) }}\" method=\"post\">
    <div>
        <label for=\"book\">Book Name:</label>
        <input type=\"text\" id=\"book\" name=\"book\">
    </div>
    <div>
        <label for=\"isbn\">ISBN:</label>
        <input type=\"text\" id=\"isbn\" name=\"isbn\">
    </div>
    <div>
        <label for=\"author\">Author:</label>
        <input type=\"text\" id=\"author\" name=\"author\">
    </div>
    <div>
        <label for=\"image\">Image URL:</label>
        <input type=\"text\" id=\"image\" name=\"image\">
    </div>
    <div>
        <button type=\"submit\">Save Changes</button>
    </div>
</form>

{% endblock %}
", "library/change.html.twig", "/home/maya/dbwebb-kurser/mvc/me/report/templates/library/change.html.twig");
    }
}
