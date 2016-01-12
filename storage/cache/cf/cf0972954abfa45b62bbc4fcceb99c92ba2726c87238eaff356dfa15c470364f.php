<?php

/* show.twig.html */
class __TwigTemplate_b19a47fa03b5a0fd4f2ed757c3c4f3c9313eaeadd8a7e11a3c7c92f0c88b59db extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.twig.html", "show.twig.html", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.twig.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "<h4>Showing record: ";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "</h4>
<div>
    <p>First name: ";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "firstname", array()), "html", null, true);
        echo "</p>
    <p>Last Name: ";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "lastname", array()), "html", null, true);
        echo "</p>
</div>
";
    }

    public function getTemplateName()
    {
        return "show.twig.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 6,  37 => 5,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends "base.twig.html" %}*/
/* {% block content %}*/
/* <h4>Showing record: {{id}}</h4>*/
/* <div>*/
/*     <p>First name: {{item.firstname}}</p>*/
/*     <p>Last Name: {{item.lastname}}</p>*/
/* </div>*/
/* {% endblock %}*/
