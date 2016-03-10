<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_b5096d93bb3965305b8b1129aa13374e70dca4b7a4402f6212f26722bf6bc2f2 extends Twig_Template
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
        $__internal_83d316674fe5eb73e8d4043b6bc2f3f8e8c8d2769a3b387c1b21ec3503a0ea05 = $this->env->getExtension("native_profiler");
        $__internal_83d316674fe5eb73e8d4043b6bc2f3f8e8c8d2769a3b387c1b21ec3503a0ea05->enter($__internal_83d316674fe5eb73e8d4043b6bc2f3f8e8c8d2769a3b387c1b21ec3503a0ea05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_83d316674fe5eb73e8d4043b6bc2f3f8e8c8d2769a3b387c1b21ec3503a0ea05->leave($__internal_83d316674fe5eb73e8d4043b6bc2f3f8e8c8d2769a3b387c1b21ec3503a0ea05_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
