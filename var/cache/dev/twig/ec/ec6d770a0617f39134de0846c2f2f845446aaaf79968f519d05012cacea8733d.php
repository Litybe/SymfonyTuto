<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_b6d65515834f377cde0f2adc5e17951aff13a2b43c771e1c78dc5887134b7458 extends Twig_Template
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
        $__internal_24967412c1c8bb2fcca3e678716aadd9d827511e5e36c6389fffcd0ab34530fd = $this->env->getExtension("native_profiler");
        $__internal_24967412c1c8bb2fcca3e678716aadd9d827511e5e36c6389fffcd0ab34530fd->enter($__internal_24967412c1c8bb2fcca3e678716aadd9d827511e5e36c6389fffcd0ab34530fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_24967412c1c8bb2fcca3e678716aadd9d827511e5e36c6389fffcd0ab34530fd->leave($__internal_24967412c1c8bb2fcca3e678716aadd9d827511e5e36c6389fffcd0ab34530fd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
