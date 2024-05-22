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

/* proj/home.html.twig */
class __TwigTemplate_b89816c3f82d362b32f3e49c3cb4b34b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "proj/home.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "proj/home.html.twig"));

        $this->parent = $this->loadTemplate("projbase.html.twig", "proj/home.html.twig", 1);
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
    <h1>14. HAV OCH MARINA RESURSER</h1>

    <p> Bevara och nyttja haven och de marina resurserna på ett hållbart sätt för en hållbar utveckling.</p>
    <div class=\"image-container\">
        <img src=\"";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/hav.png"), "html", null, true);
        yield "\" alt=\"\" class=\"image-size\">
    </div>

    <p> De globala målen är en uppsättning av 17 mål som FN:S medlemsländer antog år 2015.
    Dessa mål strävar efter att bekämpa de stora utmaningar som världen har. Bland dessa har vi mål
    14 - Hav och Marina Resurser. </p>

    <p> Världens hav täcker så mycket som 70% av vår planet vilket gör den till en otroligt stor del av livet
    på jorden. Livet i havet driver många globala system som gör jorden beboelig. Inget hav, ingen mänsklighet. Det
    är därför otroligt viktigt att vi hanterar och tar hand om vårt hav på ett gynnsamt och hållbart sätt. </p>

    <p> Havet står nu inför många utmaningar, bland annat överfiske, försurning, gifter och föroreningar. Varje år
    skräpas havet ner med åtta miljoner ton plast. Om detta fortsätter kommer havet bestå av mer plast än fisk år 2050. </p>

    <p class=\"quote\"> Vi har alltid behövt haven. Nu behöver haven oss. </p>

    <p> Detta är statistik över indikatorer som används för att mäta hur målet uppnås. </p>

    <h2> Coverage of protected areas in relation to marine areas (Exclusive Economic Zones)(%) </h1>
    <div>
        <canvas id=\"marineCoverageChart\"></canvas>
    </div>

    <h2> 3 tips till dig som vill göra skillnad: </h2>
    <p class=\"tips\"> HANDLA HÅLLBART </p>
    <p> gör medvetna val i butiken. Köp fisk och skaldjur som är producerad och fångad på ett hållbart sätt. </p>
    <p class=\"tips\">HANDLA ANSVARSFULLT </p>
    <p> Köp inte smycken tillverkade av korall, sköldpaddsskal eller annat marint liv. </p>
    <p class=\"tips\"> MINSKA PLASTANVÄNDNINGEN </p>
    <p> Minska din plastanvändning genom att köpa återanvändbara produkter såsom påsar och sugrör. </p>

</div>



<script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        fetch('";
        // line 49
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("coverage_data");
        yield "')
            .then(response => response.json())
            .then(data => {
                // Skapa en array med alla åren från 2000 till 2018
                const allYears = Array.from({ length: 2019 - 2000 }, (_, index) => 2000 + index);
                
                const labels = allYears;
                const regions = [...new Set(data.map(item => item.region))];
                const datasets = regions.map(region => {
                    return {
                        label: region,
                        data: allYears.map(year => {
                            const foundItem = data.find(item => item.year === year && item.region === region);
                            return foundItem ? foundItem.percentage : null;
                        }),
                        backgroundColor: getRandomColor(),
                        borderColor: getRandomColor(),
                        borderWidth: 1
                    };
                });

                const ctx = document.getElementById('marineCoverageChart').getContext('2d');
                new Chart(ctx, {
                    type: 'line',
                    data: {
                        labels: labels,
                        datasets: datasets
                    },
                    options: {
                        scales: {
                            y: {
                                beginAtZero: true
                            },
                            x: {
                                title: {
                                    display: true,
                                    text: 'Year'
                                },
                                ticks: {
                                    autoSkip: true,
                                    maxTicksLimit: 20
                                }
                            }
                        }
                    }
                });
            })
            .catch(error => console.error('Error fetching data:', error));

        // Funktion för att generera en slumpmässig färg
        function getRandomColor() {
            return `rgba(\${Math.floor(Math.random() * 256)}, \${Math.floor(Math.random() * 256)}, \${Math.floor(Math.random() * 256)}, 0.2)`;
        }
    });


