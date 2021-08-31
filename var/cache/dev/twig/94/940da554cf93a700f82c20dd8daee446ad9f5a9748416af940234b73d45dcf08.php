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
class __TwigTemplate_bf0a959bcf2685fcac4d63cf1c414232d3feb9145843055a0bae983f21a4c5a2 extends Template
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
        echo "</h1>
    <div class=\"row justify-content-around align-items-center m-1\">
        <div class=\"row col-12 col-lg-8 moodboard justify-content-center p-2 mb-4\">
            <div class=\"row col-12 justify-content-around p-1\">
                ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["moodboard"]) || array_key_exists("moodboard", $context) ? $context["moodboard"] : (function () { throw new RuntimeError('Variable "moodboard" does not exist.', 11, $this->source); })()), "portraitGauche", [], "any", false, false, false, 11));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 12
            echo "                    ";
            $context["paysageDroite"] = 0;
            // line 13
            echo "                    ";
            $context["color"] = 0;
            // line 14
            echo "                    <div class=\"col-12 col-md-6 moodboard-tall p-1 row m-0 align-items-stretch\">
                        <div class=\"col-md-12 p-1 row m-0 align-items-center justify-content-center\">
                            <a class=\"linkLightbox\" href=\"/uploads/";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "image", [], "any", false, false, false, 16), "html", null, true);
            echo "\" data-toggle=\"lightbox\" data-gallery=\"gallery\">
                                <img class=\"img-fluid border border-white rounded\" src=\"/uploads/";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "image", [], "any", false, false, false, 17), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "image", [], "any", false, false, false, 17), "html", null, true);
            echo "\">
                            </a>
                        </div>
                    </div>
                    <div class=\"col-12 col-md-6 p-1 row justify-content-around m-0\">
                        ";
            // line 22
            if ((0 !== twig_compare((isset($context["paysageDroite"]) || array_key_exists("paysageDroite", $context) ? $context["paysageDroite"] : (function () { throw new RuntimeError('Variable "paysageDroite" does not exist.', 22, $this->source); })()), 1))) {
                // line 23
                echo "                            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["moodboard"]) || array_key_exists("moodboard", $context) ? $context["moodboard"] : (function () { throw new RuntimeError('Variable "moodboard" does not exist.', 23, $this->source); })()), "paysageDroite", [], "any", false, false, false, 23));
                foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                    // line 24
                    echo "                                <div class=\"col-12 moodboard-small p-1 row align-items-center justify-content-center\">
                                    <a class=\"linkLightbox\" href=\"/uploads/";
                    // line 25
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "image", [], "any", false, false, false, 25), "html", null, true);
                    echo "\" data-toggle=\"lightbox\" data-gallery=\"gallery\">
                                        <img src=\"/uploads/";
                    // line 26
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "image", [], "any", false, false, false, 26), "html", null, true);
                    echo "\" alt=\"/uploads/";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "image", [], "any", false, false, false, 26), "html", null, true);
                    echo "\" class=\"img-fluid border border-white rounded\">
                                    </a>
                                </div>
                                ";
                    // line 29
                    if ((0 !== twig_compare((isset($context["color"]) || array_key_exists("color", $context) ? $context["color"] : (function () { throw new RuntimeError('Variable "color" does not exist.', 29, $this->source); })()), 1))) {
                        // line 30
                        echo "                                    <div class=\"col-12 row justify-content-center p-1 align-items-center\">
                                        ";
                        // line 31
                        if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["moodboard"]) || array_key_exists("moodboard", $context) ? $context["moodboard"] : (function () { throw new RuntimeError('Variable "moodboard" does not exist.', 31, $this->source); })()), "nuancier", [], "any", false, false, false, 31), null))) {
                            // line 32
                            echo "                                            ";
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["moodboard"]) || array_key_exists("moodboard", $context) ? $context["moodboard"] : (function () { throw new RuntimeError('Variable "moodboard" does not exist.', 32, $this->source); })()), "nuancier", [], "any", false, false, false, 32));
                            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                                // line 33
                                echo "                                                <div class=\"col-10 moodboard-colori p-1\">
                                                    <a class=\"linkLightbox\" href=\"/uploads/";
                                // line 34
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "image", [], "any", false, false, false, 34), "html", null, true);
                                echo "\" data-toggle=\"lightbox\" data-gallery=\"gallery\">
                                                        <img src=\"/uploads/";
                                // line 35
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "image", [], "any", false, false, false, 35), "html", null, true);
                                echo "\" alt=\"/uploads/";
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "image", [], "any", false, false, false, 35), "html", null, true);
                                echo "\" class=\"img-fluid border border-white rounded\">
                                                    </a>
                                                </div>
                                            ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 39
                            echo "                                        ";
                        } else {
                            // line 40
                            echo "                                            ";
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["moodboard"]) || array_key_exists("moodboard", $context) ? $context["moodboard"] : (function () { throw new RuntimeError('Variable "moodboard" does not exist.', 40, $this->source); })()), "colori", [], "any", false, false, false, 40));
                            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                                // line 41
                                echo "                                                <div class=\"col-2 moodboard-colori p-1\">
                                                    <a class=\"linkLightbox\" href=\"/uploads/";
                                // line 42
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "image", [], "any", false, false, false, 42), "html", null, true);
                                echo "\" data-toggle=\"lightbox\" data-gallery=\"gallery\">
                                                        <img src=\"/uploads/";
                                // line 43
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "image", [], "any", false, false, false, 43), "html", null, true);
                                echo "\" alt=\"/uploads/";
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "image", [], "any", false, false, false, 43), "html", null, true);
                                echo "\" class=\"img-fluid border border-white rounded\">
                                                    </a>
                                                </div>
                                            ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 47
                            echo "                                        ";
                        }
                        // line 48
                        echo "                                    </div>
                                    ";
                        // line 49
                        $context["color"] = ((isset($context["color"]) || array_key_exists("color", $context) ? $context["color"] : (function () { throw new RuntimeError('Variable "color" does not exist.', 49, $this->source); })()) + 1);
                        // line 50
                        echo "                                ";
                    }
                    // line 51
                    echo "                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 52
                echo "                        ";
            }
            // line 53
            echo "                        ";
            $context["paysageDroite"] = ((isset($context["paysageDroite"]) || array_key_exists("paysageDroite", $context) ? $context["paysageDroite"] : (function () { throw new RuntimeError('Variable "paysageDroite" does not exist.', 53, $this->source); })()) + 1);
            // line 54
            echo "                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "            </div>
            <div class=\"col-12 row justify-content-between p-1\">
                ";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["moodboard"]) || array_key_exists("moodboard", $context) ? $context["moodboard"] : (function () { throw new RuntimeError('Variable "moodboard" does not exist.', 58, $this->source); })()), "paysageBas", [], "any", false, false, false, 58));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 59
            echo "                    <div class=\"col-12 col-md-6 p-1 row m-0\">
                        <div class=\"col-12 moodboard-medium p-1 row justify-content-center m-0\">
                            <a class=\"linkLightbox\" href=\"/uploads/";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "image", [], "any", false, false, false, 61), "html", null, true);
            echo "\" data-toggle=\"lightbox\" data-gallery=\"gallery\">
                                <img src=\"/uploads/";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "image", [], "any", false, false, false, 62), "html", null, true);
            echo "\" alt=\"/uploads/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "image", [], "any", false, false, false, 62), "html", null, true);
            echo "\" class=\"img-fluid border border-white rounded\">
                            </a>
                        </div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "            </div>
        </div>
    </div>
    ";
        // line 70
        if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 70, $this->source); })()), "content", [], "any", false, false, false, 70), null))) {
            // line 71
            echo "        <div class=\"mt-4\">";
            echo twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 71, $this->source); })()), "content", [], "any", false, false, false, 71);
            echo "</div>
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 75
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 76
        echo "    <script>
        \$(document).on('click', '[data-toggle=\"lightbox\"]', function(event) {
            event.preventDefault();
            \$(this).ekkoLightbox()
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
        return array (  298 => 76,  288 => 75,  274 => 71,  272 => 70,  267 => 67,  254 => 62,  250 => 61,  246 => 59,  242 => 58,  238 => 56,  231 => 54,  228 => 53,  225 => 52,  219 => 51,  216 => 50,  214 => 49,  211 => 48,  208 => 47,  196 => 43,  192 => 42,  189 => 41,  184 => 40,  181 => 39,  169 => 35,  165 => 34,  162 => 33,  157 => 32,  155 => 31,  152 => 30,  150 => 29,  142 => 26,  138 => 25,  135 => 24,  130 => 23,  128 => 22,  118 => 17,  114 => 16,  110 => 14,  107 => 13,  104 => 12,  100 => 11,  93 => 7,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ article.title }} - Wild Inside{% endblock %}

{% block content %}

    <h1 class=\"text-center text-uppercase m-5\">{{ article.title }}</h1>
    <div class=\"row justify-content-around align-items-center m-1\">
        <div class=\"row col-12 col-lg-8 moodboard justify-content-center p-2 mb-4\">
            <div class=\"row col-12 justify-content-around p-1\">
                {% for image in moodboard.portraitGauche %}
                    {% set paysageDroite = 0 %}
                    {% set color = 0 %}
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
                                {% endif %}
                            {% endfor %}
                        {% endif %}
                        {% set paysageDroite = paysageDroite + 1 %}
                    </div>
                {% endfor %}
            </div>
            <div class=\"col-12 row justify-content-between p-1\">
                {% for image in moodboard.paysageBas %}
                    <div class=\"col-12 col-md-6 p-1 row m-0\">
                        <div class=\"col-12 moodboard-medium p-1 row justify-content-center m-0\">
                            <a class=\"linkLightbox\" href=\"/uploads/{{ image.image }}\" data-toggle=\"lightbox\" data-gallery=\"gallery\">
                                <img src=\"/uploads/{{ image.image }}\" alt=\"/uploads/{{ image.image }}\" class=\"img-fluid border border-white rounded\">
                            </a>
                        </div>
                    </div>
                {% endfor %}
            </div>
        </div>
    </div>
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
    </script>
{% endblock %}

", "article/index.html.twig", "C:\\laragon\\www\\client\\WildInside\\templates\\article\\index.html.twig");
    }
}
