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

/* fraisforfait_crud/show.html.twig */
class __TwigTemplate_e782cdb4b7c6a282f1a2e9cf774d196997bf66a22988db544e6e122d83de7a55 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "fraisforfait_crud/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "fraisforfait_crud/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "fraisforfait_crud/show.html.twig", 1);
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

        echo "<h1 class=\"h1-large\">Voir un Frais Forfait</h1>
    <a class=\"btn-solid-lg\" href=\"#table\">Voir le frais forfait</a>";
        
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
                    <h1>Frais forfait</h1>
                    <table class=\"table\">
                        <thead>
                            <tr>
                                <td>Id</td>
                                <td>Libelle</td>
                                <td>Montant</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fraisforfait"]) || array_key_exists("fraisforfait", $context) ? $context["fraisforfait"] : (function () { throw new RuntimeError('Variable "fraisforfait" does not exist.', 27, $this->source); })()), "id", [], "any", false, false, false, 27), "html", null, true);
        echo "</td>
                                <td>";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fraisforfait"]) || array_key_exists("fraisforfait", $context) ? $context["fraisforfait"] : (function () { throw new RuntimeError('Variable "fraisforfait" does not exist.', 28, $this->source); })()), "libelle", [], "any", false, false, false, 28), "html", null, true);
        echo "</td>
                                <td>";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fraisforfait"]) || array_key_exists("fraisforfait", $context) ? $context["fraisforfait"] : (function () { throw new RuntimeError('Variable "fraisforfait" does not exist.', 29, $this->source); })()), "montant", [], "any", false, false, false, 29), "html", null, true);
        echo "</td>
                            </tr>
                        </tbody>
                    </table>

                                <button style='background-color: #7dc22b; border-color: #7dc22b' class=\"btn\"><a href=\"";
        // line 34
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fraisforfait_crud_index");
        echo "\">Voir la liste des frais forfaits</a></button><br/><br/>

                                <button style='background-color: #7dc22b; border-color: #7dc22b' class=\"btn\"><a href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fraisforfait_crud_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["fraisforfait"]) || array_key_exists("fraisforfait", $context) ? $context["fraisforfait"] : (function () { throw new RuntimeError('Variable "fraisforfait" does not exist.', 36, $this->source); })()), "id", [], "any", false, false, false, 36)]), "html", null, true);
        echo "\">Modifier</a></button><br/><br/>

                    ";
        // line 38
        echo twig_include($this->env, $context, "fraisforfait_crud/_delete_form.html.twig");
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
        return "fraisforfait_crud/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 38,  132 => 36,  127 => 34,  119 => 29,  115 => 28,  111 => 27,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block titre %}<h1 class=\"h1-large\">Voir un Frais Forfait</h1>
    <a class=\"btn-solid-lg\" href=\"#table\">Voir le frais forfait</a>{% endblock %}

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
                    <h1>Frais forfait</h1>
                    <table class=\"table\">
                        <thead>
                            <tr>
                                <td>Id</td>
                                <td>Libelle</td>
                                <td>Montant</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ fraisforfait.id }}</td>
                                <td>{{ fraisforfait.libelle }}</td>
                                <td>{{ fraisforfait.montant }}</td>
                            </tr>
                        </tbody>
                    </table>

                                <button style='background-color: #7dc22b; border-color: #7dc22b' class=\"btn\"><a href=\"{{ path('fraisforfait_crud_index') }}\">Voir la liste des frais forfaits</a></button><br/><br/>

                                <button style='background-color: #7dc22b; border-color: #7dc22b' class=\"btn\"><a href=\"{{ path('fraisforfait_crud_edit', {'id': fraisforfait.id}) }}\">Modifier</a></button><br/><br/>

                    {{ include('fraisforfait_crud/_delete_form.html.twig') }}
                </div>
            </div>
        </div>
    </div>
{% endblock %}
", "fraisforfait_crud/show.html.twig", "C:\\Users\\quent\\OneDrive\\Bureau\\ecole doc+logiciel\\cour\\Programmation\\WEB\\Symfony\\GSB_SYMFONY\\GSB\\templates\\fraisforfait_crud\\show.html.twig");
    }
}
