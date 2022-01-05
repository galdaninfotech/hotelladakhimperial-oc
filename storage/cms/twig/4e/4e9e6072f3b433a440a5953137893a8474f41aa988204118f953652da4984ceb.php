<?php

/* /home/vg19p32nkdok/public_html/hotelladakhimperial.com/themes/demo/pages/ladakh/art-culture.htm */
class __TwigTemplate_ce65299e3e347cd9750fc51082a355edd8365d3c98b64124b89f74e9587fb327 extends Twig_Template
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
        echo "<div class=\"container\" id=\"main-content-wrapper\">

  <div class=\"row\">

    <div class=\"col-md-9 main-content\">

        <h1>";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "page", array()), "title", array()), "html", null, true);
        echo "</h1>

        

        <img src=\"";
        // line 11
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/history.jpg");
        echo "\" style=\"float:right; padding:4px; border:1px solid #e1e1e1; margin-left:15px; margin-bottom:10px;\">

        <p>The culture of Ladakh has Tibetan-influence.Some of the most beautiful monasteries are found here. The most famous aspect of Ladakh is its people, culture and cuisine .<br>

                Festivals are famous for their vibrant and beautiful colors,captivating traditions and music.In addition one can find the arts and handicrafts in the local markets and villages perfectly breathtaking and inspiring.</p>

                <p class=\"head3\"> Cuisine</p>

                <p>Ladakhi food has much in common with Tibetan food, the most prominent foods being thukpa (noodle soup) and tsampa, known in Ladakhi as ngampe (roasted barley flour).<br>

                A dish that is strictly Ladakhi is skyu, a heavy pasta dish with root vegetables. As currency started making its place in the economy of Ladakh, food from the Indian plains gained popularity. Tea in Ladakh is traditionally made with strong green tea, butter, and salt. It is mixed in a large churn and known as gurgur cha(Butter Tea), after the sound it makes when mixed. The milk and sugar based sweet tea made in Indian style is also common now. Most of the surplus barley that is produced is fermented into chang, an alcoholic beverage drunk especially on festive occasions.</p>

                <img src=\"images/articles/sports.jpg\" style=\"float:right; padding:4px; border:1px solid #e1e1e1; margin-left:15px; margin-bottom:10px;\">

                <p class=\"head3\">Sports</p>

                <p>Ladakhis are very fond of ice hockey which is generally played in the month of January on natural ice. Archery is a traditional sport and many villages still conduct archery festivals, which also include drinking, dancing and gambling as a medium of celebrating the sport. Polo is another traditional sport of Ladakh.</p>

                <p class=\"head3\"> Architecture</p>

                <p>The architecture in Ladakh draw heavy influences from Tibet and India. The monastic architecture reflects a deeply rooted Buddhist approach. The Buddhist wheel, along with two dragons, is a common feature on almost every gimp, including the likes of Hemis, Thiksey, Alchi etc. Ladakhi Buddhist festival music is much like its Tibetian counterpart and often involves religious chanting. These chants are complex, often recitations of sacred texts in celebration of various festivals.<br>

                Gather new information and experience to satisfy your cultural needs .Plunge into the exhililariting beauty of the ancient kingdom of Ladakh .Destinasia  offer you a journey that’ll truly make you want to return.</p>

                <img src=\"images/articles/festival.jpg\" style=\"float:right; padding:4px; border:1px solid #e1e1e1; margin-left:15px; margin-bottom:10px;\">

                <p class=\"head3\">Festivals</p>

                <p>The best way to feel the Ladakhi culture  is to witness its vibrant festivals.They are celebrated as an occasion to demonstrate the cultural heritage as well as the wealth of that particular monastery. It is also a merry-making occasion which provides people with various oppurtunities to interact with each other , form new ties and renew the old ones.<br>

                  Festivals are celebrated  on fixed time periods, many of which takes place in winter- a relatively idle time for the majority of the people. The core event of the  manastic festival is Chams( a highly choreographed sacred dance-drama) performed by monks,  to the accompaniment of mystic  tunes played on Monastic orchestra.Lamas robed in colorful garments and wearing masks perform mimics representing various aspect of  religion.The masks  worn by dacers represent the  Guardians ,Protectors  and the Gods and Goddesses. huge crowd gather to highten the sense of the ocassion.<br>

                  Most of the festivals are annnual monastic festivals.Among non monastic festivals are Losar(New Year) festival  and the notable Ladakh festival organised  by the Jammu and Kashmir Government.<br>

                Enjoy the energy,procession,performances,colorful costumes,music ,dancing and art of the festivals.Get deeper into the soul of Ladakh.</p>

    </div><!-- Main Content -->



    <div class=\"col-md-3\">

        <div class=\"widget-lbg\"><div class=\"widget-title\">Tour Categories</div></div>

            ";
        // line 55
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("tourCategories"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 56
        echo "
        <div class=\"widget-lbg\"><div class=\"widget-title\">Blog Categories</div></div>

            ";
        // line 59
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("blogCategories"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 60
        echo "
        ";
        // line 61
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("site/right1"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 62
        echo "
    </div>

    </div>

</div>";
    }

    public function getTemplateName()
    {
        return "/home/vg19p32nkdok/public_html/hotelladakhimperial.com/themes/demo/pages/ladakh/art-culture.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 62,  97 => 61,  94 => 60,  90 => 59,  85 => 56,  81 => 55,  34 => 11,  27 => 7,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"container\" id=\"main-content-wrapper\">
  <div class=\"row\">
    <div class=\"col-md-9 main-content\">
        <h1>{{ this.page.title }}</h1>
        
        <img src=\"{{'assets/images/history.jpg'|theme}}\" style=\"float:right; padding:4px; border:1px solid #e1e1e1; margin-left:15px; margin-bottom:10px;\">
        <p>The culture of Ladakh has Tibetan-influence.Some of the most beautiful monasteries are found here. The most famous aspect of Ladakh is its people, culture and cuisine .<br>
                Festivals are famous for their vibrant and beautiful colors,captivating traditions and music.In addition one can find the arts and handicrafts in the local markets and villages perfectly breathtaking and inspiring.</p>
                <p class=\"head3\"> Cuisine</p>
                <p>Ladakhi food has much in common with Tibetan food, the most prominent foods being thukpa (noodle soup) and tsampa, known in Ladakhi as ngampe (roasted barley flour).<br>
                A dish that is strictly Ladakhi is skyu, a heavy pasta dish with root vegetables. As currency started making its place in the economy of Ladakh, food from the Indian plains gained popularity. Tea in Ladakh is traditionally made with strong green tea, butter, and salt. It is mixed in a large churn and known as gurgur cha(Butter Tea), after the sound it makes when mixed. The milk and sugar based sweet tea made in Indian style is also common now. Most of the surplus barley that is produced is fermented into chang, an alcoholic beverage drunk especially on festive occasions.</p>
                <img src=\"images/articles/sports.jpg\" style=\"float:right; padding:4px; border:1px solid #e1e1e1; margin-left:15px; margin-bottom:10px;\">
                <p class=\"head3\">Sports</p>
                <p>Ladakhis are very fond of ice hockey which is generally played in the month of January on natural ice. Archery is a traditional sport and many villages still conduct archery festivals, which also include drinking, dancing and gambling as a medium of celebrating the sport. Polo is another traditional sport of Ladakh.</p>
                <p class=\"head3\"> Architecture</p>
                <p>The architecture in Ladakh draw heavy influences from Tibet and India. The monastic architecture reflects a deeply rooted Buddhist approach. The Buddhist wheel, along with two dragons, is a common feature on almost every gimp, including the likes of Hemis, Thiksey, Alchi etc. Ladakhi Buddhist festival music is much like its Tibetian counterpart and often involves religious chanting. These chants are complex, often recitations of sacred texts in celebration of various festivals.<br>
                Gather new information and experience to satisfy your cultural needs .Plunge into the exhililariting beauty of the ancient kingdom of Ladakh .Destinasia  offer you a journey that’ll truly make you want to return.</p>
                <img src=\"images/articles/festival.jpg\" style=\"float:right; padding:4px; border:1px solid #e1e1e1; margin-left:15px; margin-bottom:10px;\">
                <p class=\"head3\">Festivals</p>
                <p>The best way to feel the Ladakhi culture  is to witness its vibrant festivals.They are celebrated as an occasion to demonstrate the cultural heritage as well as the wealth of that particular monastery. It is also a merry-making occasion which provides people with various oppurtunities to interact with each other , form new ties and renew the old ones.<br>
                  Festivals are celebrated  on fixed time periods, many of which takes place in winter- a relatively idle time for the majority of the people. The core event of the  manastic festival is Chams( a highly choreographed sacred dance-drama) performed by monks,  to the accompaniment of mystic  tunes played on Monastic orchestra.Lamas robed in colorful garments and wearing masks perform mimics representing various aspect of  religion.The masks  worn by dacers represent the  Guardians ,Protectors  and the Gods and Goddesses. huge crowd gather to highten the sense of the ocassion.<br>
                  Most of the festivals are annnual monastic festivals.Among non monastic festivals are Losar(New Year) festival  and the notable Ladakh festival organised  by the Jammu and Kashmir Government.<br>
                Enjoy the energy,procession,performances,colorful costumes,music ,dancing and art of the festivals.Get deeper into the soul of Ladakh.</p>
    </div><!-- Main Content -->

    <div class=\"col-md-3\">
        <div class=\"widget-lbg\"><div class=\"widget-title\">Tour Categories</div></div>
            {% component 'tourCategories' %}
        <div class=\"widget-lbg\"><div class=\"widget-title\">Blog Categories</div></div>
            {% component 'blogCategories' %}
        {% partial 'site/right1' %}
    </div>
    </div>
</div>", "/home/vg19p32nkdok/public_html/hotelladakhimperial.com/themes/demo/pages/ladakh/art-culture.htm", "");
    }
}
