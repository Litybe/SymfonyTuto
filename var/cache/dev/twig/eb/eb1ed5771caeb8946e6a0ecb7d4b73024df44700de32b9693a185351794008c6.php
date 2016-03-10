<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_6524036adad93e90c279a3665adebf6bb02d3c9098fd0add34ec743b70e48b7a extends Twig_Template
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
        $__internal_abdd7e4b0673f420e2bdc96c6b43ef55d8b730cfbf332a73ff6060181e1e44c5 = $this->env->getExtension("native_profiler");
        $__internal_abdd7e4b0673f420e2bdc96c6b43ef55d8b730cfbf332a73ff6060181e1e44c5->enter($__internal_abdd7e4b0673f420e2bdc96c6b43ef55d8b730cfbf332a73ff6060181e1e44c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_abdd7e4b0673f420e2bdc96c6b43ef55d8b730cfbf332a73ff6060181e1e44c5->leave($__internal_abdd7e4b0673f420e2bdc96c6b43ef55d8b730cfbf332a73ff6060181e1e44c5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
