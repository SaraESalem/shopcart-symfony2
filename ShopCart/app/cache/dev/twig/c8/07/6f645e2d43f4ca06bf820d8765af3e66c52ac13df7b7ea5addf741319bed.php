<?php

/* CartShopCartBundle:Cart:add.html.twig */
class __TwigTemplate_c8076f645e2d43f4ca06bf820d8765af3e66c52ac13df7b7ea5addf741319bed extends Twig_Template
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
        echo "<h1>hello sara </h1>
";
    }

    public function getTemplateName()
    {
        return "CartShopCartBundle:Cart:add.html.twig";
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
