<?php

/* index.twig.html */
class __TwigTemplate_4ca7f079907aac36ae7dc2dd27b69d963ab80f5e19cc8aaaae9f085c17651baa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.twig.html", "index.twig.html", 1);
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
        echo "<form action=\"update\" method=\"post\">
    <table>
        <tr>
            <th>First name</th>
            <th>Last name</th>
        </tr>
        ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["data"]) ? $context["data"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["item"]) {
            // line 10
            echo "        <tr>
            <td><input type=\"text\" name=\"people[";
            // line 11
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "][firstname]\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "firstname", array()));
            echo "\" /></td>
            <td><input type=\"text\" name=\"people[";
            // line 12
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "][surname]\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "surname", array()));
            echo "\" /></td>
            <td><a href=\"/show/";
            // line 13
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\">Show</a></td>
        </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "
    </table>
    <a href=\"#\" id=\"add_row\">Add row</a>
    <input type=\"submit\" value=\"OK\" />
</form>
";
    }

    public function getTemplateName()
    {
        return "index.twig.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 16,  58 => 13,  52 => 12,  46 => 11,  43 => 10,  39 => 9,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends "base.twig.html" %}*/
/* {% block content %}*/
/* <form action="update" method="post">*/
/*     <table>*/
/*         <tr>*/
/*             <th>First name</th>*/
/*             <th>Last name</th>*/
/*         </tr>*/
/*         {% for key,item in data %}*/
/*         <tr>*/
/*             <td><input type="text" name="people[{{key}}][firstname]" value="{{item.firstname|e}}" /></td>*/
/*             <td><input type="text" name="people[{{key}}][surname]" value="{{item.surname|e}}" /></td>*/
/*             <td><a href="/show/{{key}}">Show</a></td>*/
/*         </tr>*/
/*         {% endfor %}*/
/* */
/*     </table>*/
/*     <a href="#" id="add_row">Add row</a>*/
/*     <input type="submit" value="OK" />*/
/* </form>*/
/* {% endblock %}*/
