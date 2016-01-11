<?php

/* index.twig.html */
class __TwigTemplate_ceee17370df8e318f0a65a1380315409d3dd8d733ffad37b0fd6e39a17c79a5e extends Twig_Template
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
        echo "<form>
    <table>
        <tr>
            <th>First name</th>
            <th>Last name</th>
        </tr>
        <tr>
            <td><input type=\"text\" name=\"people[][firstname]\" value=\"Leonard\" /></td>
            <td><input type=\"text\" name=\"people[][surname]\" value=\"Hofstader\" /></td>
        </tr>
        <tr>
            <td><input type=\"text\" name=\"people[][firstname]\" value=\"Sheldon\" /></td>
            <td><input type=\"text\" name=\"people[][surname]\" value=\"Cooper\" /></td>
        </tr>
        <tr>
            <td><input type=\"text\" name=\"people[][firstname]\" value=\"Raj\" /></td>
            <td><input type=\"text\" name=\"people[][surname]\" value=\"Koothrapali\" /></td>
        </tr>
        <tr>
            <td><input type=\"text\" name=\"people[][firstname]\" value=\"Howard\" /></td>
            <td><input type=\"text\" name=\"people[][surname]\" value=\"Wolowitz\" /></td>
        </tr>
        <tr>
            <td><input type=\"text\" name=\"people[][firstname]\" value=\"Penny\" /></td>
            <td><input type=\"text\" name=\"people[][surname]\" value=\"\" /></td>
        </tr>
    </table>
    <input type=\"submit\" value=\"OK\" />
</form>
";
    }

    public function getTemplateName()
    {
        return "index.twig.html";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* <form>*/
/*     <table>*/
/*         <tr>*/
/*             <th>First name</th>*/
/*             <th>Last name</th>*/
/*         </tr>*/
/*         <tr>*/
/*             <td><input type="text" name="people[][firstname]" value="Leonard" /></td>*/
/*             <td><input type="text" name="people[][surname]" value="Hofstader" /></td>*/
/*         </tr>*/
/*         <tr>*/
/*             <td><input type="text" name="people[][firstname]" value="Sheldon" /></td>*/
/*             <td><input type="text" name="people[][surname]" value="Cooper" /></td>*/
/*         </tr>*/
/*         <tr>*/
/*             <td><input type="text" name="people[][firstname]" value="Raj" /></td>*/
/*             <td><input type="text" name="people[][surname]" value="Koothrapali" /></td>*/
/*         </tr>*/
/*         <tr>*/
/*             <td><input type="text" name="people[][firstname]" value="Howard" /></td>*/
/*             <td><input type="text" name="people[][surname]" value="Wolowitz" /></td>*/
/*         </tr>*/
/*         <tr>*/
/*             <td><input type="text" name="people[][firstname]" value="Penny" /></td>*/
/*             <td><input type="text" name="people[][surname]" value="" /></td>*/
/*         </tr>*/
/*     </table>*/
/*     <input type="submit" value="OK" />*/
/* </form>*/
/* */
