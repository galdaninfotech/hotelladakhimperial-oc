<?php

/* C:\xampp\htdocs\ladakhbikesafari-oc/themes/demo/partials/site/tour_slideshow.htm */
class __TwigTemplate_d6f9edaf6a00d79a32a121a60a2d5f4c9deb326809bf0a24c52c8c8c72566bab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["post"] = $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "post", array());
        // line 2
        echo "
<div class=\"carousel slide\" id=\"itinerary-slideshow\" data-ride=\"carousel\">
  <ol class=\"carousel-indicators\">
    ";
        // line 5
        if ($this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "featured_images", array()), "count", array())) {
            // line 6
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "featured_images", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 7
                echo "        \t<li data-target=\"#itinerary-slideshow\" data-slide-to=\"";
                echo twig_escape_filter($this->env, (isset($context["image_count"]) ? $context["image_count"] : null), "html", null, true);
                echo "\"></li>
        \t<?php image_count++; ?>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 10
            echo "\t";
        }
        // line 11
        echo "  </ol>
  <div class=\"carousel-inner\">
    ";
        // line 13
        if ($this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "featured_images", array()), "count", array())) {
            // line 14
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "featured_images", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 15
                echo "        \t";
                if ($this->getAttribute($context["loop"], "first", array())) {
                    // line 16
                    echo "        \t\t<div class=\"item active\">
        \t\t<img
                    data-src=\"";
                    // line 18
                    echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "filename", array()), "html", null, true);
                    echo "\"
                    src=\"";
                    // line 19
                    echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "path", array()), "html", null, true);
                    echo "\"
                    alt=\"";
                    // line 20
                    echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "description", array()), "html", null, true);
                    echo "\"
                    style=\"max-width: 100%\" />
        \t</div>
        \t";
                }
                // line 24
                echo "        \t<div class=\"item\">
        \t\t<img
                    data-src=\"";
                // line 26
                echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "filename", array()), "html", null, true);
                echo "\"
                    src=\"";
                // line 27
                echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "path", array()), "html", null, true);
                echo "\"
                    alt=\"";
                // line 28
                echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "description", array()), "html", null, true);
                echo "\"
                    style=\"max-width: 100%\" />
        \t</div>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "\t";
        }
        // line 33
        echo "  </div>
  <a href=\"#itinerary-slideshow\" data-slide=\"prev\" class=\"left carousel-control\"><span class=\"icon-prev\"></span></a>
  <a href=\"#itinerary-slideshow\" data-slide=\"next\" class=\"right carousel-control\"><span class=\"icon-next\"></span></a>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\ladakhbikesafari-oc/themes/demo/partials/site/tour_slideshow.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 33,  122 => 32,  104 => 28,  100 => 27,  96 => 26,  92 => 24,  85 => 20,  81 => 19,  77 => 18,  73 => 16,  70 => 15,  52 => 14,  50 => 13,  46 => 11,  43 => 10,  33 => 7,  28 => 6,  26 => 5,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set post = __SELF__.post %}

<div class=\"carousel slide\" id=\"itinerary-slideshow\" data-ride=\"carousel\">
  <ol class=\"carousel-indicators\">
    {% if post.featured_images.count %}
        {% for image in post.featured_images %}
        \t<li data-target=\"#itinerary-slideshow\" data-slide-to=\"{{image_count}}\"></li>
        \t<?php image_count++; ?>
        {% endfor %}
\t{% endif %}
  </ol>
  <div class=\"carousel-inner\">
    {% if post.featured_images.count %}
        {% for image in post.featured_images %}
        \t{% if loop.first %}
        \t\t<div class=\"item active\">
        \t\t<img
                    data-src=\"{{ image.filename }}\"
                    src=\"{{ image.path }}\"
                    alt=\"{{ image.description }}\"
                    style=\"max-width: 100%\" />
        \t</div>
        \t{% endif %}
        \t<div class=\"item\">
        \t\t<img
                    data-src=\"{{ image.filename }}\"
                    src=\"{{ image.path }}\"
                    alt=\"{{ image.description }}\"
                    style=\"max-width: 100%\" />
        \t</div>
        {% endfor %}
\t{% endif %}
  </div>
  <a href=\"#itinerary-slideshow\" data-slide=\"prev\" class=\"left carousel-control\"><span class=\"icon-prev\"></span></a>
  <a href=\"#itinerary-slideshow\" data-slide=\"next\" class=\"right carousel-control\"><span class=\"icon-next\"></span></a>
</div>", "C:\\xampp\\htdocs\\ladakhbikesafari-oc/themes/demo/partials/site/tour_slideshow.htm", "");
    }
}
