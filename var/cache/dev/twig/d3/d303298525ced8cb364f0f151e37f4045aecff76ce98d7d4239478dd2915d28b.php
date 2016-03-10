<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_791818b2274e9cc36c53f4f673c7053fa1a3c7a6f307684a9e87a8994ef46aba extends Twig_Template
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
        $__internal_db7279ab43ce856afba76b0099f8ba9f38faf772cdcefc09a0f1aa3c153b7286 = $this->env->getExtension("native_profiler");
        $__internal_db7279ab43ce856afba76b0099f8ba9f38faf772cdcefc09a0f1aa3c153b7286->enter($__internal_db7279ab43ce856afba76b0099f8ba9f38faf772cdcefc09a0f1aa3c153b7286_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_db7279ab43ce856afba76b0099f8ba9f38faf772cdcefc09a0f1aa3c153b7286->leave($__internal_db7279ab43ce856afba76b0099f8ba9f38faf772cdcefc09a0f1aa3c153b7286_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
