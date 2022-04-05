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

/* base.html.twig */
class __TwigTemplate_629542dcec0343796fe5e409f70d555e51ef2db75e067804887eaf9c952baf9d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'titre' => [$this, 'block_titre'],
            'corps' => [$this, 'block_corps'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    
    <!-- SEO Meta Tags -->
    <meta name=\"description\" content=\"Your description\">
    <meta name=\"author\" content=\"Your name\">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on Facebook, Twitter, LinkedIn -->
\t<meta property=\"og:site_name\" conten    t=\"\" /> <!-- website name -->
\t<meta property=\"og:site\" content=\"\" /> <!-- website link -->
\t<meta property=\"og:title\" content=\"\"/> <!-- title shown in the actual shared post -->
\t<meta property=\"og:description\" content=\"\" /> <!-- description shown in the actual shared post -->
\t<meta property=\"og:image\" content=\"\" /> <!-- image link, make sure it's jpg -->
\t<meta property=\"og:url\" content=\"\" /> <!-- where do you want your post to link to -->
\t<meta name=\"twitter:card\" content=\"summary_large_image\"> <!-- to have large image post format in Twitter -->

    <!-- Webpage Title -->
    <title>Galaxy Swiss Bourdin</title>
    
    <!-- Styles -->
    <link href=\"https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;0,700;1,400&display=swap\" rel=\"stylesheet\">
    <link href=\"https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap\" rel=\"stylesheet\">
    <script src=\"https://kit.fontawesome.com/b801dc1910.js\" crossorigin=\"anonymous\"></script>
    <link href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./css/fontawesome-all.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./css/swiper.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./css/styles.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    
\t
\t<!-- Favicon  -->
    <link rel=\"icon\" href=\"asset";
        // line 34
        echo "/images/favicon.png";
        echo "\">
    
</head>
<body>
    
    <!-- Navigation -->
    <nav id=\"navbar\" class=\"navbar navbar-expand-lg fixed-top navbar-dark\" aria-label=\"Main navigation\">
        <div class=\"container\">

            <!-- Image Logo -->
            <!--<a class=\"navbar-brand logo-image\" href=\"index.html\"><img src=\"images/logo.svg\" alt=\"alternative\"></a> -->

            <!-- Text Logo - Use this if you don't have a graphic logo -->
            <a class=\"navbar-brand logo-text\" href=\"";
        // line 47
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("default");
        echo "\">Galaxy Swiss Bourdin</a>

            <button class=\"navbar-toggler p-0 border-0\" type=\"button\" id=\"navbarSideCollapse\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>

            <div class=\"navbar-collapse offcanvas-collapse\" id=\"navbarsExampleDefault\">
                <ul class=\"navbar-nav ms-auto navbar-nav-scroll\">
                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"dropdown01\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">Le Réseau</a>
                        <ul class=\"dropdown-menu\" aria-labelledby=\"dropdown01\">
                            <li><a class=\"dropdown-item\" href=\"";
        // line 58
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("gestion");
        echo "\">Notre répartition du réseau informatique</a></li>
                        </ul>
                    </li>
                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"dropdown01\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">Structure Interne</a>
                        <ul class=\"dropdown-menu\" aria-labelledby=\"dropdown01\">
                            <li><a class=\"dropdown-item\" href=\"";
        // line 64
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("equipements");
        echo "\">Notre Équipements</a></li>
                        </ul>
                    </li>
                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"dropdown01\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">Les utilisateurs</a>
                        <ul class=\"dropdown-menu\" aria-labelledby=\"dropdown01\">
                            <li><a class=\"dropdown-item\" href=\"";
        // line 70
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("tout_utilisateur");
        echo "\">Tout les utilisateurs</a></li>
                            <li><div class=\"dropdown-divider\"></div></li>
                            <li><a class=\"dropdown-item\" href=\"";
        // line 72
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("users_cahors");
        echo "\">Liste des Cadurciens</a></li>
                            <li><div class=\"dropdown-divider\"></div></li>
                            <li><a class=\"dropdown-item\" href=\"";
        // line 74
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("users_ayant_frais");
        echo "\">Ayant des frais</a></li>
                            <li><div class=\"dropdown-divider\"></div></li>
                            <li><a class=\"dropdown-item\" href=\"";
        // line 76
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("users_sans_frais");
        echo "\">N'ayant pas de frais</a></li>
                            <li><div class=\"dropdown-divider\"></div></li>
                            <li><a class=\"dropdown-item\" href=\"";
        // line 78
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("users_nombre_frais");
        echo "\">Nombre de frais</a></li>
                        </ul>
                    </li>
                    <a class=\"dropdown-item\" href=\"";
        // line 81
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("domaines");
        echo "\">Les domaines</a>
                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"dropdown01\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">Les Etats</a>
                        <ul class=\"dropdown-menu\" aria-labelledby=\"dropdown01\">
                            <li><a class=\"dropdown-item\" href=\"";
        // line 85
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("crud_etat_index");
        echo "\">Voir les état</a></li>
                            <li><div class=\"dropdown-divider\"></div></li>
                            <li><a class=\"dropdown-item\" href=\"";
        // line 87
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("crud_etat_new");
        echo "\">Créer un état</a></li>
                        </ul>
                    </li>
                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"dropdown01\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">Les Frais Forfaits</a>
                        <ul class=\"dropdown-menu\" aria-labelledby=\"dropdown01\">
                            <li><a class=\"dropdown-item\" href=\"";
        // line 93
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fraisforfait_crud_index");
        echo "\">Voir frais forfaits</a></li>
                            <li><div class=\"dropdown-divider\"></div></li>
                            <li><a class=\"dropdown-item\" href=\"";
        // line 95
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fraisforfait_crud_new");
        echo "\">Créer un frais forfait</a></li>
                        </ul>
                    </li>
                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"dropdown01\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">Les Fiches Frais </a>
                        <ul class=\"dropdown-menu\" aria-labelledby=\"dropdown01\">
                            <li><a class=\"dropdown-item\" href=\"";
        // line 101
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fichefrais_crud_index");
        echo "\">Voir fiches frais </a></li>
                            <li><div class=\"dropdown-divider\"></div></li>
                            <li><a class=\"dropdown-item\" href=\"";
        // line 103
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fichefrais_crud_new");
        echo "\">Créer une fiche frais</a></li>
                        </ul>
                    </li>
                </ul>
            </div> <!-- end of navbar-collapse -->
        </div> <!-- end of container -->
    </nav> <!-- end of navbar -->
    <!-- end of navigation -->

      
    <!-- Header -->
    <header id=\"header\" class=\"header\">
        <div class=\"header-content\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        ";
        // line 119
        $this->displayBlock('titre', $context, $blocks);
        // line 123
        echo "                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div> <!-- end of header-content -->
        
        <!-- Video Background -->
        <video autoplay loop muted id=\"video-background\" poster=\"images/header-background.jpg\" playsinline>
            <source src=\"";
        // line 130
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./images/header-background-video.mp4"), "html", null, true);
        echo "\" type=\"video/mp4\" />
        </video>
        <!-- end of video background -->

    </header> <!-- end of header -->
    <!-- end of header -->

";
        // line 137
        $this->displayBlock('corps', $context, $blocks);
        // line 254
        echo "    <!-- Footer -->
    <div class=\"footer\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"footer-col first\">
                        <h6>Galaxy Swiss Bourdin</h6>
                        <p class=\"p-small\">Merci pour votre lecture, si vous aimez vous pouvez nous le faire savoir via nos réseaux sociaux sur la droite.</p>
                    </div> <!-- end of footer-col -->
                    <div class=\"footer-col second\">
                        <h6></h6>
                    </div> <!-- end of footer-col -->
                    <div class=\"footer-col third\">
                        <span class=\"fa-stack\">
                            <a href=\"#your-link\">
                                <i class=\"fas fa-circle fa-stack-2x\"></i>
                                <i class=\"fab fa-facebook-f fa-stack-1x\"></i>
                            </a>
                        </span>
                        <span class=\"fa-stack\">
                            <a href=\"#your-link\">
                                <i class=\"fas fa-circle fa-stack-2x\"></i>
                                <i class=\"fab fa-twitter fa-stack-1x\"></i>
                            </a>
                        </span>
                        <span class=\"fa-stack\">
                            <a href=\"#your-link\">
                                <i class=\"fas fa-circle fa-stack-2x\"></i>
                                <i class=\"fab fa-pinterest-p fa-stack-1x\"></i>
                            </a>
                        </span>
                        <span class=\"fa-stack\">
                            <a href=\"#your-link\">
                                <i class=\"fas fa-circle fa-stack-2x\"></i>
                                <i class=\"fab fa-instagram fa-stack-1x\"></i>
                            </a>
                        </span>
                        <p class=\"p-small\">Notre e-mail <a href=\"mailto:contact@gsbExtranet.com\"><strong>contact@gsbExtranet.com</strong></a></p>
                    </div> <!-- end of footer-col -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of footer -->  
    <!-- end of footer -->

    

    <!-- Back To Top Button -->
    <button onclick=\"topFunction()\" id=\"myBtn\">
        <img src=\"images/up-arrow.png\" alt=\"alternative\">
    </button>
    <!-- end of back to top button -->
    \t
    <!-- Scripts -->
    <script src=\"";
        // line 308
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./js/bootstrap.min.js"), "html", null, true);
        echo "\"></script> <!-- Bootstrap framework -->
    <script src=\"";
        // line 309
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./js/swiper.min.js"), "html", null, true);
        echo "\"></script> <!-- Swiper for image and text sliders -->
    <script src=\"";
        // line 310
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./js/purecounter.min.js"), "html", null, true);
        echo "\"></script> <!-- Purecounter counter for statistics numbers -->
    <script src=\"";
        // line 311
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./js/isotope.pkgd.min.js"), "html", null, true);
        echo "\"></script> <!-- Isotope for filter -->
    <script src=\"";
        // line 312
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("./js/scripts.js"), "html", null, true);
        echo "\"></script> <!-- Custom scripts -->