</script>
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
        return "proj/home.html.twig";
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
        return array (  138 => 49,  97 => 11,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"projbase.html.twig\" %}

{% block title %}Home{% endblock %}

{% block body %}
<div class=\"content\">
    <h1>14. HAV OCH MARINA RESURSER</h1>

    <p> Bevara och nyttja haven och de marina resurserna på ett hållbart sätt för en hållbar utveckling.</p>
    <div class=\"image-container\">
        <img src=\"{{ asset('img/hav.png') }}\" alt=\"\" class=\"image-size\">
    </div>

    <p> De globala målen är en uppsättning av 17 mål som FN:S medlemsländer antog år 2015.
    Dessa mål strävar efter att bekämpa de stora utmaningar som världen har. Bland dessa har vi mål
    14 - Hav och Marina Resurser. </p>

    <p> Världens hav täcker så mycket som 70% av vår planet vilket gör den till en otroligt stor del av livet
    på jorden. Livet i havet driver många globala system som gör jorden beboelig. Inget hav, ingen mänsklighet. Det
    är därför otroligt viktigt att vi hanterar och tar hand om vårt hav på ett gynnsamt och hållbart sätt. </p>

    <p> Havet står nu inför många utmaningar, bland annat överfiske, försurning, gifter och föroreningar. Varje år
    skräpas havet ner med åtta miljoner ton plast. Om detta fortsätter kommer havet bestå av mer plast än fisk år 2050. </p>

    <p class=\"quote\"> Vi har alltid behövt haven. Nu behöver haven oss. </p>

    <p> Detta är statistik över indikatorer som används för att mäta hur målet uppnås. </p>

    <h2> Coverage of protected areas in relation to marine areas (Exclusive Economic Zones)(%) </h1>
    <div>
        <canvas id=\"marineCoverageChart\"></canvas>
    </div>

    <h2> 3 tips till dig som vill göra skillnad: </h2>
    <p class=\"tips\"> HANDLA HÅLLBART </p>
    <p> gör medvetna val i butiken. Köp fisk och skaldjur som är producerad och fångad på ett hållbart sätt. </p>
    <p class=\"tips\">HANDLA ANSVARSFULLT </p>
    <p> Köp inte smycken tillverkade av korall, sköldpaddsskal eller annat marint liv. </p>
    <p class=\"tips\"> MINSKA PLASTANVÄNDNINGEN </p>
    <p> Minska din plastanvändning genom att köpa återanvändbara produkter såsom påsar och sugrör. </p>

</div>



<script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        fetch('{{ path('coverage_data') }}')
            .then(response => response.json())
            .then(data => {
                // Skapa en array med alla åren från 2000 till 2018
                const allYears = Array.from({ length: 2019 - 2000 }, (_, index) => 2000 + index);
                
                const labels = allYears;
                const regions = [...new Set(data.map(item => item.region))];
                const datasets = regions.map(region => {
                    return {
                        label: region,
                        data: allYears.map(year => {
                            const foundItem = data.find(item => item.year === year && item.region === region);
                            return foundItem ? foundItem.percentage : null;
                        }),
                        backgroundColor: getRandomColor(),
                        borderColor: getRandomColor(),
                        borderWidth: 1
                    };
                });

                const ctx = document.getElementById('marineCoverageChart').getContext('2d');
                new Chart(ctx, {
                    type: 'line',
                    data: {
                        labels: labels,
                        datasets: datasets
                    },
                    options: {
                        scales: {
                            y: {
                                beginAtZero: true
                            },
                            x: {
                                title: {
                                    display: true,
                                    text: 'Year'
                                },
                                ticks: {
                                    autoSkip: true,
                                    maxTicksLimit: 20
                                }
                            }
                        }
                    }
                });
            })
            .catch(error => console.error('Error fetching data:', error));

        // Funktion för att generera en slumpmässig färg
        function getRandomColor() {
            return `rgba(\${Math.floor(Math.random() * 256)}, \${Math.floor(Math.random() * 256)}, \${Math.floor(Math.random() * 256)}, 0.2)`;
        }
    });


</script>
{% endblock %}", "proj/home.html.twig", "/home/maya/dbwebb-kurser/mvc/me/report/templates/proj/home.html.twig");
    }
}
