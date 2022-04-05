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

/* fichefrais_crud/show.html.twig */
class __TwigTemplate_90d4f6446df0ec7066bcaea2a55d46ff75a832dd490d4846652657e3538303fc extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "fichefrais_crud/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "fichefrais_crud/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "fichefrais_crud/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_titre($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "titre"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "titre"));

        echo "<h1 class=\"h1-large\">Voir les informations de la fiche frais</h1>
    <a class=\"btn-solid-lg\" href=\"#introduction\">Voir la fiche frais</a>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_corps($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "corps"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "corps"));

        // line 7
        echo "    <style>
        br{
            line-height: 20px;
        }
    </style>
    <div id=\"introduction\" class=\"cards-1\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <h1>Fiche Frais</h1>
                    <table class=\"table\">
                        <thead>
                            <tr>
                                <td>Id Utilisateur</td>
                                <td>Id</td>
                                <td>Mois</td>
                                <td>Nombre de justificatifs</td>
                                <td>Montant</td>
                                <td>Modification</td>
                                <td>Etat</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["fichefrai"]) || array_key_exists("fichefrai", $context) ? $context["fichefrai"] : (function () { throw new RuntimeError('Variable "fichefrai" does not exist.', 31, $this->source); })()), "idutilisateur", [], "any", false, false, false, 31), "id", [], "any", false, false, false, 31), "html", null, true);
        echo "</td>
                                <td>";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fichefrai"]) || array_key_exists("fichefrai", $context) ? $context["fichefrai"] : (function () { throw new RuntimeError('Variable "fichefrai" does not exist.', 32, $this->source); })()), "id", [], "any", false, false, false, 32), "html", null, true);
        echo "</td>
                                <td>";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fichefrai"]) || array_key_exists("fichefrai", $context) ? $context["fichefrai"] : (function () { throw new RuntimeError('Variable "fichefrai" does not exist.', 33, $this->source); })()), "mois", [], "any", false, false, false, 33), "html", null, true);
        echo "</td>
                                <td>";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fichefrai"]) || array_key_exists("fichefrai", $context) ? $context["fichefrai"] : (function () { throw new RuntimeError('Variable "fichefrai" does not exist.', 34, $this->source); })()), "nbjustificatifs", [], "any", false, false, false, 34), "html", null, true);
        echo "</td>
                                <td>";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fichefrai"]) || array_key_exists("fichefrai", $context) ? $context["fichefrai"] : (function () { throw new RuntimeError('Variable "fichefrai" does not exist.', 35, $this->source); })()), "montantvalide", [], "any", false, false, false, 35), "html", null, true);
        echo "</td>
                                <td>";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fichefrai"]) || array_key_exists("fichefrai", $context) ? $context["fichefrai"] : (function () { throw new RuntimeError('Variable "fichefrai" does not exist.', 36, $this->source); })()), "datemodif", [], "any", false, false, false, 36), "html", null, true);
        echo "</td>
                                <td>";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["fichefrai"]) || array_key_exists("fichefrai", $context) ? $context["fichefrai"] : (function () { throw new RuntimeError('Variable "fichefrai" does not exist.', 37, $this->source); })()), "idetat", [], "any", false, false, false, 37), "libelle", [], "any", false, false, false, 37), "html", null, true);
        echo "</td>
                            </tr>
                        </tbody>
                    </table>
                    <button style='background-color: #7dc22b; border-color: #7dc22b' class=\"btn\"><a href=\"";
        // line 41
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fichefrais_crud_index");
        echo "\">Voir la liste des états</a></button>
                    <button style='background-color: #7dc22b; border-color: #7dc22b' class=\"btn\"><a href=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fichefrais_crud_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["fichefrai"]) || array_key_exists("fichefrai", $context) ? $context["fichefrai"] : (function () { throw new RuntimeError('Variable "fichefrai" does not exist.', 42, $this->source); })()), "id", [], "any", false, false, false, 42)]), "html", null, true);
        echo "\">Modifier</a></button><br/><br />";
        echo twig_include($this->env, $context, "fichefrais_crud/_delete_form.html.twig");
        echo "
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "fichefrais_crud/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 42,  146 => 41,  139 => 37,  135 => 36,  131 => 35,  127 => 34,  123 => 33,  119 => 32,  115 => 31,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block titre %}<h1 class=\"h1-large\">Voir les informations de la fiche frais</h1>
    <a class=\"btn-solid-lg\" href=\"#introduction\">Voir la fiche frais</a>{% endblock %}

{% block corps %}
    <style>
        br{
            line-height: 20px;
        }
    </style>
    <div id=\"introduction\" class=\"cards-1\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <h1>Fiche Frais</h1>
                    <table class=\"table\">
                        <thead>
                            <tr>
                                <td>Id Utilisateur</td>
                                <td>Id</td>
                                <td>Mois</td>
                                <td>Nombre de justificatifs</td>
                                <td>Montant</td>
                                <td>Modification</td>
                                <td>Etat</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ fichefrai.idutilisateur.id }}</td>
                                <td>{{ fichefrai.id }}</td>
                                <td>{{ fichefrai.mois }}</td>
                                <td>{{ fichefrai.nbjustificatifs }}</td>
                                <td>{{ fichefrai.montantvalide }}</td>
                                <td>{{ fichefrai.datemodif }}</td>
                                <td>{{ fichefrai.idetat.libelle }}</td>
                            </tr>
                        </tbody>
                    </table>
                    <button style='background-color: #7dc22b; border-color: #7dc22b' class=\"btn\"><a href=\"{{ path('fichefrais_crud_index') }}\">Voir la liste des états</a></button>
                    <button style='background-color: #7dc22b; border-color: #7dc22b' class=\"btn\"><a href=\"{{ path('fichefrais_crud_edit', {'id': fichefrai.id}) }}\">Modifier</a></button><br/><br />{{ include('fichefrais_crud/_delete_form.html.twig') }}
                </div>
            </div>
        </div>
    </div>
{% endblock %}
", "fichefrais_crud/show.html.twig", "C:\\Users\\quent\\OneDrive\\Bureau\\ecole doc+logiciel\\cour\\Programmation\\WEB\\Symfony\\GSB_SYMFONY\\GSB\\templates\\fichefrais_crud\\show.html.twig");
    }
}