</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 119
    public function block_titre($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "titre"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "titre"));

        echo "}
                        <h1 class=\"h1-large\">Galaxy Swiss Bourdin</h1>
                        <a class=\"btn-solid-lg\" href=\"#introduction\">Decouvrez-nous</a>
                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 137
    public function block_corps($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "corps"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "corps"));

        echo " 
    <!-- Introduction -->
    <div id=\"introduction\" class=\"cards-1\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <h2 class=\"h2-heading\">L’industrie pharmaceutique</h2>
                    <p class=\"p-heading\">L’industrie pharmaceutique est un secteur très lucratif dans lequel le mouvement de fusion acquisition
                                         est très fort. Les regroupements de laboratoires ces dernières années ont donné naissance à des
                                        entités gigantesques au sein desquelles le travail est longtemps resté organisé selon les anciennes
                                        structures.
                                        Des déboires divers récents autour de médicaments ou molécules ayant entraîné des complications
                                        médicales ont fait s'élever des voix contre une partie de l'activité des laboratoires : la visite médicale,
                                        réputée être le lieu d' arrangements entre l'industrie et les praticiens, et tout du moins un terrain
                                        d'influence opaque.</p>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class=\"row\">
                <div class=\"col-lg-12\">

                    <!-- Card -->
                    <div class=\"card\">
                        <div class=\"card-icon\">
                            <i class=\"fas fa-microscope\"></i>
                        </div>
                        <div class=\"card-body\">
                            <h4 class=\"card-title\">L'entreprise</h4>
                            <div class=\"card-text\">Le laboratoire Galaxy Swiss Bourdin (GSB) est issu de la fusion de deux géant : américain Galaxy
                                et le conglomérat européen Swiss Bourdin, lui même déjà union de trois petits laboratoires. En 2009, GSB devient un leader de ce secteur.
                                </div>
                        </div>
                    </div>
                    <!-- end of card -->

                    <!-- Card -->
                    <div class=\"card\">
                        <div class=\"card-icon\">
                            <i class=\"fas fa-location-dot\"></i>
                        </div>
                        <div class=\"card-body\">
                            <h4 class=\"card-title\">Ou sommes-nous situé</h4>
                            <div class=\"card-text\">L'entité Galaxy Swiss Bourdin Europe a établi son siège administratif à Paris.
