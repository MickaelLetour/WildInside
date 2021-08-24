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

/* article/index.html.twig */
class __TwigTemplate_23b6d375ca530871c51c12d91cfab0bf652da0240f4561acda4a0cb952967c62 extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "article/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "article/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "article/index.html.twig", 1);
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

        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 3, $this->source); })()), "title", [], "any", false, false, false, 3), "html", null, true);
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
        echo "
    <h1 class=\"text-center text-uppercase m-5\">";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 7, $this->source); })()), "title", [], "any", false, false, false, 7), "html", null, true);
        echo "</h1>";
        // line 9
        echo "
        <div class='grid'>
            <div class='grid-sizer'></div>
            <div class='gutter-sizer'></div>
            ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["moodboard"]) || array_key_exists("moodboard", $context) ? $context["moodboard"] : (function () { throw new RuntimeError('Variable "moodboard" does not exist.', 13, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            echo " 
                <div class='grid-item'>
                    <a class=\"linkLightbox\" href=\"/uploads/";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "image", [], "any", false, false, false, 15), "html", null, true);
            echo "\" data-toggle=\"lightbox\" data-gallery=\"gallery\">
                        <img class=\"img-fluid\" src=\"/uploads/";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "image", [], "any", false, false, false, 16), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "image", [], "any", false, false, false, 16), "html", null, true);
            echo "\">
                    </a>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "
            
            ";
        // line 23
        echo "            ";
        // line 59
        echo "            ";
        // line 82
        echo "        </div>
        ";
        // line 83
        if ((twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 83, $this->source); })()), "description", [], "any", false, false, false, 83) != null)) {
            // line 84
            echo "            <div class=\"col-12 col-lg-4 p-4\">";
            echo twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 84, $this->source); })()), "description", [], "any", false, false, false, 84);
            echo "</div>
        ";
        }
        // line 86
        echo "    ";
        // line 87
        echo "    ";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 87, $this->source); })()), "content", [], "any", false, false, false, 87) != null)) {
            // line 88
            echo "        <div class=\"mt-4\">";
            echo twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 88, $this->source); })()), "content", [], "any", false, false, false, 88);
            echo "</div>
    ";
        }
        // line 90
        echo "

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 94
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 95
        echo "    <script>

        \$(document).on('click', '[data-toggle=\"lightbox\"]', function(event) {
            event.preventDefault();
            \$(this).ekkoLightbox()
        });

        let \$grid = \$('.grid');

        \$grid.imagesLoaded().progress( function() {
            \$grid.masonry({
                itemSelector: '.grid-item',
                percentPosition: true,
                columnWidth: '.grid-sizer',
                gutter: '.gutter-sizer'
            });
        });

    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "article/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 95,  167 => 94,  155 => 90,  149 => 88,  146 => 87,  144 => 86,  138 => 84,  136 => 83,  133 => 82,  131 => 59,  129 => 23,  125 => 20,  113 => 16,  109 => 15,  102 => 13,  96 => 9,  93 => 7,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ article.title }} - Wild Inside{% endblock %}

