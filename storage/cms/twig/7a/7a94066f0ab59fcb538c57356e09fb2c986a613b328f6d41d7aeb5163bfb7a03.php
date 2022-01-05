<?php

/* C:\xampp\htdocs\ladakhbikesafari-oc/plugins/galdan/tour/components/post/default.htm */
class __TwigTemplate_bde0dcc335aa66804621cb1d29770f41d4765a7e5dd07e6458ab4c0f4d17cf19 extends Twig_Template
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
        echo "
";
        // line 2
        $context["post"] = $this->getAttribute((isset($context["__SELF__"]) ? $context["__SELF__"] : null), "post", array());
        // line 3
        echo "

<h1>";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "title", array()), "html", null, true);
        echo "</h1>



<!-- <br><br>
<p class=\"info\">
    Published
    ";
        // line 12
        if ($this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "categories", array()), "count", array())) {
            echo " in
        ";
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "categories", array()));
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
                // line 14
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "url", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
                echo "</a>";
                if ( !$this->getAttribute($context["loop"], "last", array())) {
                    echo ", ";
                }
                // line 15
                echo "        ";
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
            // line 16
            echo "    ";
        }
        // line 17
        echo "    on ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "published_at", array()), "M d, Y"), "html", null, true);
        echo "
</p> -->

";
        // line 20
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['image_count'] = 1        ;
        echo $this->env->getExtension('CMS')->partialFunction("site/tour_slideshow"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 21
        echo "
<br>
<a href=\"";
        // line 23
        echo url("company-booking/");
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "id", array()), "html", null, true);
        echo "\" target=\"_new\" class=\"button medium orange pull-right\">Book Now!</a>
<br>
<br>
<br>
<table id=\"tour-header\" class=\"table\">
    <tbody>
        <tr>
            <td><strong><img 
                src=\"";
        // line 31
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/durations_icon.png");
        echo "\" 
                alt=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "title", array()), "html", null, true);
        echo "\" /> Duration :</strong>
                ";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "itinerary", array()), "days", array()), "count", array()), "html", null, true);
        echo " Nights / ";
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "itinerary", array()), "days", array()), "count", array()) + 1), "html", null, true);
        echo " Days
            </td>
            <td><strong><img src=\"";
        // line 35
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/calendar_icon.png");
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "title", array()), "html", null, true);
        echo "\" /> Start Date : </strong>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "start", array()), "html", null, true);
        echo "</td>
            <td><strong><img src=\"";
        // line 36
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/calendar_icon.png");
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "title", array()), "html", null, true);
        echo "\" /> End Date : </strong>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "start", array()), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <td><strong><img src=\"";
        // line 39
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/route_icon.png");
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "title", array()), "html", null, true);
        echo "\" /> Places :</strong>Leh / Hemis National park / Leh</td>
            <td><strong><img src=\"";
        // line 40
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/grade_icon.png");
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "title", array()), "html", null, true);
        echo "\" /> Grade :</strong>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "grade", array()), "html", null, true);
        echo "</td>
             <td><strong><img 
                src=\"";
        // line 42
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/durations_icon.png");
        echo "\" 
                alt=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "title", array()), "html", null, true);
        echo "\" /> On Trek :</strong>
                ";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "itinerary", array()), "days", array()), "count", array()), "html", null, true);
        echo " Nights / ";
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "itinerary", array()), "days", array()), "count", array()) + 1), "html", null, true);
        echo " Days
            </td>
        </tr>
    </tbody>
</table>

<p>";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "description", array()), "html", null, true);
        echo "</p>

