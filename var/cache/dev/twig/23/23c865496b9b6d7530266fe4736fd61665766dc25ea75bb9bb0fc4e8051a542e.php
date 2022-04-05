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

/* pages/equipements.html.twig */
class __TwigTemplate_94e3f3c7f6b1807e87dd4ba097454791d58e3bec01fa182a40d124c062d786e2 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/equipements.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/equipements.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pages/equipements.html.twig", 1);
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

        // line 4
        echo "    <h1 class=\"h1-large\">Nos équipements</h1>
    <a class=\"btn-solid-lg\" href=\"#equipements\">Decouvrez nos équipements</a>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_corps($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "corps"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "corps"));

        // line 8
        echo "    <div class=\"ex-basic-1 pt-5 pb-5\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <center id=\"equipements\">
                        <img class=\"img-fluid mt-5 mb-3\" src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./images/article-equipements.jpg"), "html", null, true);
        echo "\" alt=\"img\" style=\"width: 80%;\">
                    </center>
                    
                </div>
            </div>
        </div>
    </div>

    <div class=\"ex-basic-1 pt-4\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-xl-10 offset-xl-1\">
                    <p>L'informatique est fortement répandue dans notre infrastructure, on dénombre ainsi plus de 350 équipements terminaux et un nombre de serveurs physiques conséquent sur lesquels tournent plus de 100 serveurs virtuels.</p>
                    <p>On trouve aussi des stations de travail plus puissantes dans la partie labo-recherche, et une multitude d'ordinateurs portables (personnels de direction, service informatique, services commerciaux, etc). </p>
                </div>
            </div>
        </div>
    </div>





    <!-- Basic -->
    <div class=\"ex-basic-1 pt-3 pb-5\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-xl-10 offset-xl-1\">
                    <h2 class=\"mb-4\">Notre data center</h2>
                    <img class=\"img-fluid mb-5\" src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./images/DataCenter.jpg"), "html", null, true);
        echo "\" alt=\"img\">
                    <p>Notre datacenter est utilisé pour stocker toutes nos recherches au sein de notre labortoire de Paris.</p>
                    <p class=\"mb-5\">Nous maîtrisons la sécurité physique au sein de notre datacenter, car nous en sommes le seul exploitant. L’accès aux bâtiments est limité et contrôlé selon les normes et exigences en vigueur pour assurer une sécurité maximale au sein du site. Pour accéder aux locaux et aux serveurs physiques, seuls nos salariés affectés au bâtiment et munis d’un badge sont autorisés à entrer. Une surveillance vidéo et un gardiennage 24 h/24 et 7 j/7 assurent un contrôle total du site.</p>
                    <div class=\"text-box mb-5\">
                        <h3>Le respect de l’environnement</h3>
                        <p>Nous avons tous un rôle à jouer dans le respect de l’environnement, et le nôtre est de vous informer sur nôtre empreinte environnementale.
                            Un data center nécessite de l’énergie, et nous cherchons chaque jour de nouvelles manières de réduire ce besoin, en optimisant et en innovant. Notre système de watercooling, employé pour refroidir la globalité de notre infrastructure, fait partie des innovations qui nous permettent aujourd’hui de réduire grandement la consommation énergétique de nos datacenters.</p>
                    </div>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "pages/equipements.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 42,  98 => 13,  91 => 8,  81 => 7,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block titre %}
    <h1 class=\"h1-large\">Nos équipements</h1>
    <a class=\"btn-solid-lg\" href=\"#equipements\">Decouvrez nos équipements</a>
{% endblock %}
{% block corps %}
    <div class=\"ex-basic-1 pt-5 pb-5\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <center id=\"equipements\">
                        <img class=\"img-fluid mt-5 mb-3\" src=\"{{asset('./images/article-equipements.jpg')}}\" alt=\"img\" style=\"width: 80%;\">
                    </center>
                    
                </div>
            </div>
        </div>
    </div>

    <div class=\"ex-basic-1 pt-4\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-xl-10 offset-xl-1\">
                    <p>L'informatique est fortement répandue dans notre infrastructure, on dénombre ainsi plus de 350 équipements terminaux et un nombre de serveurs physiques conséquent sur lesquels tournent plus de 100 serveurs virtuels.</p>
                    <p>On trouve aussi des stations de travail plus puissantes dans la partie labo-recherche, et une multitude d'ordinateurs portables (personnels de direction, service informatique, services commerciaux, etc). </p>
                </div>
            </div>
        </div>
    </div>





    <!-- Basic -->
    <div class=\"ex-basic-1 pt-3 pb-5\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-xl-10 offset-xl-1\">
                    <h2 class=\"mb-4\">Notre data center</h2>
                    <img class=\"img-fluid mb-5\" src=\"{{asset('./images/DataCenter.jpg')}}\" alt=\"img\">
                    <p>Notre datacenter est utilisé pour stocker toutes nos recherches au sein de notre labortoire de Paris.</p>
                    <p class=\"mb-5\">Nous maîtrisons la sécurité physique au sein de notre datacenter, car nous en sommes le seul exploitant. L’accès aux bâtiments est limité et contrôlé selon les normes et exigences en vigueur pour assurer une sécurité maximale au sein du site. Pour accéder aux locaux et aux serveurs physiques, seuls nos salariés affectés au bâtiment et munis d’un badge sont autorisés à entrer. Une surveillance vidéo et un gardiennage 24 h/24 et 7 j/7 assurent un contrôle total du site.</p>
                    <div class=\"text-box mb-5\">
                        <h3>Le respect de l’environnement</h3>
                        <p>Nous avons tous un rôle à jouer dans le respect de l’environnement, et le nôtre est de vous informer sur nôtre empreinte environnementale.
                            Un data center nécessite de l’énergie, et nous cherchons chaque jour de nouvelles manières de réduire ce besoin, en optimisant et en innovant. Notre système de watercooling, employé pour refroidir la globalité de notre infrastructure, fait partie des innovations qui nous permettent aujourd’hui de réduire grandement la consommation énergétique de nos datacenters.</p>
                    </div>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div>
{% endblock %}
", "pages/equipements.html.twig", "C:\\Users\\quent\\OneDrive\\Bureau\\ecole doc+logiciel\\cour\\Programmation\\WEB\\Symfony\\GSB_SYMFONY\\GSB\\templates\\pages\\equipements.html.twig");
    }
}
