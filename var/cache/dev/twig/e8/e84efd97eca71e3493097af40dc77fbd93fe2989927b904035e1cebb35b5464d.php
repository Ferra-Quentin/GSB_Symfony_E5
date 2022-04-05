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

/* fraisforfait_crud/index.html.twig */
class __TwigTemplate_ccc2974f6243f80731e119a275818d1c23cd9a6d1e8074166e0c308ab1e640d8 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "fraisforfait_crud/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "fraisforfait_crud/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "fraisforfait_crud/index.html.twig", 1);
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

        echo "<h1 class=\"h1-large\">Nos Frais Forfaist</h1>
    <a class=\"btn-solid-lg\" href=\"#table\">Voir nos frais forfaits</a>";
        
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
        echo "    <div id=\"introduction\" class=\"cards-1\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <h1>Liste de nos frais forfait</h1>
                    <table class=\"table\">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Libelle</th>
                                <th>Montant</th>
                                <th>actions</th>
                            </tr>
                        </thead>
                        <tbody>
                        ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["fraisforfaits"]) || array_key_exists("fraisforfaits", $context) ? $context["fraisforfaits"] : (function () { throw new RuntimeError('Variable "fraisforfaits" does not exist.', 22, $this->source); })()));
        $context['_iterated'] = false;
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["fraisforfait"]) {
            // line 23
            echo "                            <tr>
                                <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["fraisforfait"], "id", [], "any", false, false, false, 24), "html", null, true);
            echo "</td>
                                <td>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["fraisforfait"], "libelle", [], "any", false, false, false, 25), "html", null, true);
            echo "</td>
                                <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["fraisforfait"], "montant", [], "any", false, false, false, 26), "html", null, true);
            echo "</td>
                                <td>
                                    <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fraisforfait_crud_show", ["id" => twig_get_attribute($this->env, $this->source, $context["fraisforfait"], "id", [], "any", false, false, false, 28)]), "html", null, true);
            echo "\">Voir</a>
                                    <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fraisforfait_crud_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["fraisforfait"], "id", [], "any", false, false, false, 29)]), "html", null, true);
            echo "\">Modifier</a>
                                    ";
            // line 30
            echo twig_include($this->env, $context, "fraisforfait_crud/_delete_form.html.twig");
            echo "
                                </td>
                            </tr>
                        ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 34
            echo "                            <tr>
                                <td colspan=\"4\">Aucun Résultat</td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fraisforfait'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "                        </tbody>
                    </table>
                        <a href=\"";
        // line 40
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fraisforfait_crud_new");
        echo "\">Créer une nouveau frais forfait</a>
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
        return "fraisforfait_crud/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 40,  174 => 38,  165 => 34,  148 => 30,  144 => 29,  140 => 28,  135 => 26,  131 => 25,  127 => 24,  124 => 23,  106 => 22,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block titre %}<h1 class=\"h1-large\">Nos Frais Forfaist</h1>
    <a class=\"btn-solid-lg\" href=\"#table\">Voir nos frais forfaits</a>{% endblock %}

{% block corps%}
    <div id=\"introduction\" class=\"cards-1\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <h1>Liste de nos frais forfait</h1>
                    <table class=\"table\">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Libelle</th>
                                <th>Montant</th>
                                <th>actions</th>
                            </tr>
                        </thead>
                        <tbody>
                        {% for fraisforfait in fraisforfaits %}
                            <tr>
                                <td>{{ fraisforfait.id }}</td>
                                <td>{{ fraisforfait.libelle }}</td>
                                <td>{{ fraisforfait.montant }}</td>
                                <td>
                                    <a href=\"{{ path('fraisforfait_crud_show', {'id': fraisforfait.id}) }}\">Voir</a>
                                    <a href=\"{{ path('fraisforfait_crud_edit', {'id': fraisforfait.id}) }}\">Modifier</a>
                                    {{ include('fraisforfait_crud/_delete_form.html.twig') }}
                                </td>
                            </tr>
                        {% else %}
                            <tr>
                                <td colspan=\"4\">Aucun Résultat</td>
                            </tr>
                        {% endfor %}
                        </tbody>
                    </table>
                        <a href=\"{{ path('fraisforfait_crud_new') }}\">Créer une nouveau frais forfait</a>
                </div>
            </div>
        </div>
    </div>

                    
{% endblock %}
", "fraisforfait_crud/index.html.twig", "C:\\Users\\quent\\OneDrive\\Bureau\\ecole doc+logiciel\\cour\\Programmation\\WEB\\Symfony\\GSB_SYMFONY\\GSB\\templates\\fraisforfait_crud\\index.html.twig");
    }
}
