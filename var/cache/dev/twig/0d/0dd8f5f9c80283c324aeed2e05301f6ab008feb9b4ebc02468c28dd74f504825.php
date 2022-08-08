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
class __TwigTemplate_f5493354e597a391b80685afa2b70a86c0a86710745ea29d93fc1a44e5c8262c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'banner' => [$this, 'block_banner'],
            'content' => [$this, 'block_content'],
            'javascripts' => [$this, 'block_javascripts'],
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
<html lang=\"fr\">
    <head>
        <meta charset=\"utf-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
        <meta name=\"description\" content=\"\">
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"canonical\" href=\"\">
        <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/wildinside.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css'>
        <script src=\"https://code.jquery.com/jquery-3.5.1.slim.min.js\"></script>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.min.js'></script>
        <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\">
        <link href=\"https://fonts.googleapis.com/css2?family=Caveat&display=swap\" rel=\"stylesheet\">
        <script src=\"https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js\"></script>
        <script src=\"https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.min.js\"></script>
        <script src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/bootstrap.bundle.js"), "html", null, true);
        echo "\"></script>
        <style>
            .bd-placeholder-img {
                font-size: 1.125rem;
                text-anchor: middle;
                -webkit-user-select: none;
                -moz-user-select: none;
                -ms-user-select: none;
                user-select: none;
            }

            @media (min-width: 768px) {
                .bd-placeholder-img-lg {
                    font-size: 3.5rem;
                }
            }
        </style>

        <link href=\"https://fonts.googleapis.com/css?family=Playfair&#43;Display:700,900\" rel=\"stylesheet\">
        <!-- Custom styles for this template -->
        <link href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/blog.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    </head>
    <body>

        ";
        // line 43
        if (        $this->hasBlock("header", $context, $blocks)) {
            // line 44
            echo "            <header class=\"header my-5\">
                <div class=\"text-light d-flex justify-content-center align-items-center\">
                    <div class=\"head\">
                        <h1 class=\"text-center\"><span class=\"head-name text-uppercase text-dark\">wild inside</span></h1>
                        <hr class=\"bg-dark\">
                        <h2 class=\"text-center\"><span class=\"head-function text-dark\"><span>Le soufle primaire de l'art d'intérieur</span></span></h2>
                    </div>
                </div>
            </header>
        ";
        }
        // line 54
        echo "
        <nav class=\"navbar navbar-dark bg-dark navbar-expand-md justify-content-center sticky-top\">
            <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>
            <div class=\"collapse navbar-collapse justify-content-around\" id=\"navbarSupportedContent\">
                <ul class=\"navbar-nav\">
                    <li class=\"nav-item active\">
                        <a class=\"nav-link text-center text-uppercase\" href=\"";
        // line 62
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">Accueil</a>
                    </li>
                    ";
        // line 64
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["themes"]) || array_key_exists("themes", $context) ? $context["themes"] : (function () { throw new RuntimeError('Variable "themes" does not exist.', 64, $this->source); })()), "theme", [], "any", false, false, false, 64));
        foreach ($context['_seq'] as $context["_key"] => $context["theme"]) {
            // line 65
            echo "                        <li class=\"nav-item\">
                            <a class=\"nav-link text-center text-uppercase\" href=\"";
            // line 66
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("theme", ["id" => twig_get_attribute($this->env, $this->source, $context["theme"], "id", [], "any", false, false, false, 66)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["theme"], "name", [], "any", false, false, false, 66), "html", null, true);
            echo "</a>
                        </li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['theme'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "                    <li class=\"nav-item\">
                        <a class=\"nav-link text-center text-uppercase\" href=\"";
        // line 70
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("comments");
        echo "\">commentaires</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link text-center text-uppercase\" href=\"";
        // line 73
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        echo "\">contact</a>
                    </li>
                </ul>
            </div>
        </nav>

        ";
        // line 79
        if (        $this->hasBlock("banner", $context, $blocks)) {
            // line 80
            echo "            ";
            $this->displayBlock('banner', $context, $blocks);
            // line 81
            echo "        ";
        }
        // line 82
        echo "
        <div class=\"container\">
            ";
        // line 84
        $this->displayBlock('content', $context, $blocks);
        // line 85
        echo "        </div>

        <footer class=\"text-center text-lg-start\">
            <!-- Copyright -->
            <div class=\"text-center p-3\" style=\"background-color: rgba(0, 0, 0, 0.2)\">
                <span class=\"text-secondary\">© 2021 Copyright:</span>
                <a class=\"copyright\" href=\"https://www.letourwebdev.com/\">Mickael Letour</a>
            </div>
            <!-- Copyright -->
        </footer>
        ";
        // line 95
        $this->displayBlock('javascripts', $context, $blocks);
        // line 97
        echo "    </body>

</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Wild Inside";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 80
    public function block_banner($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "banner"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "banner"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 84
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 95
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 96
        echo "        ";
        
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
        return array (  277 => 96,  267 => 95,  249 => 84,  231 => 80,  212 => 7,  199 => 97,  197 => 95,  185 => 85,  183 => 84,  179 => 82,  176 => 81,  173 => 80,  171 => 79,  162 => 73,  156 => 70,  153 => 69,  142 => 66,  139 => 65,  135 => 64,  130 => 62,  120 => 54,  108 => 44,  106 => 43,  98 => 38,  75 => 18,  64 => 10,  60 => 9,  55 => 7,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
    <head>
        <meta charset=\"utf-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
        <meta name=\"description\" content=\"\">
        <title>{% block title %}Wild Inside{% endblock %}</title>
        <link rel=\"canonical\" href=\"\">
        <link href=\"{{ asset('assets/css/bootstrap.min.css') }}\" rel=\"stylesheet\">
        <link href=\"{{ asset('assets/css/wildinside.css') }}\" rel=\"stylesheet\">
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css'>
        <script src=\"https://code.jquery.com/jquery-3.5.1.slim.min.js\"></script>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.min.js'></script>
        <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\">
        <link href=\"https://fonts.googleapis.com/css2?family=Caveat&display=swap\" rel=\"stylesheet\">
        <script src=\"https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js\"></script>
        <script src=\"https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.min.js\"></script>
        <script src=\"{{ asset('assets/js/bootstrap.bundle.js') }}\"></script>
        <style>
            .bd-placeholder-img {
                font-size: 1.125rem;
                text-anchor: middle;
                -webkit-user-select: none;
                -moz-user-select: none;
                -ms-user-select: none;
                user-select: none;
            }

            @media (min-width: 768px) {
                .bd-placeholder-img-lg {
                    font-size: 3.5rem;
                }
            }
        </style>

        <link href=\"https://fonts.googleapis.com/css?family=Playfair&#43;Display:700,900\" rel=\"stylesheet\">
        <!-- Custom styles for this template -->
        <link href=\"{{ asset('assets/css/blog.css') }}\" rel=\"stylesheet\">

    </head>
    <body>

        {% if block('header') is defined %}
            <header class=\"header my-5\">
                <div class=\"text-light d-flex justify-content-center align-items-center\">
                    <div class=\"head\">
                        <h1 class=\"text-center\"><span class=\"head-name text-uppercase text-dark\">wild inside</span></h1>
                        <hr class=\"bg-dark\">
                        <h2 class=\"text-center\"><span class=\"head-function text-dark\"><span>Le soufle primaire de l'art d'intérieur</span></span></h2>
                    </div>
                </div>
            </header>
        {% endif %}

        <nav class=\"navbar navbar-dark bg-dark navbar-expand-md justify-content-center sticky-top\">
            <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>
            <div class=\"collapse navbar-collapse justify-content-around\" id=\"navbarSupportedContent\">
                <ul class=\"navbar-nav\">
                    <li class=\"nav-item active\">
                        <a class=\"nav-link text-center text-uppercase\" href=\"{{ path('home') }}\">Accueil</a>
                    </li>
                    {% for theme in themes.theme %}
                        <li class=\"nav-item\">
                            <a class=\"nav-link text-center text-uppercase\" href=\"{{ path('theme', {'id' : theme.id}) }}\">{{ theme.name }}</a>
                        </li>
                    {% endfor %}
                    <li class=\"nav-item\">
                        <a class=\"nav-link text-center text-uppercase\" href=\"{{ path(\"comments\") }}\">commentaires</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link text-center text-uppercase\" href=\"{{ path(\"contact\") }}\">contact</a>
                    </li>
                </ul>
            </div>
        </nav>

        {% if block('banner') is defined %}
            {% block banner %}{% endblock %}
        {% endif %}

        <div class=\"container\">
            {% block content %}{% endblock %}
        </div>

        <footer class=\"text-center text-lg-start\">
            <!-- Copyright -->
            <div class=\"text-center p-3\" style=\"background-color: rgba(0, 0, 0, 0.2)\">
                <span class=\"text-secondary\">© 2021 Copyright:</span>
                <a class=\"copyright\" href=\"https://www.letourwebdev.com/\">Mickael Letour</a>
            </div>
            <!-- Copyright -->
        </footer>
        {% block javascripts %}
        {% endblock %}
    </body>

</html>
", "base.html.twig", "C:\\Users\\micka\\dev\\client\\WildInside\\templates\\base.html.twig");
    }
}
