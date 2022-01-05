<?php

/* C:\xampp\htdocs\hotel-ladakh-imperial/plugins/benfreke/menumanager/components/menu/default.htm */
class __TwigTemplate_3965f082b1891fac1f59df33b8441faa6097e6f445ec5417c8bfa628e24d60bb extends Twig_Template
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
        if (((isset($context["parentNode"]) ? $context["parentNode"] : null) && $this->getAttribute((isset($context["parentNode"]) ? $context["parentNode"] : null), "getChildCount", array()))) {
            // line 2
            echo "<ul class=\"";
            echo twig_escape_filter($this->env, (isset($context["primaryClasses"]) ? $context["primaryClasses"] : null), "html", null, true);
            echo "\">
    ";
            // line 3
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["parentNode"]) ? $context["parentNode"] : null), "getChildren", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["primaryNav"]) {
                // line 4
                echo "        ";
                if ($this->getAttribute($context["primaryNav"], "enabled", array())) {
                    // line 5
                    echo "            ";
                    if (($this->getAttribute($context["primaryNav"], "getChildCount", array()) && ((isset($context["numberOfLevels"]) ? $context["numberOfLevels"] : null) > 1))) {
                        // line 6
                        echo "                <li class=\"dropdown ";
                        echo twig_escape_filter($this->env, (isset($context["listItemClasses"]) ? $context["listItemClasses"] : null), "html", null, true);
                        echo " ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["primaryNav"], "getListItemClasses", array(0 => (isset($context["activeLeft"]) ? $context["activeLeft"] : null), 1 => (isset($context["activeRight"]) ? $context["activeRight"] : null)), "method"), "html", null, true);
                        echo "\">
                    <a href=\"";
                        // line 7
                        echo twig_escape_filter($this->env, $this->getAttribute($context["primaryNav"], "getLinkHref", array()), "html", null, true);
                        echo "\" target=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["primaryNav"], "getLinkTarget", array()), "html", null, true);
                        echo "\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                        ";
                        // line 8
                        echo twig_escape_filter($this->env, $this->getAttribute($context["primaryNav"], "title", array()), "html", null, true);
                        echo " <span class=\"caret\"></span>
                    </a>
            ";
                    } else {
                        // line 11
                        echo "                <li class=\"";
                        echo twig_escape_filter($this->env, (isset($context["listItemClasses"]) ? $context["listItemClasses"] : null), "html", null, true);
                        echo " ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["primaryNav"], "getListItemClasses", array(0 => (isset($context["activeLeft"]) ? $context["activeLeft"] : null), 1 => (isset($context["activeRight"]) ? $context["activeRight"] : null)), "method"), "html", null, true);
                        echo "\">
                    <a href=\"";
                        // line 12
                        echo twig_escape_filter($this->env, $this->getAttribute($context["primaryNav"], "getLinkHref", array()), "html", null, true);
                        echo "\" target=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["primaryNav"], "getLinkTarget", array()), "html", null, true);
                        echo "\">
                        ";
                        // line 13
                        echo twig_escape_filter($this->env, $this->getAttribute($context["primaryNav"], "title", array()), "html", null, true);
                        echo "
                    </a>
            ";
                    }
                    // line 16
                    echo "            ";
                    if (($this->getAttribute($context["primaryNav"], "getChildCount", array()) && ((isset($context["numberOfLevels"]) ? $context["numberOfLevels"] : null) > 1))) {
                        // line 17
                        echo "                <ul class=\"";
                        echo twig_escape_filter($this->env, (isset($context["secondaryClasses"]) ? $context["secondaryClasses"] : null), "html", null, true);
                        echo "\">
                    ";
                        // line 18
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["primaryNav"], "getChildren", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["secondaryNav"]) {
                            // line 19
                            echo "                        ";
                            if ($this->getAttribute($context["secondaryNav"], "enabled", array())) {
                                // line 20
                                echo "                            <li class=\"submenu ";
                                echo twig_escape_filter($this->env, (isset($context["listItemClasses"]) ? $context["listItemClasses"] : null), "html", null, true);
                                echo " ";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["secondaryNav"], "getListItemClasses", array(0 => (isset($context["activeLeft"]) ? $context["activeLeft"] : null), 1 => (isset($context["activeRight"]) ? $context["activeRight"] : null)), "method"), "html", null, true);
                                echo "\">
                                <a href=\"";
                                // line 21
                                echo twig_escape_filter($this->env, $this->getAttribute($context["secondaryNav"], "getLinkHref", array()), "html", null, true);
                                echo "\" target=\"";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["secondaryNav"], "getLinkTarget", array()), "html", null, true);
                                echo "\">
                                    ";
                                // line 22
                                echo twig_escape_filter($this->env, $this->getAttribute($context["secondaryNav"], "title", array()), "html", null, true);
                                echo "
                                </a>
                                ";
                                // line 24
                                if (($this->getAttribute($context["secondaryNav"], "getChildCount", array()) && ((isset($context["numberOfLevels"]) ? $context["numberOfLevels"] : null) > 2))) {
                                    // line 25
                                    echo "                                    <ul class=\"";
                                    echo twig_escape_filter($this->env, (isset($context["tertiaryClasses"]) ? $context["tertiaryClasses"] : null), "html", null, true);
                                    echo "\">
                                        ";
                                    // line 26
                                    $context['_parent'] = $context;
                                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["secondaryNav"], "getChildren", array()));
                                    foreach ($context['_seq'] as $context["_key"] => $context["tertiaryNav"]) {
                                        // line 27
                                        echo "                                            ";
                                        if ($this->getAttribute($context["tertiaryNav"], "enabled", array())) {
                                            // line 28
                                            echo "                                                <li class=\"";
                                            echo twig_escape_filter($this->env, (isset($context["listItemClasses"]) ? $context["listItemClasses"] : null), "html", null, true);
                                            echo " ";
                                            echo twig_escape_filter($this->env, $this->getAttribute($context["tertiaryNav"], "getListItemClasses", array(0 => (isset($context["activeLeft"]) ? $context["activeLeft"] : null), 1 => (isset($context["activeRight"]) ? $context["activeRight"] : null)), "method"), "html", null, true);
                                            echo "\">
                                                    <a href=\"";
                                            // line 29
                                            echo twig_escape_filter($this->env, $this->getAttribute($context["tertiaryNav"], "getLinkHref", array()), "html", null, true);
                                            echo "\" target=\"";
                                            echo twig_escape_filter($this->env, $this->getAttribute($context["tertiaryNav"], "getLinkTarget", array()), "html", null, true);
                                            echo "\">
                                                        ";
                                            // line 30
                                            echo twig_escape_filter($this->env, $this->getAttribute($context["tertiaryNav"], "title", array()), "html", null, true);
                                            echo "
                                                    </a>
                                                </li>
                                            ";
                                        }
                                        // line 34
                                        echo "                                        ";
                                    }
                                    $_parent = $context['_parent'];
                                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tertiaryNav'], $context['_parent'], $context['loop']);
                                    $context = array_intersect_key($context, $_parent) + $_parent;
                                    // line 35
                                    echo "                                    </ul>
                                ";
                                }
                                // line 37
                                echo "                            </li>
                        ";
                            }
                            // line 39
                            echo "                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['secondaryNav'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 40
                        echo "                </ul>
            ";
                    }
                    // line 42
                    echo "                </li>
        ";
                }
                // line 44
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['primaryNav'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "    
</ul>
";
        }
        // line 47
        echo "
