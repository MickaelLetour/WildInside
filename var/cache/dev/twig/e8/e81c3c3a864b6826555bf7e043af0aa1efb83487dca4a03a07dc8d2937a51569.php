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

/* home/index.html.twig */
class __TwigTemplate_1a32aa82f9fb703bc1f326886d89a96a16b71b4490817772f20ceaa2497b4bc7 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'header' => [$this, 'block_header'],
            'banner' => [$this, 'block_banner'],
            'content' => [$this, 'block_content'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_banner($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "banner"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "banner"));

        // line 6
        echo "    ";
        if ((0 !== twig_compare((isset($context["banner"]) || array_key_exists("banner", $context) ? $context["banner"] : (function () { throw new RuntimeError('Variable "banner" does not exist.', 6, $this->source); })()), null))) {
            // line 7
            echo "        <div class=\"banner bannerDesktop bg-dark mb-5\">
            <img src=\"/uploads/";
            // line 8
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["banner"]) || array_key_exists("banner", $context) ? $context["banner"] : (function () { throw new RuntimeError('Variable "banner" does not exist.', 8, $this->source); })()), "image", [], "any", false, false, false, 8), "html", null, true);
            echo "\" alt=\"/uploads/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["banner"]) || array_key_exists("banner", $context) ? $context["banner"] : (function () { throw new RuntimeError('Variable "banner" does not exist.', 8, $this->source); })()), "image", [], "any", false, false, false, 8), "html", null, true);
            echo "\" class=\"img-fluid w-100\">
        </div>
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 13
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 14
        echo "
    <h2 class=\"text-center\">Mes derniers Articles</h2>
    <hr>
    <div class=\"row justify-content-center\">

        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lastArticles"]) || array_key_exists("lastArticles", $context) ? $context["lastArticles"] : (function () { throw new RuntimeError('Variable "lastArticles" does not exist.', 19, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 20
            echo "            ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["article"], 1, [], "any", false, false, false, 20), "online", [], "any", false, false, false, 20), true))) {
                // line 21
                echo "                <div class=\"carousel carousel-home row col-10 col-lg-12 my-4 border rounded p-0 justify-content-center\">
                    <div class=\"col-12 col-md-4 p-0 justify-content-center align-items-center row m-0 bg-dark\">
                        <div id=\"carouselControlsHome";
                // line 23
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["article"], 1, [], "any", false, false, false, 23), "id", [], "any", false, false, false, 23), "html", null, true);
                echo "\" class=\"carousel slide\" data-ride=\"carousel\">
                            <div class=\"carousel-inner p-3\">
                                ";
                // line 25
                $context["i"] = 0;
                // line 26
                echo "                                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["article"], 0, [], "any", false, false, false, 26));
                foreach ($context['_seq'] as $context["_key"] => $context["images"]) {
                    // line 27
                    echo "                                    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["images"]);
                    foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                        // line 28
                        echo "                                        ";
                        if ((0 === twig_compare((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 28, $this->source); })()), 0))) {
                            // line 29
                            echo "                                            <div class=\"carousel-item active\">
                                                <div class=\"sizeImgCarousel d-flex justify-content-center\">
                                                    <img class=\"img-fluid rounded\" src=\"/uploads/";
                            // line 31
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "image", [], "any", false, false, false, 31), "html", null, true);
                            echo "\" alt=\"/uploads/";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "image", [], "any", false, false, false, 31), "html", null, true);
                            echo "\">
                                                </div>
                                            </div>
                                            ";
                            // line 34
                            $context["i"] = ((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 34, $this->source); })()) + 1);
                            // line 35
                            echo "                                        ";
                        } else {
                            // line 36
                            echo "                                            <div class=\"carousel-item\">
                                                <div class=\"sizeImgCarousel d-flex justify-content-center\">
                                                    <img class=\"img-fluid rounded\" src=\"/uploads/";
                            // line 38
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "image", [], "any", false, false, false, 38), "html", null, true);
                            echo "\" alt=\"/uploads/";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "image", [], "any", false, false, false, 38), "html", null, true);
                            echo "\">
                                                </div>
                                            </div>
                                        ";
                        }
                        // line 42
                        echo "                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 43
                    echo "                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['images'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 44
                echo "                                <a class=\"carousel-control-prev\" href=\"#carouselControlsHome";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["article"], 1, [], "any", false, false, false, 44), "id", [], "any", false, false, false, 44), "html", null, true);
                echo "\" role=\"button\" data-slide=\"prev\">
                                    <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                                    <span class=\"sr-only\">Previous</span>
                                </a>
                                <a class=\"carousel-control-next\" href=\"#carouselControlsHome";
                // line 48
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["article"], 1, [], "any", false, false, false, 48), "id", [], "any", false, false, false, 48), "html", null, true);
                echo "\" role=\"button\" data-slide=\"next\">
                                    <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                                    <span class=\"sr-only\">Next</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-12 col-md-8 p-3 m-0 row align-items-center justify-content-center\">
                        <div class=\"col-12\">
                            <h3 class=\"text-center mb-4\">";
                // line 57
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["article"], 1, [], "any", false, false, false, 57), "theme", [], "any", false, false, false, 57), "html", null, true);
                echo "</h3>
                            <h4 class=\"text-center\">";
                // line 58
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["article"], 1, [], "any", false, false, false, 58), "title", [], "any", false, false, false, 58), "html", null, true);
                echo "</h4>
                            <div>
                                <div class=\"articleDescription m-auto text-center\">
                                    ";
                // line 61
                if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["article"], 1, [], "any", false, false, false, 61), "description", [], "any", false, false, false, 61), null))) {
                    // line 62
                    echo "                                        ";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["article"], 1, [], "any", false, false, false, 62), "description", [], "any", false, false, false, 62);
                    echo "
                                    ";
                } else {
                    // line 64
                    echo "                                        ";
                    echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["article"], 1, [], "any", false, false, false, 64), "content", [], "any", false, false, false, 64);
                    echo "
                                    ";
                }
                // line 66
                echo "                                </div>
                                <a href=\"";
                // line 67
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["article"], 1, [], "any", false, false, false, 67), "id", [], "any", false, false, false, 67)]), "html", null, true);
                echo "\"><p class=\"text-center\">Voir plus</p></a>
                            </div>
                        </div>
                    </div>
                </div>
            ";
            }
            // line 73
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  262 => 74,  256 => 73,  247 => 67,  244 => 66,  238 => 64,  232 => 62,  230 => 61,  224 => 58,  220 => 57,  208 => 48,  200 => 44,  194 => 43,  188 => 42,  179 => 38,  175 => 36,  172 => 35,  170 => 34,  162 => 31,  158 => 29,  155 => 28,  150 => 27,  145 => 26,  143 => 25,  138 => 23,  134 => 21,  131 => 20,  127 => 19,  120 => 14,  110 => 13,  94 => 8,  91 => 7,  88 => 6,  78 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block header %}{% endblock %}