Le siège social de la multinationale est situé à Philadelphie, Pennsylvanie, aux Etats-Unis.
La France a été choisie comme témoin pour l'amélioration du suivi de l'activité de visite.</div>
                        </div>
                    </div>
                    <!-- end of card -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of cards-1 -->
    <!-- end of introduction -->


    <!-- Details -->
\t<div class=\"split\">
\t\t<div class=\"area-1\">
\t\t</div><!-- end of area-1 on same line and no space between comments to eliminate margin white space --><div class=\"area-2 bg-gray\">
            <div class=\"container\">    
                <div class=\"row\">
                    <div class=\"col-lg-12\">     
                        
                        <!-- Text Container -->
                        <div class=\"text-container\">
                            <h2>Pourquoi nous choisir ?</h2>
                            <p>
                                Notre but est la recherche d'une optimisation de l’activité du groupe ainsi
                                constitué en réalisant des économies d’échelle dans la production et la distribution des médicaments, tout en prenant le meilleur
                                des deux laboratoires sur les produits concurrents.
                                <br /><br />
                                Tout ceci afin de vous faire parvenir des médicaments de meilleurs qualités un un coût plus faible
                            </p>
                        </div> <!-- end of text-container -->
                        <!-- end of text container -->

                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
\t\t</div> <!-- end of area-2 -->
    </div> <!-- end of split -->
    <!-- end of details -->
    
    
    <!-- Statistics -->
    <div class=\"counter bg-gray\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    
                    <!-- Counter -->
                    <div class=\"counter-container\">
                        <div class=\"counter-cell\">
                            <div data-purecounter-start=\"0\" data-purecounter-end=\"231\" data-purecounter-duration=\"3\" class=\"purecounter\">1</div>
                            <div class=\"counter-info\">Happy Customers</div>
                        </div> <!-- end of counter-cell -->
                        <div class=\"counter-cell\">
                            <div data-purecounter-start=\"0\" data-purecounter-end=\"385\" data-purecounter-duration=\"1.5\" class=\"purecounter\">1</div>
                            <div class=\"counter-info\">Issues Solved</div>
                        </div> <!-- end of counter-cell -->
                        <div class=\"counter-cell\">
                            <div data-purecounter-start=\"0\" data-purecounter-end=\"159\" data-purecounter-duration=\"3\" class=\"purecounter\">1</div>
                            <div class=\"counter-info\">Good Reviews</div>
                        </div> <!-- end of counter-cell -->
                        <div class=\"counter-cell\">
                            <div data-purecounter-start=\"0\" data-purecounter-end=\"128\" data-purecounter-duration=\"3\" class=\"purecounter\">1</div>
                            <div class=\"counter-info\">Case Studies</div>
                        </div> <!-- end of counter-cell -->
                    </div> <!-- end of counter-container -->
                    <!-- end of counter -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of counter -->
    <!-- end of statistics -->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  355 => 137,  333 => 119,  320 => 312,  316 => 311,  312 => 310,  308 => 309,  304 => 308,  248 => 254,  246 => 137,  236 => 130,  227 => 123,  225 => 119,  206 => 103,  201 => 101,  192 => 95,  187 => 93,  178 => 87,  173 => 85,  166 => 81,  160 => 78,  155 => 76,  150 => 74,  145 => 72,  140 => 70,  131 => 64,  122 => 58,  108 => 47,  92 => 34,  85 => 30,  81 => 29,  77 => 28,  73 => 27,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    
    <!-- SEO Meta Tags -->
    <meta name=\"description\" content=\"Your description\">
    <meta name=\"author\" content=\"Your name\">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on Facebook, Twitter, LinkedIn -->
