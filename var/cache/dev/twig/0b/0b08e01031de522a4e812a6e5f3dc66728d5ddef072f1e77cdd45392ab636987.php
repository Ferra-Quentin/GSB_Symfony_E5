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

/* fichefrais_crud/index.html.twig */
class __TwigTemplate_fa6a3dc3fde1b2673e4b14ae9cdc2f0d2d2309aa1ca23909f0c1a6b4defe1eb6 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "fichefrais_crud/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "fichefrais_crud/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "fichefrais_crud/index.html.twig", 1);
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

        echo "<h1 class=\"h1-large\">Nos Fiches Frais</h1>
    <a class=\"btn-solid-lg\" href=\"#table\">Voir nos fiches frais</a>";
        
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
                    ";
        // line 11
        if (twig_test_empty((isset($context["fichefrais"]) || array_key_exists("fichefrais", $context) ? $context["fichefrais"] : (function () { throw new RuntimeError('Variable "fichefrais" does not exist.', 11, $this->source); })()))) {
            // line 12
            echo "                    <h1>Aucune fiche frais</h1>
                    ";
        } else {
            // line 14
            echo "                        <h1>Liste de nos fiches frais</h1>
                    <table class=\"table\">
                            <thead>
                                <tr>
                                    <th>Utilisateur</th>
                                    <th>Id</th>
                                    <th>Mois</th>
                                    <th>Nombre</th>
                                    <th>Montant</th>
                                    <th>Modification</th>
                                    <th>Etat</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
            // line 29
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["fichefrais"]) || array_key_exists("fichefrais", $context) ? $context["fichefrais"] : (function () { throw new RuntimeError('Variable "fichefrais" does not exist.', 29, $this->source); })()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["fichefrai"]) {
                // line 30
                echo "                                    <tr>
                                        <td>";
                // line 31
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["fichefrai"], "idUtilisateur", [], "any", false, false, false, 31), "id", [], "any", false, false, false, 31), "html", null, true);
                echo "</td>
                                        <td>";
                // line 32
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["fichefrai"], "id", [], "any", false, false, false, 32), "html", null, true);
                echo "</td>
                                        <td>";
                // line 33
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["fichefrai"], "mois", [], "any", false, false, false, 33), "html", null, true);
                echo "</td>
                                        <td>";
                // line 34
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["fichefrai"], "nbjustificatifs", [], "any", false, false, false, 34), "html", null, true);
                echo "</td>
                                        <td>";
                // line 35
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["fichefrai"], "montantvalide", [], "any", false, false, false, 35), "html", null, true);
                echo "</td>
                                        <td>";
                // line 36
                ((twig_get_attribute($this->env, $this->source, $context["fichefrai"], "datemodif", [], "any", false, false, false, 36)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["fichefrai"], "datemodif", [], "any", false, false, false, 36), "d-m-Y"), "html", null, true))) : (print ("")));
                echo "</td>
                                        <td>";
                // line 37
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["fichefrai"], "idEtat", [], "any", false, false, false, 37), "libelle", [], "any", false, false, false, 37), "html", null, true);
                echo "</td>
                                        <td>
                                            <a class=\"btn\" style=\"border-color: #000\" href=\"";
                // line 39
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fichefrais_crud_show", ["id" => twig_get_attribute($this->env, $this->source, $context["fichefrai"], "id", [], "any", false, false, false, 39)]), "html", null, true);
                echo "\">Afficher</a>
                                            <a class=\"btn\" style=\"border-color: #000\" href=\"";
                // line 40
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fichefrais_crud_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["fichefrai"], "id", [], "any", false, false, false, 40)]), "html", null, true);
                echo "\">Modifier</a>
                                            ";
                // line 41
                echo twig_include($this->env, $context, "fichefrais_crud/_delete_form.html.twig");
                echo "
                                        </td>
                                    </tr>
                                ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fichefrai'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "                            </tbody>
                        </table>

                    <a href=\"";
            // line 48
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fichefrais_crud_new");
            echo "\">Créer une nouvelle fiche frais</a>
                </div>
            </div>
        </div>
    </div>
                    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "fichefrais_crud/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  198 => 48,  193 => 45,  175 => 41,  171 => 40,  167 => 39,  162 => 37,  158 => 36,  154 => 35,  150 => 34,  146 => 33,  142 => 32,  138 => 31,  135 => 30,  118 => 29,  101 => 14,  97 => 12,  95 => 11,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block titre %}<h1 class=\"h1-large\">Nos Fiches Frais</h1>
    <a class=\"btn-solid-lg\" href=\"#table\">Voir nos fiches frais</a>{% endblock %}

{% block corps %}
    <div id=\"introduction\" class=\"cards-1\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    {% if fichefrais is empty %}
                    <h1>Aucune fiche frais</h1>
                    {% else %}
                        <h1>Liste de nos fiches frais</h1>
                    <table class=\"table\">
                            <thead>
                                <tr>
                                    <th>Utilisateur</th>
                                    <th>Id</th>
                                    <th>Mois</th>
                                    <th>Nombre</th>
                                    <th>Montant</th>
                                    <th>Modification</th>
                                    <th>Etat</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                {% for fichefrai in fichefrais %}
                                    <tr>
                                        <td>{{ fichefrai.idUtilisateur.id }}</td>
                                        <td>{{ fichefrai.id }}</td>
                                        <td>{{ fichefrai.mois }}</td>
                                        <td>{{ fichefrai.nbjustificatifs }}</td>
                                        <td>{{ fichefrai.montantvalide }}</td>
                                        <td>{{ fichefrai.datemodif ? fichefrai.datemodif|date('d-m-Y') : '' }}</td>
                                        <td>{{ fichefrai.idEtat.libelle }}</td>
                                        <td>
                                            <a class=\"btn\" style=\"border-color: #000\" href=\"{{ path('fichefrais_crud_show', {'id': fichefrai.id}) }}\">Afficher</a>
                                            <a class=\"btn\" style=\"border-color: #000\" href=\"{{ path('fichefrais_crud_edit', {'id': fichefrai.id}) }}\">Modifier</a>
                                            {{ include('fichefrais_crud/_delete_form.html.twig') }}
                                        </td>
                                    </tr>
                                {% endfor %}
                            </tbody>
                        </table>

                    <a href=\"{{ path('fichefrais_crud_new') }}\">Créer une nouvelle fiche frais</a>
                </div>
            </div>
        </div>
    </div>
                    {% endif %}
{% endblock %}
", "fichefrais_crud/index.html.twig", "C:\\Users\\quent\\OneDrive\\Bureau\\ecole doc+logiciel\\cour\\Programmation\\WEB\\Symfony\\GSB_SYMFONY\\GSB\\templates\\fichefrais_crud\\index.html.twig");
    }
}
