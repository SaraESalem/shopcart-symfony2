<?php

/* CartShopCartBundle:Product:show.html.twig */
class __TwigTemplate_bec435313205b2d2f4ff905059b38a2ee3e5ef757330dec669d838e212bc3383 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'searchcategory' => array($this, 'block_searchcategory'),
            'content_section' => array($this, 'block_content_section'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_searchcategory($context, array $blocks = array())
    {
        // line 4
        echo "    <div id=\"templatmeo_sidebar\">
    <div class=\"sidebar_section\">
        <h2>Search Any Item</h2>
        <div class=\"sidebar_section_content\">

            <form action=\"#\" method=\"get\">
                <input type=\"text\" value=\"Enter a keyword...\" name=\"q\" size=\"10\" id=\"searchfield\" title=\"searchfield\" onfocus=\"clearText(this)\" onblur=\"clearText(this)\" />
                <input type=\"submit\" name=\"Search\" value=\"Search\" alt=\"Search\" id=\"searchbutton\" title=\"Search\" />
            </form>    

            <div class=\"cleaner\"></div>
        </div>

    </div>
               <div class=\"sidebar_section\">

                    <h2>Categories</h2>

                    <div class=\"sidebar_section_content\">

                        <div id='cssmenu'>
                            <ul>

                                <li class='active has-sub'><a href='#'><span>Clothes</span></a>
                                    <ul>
                                        <li class='last'><a href='#'><span>T-shirts</span></a>

                                        </li>
                                        <li class='last'><a href='#'><span>Dresses</span></a>

                                        </li>
                                        <li class='last'><a href='#'><span>Paints</span></a>

                                        </li>
                                        <li class='last'><a href='#'><span>jackets</span></a>

                                        </li>
                                    </ul>
                                </li>
                                <li class='active has-sub'><a href='#'><span>Footware</span></a>
                                    <ul>
                                        <li class='last'><a href='#'><span>high heels</span></a>

                                        </li>
                                        <li class='last'><a href='#'><span>boots</span></a>

                                        </li>
                                        <li class='last'><a href='#'><span>sneakers</span></a>

                                        </li>
                                        <li class='last'><a href='#'><span>slippers</span></a>

                                        </li>
                                    </ul>
                                </li>
                                <li class='active has-sub'><a href='#'><span>Makeup</span></a>
                                    <ul>
                                        <li class='last'><a href='#'><span>lip stick</span></a>

                                        </li>
                                        <li class='last'><a href='#'><span>eye shadow</span></a>

                                        </li>
                                        <li class='last'><a href='#'><span>blusher</span></a>

                                        </li>

                                    </ul>
                                </li>

                            </ul>
                        </div>
                    </div>

                </div>
         </div> <!-- end of templatemo_slider -->     
";
    }

    // line 82
    public function block_content_section($context, array $blocks = array())
    {
        // line 83
        echo "    <div class=\"center_content\">

        <div class=\"prod_box_big\">
            <div class=\"center_prod_box_big\">

                <div class=\"product_img_big\"> 

                    <img src=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(twig_join_filter(array(0 => "bundles/cartshopcart/images/", 1 => $this->getAttribute((isset($context["productID"]) ? $context["productID"] : $this->getContext($context, "productID")), "image")))), "html", null, true);
        echo "\" alt=\"product\" border=\"0\"/>        

                </div>
                <div class=\"details_big_box\">
                    <div class=\"product_title_big\">";
        // line 94
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["productID"]) ? $context["productID"] : $this->getContext($context, "productID")), "name"), "html", null, true);
        echo "</div>
                    <div class=\"specifications\">
                        ";
        // line 96
        if (($this->getAttribute((isset($context["productID"]) ? $context["productID"] : $this->getContext($context, "productID")), "available") == "true")) {
            // line 97
            echo "                            Available: <span class=\"blue\">In stock</span><br /><br/>
                        ";
        }
        // line 99
        echo "                        Description :<br/><span class=\"blue\"> ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["productID"]) ? $context["productID"] : $this->getContext($context, "productID")), "description"), "html", null, true);
        echo "</span><br />
                    </div>
                    <br/>
                    <div class=\"prod_price_big\">Price:<span class=\"price\">";
        // line 102
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["productID"]) ? $context["productID"] : $this->getContext($context, "productID")), "price"), "html", null, true);
        echo "\$</span></div>
                    ";
        // line 103
        if (($this->getAttribute((isset($context["productID"]) ? $context["productID"] : $this->getContext($context, "productID")), "available") == "true")) {
            // line 104
            echo "                        <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("add_to_ordercart", array("cartprodId" => $this->getAttribute((isset($context["productID"]) ? $context["productID"] : $this->getContext($context, "productID")), "id"), "carttype" => 1)), "html", null, true);
            echo "\" class=\"prod_buy\">add to cart</a> 
                    ";
        } else {
            // line 106
            echo "                        <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("add_to_wishcart", array("wishprodId" => $this->getAttribute((isset($context["productID"]) ? $context["productID"] : $this->getContext($context, "productID")), "id"), "carttype" => 10)), "html", null, true);
            echo "\" class=\"prod_compare\">add to wishlist</a> 
                    ";
        }
        // line 108
        echo "                </div>
            </div>
        </div>
    </div>

";
    }

    public function getTemplateName()
    {
        return "CartShopCartBundle:Product:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 108,  161 => 106,  155 => 104,  153 => 103,  149 => 102,  142 => 99,  138 => 97,  136 => 96,  131 => 94,  124 => 90,  115 => 83,  112 => 82,  32 => 4,  29 => 3,);
    }
}