\t<meta property=\"og:site_name\" conten    t=\"\" /> <!-- website name -->
\t<meta property=\"og:site\" content=\"\" /> <!-- website link -->
\t<meta property=\"og:title\" content=\"\"/> <!-- title shown in the actual shared post -->
\t<meta property=\"og:description\" content=\"\" /> <!-- description shown in the actual shared post -->
\t<meta property=\"og:image\" content=\"\" /> <!-- image link, make sure it's jpg -->
\t<meta property=\"og:url\" content=\"\" /> <!-- where do you want your post to link to -->
\t<meta name=\"twitter:card\" content=\"summary_large_image\"> <!-- to have large image post format in Twitter -->

    <!-- Webpage Title -->
    <title>Galaxy Swiss Bourdin</title>
    
    <!-- Styles -->
    <link href=\"https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;0,700;1,400&display=swap\" rel=\"stylesheet\">
    <link href=\"https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap\" rel=\"stylesheet\">
    <script src=\"https://kit.fontawesome.com/b801dc1910.js\" crossorigin=\"anonymous\"></script>
    <link href=\"{{ asset ('./css/bootstrap.min.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset ('./css/fontawesome-all.min.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset ('./css/swiper.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset ('./css/styles.css') }}\" rel=\"stylesheet\">
    
\t
\t<!-- Favicon  -->
    <link rel=\"icon\" href=\"asset{{ '/images/favicon.png' }}\">
    