{% block banner %}
    {% if banner != null %}
        <div class=\"banner bannerDesktop bg-dark mb-5\">
            <img src=\"/uploads/{{ banner.image }}\" alt=\"/uploads/{{ banner.image }}\" class=\"img-fluid w-100\">
        </div>
    {% endif %}
{% endblock %}

{% block content %}

    <h2 class=\"text-center\">Mes derniers Articles</h2>
    <hr>
    <div class=\"row justify-content-center\">

        {% for article in lastArticles %}
            {% if article.1.online == true %}
                <div class=\"carousel carousel-home row col-10 col-lg-12 my-4 border rounded p-0 justify-content-center\">
                    <div class=\"col-12 col-md-4 p-0 justify-content-center align-items-center row m-0 bg-dark\">
                        <div id=\"carouselControlsHome{{ article.1.id }}\" class=\"carousel slide\" data-ride=\"carousel\">
                            <div class=\"carousel-inner p-3\">
                                {% set i = 0 %}
                                {% for images in article.0 %}
                                    {% for image in images %}
                                        {% if (i == 0) %}
                                            <div class=\"carousel-item active\">
                                                <div class=\"sizeImgCarousel d-flex justify-content-center\">
                                                    <img class=\"img-fluid rounded\" src=\"/uploads/{{ image.image }}\" alt=\"/uploads/{{ image.image }}\">
                                                </div>
                                            </div>
                                            {% set i = i + 1 %}
                                        {% else %}
                                            <div class=\"carousel-item\">
                                                <div class=\"sizeImgCarousel d-flex justify-content-center\">
                                                    <img class=\"img-fluid rounded\" src=\"/uploads/{{ image.image }}\" alt=\"/uploads/{{ image.image }}\">
                                                </div>
                                            </div>
                                        {% endif %}
                                    {% endfor %}
                                {% endfor %}
                                <a class=\"carousel-control-prev\" href=\"#carouselControlsHome{{ article.1.id }}\" role=\"button\" data-slide=\"prev\">
                                    <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                                    <span class=\"sr-only\">Previous</span>
                                </a>
                                <a class=\"carousel-control-next\" href=\"#carouselControlsHome{{ article.1.id }}\" role=\"button\" data-slide=\"next\">
                                    <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                                    <span class=\"sr-only\">Next</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-12 col-md-8 p-3 m-0 row align-items-center justify-content-center\">
                        <div class=\"col-12\">
                            <h3 class=\"text-center mb-4\">{{ article.1.theme }}</h3>
                            <h4 class=\"text-center\">{{ article.1.title }}</h4>
                            <div>
                                <div class=\"articleDescription m-auto text-center\">
                                    {% if article.1.description != null %}
                                        {{ article.1.description | raw }}
                                    {% else %}
                                        {{ article.1.content | raw }}
                                    {% endif %}
                                </div>
                                <a href=\"{{ path('article', {'id' : article.1.id}) }}\"><p class=\"text-center\">Voir plus</p></a>
                            </div>
                        </div>
                    </div>
                </div>
            {% endif %}
        {% endfor %}

    </div>

{% endblock %}
", "home/index.html.twig", "C:\\Users\\micka\\dev\\client\\WildInside\\templates\\home\\index.html.twig");
    }
}
