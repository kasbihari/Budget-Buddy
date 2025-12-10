<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* contact/index.html.twig */
class __TwigTemplate_9ed6cb241b5ba5aee82d9a2a57ccef21 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact/index.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Hello ContactController!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "    <!-- Contact Hero Section -->
    <section class=\"contact-hero\">
        <div class=\"aurora-bg\"></div>
        <div class=\"container text-center\">
            <h1 class=\"contact-hero-title\">Contact Us</h1>
            <p class=\"contact-hero-subtitle\">We're here to help. Get in touch with us!</p>
        </div>
    </section>

    <!-- Contact Section -->
    <section class=\"container mb-5\">
        <div class=\"row\">
            <!-- Left column: form -->
            <div class=\"col-md-6 mb-4\">
                <div class=\"contact-form-container\">
                    <h2 class=\"section-title\">Send us a message</h2>
                    <form id=\"contactForm\">
                        <div class=\"form-group\">
                            <label for=\"name\" class=\"form-label\">Name</label>
                            <input type=\"text\" class=\"form-control\" id=\"name\" placeholder=\"Your name\" required>
                        </div>
                        <div class=\"form-group\">
                            <label for=\"email\" class=\"form-label\">Email</label>
                            <input type=\"email\" class=\"form-control\" id=\"email\" placeholder=\"your@email.com\" required>
                        </div>
                        <div class=\"form-group\">
                            <label for=\"message\" class=\"form-label\">Message</label>
                            <textarea class=\"form-control\" id=\"message\" rows=\"5\" placeholder=\"Your message\" required></textarea>
                        </div>
                        <button type=\"submit\" class=\"btn-auth\">Send Message</button>
                    </form>
                </div>
            </div>
            <!-- Right column: contact info -->
            <div class=\"col-md-6 mb-4\">
                <div class=\"contact-info-container\">
                    <h2 class=\"section-title mb-4\">Our contact details</h2>
                    <div class=\"contact-item\">
                        <i class=\"bi bi-geo-alt\"></i>
                        <p>Gustav Mahlerplein 90<br>1082 MA Amsterdam<br>Netherlands</p>
                    </div>
                    <div class=\"contact-item\">
                        <i class=\"bi bi-telephone\"></i>
                        <p><a href=\"tel:+31201234567\" class=\"contact-link\">+31 20 123 4567</a></p>
                    </div>
                    <div class=\"contact-item\">
                        <i class=\"bi bi-envelope\"></i>
                        <p><a href=\"mailto:info@budgetbuddy.nl\" class=\"contact-link\">info@budgetbuddy.nl</a></p>
                    </div>
                    <div class=\"contact-item\">
                        <i class=\"bi bi-clock\"></i>
                        <p>Monday - Friday: 9:00 - 17:00<br>Saturday - Sunday: Closed</p>
                    </div>
                    <div class=\"contact-item\">
                        <i class=\"bi bi-chat-dots\"></i>
                        <p>We typically respond within 24 hours</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "contact/index.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello ContactController!{% endblock %}

{% block body %}
    <!-- Contact Hero Section -->
    <section class=\"contact-hero\">
        <div class=\"aurora-bg\"></div>
        <div class=\"container text-center\">
            <h1 class=\"contact-hero-title\">Contact Us</h1>
            <p class=\"contact-hero-subtitle\">We're here to help. Get in touch with us!</p>
        </div>
    </section>

    <!-- Contact Section -->
    <section class=\"container mb-5\">
        <div class=\"row\">
            <!-- Left column: form -->
            <div class=\"col-md-6 mb-4\">
                <div class=\"contact-form-container\">
                    <h2 class=\"section-title\">Send us a message</h2>
                    <form id=\"contactForm\">
                        <div class=\"form-group\">
                            <label for=\"name\" class=\"form-label\">Name</label>
                            <input type=\"text\" class=\"form-control\" id=\"name\" placeholder=\"Your name\" required>
                        </div>
                        <div class=\"form-group\">
                            <label for=\"email\" class=\"form-label\">Email</label>
                            <input type=\"email\" class=\"form-control\" id=\"email\" placeholder=\"your@email.com\" required>
                        </div>
                        <div class=\"form-group\">
                            <label for=\"message\" class=\"form-label\">Message</label>
                            <textarea class=\"form-control\" id=\"message\" rows=\"5\" placeholder=\"Your message\" required></textarea>
                        </div>
                        <button type=\"submit\" class=\"btn-auth\">Send Message</button>
                    </form>
                </div>
            </div>
            <!-- Right column: contact info -->
            <div class=\"col-md-6 mb-4\">
                <div class=\"contact-info-container\">
                    <h2 class=\"section-title mb-4\">Our contact details</h2>
                    <div class=\"contact-item\">
                        <i class=\"bi bi-geo-alt\"></i>
                        <p>Gustav Mahlerplein 90<br>1082 MA Amsterdam<br>Netherlands</p>
                    </div>
                    <div class=\"contact-item\">
                        <i class=\"bi bi-telephone\"></i>
                        <p><a href=\"tel:+31201234567\" class=\"contact-link\">+31 20 123 4567</a></p>
                    </div>
                    <div class=\"contact-item\">
                        <i class=\"bi bi-envelope\"></i>
                        <p><a href=\"mailto:info@budgetbuddy.nl\" class=\"contact-link\">info@budgetbuddy.nl</a></p>
                    </div>
                    <div class=\"contact-item\">
                        <i class=\"bi bi-clock\"></i>
                        <p>Monday - Friday: 9:00 - 17:00<br>Saturday - Sunday: Closed</p>
                    </div>
                    <div class=\"contact-item\">
                        <i class=\"bi bi-chat-dots\"></i>
                        <p>We typically respond within 24 hours</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

{% endblock %}
", "contact/index.html.twig", "/Users/krishnabihari/Documents/GitHub/Budget-Buddy/templates/contact/index.html.twig");
    }
}
