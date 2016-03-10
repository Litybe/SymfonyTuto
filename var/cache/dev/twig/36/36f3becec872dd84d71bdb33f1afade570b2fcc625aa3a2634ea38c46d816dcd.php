<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_ebfd01bc16f582c649c18d27d9ea3a63e099254de6c9596c39a064aeff90c794 extends Twig_Template
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
        $__internal_dc91107e93528599575fe80baa69b2bb0be781b7f57ed0e25d310617c45a2ae4 = $this->env->getExtension("native_profiler");
        $__internal_dc91107e93528599575fe80baa69b2bb0be781b7f57ed0e25d310617c45a2ae4->enter($__internal_dc91107e93528599575fe80baa69b2bb0be781b7f57ed0e25d310617c45a2ae4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_dc91107e93528599575fe80baa69b2bb0be781b7f57ed0e25d310617c45a2ae4->leave($__internal_dc91107e93528599575fe80baa69b2bb0be781b7f57ed0e25d310617c45a2ae4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
