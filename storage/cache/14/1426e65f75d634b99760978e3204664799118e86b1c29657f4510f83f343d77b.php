<?php

/* show.twig.html */
class __TwigTemplate_8562febddd48969aeb72480ec6d837300f1477a1bd6b48d6115295a253225009 extends Twig_Template
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
