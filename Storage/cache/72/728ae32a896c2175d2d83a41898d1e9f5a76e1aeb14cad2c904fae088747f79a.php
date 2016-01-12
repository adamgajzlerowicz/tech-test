<?php

/* index.twig.html */
class __TwigTemplate_137732f3f4a27157e6465159fce39d2f245a214b50b34af0c5b3cf5e1e32d5b2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
<!doctype html>

<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
</head>

<body>

<form action=\"update\" method=\"post\">
    <table>
        <tr>
            <th>First name</th>
            <th>Last name</th>
        </tr>
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["data"]) ? $context["data"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["item"]) {
            // line 18
            echo "        <tr>
            <td><input type=\"text\" name=\"people[";
            // line 19
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "][firstname]\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "firstname", array()));
            echo "\" /></td>
            <td><input type=\"text\" name=\"people[";
            // line 20
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "][surname]\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "surname", array()));
            echo "\" /></td>
        </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "
    </table>
    <a href=\"#\" id=\"add_row\">Add row</a>
    <input type=\"submit\" value=\"OK\" />
</form>


<script src=\"https://code.jquery.com/jquery-1.12.0.min.js\"></script>
<script src=\"js/scripts.js\"></script>
</body>
</html>

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
        return array (  61 => 23,  50 => 20,  44 => 19,  41 => 18,  37 => 17,  19 => 1,);
    }
}
/* */
/* <!doctype html>*/
/* */
/* <html lang="en">*/
/* <head>*/
/*     <meta charset="utf-8">*/
/* </head>*/
/* */
/* <body>*/
/* */
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
/*         </tr>*/
/*         {% endfor %}*/
/* */
/*     </table>*/
/*     <a href="#" id="add_row">Add row</a>*/
/*     <input type="submit" value="OK" />*/
/* </form>*/
/* */
/* */
/* <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>*/
/* <script src="js/scripts.js"></script>*/
/* </body>*/
/* </html>*/
/* */
/* */