</head>
<body>
    
    <!-- Navigation -->
    <nav id=\"navbar\" class=\"navbar navbar-expand-lg fixed-top navbar-dark\" aria-label=\"Main navigation\">
        <div class=\"container\">

            <!-- Image Logo -->
            <!--<a class=\"navbar-brand logo-image\" href=\"index.html\"><img src=\"images/logo.svg\" alt=\"alternative\"></a> -->

            <!-- Text Logo - Use this if you don't have a graphic logo -->
            <a class=\"navbar-brand logo-text\" href=\"{{ path('default') }}\">Galaxy Swiss Bourdin</a>

            <button class=\"navbar-toggler p-0 border-0\" type=\"button\" id=\"navbarSideCollapse\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>

            <div class=\"navbar-collapse offcanvas-collapse\" id=\"navbarsExampleDefault\">
                <ul class=\"navbar-nav ms-auto navbar-nav-scroll\">
                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"dropdown01\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">Le Réseau</a>
                        <ul class=\"dropdown-menu\" aria-labelledby=\"dropdown01\">
                            <li><a class=\"dropdown-item\" href=\"{{ path('gestion') }}\">Notre répartition du réseau informatique</a></li>
                        </ul>
                    </li>
                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"dropdown01\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">Structure Interne</a>
                        <ul class=\"dropdown-menu\" aria-labelledby=\"dropdown01\">
                            <li><a class=\"dropdown-item\" href=\"{{ path('equipements') }}\">Notre Équipements</a></li>
                        </ul>
                    </li>
                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"dropdown01\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">Les utilisateurs</a>
                        <ul class=\"dropdown-menu\" aria-labelledby=\"dropdown01\">
                            <li><a class=\"dropdown-item\" href=\"{{ path('tout_utilisateur') }}\">Tout les utilisateurs</a></li>
                            <li><div class=\"dropdown-divider\"></div></li>
                            <li><a class=\"dropdown-item\" href=\"{{ path('users_cahors') }}\">Liste des Cadurciens</a></li>
                            <li><div class=\"dropdown-divider\"></div></li>
                            <li><a class=\"dropdown-item\" href=\"{{ path('users_ayant_frais') }}\">Ayant des frais</a></li>
                            <li><div class=\"dropdown-divider\"></div></li>
                            <li><a class=\"dropdown-item\" href=\"{{ path('users_sans_frais') }}\">N'ayant pas de frais</a></li>
                            <li><div class=\"dropdown-divider\"></div></li>
                            <li><a class=\"dropdown-item\" href=\"{{ path('users_nombre_frais') }}\">Nombre de frais</a></li>
                        </ul>
                    </li>
                    <a class=\"dropdown-item\" href=\"{{ path('domaines') }}\">Les domaines</a>
                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"dropdown01\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">Les Etats</a>
                        <ul class=\"dropdown-menu\" aria-labelledby=\"dropdown01\">
                            <li><a class=\"dropdown-item\" href=\"{{ path('crud_etat_index') }}\">Voir les état</a></li>
                            <li><div class=\"dropdown-divider\"></div></li>
                            <li><a class=\"dropdown-item\" href=\"{{ path('crud_etat_new') }}\">Créer un état</a></li>
                        </ul>
                    </li>
                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"dropdown01\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">Les Frais Forfaits</a>
                        <ul class=\"dropdown-menu\" aria-labelledby=\"dropdown01\">
                            <li><a class=\"dropdown-item\" href=\"{{ path('fraisforfait_crud_index') }}\">Voir frais forfaits</a></li>
                            <li><div class=\"dropdown-divider\"></div></li>
                            <li><a class=\"dropdown-item\" href=\"{{ path('fraisforfait_crud_new') }}\">Créer un frais forfait</a></li>
                        </ul>
                    </li>
                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"dropdown01\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">Les Fiches Frais </a>
                        <ul class=\"dropdown-menu\" aria-labelledby=\"dropdown01\">
                            <li><a class=\"dropdown-item\" href=\"{{ path('fichefrais_crud_index') }}\">Voir fiches frais </a></li>
                            <li><div class=\"dropdown-divider\"></div></li>
                            <li><a class=\"dropdown-item\" href=\"{{ path('fichefrais_crud_new') }}\">Créer une fiche frais</a></li>
                        </ul>
                    </li>
                </ul>
            </div> <!-- end of navbar-collapse -->
        </div> <!-- end of container -->
    </nav> <!-- end of navbar -->
    <!-- end of navigation -->

      
    <!-- Header -->
    <header id=\"header\" class=\"header\">
        <div class=\"header-content\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        {% block titre %}}
                        <h1 class=\"h1-large\">Galaxy Swiss Bourdin</h1>
                        <a class=\"btn-solid-lg\" href=\"#introduction\">Decouvrez-nous</a>
                        {% endblock %}
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div> <!-- end of header-content -->
        
        <!-- Video Background -->
        <video autoplay loop muted id=\"video-background\" poster=\"images/header-background.jpg\" playsinline>
            <source src=\"{{ asset('./images/header-background-video.mp4') }}\" type=\"video/mp4\" />
        </video>
        <!-- end of video background -->

    </header> <!-- end of header -->
    <!-- end of header -->

