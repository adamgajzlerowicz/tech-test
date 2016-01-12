<?php

/* base.twig.html */
class __TwigTemplate_873e3686b8b35ce31e0fe78b745adfed8b963a5f9f7b86af9b4a22ec60eeaf13 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!doctype html>

<html lang=\"en\">
<head>
    <title>Adam</title>
    <meta charset=\"utf-8\">
</head>

<body>
<a href=\"/\">home</a>
";
        // line 11
        $this->displayBlock('content', $context, $blocks);
        // line 12
        echo "
<script src=\"https://code.jquery.com/jquery-1.12.0.min.js\"></script>
<script src=\"js/scripts.js\"></script>
</body>
</html>

";
    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "base.twig.html";
    }

    public function getDebugInfo()
    {
        return array (  44 => 11,  34 => 12,  32 => 11,  20 => 1,);
    }
}
/* <!doctype html>*/
/* */
/* <html lang="en">*/
/* <head>*/
/*     <title>Adam</title>*/
/*     <meta charset="utf-8">*/
/* </head>*/
/* */
/* <body>*/
/* <a href="/">home</a>*/
/* {% block content %}{% endblock %}*/
/* */
/* <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>*/
/* <script src="js/scripts.js"></script>*/
/* </body>*/
/* </html>*/
/* */
/* */
