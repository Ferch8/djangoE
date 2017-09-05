<?php

/* estudiantes/edit.html.twig */
class __TwigTemplate_41b838295aca98b8e687f52da4158eaf090a2d08524f3496e0197ae8d4b96883 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "estudiantes/edit.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_73df8a53a7da96916d9919d765e240639aafd5550988faaecc12ebd3ad50fb82 = $this->env->getExtension("native_profiler");
        $__internal_73df8a53a7da96916d9919d765e240639aafd5550988faaecc12ebd3ad50fb82->enter($__internal_73df8a53a7da96916d9919d765e240639aafd5550988faaecc12ebd3ad50fb82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "estudiantes/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_73df8a53a7da96916d9919d765e240639aafd5550988faaecc12ebd3ad50fb82->leave($__internal_73df8a53a7da96916d9919d765e240639aafd5550988faaecc12ebd3ad50fb82_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c35d6de3cbadbb981f054579f9651cc2af840f46cf6a7e54a48f2a9ad2943154 = $this->env->getExtension("native_profiler");
        $__internal_c35d6de3cbadbb981f054579f9651cc2af840f46cf6a7e54a48f2a9ad2943154->enter($__internal_c35d6de3cbadbb981f054579f9651cc2af840f46cf6a7e54a48f2a9ad2943154_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Estudiantes edit</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("estudiantes_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 18
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_c35d6de3cbadbb981f054579f9651cc2af840f46cf6a7e54a48f2a9ad2943154->leave($__internal_c35d6de3cbadbb981f054579f9651cc2af840f46cf6a7e54a48f2a9ad2943154_prof);

    }

    public function getTemplateName()
    {
        return "estudiantes/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 18,  66 => 16,  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Estudiantes edit</h1>*/
/* */
/*     {{ form_start(edit_form) }}*/
/*         {{ form_widget(edit_form) }}*/
/*         <input type="submit" value="Edit" />*/
/*     {{ form_end(edit_form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('estudiantes_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
