<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_fc8d50b4ddaf604f422b05df6bd2514d63ecc83ac9533c9dcebb31515095dd1c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2357c028d2851ebc14d3fc25c5e713548e55c48d5a08706aeca19e288cce80e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2357c028d2851ebc14d3fc25c5e713548e55c48d5a08706aeca19e288cce80e7->enter($__internal_2357c028d2851ebc14d3fc25c5e713548e55c48d5a08706aeca19e288cce80e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_5820e60c4af8aa71c26fb8ac1717dc342046f43e6e19199c47ce96f9fcd5dd76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5820e60c4af8aa71c26fb8ac1717dc342046f43e6e19199c47ce96f9fcd5dd76->enter($__internal_5820e60c4af8aa71c26fb8ac1717dc342046f43e6e19199c47ce96f9fcd5dd76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2357c028d2851ebc14d3fc25c5e713548e55c48d5a08706aeca19e288cce80e7->leave($__internal_2357c028d2851ebc14d3fc25c5e713548e55c48d5a08706aeca19e288cce80e7_prof);

        
        $__internal_5820e60c4af8aa71c26fb8ac1717dc342046f43e6e19199c47ce96f9fcd5dd76->leave($__internal_5820e60c4af8aa71c26fb8ac1717dc342046f43e6e19199c47ce96f9fcd5dd76_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b1aef35869e0a38b8c9327776a50350570b82aba09f2f6f35e016a1996c77be3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1aef35869e0a38b8c9327776a50350570b82aba09f2f6f35e016a1996c77be3->enter($__internal_b1aef35869e0a38b8c9327776a50350570b82aba09f2f6f35e016a1996c77be3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_4e59f54411f1186f91785a79514dd760c33657d987442e6b3eb8c71bcfc35437 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e59f54411f1186f91785a79514dd760c33657d987442e6b3eb8c71bcfc35437->enter($__internal_4e59f54411f1186f91785a79514dd760c33657d987442e6b3eb8c71bcfc35437_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_4e59f54411f1186f91785a79514dd760c33657d987442e6b3eb8c71bcfc35437->leave($__internal_4e59f54411f1186f91785a79514dd760c33657d987442e6b3eb8c71bcfc35437_prof);

        
        $__internal_b1aef35869e0a38b8c9327776a50350570b82aba09f2f6f35e016a1996c77be3->leave($__internal_b1aef35869e0a38b8c9327776a50350570b82aba09f2f6f35e016a1996c77be3_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5dd23c79815595d6cf2598b0fb7843f25f96f993b2ca90542f94a9e80979ac38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5dd23c79815595d6cf2598b0fb7843f25f96f993b2ca90542f94a9e80979ac38->enter($__internal_5dd23c79815595d6cf2598b0fb7843f25f96f993b2ca90542f94a9e80979ac38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_38fce308c850518778e46e6b2b045a8e733348beb115f673866cc9c4d410c5b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38fce308c850518778e46e6b2b045a8e733348beb115f673866cc9c4d410c5b6->enter($__internal_38fce308c850518778e46e6b2b045a8e733348beb115f673866cc9c4d410c5b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_38fce308c850518778e46e6b2b045a8e733348beb115f673866cc9c4d410c5b6->leave($__internal_38fce308c850518778e46e6b2b045a8e733348beb115f673866cc9c4d410c5b6_prof);

        
        $__internal_5dd23c79815595d6cf2598b0fb7843f25f96f993b2ca90542f94a9e80979ac38->leave($__internal_5dd23c79815595d6cf2598b0fb7843f25f96f993b2ca90542f94a9e80979ac38_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_af34f4d6626a868141399ea8e402a06370fc71e66e3e42e2896902a9ad9d64e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af34f4d6626a868141399ea8e402a06370fc71e66e3e42e2896902a9ad9d64e9->enter($__internal_af34f4d6626a868141399ea8e402a06370fc71e66e3e42e2896902a9ad9d64e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_3d4452b0215c70bd0ec31998782d90cf74100c83b9811d99a4e21d74172392b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d4452b0215c70bd0ec31998782d90cf74100c83b9811d99a4e21d74172392b7->enter($__internal_3d4452b0215c70bd0ec31998782d90cf74100c83b9811d99a4e21d74172392b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_3d4452b0215c70bd0ec31998782d90cf74100c83b9811d99a4e21d74172392b7->leave($__internal_3d4452b0215c70bd0ec31998782d90cf74100c83b9811d99a4e21d74172392b7_prof);

        
        $__internal_af34f4d6626a868141399ea8e402a06370fc71e66e3e42e2896902a9ad9d64e9->leave($__internal_af34f4d6626a868141399ea8e402a06370fc71e66e3e42e2896902a9ad9d64e9_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/var/www/html/z-symfony-docker/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
