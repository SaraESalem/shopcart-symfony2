<?php

/* CartShopCartBundle:Product:index.html.twig */
class __TwigTemplate_a3e5ad98eff842130ddf902b7622489bbd7c036ac4f74010c2ad0333753d74a9 extends Twig_Template
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
        echo "    <div class=\"content_section\">

        <h2>New Products</h2>

        ";
        // line 87
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : $this->getContext($context, "products")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["pro"]) {
            // line 88
            echo "            <div class=\"product_box \"> <!--class margin_r40-->

                <div class=\"image_wrapper\"><a href=\"";
            // line 90
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("show", array("productId" => $this->getAttribute((isset($context["pro"]) ? $context["pro"] : $this->getContext($context, "pro")), "id"))), "html", null, true);
            echo "\" target=\"_parent\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(twig_join_filter(array(0 => "bundles/cartshopcart/images/", 1 => $this->getAttribute((isset($context["pro"]) ? $context["pro"] : $this->getContext($context, "pro")), "image")))), "html", null, true);
            echo "\" alt=\"product\" /></a></div>
                <h3>";
            // line 91
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pro"]) ? $context["pro"] : $this->getContext($context, "pro")), "name"), "html", null, true);
            echo "</h3>
                <p>";
            // line 92
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pro"]) ? $context["pro"] : $this->getContext($context, "pro")), "description"), "html", null, true);
            echo "</p>
                <p class=\"price\">Price: \$";
            // line 93
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pro"]) ? $context["pro"] : $this->getContext($context, "pro")), "price"), "html", null, true);
            echo "</p>
                <a href=\"";
            // line 94
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("show", array("productId" => $this->getAttribute((isset($context["pro"]) ? $context["pro"] : $this->getContext($context, "pro")), "id"))), "html", null, true);
            echo "\">Detail</a> | <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("show", array("productId" => $this->getAttribute((isset($context["pro"]) ? $context["pro"] : $this->getContext($context, "pro")), "id"))), "html", null, true);
            echo "\">Buy Now</a>


            </div>

        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 100
            echo "            <h3><em>No products found!</em></h3>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pro'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 102
        echo "

    </div> <!-- cntent div who wrap body-->
";
    }

    public function getTemplateName()
    {
        return "CartShopCartBundle:Product:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 102,  161 => 100,  148 => 94,  144 => 93,  140 => 92,  136 => 91,  130 => 90,  126 => 88,  121 => 87,  115 => 83,  112 => 82,  32 => 4,  29 => 3,);
    }
}
