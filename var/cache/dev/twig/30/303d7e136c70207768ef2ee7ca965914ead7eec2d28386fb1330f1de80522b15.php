<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_17eea0ea754359df55a18c3497df31f286568e9f5a8e1593a63d0b0fb1ddec2b extends Twig_Template
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
        $__internal_84f33f660b80421195070cc7b9db0ae74622224a0b2ddc08c19c4af3363f9f30 = $this->env->getExtension("native_profiler");
        $__internal_84f33f660b80421195070cc7b9db0ae74622224a0b2ddc08c19c4af3363f9f30->enter($__internal_84f33f660b80421195070cc7b9db0ae74622224a0b2ddc08c19c4af3363f9f30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_84f33f660b80421195070cc7b9db0ae74622224a0b2ddc08c19c4af3363f9f30->leave($__internal_84f33f660b80421195070cc7b9db0ae74622224a0b2ddc08c19c4af3363f9f30_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
