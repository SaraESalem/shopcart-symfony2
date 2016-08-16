<?php

/* CartShopCartBundle:Cart:showCart.html.twig */
class __TwigTemplate_22728b4a556ca99009b596bf64a16ae95b1f8e8823ab864a87a85585197d3b24 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'javascripts' => array($this, 'block_javascripts'),
            'searchcategory' => array($this, 'block_searchcategory'),
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

    // line 2
    public function block_javascripts($context, array $blocks = array())
    {
        // line 3
        echo "    <script type=\"text/javascript\">
        function run(selTag, price, cartID) {
            //edit quantity
            newquantity = selTag.options[selTag.selectedIndex].text;

            //alert(newquantity + \"  \" + price + \" \" +";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["carttype"]) ? $context["carttype"] : $this->getContext($context, "carttype")), "html", null, true);
        echo " + \" \" + cartID);
            var xmlhttp;
            if (window.XMLHttpRequest)
            {// code for IE7+, Firefox, Chrome, Opera, Safari
                xmlhttp = new XMLHttpRequest();
            }
            else
            {// code for IE6, IE5
                xmlhttp = new ActiveXObject(\"Microsoft.XMLHTTP\");
            }
            xmlhttp.onreadystatechange = function ()
            {
                if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
                {

                    document.getElementById(\"bodyid\").innerHTML = xmlhttp.responseText;
                }
            }
            //{'carttype':";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["carttype"]) ? $context["carttype"] : $this->getContext($context, "carttype")), "html", null, true);
        echo ", 'newquantity': newquantity, 'price': price, 'cartID': cartID}
            xmlhttp.open(\"POST\", \"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("edit");
        echo "\", true);
            xmlhttp.setRequestHeader(\"Content-type\", \"application/x-www-form-urlencoded\");
            xmlhttp.send(\"carttype=";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["carttype"]) ? $context["carttype"] : $this->getContext($context, "carttype")), "html", null, true);
        echo "&newquantity=\" + newquantity + \"&price=\" + price + \"&cartID=\" + cartID + \"\");

        }
    </script>
";
    }

    // line 34
    public function block_searchcategory($context, array $blocks = array())
    {
        // line 35
        echo "    
        <br/><br/>
        ";
        // line 37
        if (((isset($context["carttype"]) ? $context["carttype"] : $this->getContext($context, "carttype")) == 1)) {
            // line 38
            echo "            <h1>My Shop Cart   
                <span style=\"margin-left: 300px\">
                    Total: ";
            // line 40
            $context["sum"] = 0;
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : $this->getContext($context, "products")));
            foreach ($context['_seq'] as $context["_key"] => $context["pro"]) {
                $context["sum"] = ((isset($context["sum"]) ? $context["sum"] : $this->getContext($context, "sum")) + $this->getAttribute((isset($context["pro"]) ? $context["pro"] : $this->getContext($context, "pro")), "totalprice"));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pro'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo twig_escape_filter($this->env, (isset($context["sum"]) ? $context["sum"] : $this->getContext($context, "sum")), "html", null, true);
            echo "\$ </span> 
                <a href=\"#\" class=\"prod_buyx\">CHECKOUT</a> 

                <a href=\"";
            // line 43
            echo $this->env->getExtension('routing')->getUrl("empty", array("carttype" => 1));
            echo "\" target=\"_parent\" style=\"float:right\">
                    <img src=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cartshopcart/images/em.png"), "html", null, true);
            echo "\" alt=\"empty\" width=\"50px\" height=\"50px\" style=\"float:right\"/>
                </a>

            </h1> 

        ";
        } else {
            // line 50
            echo "            <h1>My Wish List        <a href=\"";
            echo $this->env->getExtension('routing')->getUrl("empty", array("carttype" => 10));
            echo "\" target=\"_parent\" style=\"float:right\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cartshopcart/images/em.png"), "html", null, true);
            echo "\" alt=\"empty\" width=\"50px\" height=\"50px\" style=\"float:right\"/></a></h1>
                ";
        }
        // line 52
        echo "

        <hr/>
        <br/><br/>
        <div class=\"content_section\">

            ";
        // line 58
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : $this->getContext($context, "products")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["pro"]) {
            // line 59
            echo "                <div class=\"product_box \"> <!--class margin_r40-->

                    <div class=\"image_wrapper\">
                        <a href=\"#\" target=\"_parent\"><img src=\"";
            // line 62
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(twig_join_filter(array(0 => "bundles/cartshopcart/images/", 1 => $this->getAttribute($this->getAttribute((isset($context["pro"]) ? $context["pro"] : $this->getContext($context, "pro")), "prodid"), "image")))), "html", null, true);
            echo "\" alt=\"product\" /></a></div>
                    <h3>";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["pro"]) ? $context["pro"] : $this->getContext($context, "pro")), "prodid"), "name"), "html", null, true);
            echo " </h3>
                    ";
            // line 64
            if (($this->getAttribute((isset($context["pro"]) ? $context["pro"] : $this->getContext($context, "pro")), "carttype") == 1)) {
                // line 65
                echo "                        <p class=\"price\">quantity:
                            <select id=\"quantselected\" onchange=\"run(this,";
                // line 66
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["pro"]) ? $context["pro"] : $this->getContext($context, "pro")), "prodid"), "price"), "html", null, true);
                echo " ,";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pro"]) ? $context["pro"] : $this->getContext($context, "pro")), "id"), "html", null, true);
                echo " )\">
                                ";
                // line 67
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable(range(1, $this->getAttribute($this->getAttribute((isset($context["pro"]) ? $context["pro"] : $this->getContext($context, "pro")), "prodid"), "amount")));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 68
                    echo "                                    <option value=\"";
                    echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
                    echo "\" ";
                    if (((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) == $this->getAttribute((isset($context["pro"]) ? $context["pro"] : $this->getContext($context, "pro")), "prodquantity"))) {
                        echo "selected ";
                    }
                    echo ">";
                    echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), "html", null, true);
                    echo "</option>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 70
                echo "                            </select>
                        </p>
                    ";
            }
            // line 73
            echo "                    <p class=\"price\">
                        ";
            // line 74
            if (($this->getAttribute((isset($context["pro"]) ? $context["pro"] : $this->getContext($context, "pro")), "carttype") == 1)) {
                // line 75
                echo "                            Total Price: \$";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pro"]) ? $context["pro"] : $this->getContext($context, "pro")), "totalprice"), "html", null, true);
                echo "
                        ";
            } else {
                // line 77
                echo "                            Not Available
                        ";
            }
            // line 79
            echo "                    </p>
                    ";
            // line 80
            if (($this->getAttribute((isset($context["pro"]) ? $context["pro"] : $this->getContext($context, "pro")), "carttype") == 1)) {
                // line 81
                echo "                        <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("delete", array("prodId" => $this->getAttribute($this->getAttribute((isset($context["pro"]) ? $context["pro"] : $this->getContext($context, "pro")), "prodid"), "id"), "carttype" => 1)), "html", null, true);
                echo "\">Delete</a>
                    ";
            } else {
                // line 83
                echo "                        <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("delete", array("prodId" => $this->getAttribute($this->getAttribute((isset($context["pro"]) ? $context["pro"] : $this->getContext($context, "pro")), "prodid"), "id"), "carttype" => 10)), "html", null, true);
                echo "\">Delete</a>
                    ";
            }
            // line 85
            echo "                </div>

            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 88
            echo "                <h3><em>No products found!</em></h3>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pro'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 90
        echo "

        </div> <!-- cntent div who wrap body-->
    

";
    }

    public function getTemplateName()
    {
        return "CartShopCartBundle:Cart:showCart.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  234 => 90,  227 => 88,  220 => 85,  214 => 83,  208 => 81,  206 => 80,  203 => 79,  199 => 77,  193 => 75,  191 => 74,  188 => 73,  183 => 70,  168 => 68,  164 => 67,  158 => 66,  155 => 65,  153 => 64,  149 => 63,  145 => 62,  140 => 59,  135 => 58,  127 => 52,  119 => 50,  110 => 44,  106 => 43,  91 => 40,  87 => 38,  85 => 37,  81 => 35,  78 => 34,  69 => 29,  64 => 27,  60 => 26,  39 => 8,  32 => 3,  29 => 2,);
    }
}
