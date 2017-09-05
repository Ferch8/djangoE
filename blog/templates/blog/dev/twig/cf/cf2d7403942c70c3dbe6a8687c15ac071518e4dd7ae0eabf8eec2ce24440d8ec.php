<?php

/* casos/edit.html.twig */
class __TwigTemplate_ac71959c042d3c96bbe12da6b1258212e2496429bedc7d26b7086f48f39b7eaa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "casos/edit.html.twig", 1);
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
        $__internal_3b8a000f5a1dcbb84690721d85492e0f612ff6af6be0336c38bce14118166412 = $this->env->getExtension("native_profiler");
        $__internal_3b8a000f5a1dcbb84690721d85492e0f612ff6af6be0336c38bce14118166412->enter($__internal_3b8a000f5a1dcbb84690721d85492e0f612ff6af6be0336c38bce14118166412_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "casos/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3b8a000f5a1dcbb84690721d85492e0f612ff6af6be0336c38bce14118166412->leave($__internal_3b8a000f5a1dcbb84690721d85492e0f612ff6af6be0336c38bce14118166412_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_27816c13a32f5464dbd3bf4bb82a5a990b6c5cf1a9d60a360a6b5dc08ca31282 = $this->env->getExtension("native_profiler");
        $__internal_27816c13a32f5464dbd3bf4bb82a5a990b6c5cf1a9d60a360a6b5dc08ca31282->enter($__internal_27816c13a32f5464dbd3bf4bb82a5a990b6c5cf1a9d60a360a6b5dc08ca31282_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Casos edit</h1>

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
        echo $this->env->getExtension('routing')->getPath("casos_index");
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
        
        $__internal_27816c13a32f5464dbd3bf4bb82a5a990b6c5cf1a9d60a360a6b5dc08ca31282->leave($__internal_27816c13a32f5464dbd3bf4bb82a5a990b6c5cf1a9d60a360a6b5dc08ca31282_prof);

    }

    public function getTemplateName()
    {
        return "casos/edit.html.twig";
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
/*     <h1>Casos edit</h1>*/
/* */
/*     {{ form_start(edit_form) }}*/
/*         {{ form_widget(edit_form) }}*/
/*         <input type="submit" value="Edit" />*/
/*     {{ form_end(edit_form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('casos_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