{% block content %}

    <h1 class=\"text-center text-uppercase m-5\">{{ article.title }}</h1>{# 
    <div class=\"row flex min-vh-100 align-items-center justify-content-center m-auto\"> #}

        <div class='grid'>
            <div class='grid-sizer'></div>
            <div class='gutter-sizer'></div>
            {% for image in moodboard %} 
                <div class='grid-item'>
                    <a class=\"linkLightbox\" href=\"/uploads/{{ image.image }}\" data-toggle=\"lightbox\" data-gallery=\"gallery\">
                        <img class=\"img-fluid\" src=\"/uploads/{{ image.image }}\" alt=\"{{ image.image }}\">
                    </a>
                </div>
            {% endfor %}

            
            {# <div class=\"row col-12 col-lg-8 moodboard justify-content-center bg-dark p-2 mb-4\"> #}
            {# <div class=\"row col-6 justify-content-around p-1\">
                {% for image in moodboard.portraitGauche %}
                    {% set paysageDroite = 0 %}
                    
                    <div class=\"col-12 col-md-6 moodboard-tall p-1 row m-0 align-items-stretch\">
                        <div class=\"col-md-12 p-1 row m-0 align-items-center justify-content-center\">
                            <a class=\"linkLightbox\" href=\"/uploads/{{ image.image }}\" data-toggle=\"lightbox\" data-gallery=\"gallery\">
                                <img class=\"img-fluid border border-white rounded\" src=\"/uploads/{{ image.image }}\" alt=\"{{ image.image }}\">
                            </a>
                        </div>
                    </div>
                    <div class=\"col-12 col-md-6 p-1 row justify-content-around m-0\">
                        {% if (paysageDroite != 1) %}
                            {% for image in moodboard.paysageDroite %}
                                <div class=\"col-12 moodboard-small p-1 row align-items-center justify-content-center\">
                                    <a class=\"linkLightbox\" href=\"/uploads/{{ image.image }}\" data-toggle=\"lightbox\" data-gallery=\"gallery\">
                                        <img src=\"/uploads/{{ image.image }}\" alt=\"/uploads/{{ image.image }}\" class=\"img-fluid border border-white rounded\">
                                    </a>
                                </div>
                            {% endfor %}
                        {% endif %}
                        {% set paysageDroite = paysageDroite + 1 %}
                    </div>
                {% endfor %}
            </div>
            <div class=\"col-6 row justify-content-around p-1\">
                {% for image in moodboard.paysageBas %}
                    <div class=\"col-12 col-md-6 p-1 row m-0\">
                        <div class=\"col-12 moodboard-medium p-1 row justify-content-center m-0\">
                            <a class=\"linkLightbox\" href=\"/uploads/{{ image.image }}\" data-toggle=\"lightbox\" data-gallery=\"gallery\">
                                <img src=\"/uploads/{{ image.image }}\" alt=\"/uploads/{{ image.image }}\" class=\"img-fluid border border-white rounded\">
                            </a>
                        </div>
                    </div>
                {% endfor %}
            </div> #}
            {# {% set color = 0 %}
                {% if ( color != 1) %}
                    <div class=\"col-12 row justify-content-center p-1 align-items-center\">
                        {% if moodboard.nuancier != null %}
                            {% for image in moodboard.nuancier %}
                                <div class=\"col-10 moodboard-colori p-1\">
                                    <a class=\"linkLightbox\" href=\"/uploads/{{ image.image }}\" data-toggle=\"lightbox\" data-gallery=\"gallery\">
                                        <img src=\"/uploads/{{ image.image }}\" alt=\"/uploads/{{ image.image }}\" class=\"img-fluid border border-white rounded\">
                                    </a>
                                </div>
                            {% endfor %}
                        {% else %}
                            {% for image in moodboard.colori %}
                                <div class=\"col-2 moodboard-colori p-1\">
                                    <a class=\"linkLightbox\" href=\"/uploads/{{ image.image }}\" data-toggle=\"lightbox\" data-gallery=\"gallery\">
                                        <img src=\"/uploads/{{ image.image }}\" alt=\"/uploads/{{ image.image }}\" class=\"img-fluid border border-white rounded\">
                                    </a>
                                </div>
                            {% endfor %}
                        {% endif %}
                    </div>
                    {% set color = color + 1 %}
                {% endif %} #}
        </div>
        {% if article.description != null %}
            <div class=\"col-12 col-lg-4 p-4\">{{ article.description | raw }}</div>
        {% endif %}
    {# </div> #}
    {% if article.content != null %}
        <div class=\"mt-4\">{{ article.content | raw }}</div>
    {% endif %}


{% endblock %}

{% block javascripts %}
    <script>

        \$(document).on('click', '[data-toggle=\"lightbox\"]', function(event) {
            event.preventDefault();
            \$(this).ekkoLightbox()
        });

        let \$grid = \$('.grid');

        \$grid.imagesLoaded().progress( function() {
            \$grid.masonry({
                itemSelector: '.grid-item',
                percentPosition: true,
                columnWidth: '.grid-sizer',
                gutter: '.gutter-sizer'
            });
        });

    </script>
{% endblock %}

", "article/index.html.twig", "/home/letour/Dev/Client/WildInside/templates/article/index.html.twig");
    }
}