{% block corps %} 
    <!-- Introduction -->
    <div id=\"introduction\" class=\"cards-1\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <h2 class=\"h2-heading\">L’industrie pharmaceutique</h2>
                    <p class=\"p-heading\">L’industrie pharmaceutique est un secteur très lucratif dans lequel le mouvement de fusion acquisition
                                         est très fort. Les regroupements de laboratoires ces dernières années ont donné naissance à des
                                        entités gigantesques au sein desquelles le travail est longtemps resté organisé selon les anciennes
                                        structures.
                                        Des déboires divers récents autour de médicaments ou molécules ayant entraîné des complications
                                        médicales ont fait s'élever des voix contre une partie de l'activité des laboratoires : la visite médicale,
                                        réputée être le lieu d' arrangements entre l'industrie et les praticiens, et tout du moins un terrain
                                        d'influence opaque.</p>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class=\"row\">
                <div class=\"col-lg-12\">

                    <!-- Card -->
                    <div class=\"card\">
                        <div class=\"card-icon\">
                            <i class=\"fas fa-microscope\"></i>
                        </div>
                        <div class=\"card-body\">
                            <h4 class=\"card-title\">L'entreprise</h4>
                            <div class=\"card-text\">Le laboratoire Galaxy Swiss Bourdin (GSB) est issu de la fusion de deux géant : américain Galaxy
                                et le conglomérat européen Swiss Bourdin, lui même déjà union de trois petits laboratoires. En 2009, GSB devient un leader de ce secteur.
                                </div>
                        </div>
                    </div>
                    <!-- end of card -->

                    <!-- Card -->
                    <div class=\"card\">
                        <div class=\"card-icon\">
                            <i class=\"fas fa-location-dot\"></i>
                        </div>
                        <div class=\"card-body\">
                            <h4 class=\"card-title\">Ou sommes-nous situé</h4>
                            <div class=\"card-text\">L'entité Galaxy Swiss Bourdin Europe a établi son siège administratif à Paris.
Le siège social de la multinationale est situé à Philadelphie, Pennsylvanie, aux Etats-Unis.
La France a été choisie comme témoin pour l'amélioration du suivi de l'activité de visite.</div>
                        </div>
                    </div>
                    <!-- end of card -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of cards-1 -->
    <!-- end of introduction -->


    <!-- Details -->
\t<div class=\"split\">
\t\t<div class=\"area-1\">
\t\t</div><!-- end of area-1 on same line and no space between comments to eliminate margin white space --><div class=\"area-2 bg-gray\">
            <div class=\"container\">    
                <div class=\"row\">
                    <div class=\"col-lg-12\">     
                        
                        <!-- Text Container -->
                        <div class=\"text-container\">
                            <h2>Pourquoi nous choisir ?</h2>
                            <p>
                                Notre but est la recherche d'une optimisation de l’activité du groupe ainsi
                                constitué en réalisant des économies d’échelle dans la production et la distribution des médicaments, tout en prenant le meilleur
                                des deux laboratoires sur les produits concurrents.
                                <br /><br />
                                Tout ceci afin de vous faire parvenir des médicaments de meilleurs qualités un un coût plus faible
                            </p>
                        </div> <!-- end of text-container -->
                        <!-- end of text container -->

                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
