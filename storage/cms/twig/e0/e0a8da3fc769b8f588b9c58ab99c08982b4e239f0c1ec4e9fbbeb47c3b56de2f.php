<?php

/* C:\xampp\htdocs\ladakhbikesafari-oc/plugins/galdan/tour/components/posts/default.htm */
class __TwigTemplate_2bd1a391399fd0f28f7739fbe6de5a59a47d5b975e40be47ef096160891b7e85 extends Twig_Template
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
        $context["posts"] = $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "posts", array());
        // line 2
        echo "
<br>
<br>
<ul class=\"post-list\">
    <div class=\"row\">
    ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) ? $context["posts"] : null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 8
            echo "        <li>
            <div class=\"col-md-9\">
                <h3><a href=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "url", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "title", array()), "html", null, true);
            echo "</a></h3>
                <p class=\"info\">
                    Posted
                    ";
            // line 13
            if ($this->getAttribute($this->getAttribute($context["post"], "categories", array()), "count", array())) {
                echo " in ";
            }
            // line 14
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["post"], "categories", array()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 15
                echo "                        <a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "url", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
                echo "</a>";
                if ( !$this->getAttribute($context["loop"], "last", array())) {
                    echo ", ";
                }
                // line 16
                echo "                    ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            echo "                    on ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["post"], "published_at", array()), "M d, Y"), "html", null, true);
            echo "
                </p>            
                <p class=\"excerpt\">";
            // line 19
            echo call_user_func_array($this->env->getFunction('html_limit')->getCallable(), array("limit", $this->getAttribute($context["post"], "description", array()), 250));
            echo "</p>
            </div>

            <!-- image -->
            <div class=\"col-md-3\">
                ";
            // line 24
            if ($this->getAttribute($this->getAttribute($context["post"], "featured_images", array()), "count", array())) {
                // line 25
                echo "                    ";
                $context["firstItem"] = twig_first($this->env, $this->getAttribute($context["post"], "featured_images", array()));
                // line 26
                echo "                    <div class=\"featured-images text-center\">
                        <br>
                        <p>
                            <img
                                data-src=\"";
                // line 30
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["firstItem"]) ? $context["firstItem"] : null), "filename", array()), "html", null, true);
                echo "\"
                                src=\"";
                // line 31
                echo call_user_func_array($this->env->getFilter('resize')->getCallable(), array($this->getAttribute((isset($context["firstItem"]) ? $context["firstItem"] : null), "path", array()), 120, 120, array("mode" => "crop", "quality" => "80", "extension" => "jpg")));
                echo "\"
                                alt=\"";
                // line 32
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["firstItem"]) ? $context["firstItem"] : null), "description", array()), "html", null, true);
                echo "\" />
                        </p>
                    </div>
                ";
            }
            // line 36
            echo "            </div>

        </li>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 40
            echo "        <li class=\"no-data\">";
            echo twig_escape_filter($this->env, (isset($context["noPostsMessage"]) ? $context["noPostsMessage"] : null), "html", null, true);
            echo "</li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "    </div>
</ul>



<!-- Pagination -->
";
        // line 48
        if (($this->getAttribute((isset($context["posts"]) ? $context["posts"] : null), "lastPage", array()) > 1)) {
            // line 49
            echo "    <ul class=\"pagination\">
        ";
            // line 50
            if (($this->getAttribute((isset($context["posts"]) ? $context["posts"] : null), "currentPage", array()) > 1)) {
                // line 51
                echo "            <li><a href=\"";
                echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "baseFileName", array()), array((isset($context["pageParam"]) ? $context["pageParam"] : null) => ($this->getAttribute((isset($context["posts"]) ? $context["posts"] : null), "currentPage", array()) - 1)));
                echo "\">&larr; Prev</a></li>
        ";
            }
            // line 53
            echo "
        ";
            // line 54
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, $this->getAttribute((isset($context["posts"]) ? $context["posts"] : null), "lastPage", array())));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 55
                echo "            <li class=\"";
                echo ((($this->getAttribute((isset($context["posts"]) ? $context["posts"] : null), "currentPage", array()) == $context["page"])) ? ("active") : (null));
                echo "\">
                <a href=\"";
                // line 56
                echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "baseFileName", array()), array((isset($context["pageParam"]) ? $context["pageParam"] : null) => $context["page"]));
                echo "\">";
                echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                echo "</a>
            </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 59
            echo "
        ";
            // line 60
            if (($this->getAttribute((isset($context["posts"]) ? $context["posts"] : null), "lastPage", array()) > $this->getAttribute((isset($context["posts"]) ? $context["posts"] : null), "currentPage", array()))) {
                // line 61
                echo "            <li><a href=\"";
                echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "baseFileName", array()), array((isset($context["pageParam"]) ? $context["pageParam"] : null) => ($this->getAttribute((isset($context["posts"]) ? $context["posts"] : null), "currentPage", array()) + 1)));
                echo "\">Next &rarr;</a></li>
        ";
            }
            // line 63
            echo "    </ul>
