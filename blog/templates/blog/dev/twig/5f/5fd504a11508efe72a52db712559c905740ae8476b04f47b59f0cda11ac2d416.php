<?php

/* ciudad/new.html.twig */
class __TwigTemplate_858f79269eee7e7d83c06c77d518100f9a62c7bd3739079ed72eedae3e821411 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "ciudad/new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_eaed565b1e3f97a7aeb73f8178c63ba263e0086af4855e84ce3bb9995b343aac = $this->env->getExtension("native_profiler");
        $__internal_eaed565b1e3f97a7aeb73f8178c63ba263e0086af4855e84ce3bb9995b343aac->enter($__internal_eaed565b1e3f97a7aeb73f8178c63ba263e0086af4855e84ce3bb9995b343aac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ciudad/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eaed565b1e3f97a7aeb73f8178c63ba263e0086af4855e84ce3bb9995b343aac->leave($__internal_eaed565b1e3f97a7aeb73f8178c63ba263e0086af4855e84ce3bb9995b343aac_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5ce654a0ee644e8f4c4719814e895630a4398fb638704ef41672524c6d18634c = $this->env->getExtension("native_profiler");
        $__internal_5ce654a0ee644e8f4c4719814e895630a4398fb638704ef41672524c6d18634c->enter($__internal_5ce654a0ee644e8f4c4719814e895630a4398fb638704ef41672524c6d18634c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Ciudad Crear</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Crear\" />
    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("ciudad_index");
        echo "\">Regresar al Listado</a>
        </li>
    </ul>
";
        
        $__internal_5ce654a0ee644e8f4c4719814e895630a4398fb638704ef41672524c6d18634c->leave($__internal_5ce654a0ee644e8f4c4719814e895630a4398fb638704ef41672524c6d18634c_prof);

    }

    public function getTemplateName()
    {
        return "ciudad/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'layout.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Ciudad Crear</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Crear" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('ciudad_index') }}">Regresar al Listado</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
