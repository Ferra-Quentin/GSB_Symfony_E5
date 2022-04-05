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

/* pages/nombre_frais.html.twig */
class __TwigTemplate_dca1ddd725b7a5b20d7da814254c07443cd8fb3865ae903b7ef67aae52a737bf extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/nombre_frais.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/nombre_frais.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pages/nombre_frais.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_corps($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "corps"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "corps"));

        // line 4
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
        // line 13
        if (twig_test_empty((isset($context["listeUtilisateurs"]) || array_key_exists("listeUtilisateurs", $context) ? $context["listeUtilisateurs"] : (function () { throw new RuntimeError('Variable "listeUtilisateurs" does not exist.', 13, $this->source); })()))) {
            // line 14
            echo "        <h3 style=\"text-align: center; margin-top: 1em;\">Tout les utilisateurs ont des frais</h1>
    ";
        } else {
            // line 15
            echo "}
        <h1 style=\"text-align: center; margin-top: 1em;\">Nos Utilisateurs n'ayant pas de frais</h1>
    <table class=\"table\">
        <thead>
        <tr>
            <td class=\"titre\">Nom</td>
            <td class=\"titre\">Prenom</td>
            <td class=\"titre\">Nombre de frais</td>
        </tr>
        </thead>
        <tbody>
            ";
            // line 26
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["listeUtilisateurs"]) || array_key_exists("listeUtilisateurs", $context) ? $context["listeUtilisateurs"] : (function () { throw new RuntimeError('Variable "listeUtilisateurs" does not exist.', 26, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["unUtilisateur"]) {
                // line 27
                echo "                <tr>
                    <td>";
                // line 28
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["unUtilisateur"], "nom", [], "any", false, false, false, 28), "html", null, true);
                echo "</td>
                    <td>";
                // line 29
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["unUtilisateur"], "prenom", [], "any", false, false, false, 29), "html", null, true);
                echo "</td>
                    <td>";
                // line 30
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["unUtilisateur"], "nbfrais", [], "any", false, false, false, 30), "html", null, true);
                echo "</td>
                    
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unUtilisateur'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo ":
        </tbody>
    </table>
    ";
        }
        // line 36
        echo "}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "pages/nombre_frais.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 36,  123 => 33,  113 => 30,  109 => 29,  105 => 28,  102 => 27,  98 => 26,  85 => 15,  81 => 14,  79 => 13,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{%block corps %}
    
    <style>
        .titre{
            font-weight: bold;
        }
        td{
            padding: 5em;
        }
    </style>
    {%  if listeUtilisateurs is empty %}
        <h3 style=\"text-align: center; margin-top: 1em;\">Tout les utilisateurs ont des frais</h1>
    {% else %}}
        <h1 style=\"text-align: center; margin-top: 1em;\">Nos Utilisateurs n'ayant pas de frais</h1>
    <table class=\"table\">
        <thead>
        <tr>
            <td class=\"titre\">Nom</td>
            <td class=\"titre\">Prenom</td>
            <td class=\"titre\">Nombre de frais</td>
        </tr>
        </thead>
        <tbody>
            {% for unUtilisateur in listeUtilisateurs %}
                <tr>
                    <td>{{ unUtilisateur.nom }}</td>
                    <td>{{ unUtilisateur.prenom }}</td>
                    <td>{{ unUtilisateur.nbfrais }}</td>
                    
                </tr>
            {% endfor %}:
        </tbody>
    </table>
    {% endif %}}
{% endblock %}

{# empty Twig template #}
{# empty Twig template #}
", "pages/nombre_frais.html.twig", "C:\\Users\\quent\\OneDrive\\Bureau\\ecole doc+logiciel\\cour\\Programmation\\WEB\\Symfony\\GSB_SYMFONY\\GSB\\templates\\pages\\nombre_frais.html.twig");
    }
}
