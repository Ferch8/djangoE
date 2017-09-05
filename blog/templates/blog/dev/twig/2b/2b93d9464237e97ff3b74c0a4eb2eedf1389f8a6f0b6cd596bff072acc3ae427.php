<?php

/* laborales/new.html.twig */
class __TwigTemplate_5137c4ab46e61bb11c1b6eba107b372ae960959337333afa94f8e409e67d138b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "laborales/new.html.twig", 1);
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
        $__internal_f7933b498ddd2d68552fc8fd474ad24fa630e3fc5b8f095d14ccdd2dfc874ced = $this->env->getExtension("native_profiler");
        $__internal_f7933b498ddd2d68552fc8fd474ad24fa630e3fc5b8f095d14ccdd2dfc874ced->enter($__internal_f7933b498ddd2d68552fc8fd474ad24fa630e3fc5b8f095d14ccdd2dfc874ced_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "laborales/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f7933b498ddd2d68552fc8fd474ad24fa630e3fc5b8f095d14ccdd2dfc874ced->leave($__internal_f7933b498ddd2d68552fc8fd474ad24fa630e3fc5b8f095d14ccdd2dfc874ced_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_87308ac388198623d1ae58e5e2540ede5f5ec6389323cef79ac2d8f6041b4054 = $this->env->getExtension("native_profiler");
        $__internal_87308ac388198623d1ae58e5e2540ede5f5ec6389323cef79ac2d8f6041b4054->enter($__internal_87308ac388198623d1ae58e5e2540ede5f5ec6389323cef79ac2d8f6041b4054_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Laborales creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    ";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["nocaso"]) ? $context["nocaso"] : $this->getContext($context, "nocaso")), "html", null, true);
        echo "

    ";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["pruebas"]) ? $context["pruebas"] : $this->getContext($context, "pruebas")), "html", null, true);
        echo "
    ";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["asignatario"]) ? $context["asignatario"] : $this->getContext($context, "asignatario")), "html", null, true);
        echo "
    ";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["estado"]) ? $context["estado"] : $this->getContext($context, "estado")), "html", null, true);
        echo "
    ";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["tipoasunto"]) ? $context["tipoasunto"] : $this->getContext($context, "tipoasunto")), "html", null, true);
        echo "
    ";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["demandante"]) ? $context["demandante"] : $this->getContext($context, "demandante")), "html", null, true);
        echo "
    ";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["demandado"]) ? $context["demandado"] : $this->getContext($context, "demandado")), "html", null, true);
        echo "

    ";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["est"]) ? $context["est"] : $this->getContext($context, "est")), "html", null, true);
        echo "
    ";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["tribunal"]) ? $context["tribunal"] : $this->getContext($context, "tribunal")), "html", null, true);
        echo "
    ";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["asesor"]) ? $context["asesor"] : $this->getContext($context, "asesor")), "html", null, true);
        echo "
    ";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["tipo"]) ? $context["tipo"] : $this->getContext($context, "tipo")), "html", null, true);
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("laborales_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_87308ac388198623d1ae58e5e2540ede5f5ec6389323cef79ac2d8f6041b4054->leave($__internal_87308ac388198623d1ae58e5e2540ede5f5ec6389323cef79ac2d8f6041b4054_prof);

    }

    public function getTemplateName()
    {
        return "laborales/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 27,  100 => 23,  96 => 22,  92 => 21,  88 => 20,  83 => 18,  79 => 17,  75 => 16,  71 => 15,  67 => 14,  63 => 13,  58 => 11,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Laborales creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     {{nocaso}}*/
/* */
/*     {{pruebas}}*/
/*     {{asignatario}}*/
/*     {{estado}}*/
/*     {{tipoasunto}}*/
/*     {{demandante}}*/
/*     {{demandado}}*/
/* */
/*     {{est}}*/
/*     {{tribunal}}*/
/*     {{asesor}}*/
/*     {{tipo}}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('laborales_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
