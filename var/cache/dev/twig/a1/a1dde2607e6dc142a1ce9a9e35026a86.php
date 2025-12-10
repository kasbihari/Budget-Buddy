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

/* home/index.html.twig */
class __TwigTemplate_354b47644ea7137e38c09d8fce3b97e5 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

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

        yield "Home - Budget Buddy";
        
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
        yield "    ";
        if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 6, $this->source); })()), "user", [], "any", false, false, false, 6)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 7
            yield "        ";
            // line 8
            yield "
        <!-- Hero Sectie -->
        <section class=\"hero\">
            <div class=\"aurora-bg\"></div>
            <div class=\"container\">
                <div class=\"row align-items-center\">
                    <div class=\"col-md-6\">
                        <h1 class=\"hero-title\" data-translate=\"hero.title\">Your financial buddy</h1>
                        <p class=\"hero-subtitle\" data-translate=\"hero.subtitle\">
                            Keep track of your income and expenses, and prevent financial problems.
                        </p>
                        <button class=\"btn btn-hero\" id=\"startBtn\" data-translate=\"hero.button\">
                            <a href=\"";
            // line 20
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            yield "\">Get started →</a>
                        </button>
                    </div>
                    <div class=\"col-md-6 text-center\">
                        <div class=\"logo-frame\">
                            <div class=\"logo-frame-inner\">
                                <img src=\"";
            // line 26
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/BB-logo.png"), "html", null, true);
            yield "\" alt=\"BB-logo\">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Features Sectie -->
        <section class=\"features mb-5\">
            <div class=\"container\">
                <div class=\"row mb-5\">
                    <div class=\"col-md-6 mx-auto text-center\">
                        <h2 class=\"mb-3 section-title\" data-translate=\"features.title\">How does Budget Buddy work?</h2>
                        <p class=\"text-muted\" data-translate=\"features.subtitle\">
                            An intuitive way to manage your finances and gain insight into your spending pattern.
                        </p>
                    </div>
                </div>
                <div class=\"row g-4\">
                    <div class=\"col-md-4\">
                        <div class=\"feature-card glow-card\">
                            <div class=\"feature-icon\">
                                <i class=\"bi bi-cash-coin\"></i>
                            </div>
                            <h3 class=\"feature-title\" data-translate=\"features.income.title\">Track income</h3>
                            <p data-translate=\"features.income.text\">
                                Keep all your income such as salary, pocket money, allowances and student finance in one central place.
                            </p>
                        </div>
                    </div>
                    <div class=\"col-md-4\">
                        <div class=\"feature-card glow-card\">
                            <div class=\"feature-icon\"
                                 style=\"background: linear-gradient(135deg, rgba(5, 34, 11, 0.2) 0%, rgba(19, 67, 56, 0.15) 100%); color: var(--primary);\">
                                <i class=\"bi bi-receipt\"></i>
                            </div>
                            <h3 class=\"feature-title\" data-translate=\"features.expenses.title\">Track expenses</h3>
                            <p data-translate=\"features.expenses.text\">
                                Monitor your expenses for subscriptions, insurance, transport and other fixed expenses.
                            </p>
                        </div>
                    </div>
                    <div class=\"col-md-4\">
                        <div class=\"feature-card glow-card\">
                            <div class=\"feature-icon\"
                                 style=\"background: linear-gradient(135deg, rgba(19, 67, 56, 0.2) 0%, rgba(22, 249, 138, 0.15) 100%); color: var(--primary);\">
                                <i class=\"bi bi-graph-up-arrow\"></i>
                            </div>
                            <h3 class=\"feature-title\" data-translate=\"features.reports.title\">Reports & insights</h3>
                            <p data-translate=\"features.reports.text\">
                                Get clear overviews and advice about your financial situation with clear charts.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Stats Sectie -->
        <section class=\"stats-section mb-5\">
            <div class=\"container\">
                <div class=\"stats-container\">
                    <div class=\"aurora-bg\"></div>
                    <div class=\"row text-center\">
                        <div class=\"col-md-3 mb-4 mb-md-0\">
                            <div class=\"stat-number\">1.250+</div>
                            <div class=\"stat-label\" data-translate=\"stats.users\">Satisfied users</div>
                        </div>
                        <div class=\"col-md-3 mb-4 mb-md-0\">
                            <div class=\"stat-number\">€2.5M+</div>
                            <div class=\"stat-label\" data-translate=\"stats.budget\">Managed budget</div>
                        </div>
                        <div class=\"col-md-3 mb-4 mb-md-0\">
                            <div class=\"stat-number\">98%</div>
                            <div class=\"stat-label\" data-translate=\"stats.reviews\">Positive reviews</div>
                        </div>
                        <div class=\"col-md-3\">
                            <div class=\"stat-number\">24/7</div>
                            <div class=\"stat-label\" data-translate=\"stats.availability\">Available</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA Sectie -->
        <section class=\"cta-section mb-5\">
            <div class=\"container\">
                <div class=\"feature-card text-center\">
                    <h2 class=\"mb-4\" data-translate=\"cta.title\">Ready to get your finances under control?</h2>
                    <p class=\"mb-4\" data-translate=\"cta.subtitle\">
                        Sign up and start building a healthy financial future today.
                    </p>
                    <button class=\"btn btn-hero\" data-translate=\"cta.button\">
                        <a href=\"";
            // line 121
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            yield "\">Create account</a>
                    </button>
                </div>
            </div>
        </section>

    ";
        } else {
            // line 128
            yield "        ";
            // line 129
            yield "
        <!-- Ingelogde Hero -->
        <section class=\"hero logged-in-hero\">
            <div class=\"aurora-bg\"></div>
            <div class=\"container text-center py-5\">
                <h1 class=\"hero-title mb-3\">Welcome back, ";
            // line 134
            yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 134), "fullname", [], "any", true, true, false, 134) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 134, $this->source); })()), "user", [], "any", false, false, false, 134), "fullname", [], "any", false, false, false, 134)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 134, $this->source); })()), "user", [], "any", false, false, false, 134), "fullname", [], "any", false, false, false, 134), "html", null, true)) : ("user"));
            yield " 👋</h1>
                <p class=\"hero-subtitle mb-4\">Great to see you again. Let's take control of your finances.</p>
                <div class=\"d-flex justify-content-center gap-3 flex-wrap\">
                    <a href=\"/dashboard\" class=\"btn btn-hero px-4\">
                        <i class=\"bi bi-speedometer2 me-2\"></i> Go to Dashboard
                    </a>
                    <a href=\"/transactions\" class=\"btn btn-hero px-4\">
                        <i class=\"bi bi-arrow-left-right me-2\"></i> View Transactions
                    </a>
                    <a href=\"/reports\" class=\"btn btn-hero px-4\">
                        <i class=\"bi bi-graph-up me-2\"></i> View Reports
                    </a>
                </div>
            </div>
        </section>

        <!-- Stats / Motivatie blok met financiële feedback -->
        <section class=\"stats-section mb-5 mt-5\">
            <div class=\"container\">
                <div class=\"stats-container glow-card text-center py-5\">
                    <div class=\"mb-4\">
                        <span class=\"fs-1\">";
            // line 155
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 155, $this->source); })()), "user", [], "any", false, false, false, 155), "getFinancialHealthIcon", [], "any", false, false, false, 155), "html", null, true);
            yield "</span>
                    </div>
                    <h2 class=\"mb-3\">";
            // line 157
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 157, $this->source); })()), "user", [], "any", false, false, false, 157), "getFinancialMessage", [], "any", false, false, false, 157), "html", null, true);
            yield "</h2>
                    <p class=\"text-muted mb-3\">
                        Spaarquote: ";
            // line 159
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 159, $this->source); })()), "user", [], "any", false, false, false, 159), "getSavingsRate", [], "any", false, false, false, 159), 1), "html", null, true);
            yield "% •
                        Saldo: €";
            // line 160
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 160, $this->source); })()), "user", [], "any", false, false, false, 160), "getNetBalance", [], "any", false, false, false, 160), 2, ",", "."), "html", null, true);
            yield " •
                        Transacties: ";
            // line 161
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 161, $this->source); })()), "user", [], "any", false, false, false, 161), "getTransactionCount", [], "any", false, false, false, 161), "html", null, true);
            yield "
                    </p>
                    <p class=\"mb-0\">
                        Need insights? Head over to your <a class=\"text-light\" href=\"";
            // line 164
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reports");
            yield "\">reports</a> to track your progress 📈
                    </p>
                </div>
            </div>
        </section>
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "home/index.html.twig";
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
        return array (  293 => 164,  287 => 161,  283 => 160,  279 => 159,  274 => 157,  269 => 155,  245 => 134,  238 => 129,  236 => 128,  226 => 121,  128 => 26,  119 => 20,  105 => 8,  103 => 7,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Home - Budget Buddy{% endblock %}

{% block body %}
    {% if not app.user %}
        {# --- NIET INGELOGD: Toon originele homepage --- #}

        <!-- Hero Sectie -->
        <section class=\"hero\">
            <div class=\"aurora-bg\"></div>
            <div class=\"container\">
                <div class=\"row align-items-center\">
                    <div class=\"col-md-6\">
                        <h1 class=\"hero-title\" data-translate=\"hero.title\">Your financial buddy</h1>
                        <p class=\"hero-subtitle\" data-translate=\"hero.subtitle\">
                            Keep track of your income and expenses, and prevent financial problems.
                        </p>
                        <button class=\"btn btn-hero\" id=\"startBtn\" data-translate=\"hero.button\">
                            <a href=\"{{ path('app_register') }}\">Get started →</a>
                        </button>
                    </div>
                    <div class=\"col-md-6 text-center\">
                        <div class=\"logo-frame\">
                            <div class=\"logo-frame-inner\">
                                <img src=\"{{ asset('img/BB-logo.png') }}\" alt=\"BB-logo\">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Features Sectie -->
        <section class=\"features mb-5\">
            <div class=\"container\">
                <div class=\"row mb-5\">
                    <div class=\"col-md-6 mx-auto text-center\">
                        <h2 class=\"mb-3 section-title\" data-translate=\"features.title\">How does Budget Buddy work?</h2>
                        <p class=\"text-muted\" data-translate=\"features.subtitle\">
                            An intuitive way to manage your finances and gain insight into your spending pattern.
                        </p>
                    </div>
                </div>
                <div class=\"row g-4\">
                    <div class=\"col-md-4\">
                        <div class=\"feature-card glow-card\">
                            <div class=\"feature-icon\">
                                <i class=\"bi bi-cash-coin\"></i>
                            </div>
                            <h3 class=\"feature-title\" data-translate=\"features.income.title\">Track income</h3>
                            <p data-translate=\"features.income.text\">
                                Keep all your income such as salary, pocket money, allowances and student finance in one central place.
                            </p>
                        </div>
                    </div>
                    <div class=\"col-md-4\">
                        <div class=\"feature-card glow-card\">
                            <div class=\"feature-icon\"
                                 style=\"background: linear-gradient(135deg, rgba(5, 34, 11, 0.2) 0%, rgba(19, 67, 56, 0.15) 100%); color: var(--primary);\">
                                <i class=\"bi bi-receipt\"></i>
                            </div>
                            <h3 class=\"feature-title\" data-translate=\"features.expenses.title\">Track expenses</h3>
                            <p data-translate=\"features.expenses.text\">
                                Monitor your expenses for subscriptions, insurance, transport and other fixed expenses.
                            </p>
                        </div>
                    </div>
                    <div class=\"col-md-4\">
                        <div class=\"feature-card glow-card\">
                            <div class=\"feature-icon\"
                                 style=\"background: linear-gradient(135deg, rgba(19, 67, 56, 0.2) 0%, rgba(22, 249, 138, 0.15) 100%); color: var(--primary);\">
                                <i class=\"bi bi-graph-up-arrow\"></i>
                            </div>
                            <h3 class=\"feature-title\" data-translate=\"features.reports.title\">Reports & insights</h3>
                            <p data-translate=\"features.reports.text\">
                                Get clear overviews and advice about your financial situation with clear charts.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Stats Sectie -->
        <section class=\"stats-section mb-5\">
            <div class=\"container\">
                <div class=\"stats-container\">
                    <div class=\"aurora-bg\"></div>
                    <div class=\"row text-center\">
                        <div class=\"col-md-3 mb-4 mb-md-0\">
                            <div class=\"stat-number\">1.250+</div>
                            <div class=\"stat-label\" data-translate=\"stats.users\">Satisfied users</div>
                        </div>
                        <div class=\"col-md-3 mb-4 mb-md-0\">
                            <div class=\"stat-number\">€2.5M+</div>
                            <div class=\"stat-label\" data-translate=\"stats.budget\">Managed budget</div>
                        </div>
                        <div class=\"col-md-3 mb-4 mb-md-0\">
                            <div class=\"stat-number\">98%</div>
                            <div class=\"stat-label\" data-translate=\"stats.reviews\">Positive reviews</div>
                        </div>
                        <div class=\"col-md-3\">
                            <div class=\"stat-number\">24/7</div>
                            <div class=\"stat-label\" data-translate=\"stats.availability\">Available</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA Sectie -->
        <section class=\"cta-section mb-5\">
            <div class=\"container\">
                <div class=\"feature-card text-center\">
                    <h2 class=\"mb-4\" data-translate=\"cta.title\">Ready to get your finances under control?</h2>
                    <p class=\"mb-4\" data-translate=\"cta.subtitle\">
                        Sign up and start building a healthy financial future today.
                    </p>
                    <button class=\"btn btn-hero\" data-translate=\"cta.button\">
                        <a href=\"{{ path('app_register') }}\">Create account</a>
                    </button>
                </div>
            </div>
        </section>

    {% else %}
        {# --- INGELOGD: Toon aangepaste homepage voor gebruikers --- #}

        <!-- Ingelogde Hero -->
        <section class=\"hero logged-in-hero\">
            <div class=\"aurora-bg\"></div>
            <div class=\"container text-center py-5\">
                <h1 class=\"hero-title mb-3\">Welcome back, {{ app.user.fullname ?? 'user' }} 👋</h1>
                <p class=\"hero-subtitle mb-4\">Great to see you again. Let's take control of your finances.</p>
                <div class=\"d-flex justify-content-center gap-3 flex-wrap\">
                    <a href=\"/dashboard\" class=\"btn btn-hero px-4\">
                        <i class=\"bi bi-speedometer2 me-2\"></i> Go to Dashboard
                    </a>
                    <a href=\"/transactions\" class=\"btn btn-hero px-4\">
                        <i class=\"bi bi-arrow-left-right me-2\"></i> View Transactions
                    </a>
                    <a href=\"/reports\" class=\"btn btn-hero px-4\">
                        <i class=\"bi bi-graph-up me-2\"></i> View Reports
                    </a>
                </div>
            </div>
        </section>

        <!-- Stats / Motivatie blok met financiële feedback -->
        <section class=\"stats-section mb-5 mt-5\">
            <div class=\"container\">
                <div class=\"stats-container glow-card text-center py-5\">
                    <div class=\"mb-4\">
                        <span class=\"fs-1\">{{ app.user.getFinancialHealthIcon }}</span>
                    </div>
                    <h2 class=\"mb-3\">{{ app.user.getFinancialMessage }}</h2>
                    <p class=\"text-muted mb-3\">
                        Spaarquote: {{ app.user.getSavingsRate|number_format(1) }}% •
                        Saldo: €{{ app.user.getNetBalance|number_format(2, ',', '.') }} •
                        Transacties: {{ app.user.getTransactionCount }}
                    </p>
                    <p class=\"mb-0\">
                        Need insights? Head over to your <a class=\"text-light\" href=\"{{ path('app_reports') }}\">reports</a> to track your progress 📈
                    </p>
                </div>
            </div>
        </section>
    {% endif %}
{% endblock %}", "home/index.html.twig", "/Users/krishnabihari/Documents/GitHub/Budget-Buddy/templates/home/index.html.twig");
    }
}
