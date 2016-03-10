<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_6125d0b2e51aca6e5366440d3c8656a42f68e30eee329fc835d21620ba991c18 extends Twig_Template
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
        $__internal_adedeea05adfdebb751b923729a31be3105b37dc0525efc02d1f12d99eab9f47 = $this->env->getExtension("native_profiler");
        $__internal_adedeea05adfdebb751b923729a31be3105b37dc0525efc02d1f12d99eab9f47->enter($__internal_adedeea05adfdebb751b923729a31be3105b37dc0525efc02d1f12d99eab9f47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_adedeea05adfdebb751b923729a31be3105b37dc0525efc02d1f12d99eab9f47->leave($__internal_adedeea05adfdebb751b923729a31be3105b37dc0525efc02d1f12d99eab9f47_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
