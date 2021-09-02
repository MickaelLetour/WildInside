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

/* theme/index.html.twig */
class __TwigTemplate_abd8da362aed980128d7d9801630b1113d3593aab4385f2e8f7da5b24a5432de extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "theme/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "theme/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "theme/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["theme"]) || array_key_exists("theme", $context) ? $context["theme"] : (function () { throw new RuntimeError('Variable "theme" does not exist.', 3, $this->source); })()), "name", [], "any", false, false, false, 3), "html", null, true);
        echo " - Wild Inside";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "    <div class=\"min-vh-100 mt-4\">
        <div>
            <h1>";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["theme"]) || array_key_exists("theme", $context) ? $context["theme"] : (function () { throw new RuntimeError('Variable "theme" does not exist.', 8, $this->source); })()), "name", [], "any", false, false, false, 8), "html", null, true);
        echo "</h1>
            <p>";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["theme"]) || array_key_exists("theme", $context) ? $context["theme"] : (function () { throw new RuntimeError('Variable "theme" does not exist.', 9, $this->source); })()), "description", [], "any", false, false, false, 9), "html", null, true);
        echo "</p>
        </div>

        <div class=\"row justify-content-center\">
            ";
        // line 13
        if ((0 === twig_compare((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 13, $this->source); })()), null))) {
            // line 14
            echo "                <h2 class=\"mt-5\">Article à venir...</h2>
            ";
        } else {
            // line 16
            echo "                ";
            $context["j"] = 1;
            // line 17
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 17, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                // line 18
                echo "                    ";
                if (((0 !== twig_compare($context["article"], null)) && (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["article"], 0, [], "any", false, false, false, 18), "article", [], "any", false, false, false, 18), "online", [], "any", false, false, false, 18), true)))) {
                    // line 19
                    echo "                        ";
                    $context["j"] = ((isset($context["j"]) || array_key_exists("j", $context) ? $context["j"] : (function () { throw new RuntimeError('Variable "j" does not exist.', 19, $this->source); })()) + 1);
                    // line 20
                    echo "                        <div class=\"carousel-theme row col-10 col-lg-12 my-4 border rounded p-0 justify-content-center\">
                            <div class=\"col-12 col-md-4 p-0 justify-content-center align-items-center row m-0 bg-dark\">
                                <div id=\"carouselControlsTheme";
                    // line 22
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["article"], 0, [], "any", false, false, false, 22), "article", [], "any", false, false, false, 22), "id", [], "any", false, false, false, 22), "html", null, true);
                    echo "\" class=\"carousel slide\" data-ride=\"carousel\">
                                    <div class=\"carousel-inner p-3\">
                                        ";
                    // line 24
                    $context["i"] = 0;
                    // line 25
                    echo "                                        ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["article"]);
                    foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                        // line 26
                        echo "                                            ";
                        if (((0 === twig_compare((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 26, $this->source); })()), 0)) && (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["image"], "position", [], "any", false, false, false, 26), "thumbnail")))) {
                            // line 27
                            echo "                                                <div class=\"carousel-item active\">
                                                    <div class=\"sizeImgCarousel d-flex justify-content-center\">
                                                        <img class=\"img-fluid rounded\" src=\"/uploads/";
                            // line 29
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "image", [], "any", false, false, false, 29), "html", null, true);
                            echo "\" alt=\"/uploads/";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "image", [], "any", false, false, false, 29), "html", null, true);
                            echo "\">
                                                    </div>
                                                </div>
                                                ";
                            // line 32
                            $context["i"] = ((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 32, $this->source); })()) + 1);
                            // line 33
                            echo "                                            ";
                        } elseif (((0 === twig_compare((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 33, $this->source); })()), 1)) && (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["image"], "position", [], "any", false, false, false, 33), "thumbnail")))) {
                            // line 34
                            echo "                                                <div class=\"carousel-item\">
                                                    <div class=\"sizeImgCarousel d-flex justify-content-center\">
                                                        <img class=\"img-fluid rounded\" src=\"/uploads/";
                            // line 36
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "image", [], "any", false, false, false, 36), "html", null, true);
                            echo "\" alt=\"/uploads/";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "image", [], "any", false, false, false, 36), "html", null, true);
                            echo "\">
                                                    </div>
                                                </div>
                                            ";
                        }
                        // line 40
                        echo "                                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 41
                    echo "                                        <a class=\"carousel-control-prev\" href=\"#carouselControlsTheme";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["article"], 0, [], "any", false, false, false, 41), "article", [], "any", false, false, false, 41), "id", [], "any", false, false, false, 41), "html", null, true);
                    echo "\" role=\"button\" data-slide=\"prev\">
                                            <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                                            <span class=\"sr-only\">Previous</span>
                                        </a>
                                        <a class=\"carousel-control-next\" href=\"#carouselControlsTheme";
                    // line 45
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["article"], 0, [], "any", false, false, false, 45), "article", [], "any", false, false, false, 45), "id", [], "any", false, false, false, 45), "html", null, true);
                    echo "\" role=\"button\" data-slide=\"next\">
                                            <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                                            <span class=\"sr-only\">Next</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-12 col-md-8 p-3 m-0 row align-items-center justify-content-center\">
                                <div class=\"col-12\">
                                    <h3 class=\"text-center\">";
                    // line 54
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["article"], 0, [], "any", false, false, false, 54), "article", [], "any", false, false, false, 54), "title", [], "any", false, false, false, 54), "html", null, true);
                    echo "</h3>
                                    <div>
                                        <div class=\"articleDescription m-auto\">
                                            ";
                    // line 57
                    if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["article"], 0, [], "any", false, false, false, 57), "article", [], "any", false, false, false, 57), "description", [], "any", false, false, false, 57), null))) {
                        // line 58
                        echo "                                                ";
                        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["article"], 0, [], "any", false, false, false, 58), "article", [], "any", false, false, false, 58), "description", [], "any", false, false, false, 58);
                        echo "
                                            ";
                    } else {
                        // line 60
                        echo "                                                ";
                        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["article"], 0, [], "any", false, false, false, 60), "article", [], "any", false, false, false, 60), "content", [], "any", false, false, false, 60);
                        echo "
                                            ";
                    }
                    // line 62
                    echo "                                        </div>
                                        <a href=\"";
                    // line 63
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["article"], 0, [], "any", false, false, false, 63), "article", [], "any", false, false, false, 63), "id", [], "any", false, false, false, 63)]), "html", null, true);
                    echo "\"><p class=\"text-center\">Voir plus</p></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    ";
                }
                // line 69
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 70
            echo "                ";
            if ((0 === twig_compare((isset($context["j"]) || array_key_exists("j", $context) ? $context["j"] : (function () { throw new RuntimeError('Variable "j" does not exist.', 70, $this->source); })()), 1))) {
                // line 71
                echo "                    <h2 class=\"mt-5\">Article à venir...</h2>
                ";
            }
            // line 73
            echo "            ";
        }
        // line 74
        echo "        </div>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "theme/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  247 => 74,  244 => 73,  240 => 71,  237 => 70,  231 => 69,  222 => 63,  219 => 62,  213 => 60,  207 => 58,  205 => 57,  199 => 54,  187 => 45,  179 => 41,  173 => 40,  164 => 36,  160 => 34,  157 => 33,  155 => 32,  147 => 29,  143 => 27,  140 => 26,  135 => 25,  133 => 24,  128 => 22,  124 => 20,  121 => 19,  118 => 18,  113 => 17,  110 => 16,  106 => 14,  104 => 13,  97 => 9,  93 => 8,  89 => 6,  79 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ theme.name }} - Wild Inside{% endblock %}

