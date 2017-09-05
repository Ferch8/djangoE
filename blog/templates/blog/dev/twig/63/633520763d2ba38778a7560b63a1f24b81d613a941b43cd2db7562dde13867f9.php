<?php

/* demandados/new.html.twig */
class __TwigTemplate_acda95ac7d21579df7b31533ac4cda9eb2c04624e8a91b1ab75ca4e1aad92a2a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "demandados/new.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2842186d6dd25d27fa40691bc34ba451d7e941b78b01352ddcd5709da3c1f684 = $this->env->getExtension("native_profiler");
        $__internal_2842186d6dd25d27fa40691bc34ba451d7e941b78b01352ddcd5709da3c1f684->enter($__internal_2842186d6dd25d27fa40691bc34ba451d7e941b78b01352ddcd5709da3c1f684_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "demandados/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2842186d6dd25d27fa40691bc34ba451d7e941b78b01352ddcd5709da3c1f684->leave($__internal_2842186d6dd25d27fa40691bc34ba451d7e941b78b01352ddcd5709da3c1f684_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_2e4e67ef0b6bcacff2f31c233ca33a755c77422d966aa1349fe6a8bc2a387693 = $this->env->getExtension("native_profiler");
        $__internal_2e4e67ef0b6bcacff2f31c233ca33a755c77422d966aa1349fe6a8bc2a387693->enter($__internal_2e4e67ef0b6bcacff2f31c233ca33a755c77422d966aa1349fe6a8bc2a387693_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "        <h1>Crear Demandado</h1>
      ";
        
        $__internal_2e4e67ef0b6bcacff2f31c233ca33a755c77422d966aa1349fe6a8bc2a387693->leave($__internal_2e4e67ef0b6bcacff2f31c233ca33a755c77422d966aa1349fe6a8bc2a387693_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_f60c02153240372f5009fe5573a645d5f936db60b7f7354de10965f17f14242f = $this->env->getExtension("native_profiler");
        $__internal_f60c02153240372f5009fe5573a645d5f936db60b7f7354de10965f17f14242f->enter($__internal_f60c02153240372f5009fe5573a645d5f936db60b7f7354de10965f17f14242f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    <div class=\"portlet-body form\">
      <div id=\"form_sample_1\" class=\"form-horizontal\" >
        ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("role" => "form")));
        echo "
        <div class=\"form-body colorform\">
          <div class=\"col-md-offset-2\">
          <div class=\"form-group \">
            <div class=\"col-md-6\">
              ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombreDemandado", array()), 'label', array("label" => "Nombre"));
        echo "
              ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombreDemandado", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            </div>
          </div>
          <div class=\"form-group \">
            <div class=\"col-md-6\">
              ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "direccionDemandado", array()), 'label', array("label" => "Direccion"));
        echo "
              ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "direccionDemandado", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            </div>
          </div>
          <div class=\"form-group \">
            <div class=\"col-md-6\">
              ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dirnotificacionDemandado", array()), 'label', array("label" => "Direccion de Notificación"));
        echo "
              ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dirnotificacionDemandado", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            </div>
          </div>
          <div class=\"form-group \">
            <div class=\"col-md-6\">
              ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telefonoDemandado", array()), 'label', array("label" => "Teléfono"));
        echo "
              ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telefonoDemandado", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            </div>
          </div>
          <div class=\"form-group \">
            <div class=\"col-md-6\">
              ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "estadoDemandado", array()), 'label', array("label" => "Estado"));
        echo "
              ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "estadoDemandado", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            </div>
          </div>
        </div>
        </div>
        <div class=\"form-actions\">
          <div class=\"row\">
            <div class=\"col-md-offset-2 col-md-9\">
              <button type=\"submit\" name=\"Create\" class=\"btn green\">Crear</button>
              <a href=\"";
        // line 48
        echo $this->env->getExtension('routing')->getPath("demandados_index");
        echo "\"><button type=\"button\" name=\"cancelar\" class=\"btn default\">Cancelar</button></a>
            </div>
          </div>
        </div>
        ";
        // line 52
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
      </div>
    </div>

";
        
        $__internal_f60c02153240372f5009fe5573a645d5f936db60b7f7354de10965f17f14242f->leave($__internal_f60c02153240372f5009fe5573a645d5f936db60b7f7354de10965f17f14242f_prof);

    }

    public function getTemplateName()
    {
        return "demandados/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 52,  131 => 48,  119 => 39,  115 => 38,  107 => 33,  103 => 32,  95 => 27,  91 => 26,  83 => 21,  79 => 20,  71 => 15,  67 => 14,  59 => 9,  55 => 7,  49 => 6,  41 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends 'layout.html.twig' %}*/
/*       {% block title %}*/
/*         <h1>Crear Demandado</h1>*/
/*       {% endblock %}*/
/* */
/* {% block body %}*/
/*     <div class="portlet-body form">*/
/*       <div id="form_sample_1" class="form-horizontal" >*/
/*         {{ form_start(form,{'attr':{'role':'form'}}) }}*/
/*         <div class="form-body colorform">*/
/*           <div class="col-md-offset-2">*/
/*           <div class="form-group ">*/
/*             <div class="col-md-6">*/
/*               {{form_label(form.nombreDemandado,'Nombre')}}*/
/*               {{ form_widget(form.nombreDemandado,{'attr':{'class' : 'form-control'}}) }}*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group ">*/
/*             <div class="col-md-6">*/
/*               {{form_label(form.direccionDemandado,'Direccion')}}*/
/*               {{ form_widget(form.direccionDemandado,{'attr':{'class' : 'form-control'}}) }}*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group ">*/
/*             <div class="col-md-6">*/
/*               {{form_label(form.dirnotificacionDemandado,'Direccion de Notificación')}}*/
/*               {{ form_widget(form.dirnotificacionDemandado,{'attr':{'class' : 'form-control'}}) }}*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group ">*/
/*             <div class="col-md-6">*/
/*               {{form_label(form.telefonoDemandado,'Teléfono')}}*/
/*               {{ form_widget(form.telefonoDemandado,{'attr':{'class' : 'form-control'}}) }}*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group ">*/
/*             <div class="col-md-6">*/
/*               {{form_label(form.estadoDemandado,'Estado')}}*/
/*               {{ form_widget(form.estadoDemandado,{'attr':{'class' : 'form-control'}}) }}*/
/*             </div>*/
/*           </div>*/
/*         </div>*/
/*         </div>*/
/*         <div class="form-actions">*/
/*           <div class="row">*/
/*             <div class="col-md-offset-2 col-md-9">*/
/*               <button type="submit" name="Create" class="btn green">Crear</button>*/
/*               <a href="{{ path('demandados_index') }}"><button type="button" name="cancelar" class="btn default">Cancelar</button></a>*/
/*             </div>*/
/*           </div>*/
/*         </div>*/
/*         {{ form_end(form) }}*/
/*       </div>*/
/*     </div>*/
/* */
/* {% endblock %}*/
/* */
