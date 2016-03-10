<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_7ccedad1e09033e7911b6c1c863b2aaef84089c317c06ec5a343fde288838281 extends Twig_Template
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
        $__internal_d265dacd18191ed4520b4e661ae65f623d9956968eef6d29acdce759f6f97b03 = $this->env->getExtension("native_profiler");
        $__internal_d265dacd18191ed4520b4e661ae65f623d9956968eef6d29acdce759f6f97b03->enter($__internal_d265dacd18191ed4520b4e661ae65f623d9956968eef6d29acdce759f6f97b03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_d265dacd18191ed4520b4e661ae65f623d9956968eef6d29acdce759f6f97b03->leave($__internal_d265dacd18191ed4520b4e661ae65f623d9956968eef6d29acdce759f6f97b03_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
