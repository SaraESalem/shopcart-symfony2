<?php

/* ::base.html.twig */
class __TwigTemplate_dec2e180c854195869d5d5113d5d941d9fd859797b1cf95eba73f2ef1e788c5e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'javascripts' => array($this, 'block_javascripts'),
            'templatemo_menu_wrapper' => array($this, 'block_templatemo_menu_wrapper'),
            'spancart' => array($this, 'block_spancart'),
            'templatemo_header_wrapper' => array($this, 'block_templatemo_header_wrapper'),
            'templatemo_slider_wrapper' => array($this, 'block_templatemo_slider_wrapper'),
            'searchcategory' => array($this, 'block_searchcategory'),
            'content_section' => array($this, 'block_content_section'),
            'templatemo_footer' => array($this, 'block_templatemo_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\">
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />

        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <meta name=\"keywords\" content=\"Shoe Store, Free Template, templatemo.com\" />
        <meta name=\"description\" content=\"Shoe Store - Free Website Template provided by templatemo.com\" />

        <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cartshopcart/css/templatemo_style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cartshopcart/css/styles.css"), "html", null, true);
        echo "\" />
        ";
        // line 12
        $this->displayBlock('javascripts', $context, $blocks);
        // line 15
        echo "
        <script language=\"javascript\" type=\"text/javascript\">
            function clearText(field)
            {
                if (field.defaultValue == field.value)
                    field.value = '';
                else if (field.value == '')
                    field.value = field.defaultValue;
            }
        </script>
        <script language=\"javascript\" type=\"text/javascript\" src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cartshopcart/js/mootools-1.2.1-core.js"), "html", null, true);
        echo "\"></script>
        <script language=\"javascript\" type=\"text/javascript\" src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cartshopcart/js/mootools-1.2-more.js"), "html", null, true);
        echo "\"></script>
        <script language=\"javascript\" type=\"text/javascript\" src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cartshopcart/js/slideitmoo-1.1.js"), "html", null, true);
        echo "\"></script>
        <script language=\"javascript\" type=\"text/javascript\">
            window.addEvents({
                'domready': function () {
                    /* thumbnails example , div containers */
                    new SlideItMoo({
                        overallContainer: 'SlideItMoo_outer',
                        elementScrolled: 'SlideItMoo_inner',
                        thumbsContainer: 'SlideItMoo_items',
                        itemsVisible: 6,
                        elemsSlide: 2,
                        duration: 160,
                        itemsSelector: '.SlideItMoo_element',
                        itemWidth: 140,
                        showControls: 1});
                },
            });
        </script>

    </head>
    <body id=\"bodyid\">
        ";
        // line 48
        $this->displayBlock('templatemo_menu_wrapper', $context, $blocks);
        // line 73
        echo "        ";
        $this->displayBlock('templatemo_header_wrapper', $context, $blocks);
        // line 91
        echo "        ";
        $this->displayBlock('templatemo_slider_wrapper', $context, $blocks);
        // line 149
        echo "        <div id=\"templatemo_content_wrapper\">
            ";
        // line 150
        $this->displayBlock('searchcategory', $context, $blocks);
        // line 153
        echo "            <div id=\"templatemo_content\"><!-- div who wrap body-->

                <!--11111111111111111111111111111body111111111111111111111111111111-->
                ";
        // line 156
        $this->displayBlock('content_section', $context, $blocks);
        // line 159
        echo "            </div> <!-- end of templatemo_content --><!-- end div who wrap body-->


            <div class=\"cleaner\"></div>

        </div> <!-- end of templatemo_content_wrapper -->
        <div id=\"templatemo_content_wrapper_bottom\"></div>
        ";
        // line 166
        $this->displayBlock('templatemo_footer', $context, $blocks);
        // line 181
        echo "
    </body>
