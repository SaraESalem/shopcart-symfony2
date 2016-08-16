<?php

/* CartShopCartBundle:Cart:addOrder.html.twig */
class __TwigTemplate_93c807c28a3ced6ec30b84033593c1717af7cbdbf157db4147b5de345cb63da8 extends Twig_Template
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
        echo "<h1>hello order </h1>
";
    }

    public function getTemplateName()
    {
        return "CartShopCartBundle:Cart:addOrder.html.twig";
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