<div class=\"tabbable\">
    <ul class=\"nav nav-tabs\">
        <li class=\"active\"><a href=\"#overview\" data-toggle=\"tab\">Overview</a></li>
        <li><a href=\"#details\" data-toggle=\"tab\">Tour Details</a></li>
        <li><a href=\"#includes\" data-toggle=\"tab\">Includes</a></li>
        <li><a href=\"#excludes\" data-toggle=\"tab\">Excludes</a></li>
        <li><a href=\"#departure\" data-toggle=\"tab\">Tour Departure</a></li>
        <li><a href=\"#cost\" data-toggle=\"tab\">Cost</a></li>
    </ul>
    <div class=\"tab-content\">
        <div class=\"tab-pane active\" id=\"overview\">
            <h4>Overview</h4>
            <p>";
        // line 64
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "excerpt", array()), "html", null, true);
        echo "</p>
            ";
        // line 65
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "itinerary", array()), "days", array()), "count", array())) {
            // line 66
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "itinerary", array()), "days", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["day"]) {
                // line 67
                echo "                    <h6><span>Day ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["day"], "day", array()), "html", null, true);
                echo " - </span>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["day"], "intro", array()), "html", null, true);
                echo "</h6>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['day'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 69
            echo "            ";
        }
        // line 70
        echo "        </div>

        <div class=\"tab-pane\" id=\"details\">
            <h4>Details</h4>
            <p>";
        // line 74
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "content", array()), "html", null, true);
        echo "</p>
            ";
        // line 75
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "itinerary", array()), "days", array()), "count", array())) {
            // line 76
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "itinerary", array()), "days", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["day"]) {
                // line 77
                echo "                    <h6><span>Day ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["day"], "day", array()), "html", null, true);
                echo " - </span>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["day"], "intro", array()), "html", null, true);
                echo "</h6>
                    <p>";
                // line 78
                echo twig_escape_filter($this->env, $this->getAttribute($context["day"], "description", array()), "html", null, true);
                echo "</p>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['day'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 80
            echo "            ";
        }
        // line 81
        echo "        </div>

        <div class=\"tab-pane\" id=\"includes\">
            <h4>Includes</h4>
            ";
        // line 85
        echo $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "includes", array());
        echo "
        </div>

        <div class=\"tab-pane\" id=\"excludes\">
            <h4>Excludes</h4>
            ";
        // line 90
        echo $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "excludes", array());
        echo "
        </div>

        <div class=\"tab-pane\" id=\"departure\">
            <h4>Departure</h4>
        </div>

        <div class=\"tab-pane\" id=\"cost\">
            <h4>Tour Cost</h4>
        </div>
    </div>
</div>

<br>

<a href=\"";
        // line 105
        echo url("company-booking/");
        echo "/";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "id", array()), "html", null, true);
        echo "\" target=\"_new\" class=\"button medium orange pull-right\">Book Now!</a>

<div class=\"fb-like\" data-href=\"http://localhost/ladakhbikesafari-oc/tour/post/amazing-ladakh-01\" data-layout=\"standard\" data-action=\"like\" data-size=\"small\" data-show-faces=\"true\" data-share=\"true\"></div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\ladakhbikesafari-oc/plugins/galdan/tour/components/post/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  290 => 105,  272 => 90,  264 => 85,  258 => 81,  255 => 80,  247 => 78,  240 => 77,  235 => 76,  233 => 75,  229 => 74,  223 => 70,  220 => 69,  209 => 67,  204 => 66,  202 => 65,  198 => 64,  181 => 50,  170 => 44,  166 => 43,  162 => 42,  153 => 40,  147 => 39,  137 => 36,  129 => 35,  122 => 33,  118 => 32,  114 => 31,  101 => 23,  97 => 21,  92 => 20,  85 => 17,  82 => 16,  68 => 15,  59 => 14,  42 => 13,  38 => 12,  28 => 5,  24 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% set post = __SELF__.post %}


<h1>{{ post.title }}</h1>



<!-- <br><br>
<p class=\"info\">
    Published
    {% if post.categories.count %} in
        {% for category in post.categories %}
            <a href=\"{{ category.url }}\">{{ category.name }}</a>{% if not loop.last %}, {% endif %}
        {% endfor %}
    {% endif %}
    on {{ post.published_at|date('M d, Y') }}
</p> -->

{% partial 'site/tour_slideshow' image_count=1 %}

