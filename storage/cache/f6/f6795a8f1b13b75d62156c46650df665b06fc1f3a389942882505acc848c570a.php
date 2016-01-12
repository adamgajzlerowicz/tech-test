<?php

/* index.twig.html */
class __TwigTemplate_8fa99d63cedaa169473837d2f01265f3c4e0e3d9c032db23211755a7b827bf9d extends Twig_Template
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
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["data"]) ? $context["data"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["item"]) {
            // line 11
            echo "        <tr>
            <td><input type=\"text\" name=\"people[";
            // line 12
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "][firstname]\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "firstname", array()));
            echo "\" /></td>
            <td><input type=\"text\" name=\"people[";
            // line 13
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "][surname]\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "surname", array()));
            echo "\" /></td>
            <td><a href=\"/show/";
            // line 14
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\">Show</a></td>
        </tr>

        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "
    </table>

    <input type=\"button\" value=\"Add row\" id=\"add_row\">
    <input type=\"submit\" value=\"Save\" />
    <a href=\"/\">home</a>

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
        return array (  69 => 18,  59 => 14,  53 => 13,  47 => 12,  44 => 11,  40 => 10,  31 => 3,  28 => 2,  11 => 1,);
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
/* */
/*         {% for key,item in data %}*/
/*         <tr>*/
/*             <td><input type="text" name="people[{{key}}][firstname]" value="{{item.firstname|e}}" /></td>*/
/*             <td><input type="text" name="people[{{key}}][surname]" value="{{item.surname|e}}" /></td>*/
/*             <td><a href="/show/{{key}}">Show</a></td>*/
/*         </tr>*/
/* */
/*         {% endfor %}*/
/* */
/*     </table>*/
/* */
/*     <input type="button" value="Add row" id="add_row">*/
/*     <input type="submit" value="Save" />*/
/*     <a href="/">home</a>*/
/* */
/* </form>*/
/* {% endblock %}*/
