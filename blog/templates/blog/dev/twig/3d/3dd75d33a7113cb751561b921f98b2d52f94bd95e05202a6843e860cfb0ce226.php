<?php

/* ciudad/index.html.twig */
class __TwigTemplate_bfc79fb4c323650ff68b86898024f1b94c308a4a39aea315026b91f9ae32e472 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "ciudad/index.html.twig", 1);
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
        $__internal_9a1bd6d4aca7d5b730c2b0b8ce66adf82ddd5500de2d608a930726e5bc62fd12 = $this->env->getExtension("native_profiler");
        $__internal_9a1bd6d4aca7d5b730c2b0b8ce66adf82ddd5500de2d608a930726e5bc62fd12->enter($__internal_9a1bd6d4aca7d5b730c2b0b8ce66adf82ddd5500de2d608a930726e5bc62fd12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ciudad/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9a1bd6d4aca7d5b730c2b0b8ce66adf82ddd5500de2d608a930726e5bc62fd12->leave($__internal_9a1bd6d4aca7d5b730c2b0b8ce66adf82ddd5500de2d608a930726e5bc62fd12_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_52513e86669350648c610aaf7050ba89500d2eb3969925b37b757e9fc519d37e = $this->env->getExtension("native_profiler");
        $__internal_52513e86669350648c610aaf7050ba89500d2eb3969925b37b757e9fc519d37e->enter($__internal_52513e86669350648c610aaf7050ba89500d2eb3969925b37b757e9fc519d37e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Listado de Ciudades</h1>

    <table>
        <thead>
          <tr>
              <th>Idciudad</th>
              <th>Postalciudad</th>
              <th>Ciudad</th>
              <th>Estado </th>
              <th>Opciones</th>
          </tr>
        </thead>
        <tbody>
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ciudads"]) ? $context["ciudads"] : $this->getContext($context, "ciudads")));
        foreach ($context['_seq'] as $context["_key"] => $context["ciudad"]) {
            // line 18
            echo "        <tr>
            <td><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ciudad_show", array("id" => $this->getAttribute($context["ciudad"], "idCiudad", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["ciudad"], "idCiudad", array()), "html", null, true);
            echo "</a></td>
            <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["ciudad"], "postalCiudad", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["ciudad"], "ciudad", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 22
            if ($this->getAttribute($context["ciudad"], "estadoCiudad", array())) {
                echo "Activo";
            } else {
                echo "No";
            }
            echo "</td>
            <td>
                <ul>
                    <li>
                        <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ciudad_show", array("id" => $this->getAttribute($context["ciudad"], "idCiudad", array()))), "html", null, true);
            echo "\">Mostrar</a>
                    </li>
                    <li>
                        <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ciudad_edit", array("id" => $this->getAttribute($context["ciudad"], "idCiudad", array()))), "html", null, true);
            echo "\">Editar</a>
                    </li>
                </ul>
            </td>
        </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ciudad'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 40
        echo $this->env->getExtension('routing')->getPath("ciudad_new");
        echo "\">Crear Nueva Ciudad</a>
        </li>
    </ul>
";
        
        $__internal_52513e86669350648c610aaf7050ba89500d2eb3969925b37b757e9fc519d37e->leave($__internal_52513e86669350648c610aaf7050ba89500d2eb3969925b37b757e9fc519d37e_prof);

    }

    public function getTemplateName()
    {
        return "ciudad/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 40,  105 => 35,  93 => 29,  87 => 26,  76 => 22,  72 => 21,  68 => 20,  62 => 19,  59 => 18,  55 => 17,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'layout.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Listado de Ciudades</h1>*/
/* */
/*     <table>*/
/*         <thead>*/
/*           <tr>*/
/*               <th>Idciudad</th>*/
/*               <th>Postalciudad</th>*/
/*               <th>Ciudad</th>*/
/*               <th>Estado </th>*/
/*               <th>Opciones</th>*/
/*           </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for ciudad in ciudads %}*/
/*         <tr>*/
/*             <td><a href="{{ path('ciudad_show', { 'id': ciudad.idCiudad }) }}">{{ ciudad.idCiudad }}</a></td>*/
/*             <td>{{ ciudad.postalCiudad }}</td>*/
/*             <td>{{ ciudad.ciudad }}</td>*/
/*             <td>{% if ciudad.estadoCiudad %}Activo{% else %}No{% endif %}</td>*/
/*             <td>*/
/*                 <ul>*/
/*                     <li>*/
/*                         <a href="{{ path('ciudad_show', { 'id': ciudad.idCiudad }) }}">Mostrar</a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href="{{ path('ciudad_edit', { 'id': ciudad.idCiudad }) }}">Editar</a>*/
/*                     </li>*/
/*                 </ul>*/
/*             </td>*/
/*         </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('ciudad_new') }}">Crear Nueva Ciudad</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
