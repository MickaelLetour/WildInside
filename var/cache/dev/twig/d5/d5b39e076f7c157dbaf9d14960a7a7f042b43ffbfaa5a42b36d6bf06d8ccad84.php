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

/* security/images.html.twig */
class __TwigTemplate_b1b791021fd8f8cf88aea3826005c1788c2d72ca4d24791ec5907e82eb501a4e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/images.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/images.html.twig"));

        // line 1
        echo "<div class=\"form-widget\">
    <div class=\"row\">
        <table class=\"table datagrid with-rounded-top\">
            <tbody>
                <tr data-id=\"1\">
                    ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 6, $this->source); })()), "value", [], "any", false, false, false, 6));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 7
            echo "                        <td class=\" text-center field-image\" dir=\"ltr\">
                            <a href=\"#\" class=\"ea-lightbox-thumbnail\" data-featherlight=\"#ea-lightbox-";
            // line 8
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "id", [], "any", false, false, false, 8), "html", null, true);
            echo "\" data-featherlight-close-on-click=\"anywhere\">
                                <img src=\"/uploads/";
            // line 9
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "image", [], "any", false, false, false, 9), "html", null, true);
            echo "\" class=\"img-fluid\">
                            </a>
                            <div id=\"ea-lightbox-";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "id", [], "any", false, false, false, 11), "html", null, true);
            echo "\" class=\"ea-lightbox\">
                                <img src=\"/uploads/";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "image", [], "any", false, false, false, 12), "html", null, true);
            echo "\">
                            </div>
                        </td>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "                </tr>
            </tbody>
        </table>
    </div>
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "security/images.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 16,  70 => 12,  66 => 11,  61 => 9,  57 => 8,  54 => 7,  50 => 6,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"form-widget\">
    <div class=\"row\">
        <table class=\"table datagrid with-rounded-top\">
            <tbody>
                <tr data-id=\"1\">
                    {% for image in field.value %}
                        <td class=\" text-center field-image\" dir=\"ltr\">
                            <a href=\"#\" class=\"ea-lightbox-thumbnail\" data-featherlight=\"#ea-lightbox-{{ image.id }}\" data-featherlight-close-on-click=\"anywhere\">
                                <img src=\"/uploads/{{ image.image }}\" class=\"img-fluid\">
                            </a>
                            <div id=\"ea-lightbox-{{ image.id }}\" class=\"ea-lightbox\">
                                <img src=\"/uploads/{{ image.image }}\">
                            </div>
                        </td>
                    {% endfor %}
                </tr>
            </tbody>
        </table>
    </div>
</div>", "security/images.html.twig", "/home/letour/Dev/Client/WildInside/templates/security/images.html.twig");
    }
}
