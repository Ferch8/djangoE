<?php

/* laborales/edit.html.twig */
class __TwigTemplate_2e255cae5ccd6111e19fd6a87646c43755cb8316016924f8515108b813d76990 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "laborales/edit.html.twig", 1);
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
        $__internal_83d89afd81cfdda939f0d0d627fc2ad7b5b56e9a62546dc15251cc8e41d7c462 = $this->env->getExtension("native_profiler");
        $__internal_83d89afd81cfdda939f0d0d627fc2ad7b5b56e9a62546dc15251cc8e41d7c462->enter($__internal_83d89afd81cfdda939f0d0d627fc2ad7b5b56e9a62546dc15251cc8e41d7c462_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "laborales/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_83d89afd81cfdda939f0d0d627fc2ad7b5b56e9a62546dc15251cc8e41d7c462->leave($__internal_83d89afd81cfdda939f0d0d627fc2ad7b5b56e9a62546dc15251cc8e41d7c462_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_fa5fcd492ae1aa148cfa3b2fe796547ccaff82d43b54791ca8b6817ae16277b8 = $this->env->getExtension("native_profiler");
        $__internal_fa5fcd492ae1aa148cfa3b2fe796547ccaff82d43b54791ca8b6817ae16277b8->enter($__internal_fa5fcd492ae1aa148cfa3b2fe796547ccaff82d43b54791ca8b6817ae16277b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Laborales edit</h1>

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
        echo $this->env->getExtension('routing')->getPath("laborales_index");
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
        
        $__internal_fa5fcd492ae1aa148cfa3b2fe796547ccaff82d43b54791ca8b6817ae16277b8->leave($__internal_fa5fcd492ae1aa148cfa3b2fe796547ccaff82d43b54791ca8b6817ae16277b8_prof);

    }

    public function getTemplateName()
    {
        return "laborales/edit.html.twig";
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
/*     <h1>Laborales edit</h1>*/
/* */
/*     {{ form_start(edit_form) }}*/
/*         {{ form_widget(edit_form) }}*/
/*         <input type="submit" value="Edit" />*/
/*     {{ form_end(edit_form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('laborales_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