";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\hotel-ladakh-imperial/plugins/benfreke/menumanager/components/menu/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 47,  169 => 44,  165 => 42,  161 => 40,  155 => 39,  151 => 37,  147 => 35,  141 => 34,  134 => 30,  128 => 29,  121 => 28,  118 => 27,  114 => 26,  109 => 25,  107 => 24,  102 => 22,  96 => 21,  89 => 20,  86 => 19,  82 => 18,  77 => 17,  74 => 16,  68 => 13,  62 => 12,  55 => 11,  49 => 8,  43 => 7,  36 => 6,  33 => 5,  30 => 4,  26 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if parentNode and parentNode.getChildCount %}
<ul class=\"{{ primaryClasses }}\">
    {% for primaryNav in parentNode.getChildren %}
        {% if primaryNav.enabled %}
            {% if primaryNav.getChildCount and numberOfLevels > 1 %}
                <li class=\"dropdown {{ listItemClasses }} {{ primaryNav.getListItemClasses(activeLeft, activeRight) }}\">
                    <a href=\"{{ primaryNav.getLinkHref }}\" target=\"{{ primaryNav.getLinkTarget }}\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                        {{ primaryNav.title }} <span class=\"caret\"></span>
                    </a>
            {% else %}
                <li class=\"{{ listItemClasses }} {{ primaryNav.getListItemClasses(activeLeft, activeRight) }}\">
                    <a href=\"{{ primaryNav.getLinkHref }}\" target=\"{{ primaryNav.getLinkTarget }}\">
                        {{ primaryNav.title }}
                    </a>
            {% endif %}
            {% if primaryNav.getChildCount and numberOfLevels > 1 %}
                <ul class=\"{{ secondaryClasses }}\">
                    {% for secondaryNav in primaryNav.getChildren %}
                        {% if secondaryNav.enabled %}
                            <li class=\"submenu {{ listItemClasses }} {{ secondaryNav.getListItemClasses(activeLeft, activeRight) }}\">
                                <a href=\"{{ secondaryNav.getLinkHref }}\" target=\"{{ secondaryNav.getLinkTarget }}\">
                                    {{ secondaryNav.title }}
                                </a>
                                {% if secondaryNav.getChildCount and numberOfLevels > 2 %}
                                    <ul class=\"{{ tertiaryClasses }}\">
                                        {% for tertiaryNav in secondaryNav.getChildren %}
                                            {% if tertiaryNav.enabled %}
                                                <li class=\"{{ listItemClasses }} {{ tertiaryNav.getListItemClasses(activeLeft, activeRight) }}\">
                                                    <a href=\"{{ tertiaryNav.getLinkHref }}\" target=\"{{ tertiaryNav.getLinkTarget }}\">
                                                        {{ tertiaryNav.title }}
                                                    </a>
                                                </li>
                                            {% endif %}
                                        {% endfor %}
                                    </ul>
                                {% endif %}
                            </li>
                        {% endif %}
                    {% endfor %}
                </ul>
            {% endif %}
                </li>
        {% endif %}
    {% endfor %}    
</ul>
{% endif %}

", "C:\\xampp\\htdocs\\hotel-ladakh-imperial/plugins/benfreke/menumanager/components/menu/default.htm", "");
    }
}
