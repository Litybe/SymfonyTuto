<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_8fa8ccc0e9eb4cf68dc3c20c66d2d93dbe8d0b3daf969b0e246b9d130ac6c2fa extends Twig_Template
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
        $__internal_7ddc37b3b7f62579bdb82c6eaf9f5fe768be72a6a076ffc86664eb6f867aeaee = $this->env->getExtension("native_profiler");
        $__internal_7ddc37b3b7f62579bdb82c6eaf9f5fe768be72a6a076ffc86664eb6f867aeaee->enter($__internal_7ddc37b3b7f62579bdb82c6eaf9f5fe768be72a6a076ffc86664eb6f867aeaee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_7ddc37b3b7f62579bdb82c6eaf9f5fe768be72a6a076ffc86664eb6f867aeaee->leave($__internal_7ddc37b3b7f62579bdb82c6eaf9f5fe768be72a6a076ffc86664eb6f867aeaee_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
