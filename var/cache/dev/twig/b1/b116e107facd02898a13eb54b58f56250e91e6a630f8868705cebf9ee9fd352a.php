<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_af63337906521c6b9c7e40b8203c29a8e02b0003cb201d5452d0b987839a0066 extends Twig_Template
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
        $__internal_1af4e458ef4dccecc2d93f8f6ad25768bd17bb7dbc4d12ce66cc0980b3f59033 = $this->env->getExtension("native_profiler");
        $__internal_1af4e458ef4dccecc2d93f8f6ad25768bd17bb7dbc4d12ce66cc0980b3f59033->enter($__internal_1af4e458ef4dccecc2d93f8f6ad25768bd17bb7dbc4d12ce66cc0980b3f59033_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_1af4e458ef4dccecc2d93f8f6ad25768bd17bb7dbc4d12ce66cc0980b3f59033->leave($__internal_1af4e458ef4dccecc2d93f8f6ad25768bd17bb7dbc4d12ce66cc0980b3f59033_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
