<?php

/* CartShopCartBundle:Cart:edit.html.twig */
class __TwigTemplate_84ea72521c775f38705be8281c40713ced4a1e709f004f6bf7bdb801e6a0a1be extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
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

    // line 6
    public function block_searchcategory($context, array $blocks = array())
    {
        // line 7
        echo "    <h1>Welcome to the Cart:edit page</h1>
";
    }

    public function getTemplateName()
    {
        return "CartShopCartBundle:Cart:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 7,  28 => 6,);
    }
}