{% block content %}
    <div class=\"min-vh-100 mt-4\">
        <div>
            <h1>{{ theme.name }}</h1>
            <p>{{ theme.description }}</p>
        </div>

        <div class=\"row justify-content-center\">
            {% if articles == null %}
                <h2 class=\"mt-5\">Article à venir...</h2>
            {% else %}
                {% set j = 1 %}
                {% for article in articles %}
                    {% if (article != null) and (article.0.article.online == true) %}
                        {% set j = j + 1 %}
                        <div class=\"carousel-theme row col-10 col-lg-12 my-4 border rounded p-0 justify-content-center\">
                            <div class=\"col-12 col-md-4 p-0 justify-content-center align-items-center row m-0 bg-dark\">
                                <div id=\"carouselControlsTheme{{ article.0.article.id }}\" class=\"carousel slide\" data-ride=\"carousel\">
                                    <div class=\"carousel-inner p-3\">
                                        {% set i = 0 %}
                                        {% for image in article %}
                                            {% if ((i == 0) and (image.position == 'thumbnail')) %}
                                                <div class=\"carousel-item active\">
                                                    <div class=\"sizeImgCarousel d-flex justify-content-center\">
                                                        <img class=\"img-fluid rounded\" src=\"/uploads/{{ image.image }}\" alt=\"/uploads/{{ image.image }}\">
                                                    </div>
                                                </div>
                                                {% set i = i + 1 %}
                                            {% elseif ((i == 1) and (image.position == 'thumbnail')) %}
                                                <div class=\"carousel-item\">
                                                    <div class=\"sizeImgCarousel d-flex justify-content-center\">
                                                        <img class=\"img-fluid rounded\" src=\"/uploads/{{ image.image }}\" alt=\"/uploads/{{ image.image }}\">
                                                    </div>
                                                </div>
                                            {% endif %}
                                        {% endfor %}
                                        <a class=\"carousel-control-prev\" href=\"#carouselControlsTheme{{ article.0.article.id }}\" role=\"button\" data-slide=\"prev\">
                                            <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
                                            <span class=\"sr-only\">Previous</span>
                                        </a>
                                        <a class=\"carousel-control-next\" href=\"#carouselControlsTheme{{ article.0.article.id }}\" role=\"button\" data-slide=\"next\">
                                            <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
                                            <span class=\"sr-only\">Next</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-12 col-md-8 p-3 m-0 row align-items-center justify-content-center\">
                                <div class=\"col-12\">
                                    <h3 class=\"text-center\">{{ article.0.article.title }}</h3>
                                    <div>
                                        <div class=\"articleDescription m-auto\">
                                            {% if article.0.article.description != null %}
                                                {{ article.0.article.description | raw }}
                                            {% else %}
                                                {{ article.0.article.content | raw }}
                                            {% endif %}
                                        </div>
                                        <a href=\"{{ path('article', {'id' : article.0.article.id}) }}\"><p class=\"text-center\">Voir plus</p></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    {% endif %}
                {% endfor %}
                {% if j == 1 %}
                    <h2 class=\"mt-5\">Article à venir...</h2>
                {% endif %}
            {% endif %}
        </div>
    </div>

{% endblock %}
", "theme/index.html.twig", "C:\\laragon\\www\\client\\WildInside\\templates\\theme\\index.html.twig");
    }
}