\t\t</div> <!-- end of area-2 -->
    </div> <!-- end of split -->
    <!-- end of details -->
    
    
    <!-- Statistics -->
    <div class=\"counter bg-gray\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    
                    <!-- Counter -->
                    <div class=\"counter-container\">
                        <div class=\"counter-cell\">
                            <div data-purecounter-start=\"0\" data-purecounter-end=\"231\" data-purecounter-duration=\"3\" class=\"purecounter\">1</div>
                            <div class=\"counter-info\">Happy Customers</div>
                        </div> <!-- end of counter-cell -->
                        <div class=\"counter-cell\">
                            <div data-purecounter-start=\"0\" data-purecounter-end=\"385\" data-purecounter-duration=\"1.5\" class=\"purecounter\">1</div>
                            <div class=\"counter-info\">Issues Solved</div>
                        </div> <!-- end of counter-cell -->
                        <div class=\"counter-cell\">
                            <div data-purecounter-start=\"0\" data-purecounter-end=\"159\" data-purecounter-duration=\"3\" class=\"purecounter\">1</div>
                            <div class=\"counter-info\">Good Reviews</div>
                        </div> <!-- end of counter-cell -->
                        <div class=\"counter-cell\">
                            <div data-purecounter-start=\"0\" data-purecounter-end=\"128\" data-purecounter-duration=\"3\" class=\"purecounter\">1</div>
                            <div class=\"counter-info\">Case Studies</div>
                        </div> <!-- end of counter-cell -->
                    </div> <!-- end of counter-container -->
                    <!-- end of counter -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of counter -->
    <!-- end of statistics -->
{% endblock %}
    <!-- Footer -->
    <div class=\"footer\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"footer-col first\">
                        <h6>Galaxy Swiss Bourdin</h6>
                        <p class=\"p-small\">Merci pour votre lecture, si vous aimez vous pouvez nous le faire savoir via nos réseaux sociaux sur la droite.</p>
                    </div> <!-- end of footer-col -->
                    <div class=\"footer-col second\">
                        <h6></h6>
                    </div> <!-- end of footer-col -->
                    <div class=\"footer-col third\">
                        <span class=\"fa-stack\">
                            <a href=\"#your-link\">
                                <i class=\"fas fa-circle fa-stack-2x\"></i>
                                <i class=\"fab fa-facebook-f fa-stack-1x\"></i>
                            </a>
                        </span>
                        <span class=\"fa-stack\">
                            <a href=\"#your-link\">
                                <i class=\"fas fa-circle fa-stack-2x\"></i>
                                <i class=\"fab fa-twitter fa-stack-1x\"></i>
                            </a>
                        </span>
                        <span class=\"fa-stack\">
                            <a href=\"#your-link\">
                                <i class=\"fas fa-circle fa-stack-2x\"></i>
                                <i class=\"fab fa-pinterest-p fa-stack-1x\"></i>
                            </a>
                        </span>
                        <span class=\"fa-stack\">
                            <a href=\"#your-link\">
                                <i class=\"fas fa-circle fa-stack-2x\"></i>
                                <i class=\"fab fa-instagram fa-stack-1x\"></i>
                            </a>
                        </span>
                        <p class=\"p-small\">Notre e-mail <a href=\"mailto:contact@gsbExtranet.com\"><strong>contact@gsbExtranet.com</strong></a></p>
                    </div> <!-- end of footer-col -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of footer -->  
    <!-- end of footer -->

    

    <!-- Back To Top Button -->
    <button onclick=\"topFunction()\" id=\"myBtn\">
        <img src=\"images/up-arrow.png\" alt=\"alternative\">
    </button>
    <!-- end of back to top button -->
    \t
    <!-- Scripts -->
    <script src=\"{{ asset('./js/bootstrap.min.js') }}\"></script> <!-- Bootstrap framework -->
    <script src=\"{{ asset('./js/swiper.min.js') }}\"></script> <!-- Swiper for image and text sliders -->
    <script src=\"{{ asset('./js/purecounter.min.js') }}\"></script> <!-- Purecounter counter for statistics numbers -->
    <script src=\"{{ asset('./js/isotope.pkgd.min.js') }}\"></script> <!-- Isotope for filter -->
    <script src=\"{{ asset('./js/scripts.js') }}\"></script> <!-- Custom scripts -->
</body>
</html>", "base.html.twig", "C:\\Users\\quent\\OneDrive\\Bureau\\ecole doc+logiciel\\cour\\Programmation\\WEB\\Symfony\\GSB_SYMFONY\\GSB\\templates\\base.html.twig");
    }
}