<br>
<a href=\"{{ url('company-booking/') }}/{{ post.id }}\" target=\"_new\" class=\"button medium orange pull-right\">Book Now!</a>
<br>
<br>
<br>
<table id=\"tour-header\" class=\"table\">
    <tbody>
        <tr>
            <td><strong><img 
                src=\"{{'assets/images/durations_icon.png'|theme}}\" 
                alt=\"{{this.page.title}}\" /> Duration :</strong>
                {{ post.itinerary.days.count }} Nights / {{ post.itinerary.days.count + 1 }} Days
            </td>
            <td><strong><img src=\"{{'assets/images/calendar_icon.png'|theme}}\" alt=\"{{this.page.title}}\" /> Start Date : </strong>{{post.start}}</td>
            <td><strong><img src=\"{{'assets/images/calendar_icon.png'|theme}}\" alt=\"{{this.page.title}}\" /> End Date : </strong>{{post.start}}</td>
        </tr>
        <tr>
            <td><strong><img src=\"{{'assets/images/route_icon.png'|theme}}\" alt=\"{{this.page.title}}\" /> Places :</strong>Leh / Hemis National park / Leh</td>
            <td><strong><img src=\"{{'assets/images/grade_icon.png'|theme}}\" alt=\"{{this.page.title}}\" /> Grade :</strong>{{ post.grade }}</td>
             <td><strong><img 
                src=\"{{'assets/images/durations_icon.png'|theme}}\" 
                alt=\"{{this.page.title}}\" /> On Trek :</strong>
                {{ post.itinerary.days.count }} Nights / {{ post.itinerary.days.count + 1 }} Days
            </td>
        </tr>
    </tbody>
</table>

<p>{{ post.description }}</p>

<div class=\"tabbable\">
    <ul class=\"nav nav-tabs\">
        <li class=\"active\"><a href=\"#overview\" data-toggle=\"tab\">Overview</a></li>
        <li><a href=\"#details\" data-toggle=\"tab\">Tour Details</a></li>
        <li><a href=\"#includes\" data-toggle=\"tab\">Includes</a></li>
        <li><a href=\"#excludes\" data-toggle=\"tab\">Excludes</a></li>
        <li><a href=\"#departure\" data-toggle=\"tab\">Tour Departure</a></li>
        <li><a href=\"#cost\" data-toggle=\"tab\">Cost</a></li>
    </ul>
    <div class=\"tab-content\">
        <div class=\"tab-pane active\" id=\"overview\">
            <h4>Overview</h4>
            <p>{{ post.excerpt }}</p>
            {% if post.itinerary.days.count %}
                {% for day in post.itinerary.days %}
                    <h6><span>Day {{day.day}} - </span>{{ day.intro }}</h6>
                {% endfor %}
            {% endif %}
        </div>

        <div class=\"tab-pane\" id=\"details\">
            <h4>Details</h4>
            <p>{{ post.content }}</p>
            {% if post.itinerary.days.count %}
                {% for day in post.itinerary.days %}
                    <h6><span>Day {{day.day}} - </span>{{ day.intro }}</h6>
                    <p>{{ day.description }}</p>
                {% endfor %}
            {% endif %}
        </div>

        <div class=\"tab-pane\" id=\"includes\">
            <h4>Includes</h4>
            {{ post.includes|raw }}
        </div>

        <div class=\"tab-pane\" id=\"excludes\">
            <h4>Excludes</h4>
            {{ post.excludes|raw }}
        </div>

        <div class=\"tab-pane\" id=\"departure\">
            <h4>Departure</h4>
        </div>

        <div class=\"tab-pane\" id=\"cost\">
            <h4>Tour Cost</h4>
        </div>
    </div>
</div>

<br>

<a href=\"{{ url('company-booking/') }}/{{ post.id }}\" target=\"_new\" class=\"button medium orange pull-right\">Book Now!</a>

<div class=\"fb-like\" data-href=\"http://localhost/ladakhbikesafari-oc/tour/post/amazing-ladakh-01\" data-layout=\"standard\" data-action=\"like\" data-size=\"small\" data-show-faces=\"true\" data-share=\"true\"></div>", "C:\\xampp\\htdocs\\ladakhbikesafari-oc/plugins/galdan/tour/components/post/default.htm", "");
    }
}