";
        }
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\ladakhbikesafari-oc/plugins/galdan/tour/components/posts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  202 => 63,  196 => 61,  194 => 60,  191 => 59,  180 => 56,  175 => 55,  171 => 54,  168 => 53,  162 => 51,  160 => 50,  157 => 49,  155 => 48,  147 => 42,  138 => 40,  130 => 36,  123 => 32,  119 => 31,  115 => 30,  109 => 26,  106 => 25,  104 => 24,  96 => 19,  90 => 17,  76 => 16,  67 => 15,  49 => 14,  45 => 13,  37 => 10,  33 => 8,  28 => 7,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set posts = __SELF__.posts %}

<br>
<br>
<ul class=\"post-list\">
    <div class=\"row\">
    {% for post in posts %}
        <li>
            <div class=\"col-md-9\">
                <h3><a href=\"{{ post.url }}\">{{ post.title }}</a></h3>
                <p class=\"info\">
                    Posted
                    {% if post.categories.count %} in {% endif %}
                    {% for category in post.categories %}
                        <a href=\"{{ category.url }}\">{{ category.name }}</a>{% if not loop.last %}, {% endif %}
                    {% endfor %}
                    on {{ post.published_at|date('M d, Y') }}
                </p>            
                <p class=\"excerpt\">{{ html_limit(post.description, 250)|raw}}</p>
            </div>

            <!-- image -->
            <div class=\"col-md-3\">
                {% if post.featured_images.count %}
                    {% set firstItem = post.featured_images|first %}
                    <div class=\"featured-images text-center\">
                        <br>
                        <p>
                            <img
                                data-src=\"{{ firstItem.filename }}\"
                                src=\"{{ firstItem.path | resize(120,120,{ mode: 'crop', quality: '80', extension: 'jpg' })}}\"
                                alt=\"{{ firstItem.description }}\" />
                        </p>
                    </div>
                {% endif %}
            </div>

        </li>
    {% else %}
        <li class=\"no-data\">{{ noPostsMessage }}</li>
    {% endfor %}
    </div>
</ul>



<!-- Pagination -->
{% if posts.lastPage > 1 %}
    <ul class=\"pagination\">
        {% if posts.currentPage > 1 %}
            <li><a href=\"{{ this.page.baseFileName|page({ (pageParam): (posts.currentPage-1) }) }}\">&larr; Prev</a></li>
        {% endif %}

        {% for page in 1..posts.lastPage %}
            <li class=\"{{ posts.currentPage == page ? 'active' : null }}\">
                <a href=\"{{ this.page.baseFileName|page({ (pageParam): page }) }}\">{{ page }}</a>
            </li>
        {% endfor %}

        {% if posts.lastPage > posts.currentPage %}
            <li><a href=\"{{ this.page.baseFileName|page({ (pageParam): (posts.currentPage+1) }) }}\">Next &rarr;</a></li>
        {% endif %}
    </ul>
{% endif %}", "C:\\xampp\\htdocs\\ladakhbikesafari-oc/plugins/galdan/tour/components/posts/default.htm", "");
    }
}
