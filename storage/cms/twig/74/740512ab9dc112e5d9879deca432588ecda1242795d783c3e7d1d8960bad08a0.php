<?php

/* /home/galdanin/public_html/hotelladakhimperial.in/themes/demo/partials/site/quick-booking.htm */
class __TwigTemplate_82f1610c2c015916dc8545d1312844696de87ef26fe34459cb139da88832758d extends Twig_Template
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
        echo "<div class=\"container\">
    <div class=\"row\">
        <div id=\"booking-form-wrapper\">
            <form>
                <div class=\"col-xs-12 col-md-3\"><div class=\"form-group\"><input type=\"date\" class=\"form-control\" id=\"checkin\" name=\"checkin\" placeholder=\"check-In\"></div></div>
                <div class=\"col-xs-12 col-md-3\"><div class=\"form-group\"><input type=\"date\" class=\"form-control\" id=\"checkout\" name=\"checkout\" placeholder=\"Check-Out\"></div></div>
                <div class=\"col-xs-12 col-md-2\">
                    <div class=\"form-group\">
                        <select id=\"room\" name=\"room\" class=\"form-control\">
                            <option value=\"\" disabled selected>Number Of Room</option>
                            <option value=\"1\">1</option>
                            <option value=\"2\">2</option>
                            <option value=\"3\">3</option>
                            <option value=\"4\">4</option>
                            <option value=\"5\">5</option>
                            <option value=\"6\">6</option>
                            <option value=\"7\">7</option>
                            <option value=\"8\">8</option>
                        </select>                   
                    </div>
                </div>
                <div class=\"col-xs-12 col-md-2\">
                    <div class=\"form-group\">
                        <select id=\"person\" name=\"person\" class=\"form-control\">
                            <option value=\"\" disabled selected>Number Of Person</option>
                            <option value=\"1\">1</option>
                            <option value=\"2\">2</option>
                            <option value=\"3\">3</option>
                            <option value=\"4\">4</option>
                            <option value=\"5\">5</option>
                            <option value=\"6\">6</option>
                            <option value=\"7\">7</option>
                            <option value=\"8\">8</option>
                        </select>
                    </div>
                </div>
                <div class=\"col-xs-12 col-md-2\"><div class=\"form-group\"><input type=\"submit\" class=\"btn btn-primary form-control\" value=\"Book\"></div></div>
            </form>
        </div>
        <div class=\"col-xs-12 col-md-2 visible-xs open-booking-form\"><input type=\"button\" class=\"btn btn-primary form-control\" value=\"Book Now\"></div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/home/galdanin/public_html/hotelladakhimperial.in/themes/demo/partials/site/quick-booking.htm";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"container\">
    <div class=\"row\">
        <div id=\"booking-form-wrapper\">
            <form>
                <div class=\"col-xs-12 col-md-3\"><div class=\"form-group\"><input type=\"date\" class=\"form-control\" id=\"checkin\" name=\"checkin\" placeholder=\"check-In\"></div></div>
                <div class=\"col-xs-12 col-md-3\"><div class=\"form-group\"><input type=\"date\" class=\"form-control\" id=\"checkout\" name=\"checkout\" placeholder=\"Check-Out\"></div></div>
                <div class=\"col-xs-12 col-md-2\">
                    <div class=\"form-group\">
                        <select id=\"room\" name=\"room\" class=\"form-control\">
                            <option value=\"\" disabled selected>Number Of Room</option>
                            <option value=\"1\">1</option>
                            <option value=\"2\">2</option>
                            <option value=\"3\">3</option>
                            <option value=\"4\">4</option>
                            <option value=\"5\">5</option>
                            <option value=\"6\">6</option>
                            <option value=\"7\">7</option>
                            <option value=\"8\">8</option>
                        </select>                   
                    </div>
                </div>
                <div class=\"col-xs-12 col-md-2\">
                    <div class=\"form-group\">
                        <select id=\"person\" name=\"person\" class=\"form-control\">
                            <option value=\"\" disabled selected>Number Of Person</option>
                            <option value=\"1\">1</option>
                            <option value=\"2\">2</option>
                            <option value=\"3\">3</option>
                            <option value=\"4\">4</option>
                            <option value=\"5\">5</option>
                            <option value=\"6\">6</option>
                            <option value=\"7\">7</option>
                            <option value=\"8\">8</option>
                        </select>
                    </div>
                </div>
                <div class=\"col-xs-12 col-md-2\"><div class=\"form-group\"><input type=\"submit\" class=\"btn btn-primary form-control\" value=\"Book\"></div></div>
            </form>
        </div>
        <div class=\"col-xs-12 col-md-2 visible-xs open-booking-form\"><input type=\"button\" class=\"btn btn-primary form-control\" value=\"Book Now\"></div>
    </div>
</div>", "/home/galdanin/public_html/hotelladakhimperial.in/themes/demo/partials/site/quick-booking.htm", "");
    }
}
