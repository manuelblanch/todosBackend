<?php

/* interfaces.twig */
class __TwigTemplate_d8354e9252425023602e2916968e919f226390b86f2d426cdaea113d1a46806d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout/layout.twig", "interfaces.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body_class' => array($this, 'block_body_class'),
            'page_content' => array($this, 'block_page_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout/layout.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["__internal_8148d7ca7b1a67bdc65198cdbc79240f775e28334fb5dc6fbed83d4deda43c91"] = $this->loadTemplate("macros.twig", "interfaces.twig", 2);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Interfaces | ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 4
    public function block_body_class($context, array $blocks = array())
    {
        echo "interfaces";
    }

    // line 6
    public function block_page_content($context, array $blocks = array())
    {
        // line 7
        echo "    <div class=\"page-header\">
        <h1>Interfaces</h1>
    </div>

    ";
        // line 11
        echo $context["__internal_8148d7ca7b1a67bdc65198cdbc79240f775e28334fb5dc6fbed83d4deda43c91"]->getrender_classes((isset($context["interfaces"]) ? $context["interfaces"] : $this->getContext($context, "interfaces")));
        echo "
";
    }

    public function getTemplateName()
    {
        return "interfaces.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 11,  49 => 7,  46 => 6,  40 => 4,  33 => 3,  29 => 1,  27 => 2,  11 => 1,);
    }
}
/* {% extends "layout/layout.twig" %}*/
/* {% from "macros.twig" import render_classes %}*/
/* {% block title %}Interfaces | {{ parent() }}{% endblock %}*/
/* {% block body_class 'interfaces' %}*/
/* */
/* {% block page_content %}*/
/*     <div class="page-header">*/
/*         <h1>Interfaces</h1>*/
/*     </div>*/
/* */
/*     {{ render_classes(interfaces) }}*/
/* {% endblock %}*/
/* */
