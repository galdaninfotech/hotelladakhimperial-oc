<?php

/* C:\xampp\htdocs\ladakhbikesafari-oc/plugins/galdan/bookings/components/quickform/default.htm */
class __TwigTemplate_ad94736679b869f041ea09afa448c969e6e50745dba0386669174b58ff1004df extends Twig_Template
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
        $context["tours"] = $this->getAttribute((isset($context["quickform"]) ? $context["quickform"] : null), "tours", array());
        // line 2
        echo "
<div id=\"reservation\">
    <ul class=\"nav nav-tabs\">
        <li class=\"active\"><a href=\"#tab1\" data-toggle=\"tab\">Reserve <br> Online</a></li>
        <li><a href=\"#tab2\" data-toggle=\"tab\">Reserve <br> By Phone</a></li>
        <li><a href=\"#tab3\" data-toggle=\"tab\">Existing <br> Reservation</a></li>
    </ul>
    <div id=\"short-reservation\">
        <div class=\"tabbable\">
            <div class=\"tab-content\">
                <div class=\"tab-pane active\" id=\"tab1\">
                    <form 
                        id=\"booking-form\" 
                        data-request=\"onBooking\" 
                        data-request-success=\"
                            \$('#booking-form').fadeOut();
                            \$('.tab-pane.active').html('Thank You!');
                            \$('.tab-pane.active').append('<p>Your booking has been sent. You will shortly receive mail with booking information.</p>');
                            console.log('";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["text_messages"]) ? $context["text_messages"] : null), "html", null, true);
        echo "');
                        \">
                    <table id=\"\">
                        <tr><td><span>*</span> Name:</td><td id=\"name\"><input name=\"name\" type=\"text\" /></td></tr>
                        <tr><td><span>*</span> Email:</td><td id=\"email\"><input name=\"email\" type=\"email\" /></td></tr>
                    </table>

                    <table  id=\"2nd-row\">
                        <tr><td><span>*</span> Contact No:</td><td><span>*</span> Number of Persons:</td></tr>
                        <tr><td><input name=\"phone\" type=\"text\" style=\"width:104px;\" /></td><td><input name=\"num_persons\" type=\"number\" min=\"1\" value=\"1\" style=\"width:104px;\" /></td></tr>
                    </table>

                    <table  id=\"3rd-row\">
                        <tr><td><span>*</span> Arrival Date:</td><td><span>*</span> Bike Required:</td></tr>
                        <tr><td><input name=\"arrival_date\" type=\"date\" style=\"width:104px;\" /></td>
                            <td id=\"name\">
                                <select name=\"bike\" id=\"_rw_resnr\">
                                    <option value=\"Enfield 500cc\" selected=\"selected\">Enfield 500cc</option>
                                    <option value=\"Enfield 350cc\">Enfield 350cc</option>
                                    <option value=\"Enfield Electra 350cc\">Enfield Electra 350cc</option>
                                    <option value=\"Avenger 220cc\">Avenger 220cc</option>
                                </select>
                            </td>
                        </tr>
                    </table><br>

                    <table>
                        <tr>
                            <td>
                                <input id=\"flex_dates_check\" style=\"float: left; padding: 0pt; margin: 0pt; height: 13px; width: 13px;\" type=\"checkbox\">
                                <label id=\"flex-date\">My dates are flexible</label>
                            </td>
                        </tr>
                    </table>

                    <table  id=\"4th-row\">
                        <tr><td>Tour:</td>
                            <td>
                                <select name=\"tour\" id=\"_bike_resnr\">
                                    <option selected=\"selected\">Select Your Tour:</option>
                                    ";
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tours"]) ? $context["tours"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["tour"]) {
            // line 61
            echo "\t\t\t\t\t      \t\t\t\t<option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["tour"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["tour"], "title", array()), "html", null, true);
            echo "</option>
\t\t\t\t\t      \t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tour'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "                                </select>
                            </td>
                        </tr>
                    </table>


                    <table>
                        <tr><td>Promo Code:</td><td><input name=\"promo-code\" id=\"promo-code\" type=\"text\" class=\"pull-right\" /></td></tr>
                    </table>
                    <input name=\"message\" value=\"No\" type=\"text\" id=\"hidden-message\" />
                    <button class=\"button small orange pull-right\" type=\"submit\">Book Now!</button>

                    <table id=\"promo-codez\">
                        <tr><td><label><a href=\"";
        // line 76
        echo url("client-bookings");
        echo "\">Find / Modify / Cancel Reservations</a></label></td></tr>
                    </table>
                </form>


                </div>
                <div class=\"tab-pane\" id=\"tab2\">
                    <p class=\"paragraph-center\"><strong>Call Us: </strong></p>
                    <p class=\"paragraph-center\"><strong id=\"mobile\">";
        // line 84
        echo twig_escape_filter($this->env, (isset($context["mobile1"]) ? $context["mobile1"] : null), "html", null, true);
        echo "</strong></p>
                </div>
                <div class=\"tab-pane\" id=\"tab3\">
                <form method=\"post\" action=\"index.php?c=reservations&m=client-view-reservation\">
                    <table>
                        <tr><td>Your Confirmation Code:</td></tr>
                        <tr><td><input name=\"confirmation-code\" id=\"confirmation-code\" type=\"text\" class=\"pull-right\" /></td></tr>
                        <tr><td><span>*</span> Your confirmation code has been sent to you &nbsp;&nbsp;&nbsp;when you have reserved tour with us.</td></tr>
                    </table><br>
                    <button class=\"button small orange pull-right\" type=\"submit\">Send</button>
                </form>
                    
                </div>
            </div>
        </div><!-- end tabbale-->
    </div>
</div>

<script type=\"text/javascript\">

\$('li#res').on('mouseenter', function(){
    \$('#reservation').css({visibility: \"visible\", display: \"block\"});
    \$('#short-reservation').css({border: \"none\"});
    \$('table#res-more-info').css({display: \"block\"});
    \$('table#promo-code').css({display: \"block\"});
});
</script>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\ladakhbikesafari-oc/plugins/galdan/bookings/components/quickform/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 84,  114 => 76,  99 => 63,  88 => 61,  84 => 60,  41 => 20,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set tours = quickform.tours %}

<div id=\"reservation\">
    <ul class=\"nav nav-tabs\">
        <li class=\"active\"><a href=\"#tab1\" data-toggle=\"tab\">Reserve <br> Online</a></li>
        <li><a href=\"#tab2\" data-toggle=\"tab\">Reserve <br> By Phone</a></li>
        <li><a href=\"#tab3\" data-toggle=\"tab\">Existing <br> Reservation</a></li>
    </ul>
    <div id=\"short-reservation\">
        <div class=\"tabbable\">
            <div class=\"tab-content\">
                <div class=\"tab-pane active\" id=\"tab1\">
                    <form 
                        id=\"booking-form\" 
                        data-request=\"onBooking\" 
                        data-request-success=\"
                            \$('#booking-form').fadeOut();
                            \$('.tab-pane.active').html('Thank You!');
                            \$('.tab-pane.active').append('<p>Your booking has been sent. You will shortly receive mail with booking information.</p>');
                            console.log('{{ text_messages }}');
                        \">
                    <table id=\"\">
                        <tr><td><span>*</span> Name:</td><td id=\"name\"><input name=\"name\" type=\"text\" /></td></tr>
                        <tr><td><span>*</span> Email:</td><td id=\"email\"><input name=\"email\" type=\"email\" /></td></tr>
                    </table>

                    <table  id=\"2nd-row\">
                        <tr><td><span>*</span> Contact No:</td><td><span>*</span> Number of Persons:</td></tr>
                        <tr><td><input name=\"phone\" type=\"text\" style=\"width:104px;\" /></td><td><input name=\"num_persons\" type=\"number\" min=\"1\" value=\"1\" style=\"width:104px;\" /></td></tr>
                    </table>

                    <table  id=\"3rd-row\">
                        <tr><td><span>*</span> Arrival Date:</td><td><span>*</span> Bike Required:</td></tr>
                        <tr><td><input name=\"arrival_date\" type=\"date\" style=\"width:104px;\" /></td>
                            <td id=\"name\">
                                <select name=\"bike\" id=\"_rw_resnr\">
                                    <option value=\"Enfield 500cc\" selected=\"selected\">Enfield 500cc</option>
                                    <option value=\"Enfield 350cc\">Enfield 350cc</option>
                                    <option value=\"Enfield Electra 350cc\">Enfield Electra 350cc</option>
                                    <option value=\"Avenger 220cc\">Avenger 220cc</option>
                                </select>
                            </td>
                        </tr>
                    </table><br>

                    <table>
                        <tr>
                            <td>
                                <input id=\"flex_dates_check\" style=\"float: left; padding: 0pt; margin: 0pt; height: 13px; width: 13px;\" type=\"checkbox\">
                                <label id=\"flex-date\">My dates are flexible</label>
                            </td>
                        </tr>
                    </table>

                    <table  id=\"4th-row\">
                        <tr><td>Tour:</td>
                            <td>
                                <select name=\"tour\" id=\"_bike_resnr\">
                                    <option selected=\"selected\">Select Your Tour:</option>
                                    {% for tour in tours %}
\t\t\t\t\t      \t\t\t\t<option value=\"{{ tour.id }}\">{{ tour.title }}</option>
\t\t\t\t\t      \t\t\t{% endfor %}
                                </select>
                            </td>
                        </tr>
                    </table>


                    <table>
                        <tr><td>Promo Code:</td><td><input name=\"promo-code\" id=\"promo-code\" type=\"text\" class=\"pull-right\" /></td></tr>
                    </table>
                    <input name=\"message\" value=\"No\" type=\"text\" id=\"hidden-message\" />
                    <button class=\"button small orange pull-right\" type=\"submit\">Book Now!</button>

                    <table id=\"promo-codez\">
                        <tr><td><label><a href=\"{{ url('client-bookings') }}\">Find / Modify / Cancel Reservations</a></label></td></tr>
                    </table>
                </form>


                </div>
                <div class=\"tab-pane\" id=\"tab2\">
                    <p class=\"paragraph-center\"><strong>Call Us: </strong></p>
                    <p class=\"paragraph-center\"><strong id=\"mobile\">{{ mobile1 }}</strong></p>
                </div>
                <div class=\"tab-pane\" id=\"tab3\">
                <form method=\"post\" action=\"index.php?c=reservations&m=client-view-reservation\">
                    <table>
                        <tr><td>Your Confirmation Code:</td></tr>
                        <tr><td><input name=\"confirmation-code\" id=\"confirmation-code\" type=\"text\" class=\"pull-right\" /></td></tr>
                        <tr><td><span>*</span> Your confirmation code has been sent to you &nbsp;&nbsp;&nbsp;when you have reserved tour with us.</td></tr>
                    </table><br>
                    <button class=\"button small orange pull-right\" type=\"submit\">Send</button>
                </form>
                    
                </div>
            </div>
        </div><!-- end tabbale-->
    </div>
</div>

<script type=\"text/javascript\">

\$('li#res').on('mouseenter', function(){
    \$('#reservation').css({visibility: \"visible\", display: \"block\"});
    \$('#short-reservation').css({border: \"none\"});
    \$('table#res-more-info').css({display: \"block\"});
    \$('table#promo-code').css({display: \"block\"});
});
</script>", "C:\\xampp\\htdocs\\ladakhbikesafari-oc/plugins/galdan/bookings/components/quickform/default.htm", "");
    }
}
