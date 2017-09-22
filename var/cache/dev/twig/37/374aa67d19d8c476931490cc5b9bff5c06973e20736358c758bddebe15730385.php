<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_26ccac28e93129ff9e6e9e9adb3ed8294de69de07b64920873d38af5a8edd929 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_1456610bef3fe1a6f4e823d1231f80c6d18a4275a23fb1f6361dd3b0b213e06c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1456610bef3fe1a6f4e823d1231f80c6d18a4275a23fb1f6361dd3b0b213e06c->enter($__internal_1456610bef3fe1a6f4e823d1231f80c6d18a4275a23fb1f6361dd3b0b213e06c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_ed643dcc90a4e115f10b129c5c38a541cab8b997ee50ce376ebfc09919f23840 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed643dcc90a4e115f10b129c5c38a541cab8b997ee50ce376ebfc09919f23840->enter($__internal_ed643dcc90a4e115f10b129c5c38a541cab8b997ee50ce376ebfc09919f23840_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1456610bef3fe1a6f4e823d1231f80c6d18a4275a23fb1f6361dd3b0b213e06c->leave($__internal_1456610bef3fe1a6f4e823d1231f80c6d18a4275a23fb1f6361dd3b0b213e06c_prof);

        
        $__internal_ed643dcc90a4e115f10b129c5c38a541cab8b997ee50ce376ebfc09919f23840->leave($__internal_ed643dcc90a4e115f10b129c5c38a541cab8b997ee50ce376ebfc09919f23840_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_cffa174437c39a7d5ea4b6fa2807bf792695bf57b89d6fa56953802c1d8333fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cffa174437c39a7d5ea4b6fa2807bf792695bf57b89d6fa56953802c1d8333fb->enter($__internal_cffa174437c39a7d5ea4b6fa2807bf792695bf57b89d6fa56953802c1d8333fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_e53abfc7d5d1a846aad80990408a8cd75b3b25a40a0e19421107ff4787dd0947 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e53abfc7d5d1a846aad80990408a8cd75b3b25a40a0e19421107ff4787dd0947->enter($__internal_e53abfc7d5d1a846aad80990408a8cd75b3b25a40a0e19421107ff4787dd0947_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_e53abfc7d5d1a846aad80990408a8cd75b3b25a40a0e19421107ff4787dd0947->leave($__internal_e53abfc7d5d1a846aad80990408a8cd75b3b25a40a0e19421107ff4787dd0947_prof);

        
        $__internal_cffa174437c39a7d5ea4b6fa2807bf792695bf57b89d6fa56953802c1d8333fb->leave($__internal_cffa174437c39a7d5ea4b6fa2807bf792695bf57b89d6fa56953802c1d8333fb_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ceaa945c260dab76d54be26b18c37c54a5341f9a205369964c7346c625050aca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ceaa945c260dab76d54be26b18c37c54a5341f9a205369964c7346c625050aca->enter($__internal_ceaa945c260dab76d54be26b18c37c54a5341f9a205369964c7346c625050aca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_336a3c2ea407b5933dd7675176715074201917abcd239459e35c394355dc5292 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_336a3c2ea407b5933dd7675176715074201917abcd239459e35c394355dc5292->enter($__internal_336a3c2ea407b5933dd7675176715074201917abcd239459e35c394355dc5292_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_336a3c2ea407b5933dd7675176715074201917abcd239459e35c394355dc5292->leave($__internal_336a3c2ea407b5933dd7675176715074201917abcd239459e35c394355dc5292_prof);

        
        $__internal_ceaa945c260dab76d54be26b18c37c54a5341f9a205369964c7346c625050aca->leave($__internal_ceaa945c260dab76d54be26b18c37c54a5341f9a205369964c7346c625050aca_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3e86312e50520eb6cfc54afcd9b443c5252b3bf02ea9158dd76dd3c169a68f49 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e86312e50520eb6cfc54afcd9b443c5252b3bf02ea9158dd76dd3c169a68f49->enter($__internal_3e86312e50520eb6cfc54afcd9b443c5252b3bf02ea9158dd76dd3c169a68f49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d851be974f2c6493abf641719a751362e1294ae2073b74e44a9e62009d5c9564 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d851be974f2c6493abf641719a751362e1294ae2073b74e44a9e62009d5c9564->enter($__internal_d851be974f2c6493abf641719a751362e1294ae2073b74e44a9e62009d5c9564_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_d851be974f2c6493abf641719a751362e1294ae2073b74e44a9e62009d5c9564->leave($__internal_d851be974f2c6493abf641719a751362e1294ae2073b74e44a9e62009d5c9564_prof);

        
        $__internal_3e86312e50520eb6cfc54afcd9b443c5252b3bf02ea9158dd76dd3c169a68f49->leave($__internal_3e86312e50520eb6cfc54afcd9b443c5252b3bf02ea9158dd76dd3c169a68f49_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/var/www/html/z-symfony-docker/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
