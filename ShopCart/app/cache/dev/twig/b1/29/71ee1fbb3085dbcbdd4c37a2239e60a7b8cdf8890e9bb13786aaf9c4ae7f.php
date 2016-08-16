<?php

/* CartShopCartBundle:Product:contact.html.twig */
class __TwigTemplate_b12971ee1fbb3085dbcbdd4c37a2239e60a7b8cdf8890e9bb13786aaf9c4ae7f extends Twig_Template
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
        echo "    <div class=\"center_content\">

        <div class=\"prod_box_big\">
            <div class=\"center_prod_box_big\">

                <div class=\"product_img_big\"> 

                    <img src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cartshopcart/images/sara.jpg"), "html", null, true);
        echo "\" alt=\"product\" border=\"0\"/>        

                </div>

            </div>
        </div>
    </div>
";
    }

    // line 19
    public function block_content_section($context, array $blocks = array())
    {
        // line 20
        echo "    <div class=\"details_big_box\">
        <div class=\"product_title_big\">Name: Sara E-Salem</div>
        <div class=\"specifications\">

            Information :<br/><span class=\"blue\">Software Engineer</span><br />
        </div>
        <br/>
        <div class=\"prod_price_big\">Email:<span class=\"price\">dev.sarasalem@gmail.com</span></div>

    </div>
";
    }

    public function getTemplateName()
    {
        return "CartShopCartBundle:Product:contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 20,  53 => 19,  41 => 11,  32 => 4,  29 => 3,);
    }
}
