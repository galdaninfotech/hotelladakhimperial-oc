<?php

/* C:\xampp\htdocs\hotel-ladakh-imperial/plugins/galdan/tour/components/categories/items.htm */
class __TwigTemplate_10f39d6913f4c00b7d928663774a50792a76182adb4ef2f5b7dda67408a7047b extends Twig_Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 2
            echo "    ";
            $context["postCount"] = $this->getAttribute($context["category"], "post_count", array());
            // line 3
            echo "    <li ";
            if (($this->getAttribute($context["category"], "slug", array()) == (isset($context["currentCategorySlug"]) ? $context["currentCategorySlug"] : null))) {
                echo "class=\"active\"";
            }
            echo ">
        <a href=\"";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "url", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
            echo "</a> 

        ";
            // line 6
            if ($this->getAttribute($context["category"], "children", array())) {
                // line 7
                echo "            <ul>
                ";
                // line 8
                $context['__cms_partial_params'] = [];
                $context['__cms_partial_params']['categories'] = $this->getAttribute(                // line 9
$context["category"], "children", array())                ;
                $context['__cms_partial_params']['currentCategorySlug'] =                 // line 10
(isset($context["currentCategorySlug"]) ? $context["currentCategorySlug"] : null)                ;
                echo $this->env->getExtension('CMS')->partialFunction((                // line 8
(isset($context["__SELF__"]) ? $context["__SELF__"] : null) . "::items")                , $context['__cms_partial_params']                );
                unset($context['__cms_partial_params']);
                // line 12
                echo "            </ul>
        ";
            }
            // line 14
            echo "    </li>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\hotel-ladakh-imperial/plugins/galdan/tour/components/categories/items.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 14,  54 => 12,  51 => 8,  49 => 10,  47 => 9,  45 => 8,  42 => 7,  40 => 6,  33 => 4,  26 => 3,  23 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% for category in categories %}
    {% set postCount = category.post_count %}
    <li {% if category.slug == currentCategorySlug %}class=\"active\"{% endif %}>
        <a href=\"{{ category.url }}\">{{ category.name }}</a> 

        {% if category.children %}
            <ul>
                {% partial __SELF__ ~ \"::items\"
                    categories=category.children
                    currentCategorySlug=currentCategorySlug
                %}
            </ul>
        {% endif %}
    </li>
{% endfor %}
", "C:\\xampp\\htdocs\\hotel-ladakh-imperial/plugins/galdan/tour/components/categories/items.htm", "");
    }
}
