<?php

/* base.html.twig */
class __TwigTemplate_42a4a1dc6b6ff71d8d79cf6382ba36fc18b265bfb50fe94e70c9087c6dab2dc6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_25844d32ffcecfbaff0aef43cf4ea323f0290aca4dd1233accb10621831a2285 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25844d32ffcecfbaff0aef43cf4ea323f0290aca4dd1233accb10621831a2285->enter($__internal_25844d32ffcecfbaff0aef43cf4ea323f0290aca4dd1233accb10621831a2285_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_face717d261fd1e6d24e281fc29e22ff19713074792d31cd70bc32af30344afb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_face717d261fd1e6d24e281fc29e22ff19713074792d31cd70bc32af30344afb->enter($__internal_face717d261fd1e6d24e281fc29e22ff19713074792d31cd70bc32af30344afb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_25844d32ffcecfbaff0aef43cf4ea323f0290aca4dd1233accb10621831a2285->leave($__internal_25844d32ffcecfbaff0aef43cf4ea323f0290aca4dd1233accb10621831a2285_prof);

        
        $__internal_face717d261fd1e6d24e281fc29e22ff19713074792d31cd70bc32af30344afb->leave($__internal_face717d261fd1e6d24e281fc29e22ff19713074792d31cd70bc32af30344afb_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_f187e7bfce7d1eef04043e9d293c392e3f9374ac118d2176f7221f0e7149d5f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f187e7bfce7d1eef04043e9d293c392e3f9374ac118d2176f7221f0e7149d5f5->enter($__internal_f187e7bfce7d1eef04043e9d293c392e3f9374ac118d2176f7221f0e7149d5f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f47b04e12a5c572852e227ef648871d70cc106600c39c7ce148b3c66b7d3878e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f47b04e12a5c572852e227ef648871d70cc106600c39c7ce148b3c66b7d3878e->enter($__internal_f47b04e12a5c572852e227ef648871d70cc106600c39c7ce148b3c66b7d3878e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_f47b04e12a5c572852e227ef648871d70cc106600c39c7ce148b3c66b7d3878e->leave($__internal_f47b04e12a5c572852e227ef648871d70cc106600c39c7ce148b3c66b7d3878e_prof);

        
        $__internal_f187e7bfce7d1eef04043e9d293c392e3f9374ac118d2176f7221f0e7149d5f5->leave($__internal_f187e7bfce7d1eef04043e9d293c392e3f9374ac118d2176f7221f0e7149d5f5_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7f7113cdba67ada07fe0cb16cbbedad29b6e3ea1c7f23e54ecbee8fd8477f718 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f7113cdba67ada07fe0cb16cbbedad29b6e3ea1c7f23e54ecbee8fd8477f718->enter($__internal_7f7113cdba67ada07fe0cb16cbbedad29b6e3ea1c7f23e54ecbee8fd8477f718_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_edb81d00ec858f3807f09d563e167c735de664d5fb383019ab0db05afc3da007 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_edb81d00ec858f3807f09d563e167c735de664d5fb383019ab0db05afc3da007->enter($__internal_edb81d00ec858f3807f09d563e167c735de664d5fb383019ab0db05afc3da007_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_edb81d00ec858f3807f09d563e167c735de664d5fb383019ab0db05afc3da007->leave($__internal_edb81d00ec858f3807f09d563e167c735de664d5fb383019ab0db05afc3da007_prof);

        
        $__internal_7f7113cdba67ada07fe0cb16cbbedad29b6e3ea1c7f23e54ecbee8fd8477f718->leave($__internal_7f7113cdba67ada07fe0cb16cbbedad29b6e3ea1c7f23e54ecbee8fd8477f718_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_bbdb1a0b17909a5e37c9a98b1e71b216b43dc11a54a00f931dfb7b196bc58aeb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bbdb1a0b17909a5e37c9a98b1e71b216b43dc11a54a00f931dfb7b196bc58aeb->enter($__internal_bbdb1a0b17909a5e37c9a98b1e71b216b43dc11a54a00f931dfb7b196bc58aeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0deaabb4ffc36766a17593e2631a26902744407983cbeca381f9389bd60c1c16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0deaabb4ffc36766a17593e2631a26902744407983cbeca381f9389bd60c1c16->enter($__internal_0deaabb4ffc36766a17593e2631a26902744407983cbeca381f9389bd60c1c16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_0deaabb4ffc36766a17593e2631a26902744407983cbeca381f9389bd60c1c16->leave($__internal_0deaabb4ffc36766a17593e2631a26902744407983cbeca381f9389bd60c1c16_prof);

        
        $__internal_bbdb1a0b17909a5e37c9a98b1e71b216b43dc11a54a00f931dfb7b196bc58aeb->leave($__internal_bbdb1a0b17909a5e37c9a98b1e71b216b43dc11a54a00f931dfb7b196bc58aeb_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_85561c41611e60b278572265f4bce54e381085478b27420a94fb611a9780f21d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85561c41611e60b278572265f4bce54e381085478b27420a94fb611a9780f21d->enter($__internal_85561c41611e60b278572265f4bce54e381085478b27420a94fb611a9780f21d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_f52bb4e11392c1cc3a023a096072d9a90bd3ef0baa58d51c62fcd0854692c4f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f52bb4e11392c1cc3a023a096072d9a90bd3ef0baa58d51c62fcd0854692c4f1->enter($__internal_f52bb4e11392c1cc3a023a096072d9a90bd3ef0baa58d51c62fcd0854692c4f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_f52bb4e11392c1cc3a023a096072d9a90bd3ef0baa58d51c62fcd0854692c4f1->leave($__internal_f52bb4e11392c1cc3a023a096072d9a90bd3ef0baa58d51c62fcd0854692c4f1_prof);

        
        $__internal_85561c41611e60b278572265f4bce54e381085478b27420a94fb611a9780f21d->leave($__internal_85561c41611e60b278572265f4bce54e381085478b27420a94fb611a9780f21d_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/var/www/html/z-symfony-docker/app/Resources/views/base.html.twig");
    }
}