</html>";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo "Shoe Store";
    }

    // line 12
    public function block_javascripts($context, array $blocks = array())
    {
        // line 13
        echo "
        ";
    }

    // line 48
    public function block_templatemo_menu_wrapper($context, array $blocks = array())
    {
        // line 49
        echo "            <div id=\"templatemo_menu_wrapper\">

                <div id=\"templatemo_menu\">

                    <ul>
                        <li><a href=\"";
        // line 54
        echo $this->env->getExtension('routing')->getPath("index");
        echo "\" class=\"current\">Home</a></li>
                        <li><a href=\"#\" target=\"_parent\">Contact Us</a></li>
                        <li><a href=\"#\" target=\"_parent\">Log in</a></li>
                        <li><a href=\"#\" target=\"_parent\">Register</a></li>



                    </ul>
                    <div id=\"cart\">
                        <a href=\"";
        // line 63
        echo $this->env->getExtension('routing')->getUrl("show_cart", array("carttype" => 10));
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cartshopcart/images/wl.jpg"), "html", null, true);
        echo "\" width=\"32\" height=\"32\" align=\"middle\" /></a>
                        ";
        // line 64
        $this->displayBlock('spancart', $context, $blocks);
        // line 65
        echo "                        <a href=\"";
        echo $this->env->getExtension('routing')->getUrl("show_cart", array("carttype" => 1));
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cartshopcart/images/icon_shopcart.png"), "html", null, true);
        echo "\" width=\"32\" height=\"32\" align=\"middle\" /></a>
                        <span> items in cart</span></div>    \t

                </div> 
                <!-- end of templatemo_menu -->

            </div> <!-- end of templatemo_menu_wrapper -->    
        ";
    }

    // line 64
    public function block_spancart($context, array $blocks = array())
    {
        echo "<span> items in wish list</span>";
    }

    // line 73
    public function block_templatemo_header_wrapper($context, array $blocks = array())
    {
        // line 74
        echo "            <div id=\"templatemo_header_wrapper\">

                <div id=\"templatemo_header\">

                    <div id=\"site_title\">

                        <h1><a href=\"#\" target=\"_parent\">
                                <img src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cartshopcart/images/templatemo_logo.png"), "html", null, true);
        echo "\" alt=\"Site Title\" />
                                <span>One size Fits All</span>
                            </a></h1>

                    </div> <!-- end of site_title -->

                </div> <!-- end of templatemo_header -->

            </div> <!-- end of templatemo_header_wrapper -->
        ";
    }

    // line 91
    public function block_templatemo_slider_wrapper($context, array $blocks = array())
    {
        // line 92
        echo "            <div id=\"templatemo_slider_wrapper\">

                <div id=\"templatemo_slider\">

                    <div id=\"latest_product_slider\">

                        <div id=\"SlideItMoo_outer\">\t
                            <div id=\"SlideItMoo_inner\">\t\t\t
                                <div id=\"SlideItMoo_items\">
                                    <div class=\"SlideItMoo_element\">
                                        <a href=\"#\">
                                            <img src=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cartshopcart/images/dress.png"), "html", null, true);
        echo "\" alt=\"product 1\" /></a>

                                    </div>\t
                                    <div class=\"SlideItMoo_element\">
                                        <a href=\"#\">
                                            <img src=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cartshopcart/images/t-shirt.png"), "html", null, true);
        echo "\" alt=\"product 2\" /></a>

                                    </div>
                                    <div class=\"SlideItMoo_element\">
                                        <a href=\"#\">
                                            <img src=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cartshopcart/images/pants.png"), "html", null, true);
        echo "\" alt=\"product 3\" /></a>

                                    </div>
                                    <div class=\"SlideItMoo_element\">
                                        <a href=\"#\">
                                            <img src=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cartshopcart/images/skinny.png"), "html", null, true);
        echo "\" alt=\"product 4\" /></a>

                                    </div>
                                    <div class=\"SlideItMoo_element\">
                                        <a href=\"#\">
                                            <img src=\"";
        // line 123
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cartshopcart/images/shoes.png"), "html", null, true);
        echo "\" alt=\"product 5\" /></a>

                                    </div>
                                    <div class=\"SlideItMoo_element\">
                                        <a href=\"#\">
                                            <img src=\"";
        // line 128
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cartshopcart/images/vis.png"), "html", null, true);
        echo "\" alt=\"product 6\" /></a>

                                    </div>
                                    <div class=\"SlideItMoo_element\">
                                        <a href=\"#\">
                                            <img src=\"";
        // line 133
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cartshopcart/images/man.png"), "html", null, true);
        echo "\" alt=\"product 7\" /></a>
                                    </div>
                                    <div class=\"SlideItMoo_element\">
                                        <a href=\"#\">
                                            <img src=\"";
        // line 137
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cartshopcart/images/skirt.png"), "html", null, true);
        echo "\" alt=\"product 8\" /></a>
                                    </div>
                                </div>\t\t\t
                            </div>
                        </div>

                    </div> <!-- end of latest_product_slider -->

                </div> <!-- end of templatemo_slider -->

            </div> <!-- end of templatemo_slider_wrapper -->
        ";
    }

    // line 150
    public function block_searchcategory($context, array $blocks = array())
    {
        // line 151
        echo "
            ";
    }

    // line 156
    public function block_content_section($context, array $blocks = array())
    {
        // line 157
        echo "                    ";
        // line 158
        echo "                ";
    }

    // line 166
    public function block_templatemo_footer($context, array $blocks = array())
    {
        // line 167
        echo "            <div id=\"templatemo_footer\">

                <ul class=\"footer_menu\">
                    <li><a href=\"";
        // line 170
        echo $this->env->getExtension('routing')->getPath("index");
        echo "\">Home</a></li>
                    <li><a href=\"#\">Contact us</a></li>
                    <li><a href=\"#\">About us</a></li>
                    <li><a href=\"#\">Register</a></li>
                    <li class=\"last_menu\"><a href=\"#\">Login</a></li>
                </ul>

                Copyright © 2015 <a href=\"#\">Sara E-Salem</a>  
            </div> 
            <!-- end of footer -->
        ";
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  336 => 170,  331 => 167,  328 => 166,  324 => 158,  322 => 157,  319 => 156,  314 => 151,  311 => 150,  295 => 137,  288 => 133,  280 => 128,  272 => 123,  264 => 118,  256 => 113,  248 => 108,  240 => 103,  227 => 92,  224 => 91,  210 => 81,  201 => 74,  198 => 73,  192 => 64,  177 => 65,  175 => 64,  169 => 63,  157 => 54,  150 => 49,  147 => 48,  142 => 13,  139 => 12,  133 => 6,  127 => 181,  125 => 166,  116 => 159,  114 => 156,  109 => 153,  107 => 150,  104 => 149,  101 => 91,  98 => 73,  96 => 48,  72 => 27,  68 => 26,  64 => 25,  52 => 15,  50 => 12,  46 => 11,  42 => 10,  35 => 6,  28 => 1,);
    }
}
