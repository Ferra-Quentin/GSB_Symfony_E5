<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* pages/domaines.html.twig */
class __TwigTemplate_2f35835f59cdcdc12dfe2c60f23af9fe73fdf78b7a45d92cfb7a978543ed971f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'titre' => [$this, 'block_titre'],
            'corps' => [$this, 'block_corps'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/domaines.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/domaines.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pages/domaines.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_titre($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "titre"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "titre"));

        // line 5
        echo "    <h1 class=\"h1-large\">Nos domaines</h1>
    <a class=\"btn-solid-lg\" href=\"#table\">Decouvrez nos domaines</a>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 10
    public function block_corps($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "corps"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "corps"));

        // line 11
        echo "    
    <style>
        .titre{
            font-weight: bold;
        }
        td{
            padding: 5em;
        }
    </style>
    ";
        // line 20
        if (twig_test_empty((isset($context["listeCatDom"]) || array_key_exists("listeCatDom", $context) ? $context["listeCatDom"] : (function () { throw new RuntimeError('Variable "listeCatDom" does not exist.', 20, $this->source); })()))) {
            // line 21
            echo "        <h3 style=\"text-align: center; margin-top: 1em;\">Aucun domaine et aucune categorie</h1>
    ";
        } else {
            // line 22
            echo "}
        <h1 style=\"text-align: center; margin-top: 1em;\">Nos Domaine et nos Categorie</h1>
    <table class=\"table\" id=\"table\">
        <thead>
        <tr>
            <td class=\"titre\">Domaine</td>
            <td class=\"titre\">Categorie 1</td>
            <td class=\"titre\">Categorie 2 (S'il en possède une 2ème)</td>
            <td class=\"titre\">Categorie 3 (S'il en possède une 3ème)</td>
            <td class=\"titre\">Categorie 4 (S'il en possède une 4ème)</td>
        </tr>
        </thead>
        <tbody>
            ";
            // line 35
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["listeCatDom"]) || array_key_exists("listeCatDom", $context) ? $context["listeCatDom"] : (function () { throw new RuntimeError('Variable "listeCatDom" does not exist.', 35, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["unDomaine"]) {
                // line 36
                echo "                <tr>
                    <td><strong>";
                // line 37
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["unDomaine"], "nomdomaine", [], "any", false, false, false, 37), "html", null, true);
                echo "</strong></td>
                    
                    ";
                // line 39
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["unDomaine"], "lescategories", [], "any", false, false, false, 39));
                foreach ($context['_seq'] as $context["_key"] => $context["uneCategorie"]) {
                    // line 40
                    echo "                        <td style = \"text-align: center;\"><em>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["uneCategorie"], "libellecategorie", [], "any", false, false, false, 40), "html", null, true);
                    echo "</em></td>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['uneCategorie'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 42
                echo "                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unDomaine'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo "        </tbody>
    </table>
    ";
        }
        // line 46
        echo "}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "pages/domaines.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 46,  155 => 44,  148 => 42,  139 => 40,  135 => 39,  130 => 37,  127 => 36,  123 => 35,  108 => 22,  104 => 21,  102 => 20,  91 => 11,  81 => 10,  69 => 5,  59 => 4,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}


{% block titre %}
    <h1 class=\"h1-large\">Nos domaines</h1>
    <a class=\"btn-solid-lg\" href=\"#table\">Decouvrez nos domaines</a>
{% endblock %}


{%block corps %}
    
    <style>
        .titre{
            font-weight: bold;
        }
        td{
            padding: 5em;
        }
    </style>
    {%  if listeCatDom is empty %}
        <h3 style=\"text-align: center; margin-top: 1em;\">Aucun domaine et aucune categorie</h1>
    {% else %}}
        <h1 style=\"text-align: center; margin-top: 1em;\">Nos Domaine et nos Categorie</h1>
    <table class=\"table\" id=\"table\">
        <thead>
        <tr>
            <td class=\"titre\">Domaine</td>
            <td class=\"titre\">Categorie 1</td>
            <td class=\"titre\">Categorie 2 (S'il en possède une 2ème)</td>
            <td class=\"titre\">Categorie 3 (S'il en possède une 3ème)</td>
            <td class=\"titre\">Categorie 4 (S'il en possède une 4ème)</td>
        </tr>
        </thead>
        <tbody>
            {% for unDomaine in listeCatDom %}
                <tr>
                    <td><strong>{{ unDomaine.nomdomaine }}</strong></td>
                    
                    {% for uneCategorie in unDomaine.lescategories%}
                        <td style = \"text-align: center;\"><em>{{ uneCategorie.libellecategorie }}</em></td>
                    {% endfor %}
                </tr>
            {% endfor %}
        </tbody>
    </table>
    {% endif %}}
{% endblock %}

", "pages/domaines.html.twig", "C:\\Users\\quent\\OneDrive\\Bureau\\ecole doc+logiciel\\cour\\Programmation\\WEB\\Symfony\\GSB_SYMFONY\\GSB\\templates\\pages\\domaines.html.twig");
    }
}
