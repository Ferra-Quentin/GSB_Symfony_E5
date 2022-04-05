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

/* pages/users_cahors.html.twig */
class __TwigTemplate_57ca171fd76c1c3d112f4ee7b12c493b5781798afda5fb56fee393a80dda35b6 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/users_cahors.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/users_cahors.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pages/users_cahors.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_corps($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "corps"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "corps"));

        // line 5
        echo "    <style>
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
            echo "        <h3 style=\"text-align: center; margin-top: 1em;\">Aucune Utilisateurs</h1>
    ";
        } else {
            // line 15
            echo "}
        <h1 style=\"text-align: center; margin-top: 1em;\">Nos Utilisateurs qui habite à Cahors</h1>
    <table class=\"table\">
        <thead>
        <tr>
            <td class=\"titre\">Nom</td>
            <td class=\"titre\">Prenom</td>
            <td class=\"titre\">Adresse</td>
            <td class=\"titre\">Code Postal</td>
            <td class=\"titre\">Ville</td>
            <td class=\"titre\">Date d'embauche</td>
        </tr>
        </thead>
        <tbody>
            ";
            // line 29
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["listeUtilisateurs"]) || array_key_exists("listeUtilisateurs", $context) ? $context["listeUtilisateurs"] : (function () { throw new RuntimeError('Variable "listeUtilisateurs" does not exist.', 29, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["unUtilisateur"]) {
                // line 30
                echo "                <tr>
                    <td>";
                // line 31
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["unUtilisateur"], "nom", [], "any", false, false, false, 31), "html", null, true);
                echo "</td>
                    <td>";
                // line 32
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["unUtilisateur"], "prenom", [], "any", false, false, false, 32), "html", null, true);
                echo "</td>
                    <td>";
                // line 33
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["unUtilisateur"], "adresse", [], "any", false, false, false, 33), "html", null, true);
                echo "</td>
                    <td>";
                // line 34
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["unUtilisateur"], "cp", [], "any", false, false, false, 34), "html", null, true);
                echo "</td>
                    <td>";
                // line 35
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["unUtilisateur"], "ville", [], "any", false, false, false, 35), "html", null, true);
                echo "</td>
                    <td>";
                // line 36
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["unUtilisateur"], "dateembauche", [], "any", false, false, false, 36), "d/m/Y"), "html", null, true);
                echo "</td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unUtilisateur'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo ":
        </tbody>
    </table>
    ";
        }
        // line 41
        echo "}
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "pages/users_cahors.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 41,  136 => 38,  127 => 36,  123 => 35,  119 => 34,  115 => 33,  111 => 32,  107 => 31,  104 => 30,  100 => 29,  84 => 15,  80 => 14,  78 => 13,  68 => 5,  58 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}


{% block corps %}
    <style>
        .titre{
            font-weight: bold;
        }
        td{
            padding: 5em;
        }
    </style>
    {%  if listeUtilisateurs is empty %}
        <h3 style=\"text-align: center; margin-top: 1em;\">Aucune Utilisateurs</h1>
    {% else %}}
        <h1 style=\"text-align: center; margin-top: 1em;\">Nos Utilisateurs qui habite à Cahors</h1>
    <table class=\"table\">
        <thead>
        <tr>
            <td class=\"titre\">Nom</td>
            <td class=\"titre\">Prenom</td>
            <td class=\"titre\">Adresse</td>
            <td class=\"titre\">Code Postal</td>
            <td class=\"titre\">Ville</td>
            <td class=\"titre\">Date d'embauche</td>
        </tr>
        </thead>
        <tbody>
            {% for unUtilisateur in listeUtilisateurs %}
                <tr>
                    <td>{{ unUtilisateur.nom }}</td>
                    <td>{{ unUtilisateur.prenom }}</td>
                    <td>{{ unUtilisateur.adresse }}</td>
                    <td>{{ unUtilisateur.cp }}</td>
                    <td>{{ unUtilisateur.ville }}</td>
                    <td>{{ unUtilisateur.dateembauche|date('d/m/Y') }}</td>
                </tr>
            {% endfor %}:
        </tbody>
    </table>
    {% endif %}}
{% endblock %}

", "pages/users_cahors.html.twig", "C:\\Users\\quent\\OneDrive\\Bureau\\ecole doc+logiciel\\cour\\Programmation\\WEB\\Symfony\\GSB_SYMFONY\\GSB\\templates\\pages\\users_cahors.html.twig");
    }
}
