<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_a51afa6b0a3eb014eaa8a590efd5d66ba07a21706d0de1fe57122a7e6c92240e extends Twig_Template
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
        $__internal_cb6e22aeff999fea2d4dcb469540bb42c64e45c120289ee9780370b9475368bb = $this->env->getExtension("native_profiler");
        $__internal_cb6e22aeff999fea2d4dcb469540bb42c64e45c120289ee9780370b9475368bb->enter($__internal_cb6e22aeff999fea2d4dcb469540bb42c64e45c120289ee9780370b9475368bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_cb6e22aeff999fea2d4dcb469540bb42c64e45c120289ee9780370b9475368bb->leave($__internal_cb6e22aeff999fea2d4dcb469540bb42c64e45c120289ee9780370b9475368bb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
