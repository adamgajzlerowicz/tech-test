<?php

/* base.twig.html */
class __TwigTemplate_1fdfad1f541628782bb33f6635089c202e7a4ec8e57f50f8f4f0559cefa1aed1 extends Twig_Template
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
