<?php

/* CartShopCartBundle:Cart:addWish.html.twig */
class __TwigTemplate_525d429570307edd8598dc76577c9646da17363635392452ed4adcfe6939b12d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
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
    public function block_content_section($context, array $blocks = array())
    {
        // line 4
        echo "<h1>hello wish </h1>
";
    }

    public function getTemplateName()
    {
        return "CartShopCartBundle:Cart:addWish.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  28 => 3,);
    }
}
