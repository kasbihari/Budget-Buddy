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

/* about/index.html.twig */
class __TwigTemplate_8a0ea5e96628e2630c6d39cdb70b2768 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "about/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "about/index.html.twig"));

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

        yield "Hello AboutController!";
        
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
        yield "    <!-- About Us Hero Sectie -->
    <section class=\"about-hero\">
        <div class=\"aurora-bg\"></div>
        <div class=\"container\">
            <div class=\"row align-items-center\">
                <div class=\"col-md-6\">
                    <h1 class=\"about-hero-title\">About Budget Buddy</h1>
                    <p class=\"about-hero-subtitle\">Your financial companion for a brighter financial future. We're here to help you take control of your money with ease and confidence.</p>
                </div>
                <div class=\"col-md-6 text-center\">
                    <div class=\"logo-frame\">
                        <div class=\"logo-frame-inner\">
                            <img src=\"";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/BB-logo.png"), "html", null, true);
        yield "\" alt=\"BB-logo\">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Mission Sectie -->
    <section class=\"mission-section\">
        <div class=\"aurora-bg\"></div>
        <div class=\"container\">
            <div class=\"row mb-5\">
                <div class=\"col-md-8 mx-auto text-center\">
                    <h2 class=\"section-title\">Our Mission</h2>
                    <p class=\"section-subtitle\">We believe that everyone deserves financial freedom and peace of mind. Our mission is to make financial management accessible, intuitive, and even fun for everyone.</p>
                </div>
            </div>
            <div class=\"row g-4\">
                <div class=\"col-md-4\">
                    <div class=\"mission-card\">
                        <div class=\"mission-icon\">
                            <i class=\"bi bi-heart-fill\"></i>
                        </div>
                        <h3 class=\"mission-title\">Empowerment</h3>
                        <p class=\"mission-text\">We empower individuals to take control of their finances through easy-to-use tools and educational resources.</p>
                    </div>
                </div>
                <div class=\"col-md-4\">
                    <div class=\"mission-card\">
                        <div class=\"mission-icon\">
                            <i class=\"bi bi-shield-check\"></i>
                        </div>
                        <h3 class=\"mission-title\">Security</h3>
                        <p class=\"mission-text\">Your financial data is protected with bank-level security. We prioritize your privacy and data protection.</p>
                    </div>
                </div>
                <div class=\"col-md-4\">
                    <div class=\"mission-card\">
                        <div class=\"mission-icon\">
                            <i class=\"bi bi-lightbulb-fill\"></i>
                        </div>
                        <h3 class=\"mission-title\">Innovation</h3>
                        <p class=\"mission-text\">We continuously innovate to provide the best financial management experience with cutting-edge technology.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Journey Sectie -->
    <section class=\"journey-section\">
        <div class=\"aurora-bg\"></div>
        <div class=\"container\">
            <div class=\"row mb-5\">
                <div class=\"col-md-8 mx-auto text-center\">
                    <h2 class=\"section-title\">Our Journey</h2>
                    <p class=\"section-subtitle\">From a simple idea to a trusted financial companion for thousands of users. Here's how Budget Buddy came to be.</p>
                </div>
            </div>
            <div class=\"journey-timeline\">
                <div class=\"timeline-item\">
                    <div class=\"timeline-content\">
                        <div class=\"timeline-year\">2020</div>
                        <h3 class=\"timeline-title\">The Beginning</h3>
                        <p class=\"timeline-text\">Budget Buddy started as a university project when our founder struggled to manage student finances. The initial concept was simple: track income and expenses in one place.</p>
                    </div>
                </div>
                <div class=\"timeline-item\">
                    <div class=\"timeline-content\">
                        <div class=\"timeline-year\">2021</div>
                        <h3 class=\"timeline-title\">First Launch</h3>
                        <p class=\"timeline-text\">We launched our first version with basic budgeting features. Within months, we gained our first 500 users who helped us refine the platform.</p>
                    </div>
                </div>
                <div class=\"timeline-item\">
                    <div class=\"timeline-content\">
                        <div class=\"timeline-year\">2022</div>
                        <h3 class=\"timeline-title\">Partnership with Stichting Klikjongeren</h3>
                        <p class=\"timeline-text\">We partnered with Stichting Klikjongeren to expand our reach and help more young people achieve financial literacy and independence.</p>
                    </div>
                </div>
                <div class=\"timeline-item\">
                    <div class=\"timeline-content\">
                        <div class=\"timeline-year\">2023</div>
                        <h3 class=\"timeline-title\">Today & Beyond</h3>
                        <p class=\"timeline-text\">Budget Buddy now serves over 1,250 users and manages more than €2.5M in budgets. We continue to innovate with new features focused on financial wellness.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Sectie -->
    <section class=\"team-section\">
        <div class=\"aurora-bg\"></div>
        <div class=\"container\">
            <div class=\"row mb-5\">
                <div class=\"col-md-8 mx-auto text-center\">
                    <h2 class=\"section-title\">Meet Our Team</h2>
                    <p class=\"section-subtitle\">Passionate individuals dedicated to making financial management accessible and enjoyable for everyone.</p>
                </div>
            </div>
            <div class=\"row g-4\">
                <div class=\"col-md-4\">
                    <div class=\"team-member-card\">
                        <div class=\"team-member-img\">
                            <img src=\"";
        // line 125
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/KB.jfif"), "html", null, true);
        yield "\" alt=\"Krishna Bihari\">
                        </div>
                        <h3 class=\"team-member-name\">Krishna Bihari</h3>
                        <div class=\"team-member-role\">Full-Stack Developer</div>
                        <p class=\"team-member-bio\">Alex started Budget Buddy after struggling with personal finance management during university. With a background in finance and technology, he leads our vision.</p>
                    </div>
                </div>
                <div class=\"col-md-4\">
                    <div class=\"team-member-card\">
                        <div class=\"team-member-img\">
                            <img src=\"";
        // line 135
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/MK.webp"), "html", null, true);
        yield "\" alt=\"Mustafa Khedoe\">
                        </div>
                        <h3 class=\"team-member-name\">Mustafa Khedoe</h3>
                        <div class=\"team-member-role\">Full-Stack Developer</div>
                        <p class=\"team-member-bio\">Sarah brings over 8 years of experience in product design and user experience. She ensures Budget Buddy remains intuitive and user-friendly.</p>
                    </div>
                </div>
                <div class=\"col-md-4\">
                    <div class=\"team-member-card\">
                        <div class=\"team-member-img\">
                            <img src=\"";
        // line 145
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/TB.jfif"), "html", null, true);
        yield "\" alt=\"Thijmen Bastiaan\">
                        </div>
                        <h3 class=\"team-member-name\">Thijmen Bastiaan</h3>
                        <div class=\"team-member-role\">Full-Stack/Documentation</div>
                        <p class=\"team-member-bio\">Marcus is our tech wizard with expertise in secure financial applications. He ensures our platform is robust, secure, and always improving.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Values Sectie -->
    <section class=\"values-section\">
        <div class=\"container\">
            <div class=\"row mb-5\">
                <div class=\"col-md-8 mx-auto text-center\">
                    <h2 class=\"section-title\">Our Values</h2>
                    <p class=\"section-subtitle\">These core principles guide everything we do at Budget Buddy.</p>
                </div>
            </div>
            <div class=\"row g-4\">
                <div class=\"col-md-4\">
                    <div class=\"value-card\">
                        <div class=\"value-icon\">
                            <i class=\"bi bi-people-fill\"></i>
                        </div>
                        <h3 class=\"value-title\">User-Centric</h3>
                        <p class=\"value-text\">Our users are at the heart of everything we do. We listen, learn, and adapt to meet their financial needs.</p>
                    </div>
                </div>
                <div class=\"col-md-4\">
                    <div class=\"value-card\">
                        <div class=\"value-icon\">
                            <i class=\"bi bi-gem\"></i>
                        </div>
                        <h3 class=\"value-title\">Transparency</h3>
                        <p class=\"value-text\">We believe in being open and honest about our practices, pricing, and how we handle your data.</p>
                    </div>
                </div>
                <div class=\"col-md-4\">
                    <div class=\"value-card\">
                        <div class=\"value-icon\">
                            <i class=\"bi bi-rocket-takeoff\"></i>
                        </div>
                        <h3 class=\"value-title\">Continuous Improvement</h3>
                        <p class=\"value-text\">We're always looking for ways to make Budget Buddy better, with regular updates and new features.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Location Sectie -->
    <section class=\"location-section\">
        <div class=\"aurora-bg\"></div>
        <div class=\"container\">
            <div class=\"row mb-5\">
                <div class=\"col-md-8 mx-auto text-center\">
                    <h2 class=\"section-title\">Visit Us</h2>
                    <p class=\"section-subtitle\">Come and see us at our office in Amsterdam Zuidas. We'd love to meet you!</p>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-6\">
                    <div class=\"location-card\">
                        <h3 class=\"mission-title\">Our Office</h3>
                        <p class=\"mission-text\">We're located in the heart of Amsterdam's business district, easily accessible by public transport.</p>
                        <div class=\"mt-4\">
                            <h4 class=\"value-title\">Address</h4>
                            <p class=\"mission-text\">Gustav Mahlerplein 90<br>1082 MA Amsterdam<br>Netherlands</p>

                            <h4 class=\"value-title mt-4\">Contact</h4>
                            <p class=\"mission-text\">Email: info@budgetbuddy.nl<br>Phone: +31 20 123 4567</p>

                            <h4 class=\"value-title mt-4\">Opening Hours</h4>
                            <p class=\"mission-text\">Monday - Friday: 9:00 - 17:00<br>Saturday - Sunday: Closed</p>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-6\">
                    <div class=\"location-card\">
                        <h3 class=\"mission-title\">Find Us</h3>
                        <div class=\"map-container\">
                            <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2436.476961783372!2d4.872734015801661!3d52.33964697978447!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c60a2dee7f3c0d%3A0x41a3d5f5c5b1b0a0!2sGustav%20Mahlerplein%2090%2C%201082%20MA%20Amsterdam!5e0!3m2!1sen!2snl!4v1642000000000!5m2!1sen!2snl\" allowfullscreen=\"\" loading=\"lazy\"></iframe>
                        </div>
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
        return "about/index.html.twig";
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
        return array (  250 => 145,  237 => 135,  224 => 125,  114 => 18,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello AboutController!{% endblock %}

{% block body %}
    <!-- About Us Hero Sectie -->
    <section class=\"about-hero\">
        <div class=\"aurora-bg\"></div>
        <div class=\"container\">
            <div class=\"row align-items-center\">
                <div class=\"col-md-6\">
                    <h1 class=\"about-hero-title\">About Budget Buddy</h1>
                    <p class=\"about-hero-subtitle\">Your financial companion for a brighter financial future. We're here to help you take control of your money with ease and confidence.</p>
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

    <!-- Mission Sectie -->
    <section class=\"mission-section\">
        <div class=\"aurora-bg\"></div>
        <div class=\"container\">
            <div class=\"row mb-5\">
                <div class=\"col-md-8 mx-auto text-center\">
                    <h2 class=\"section-title\">Our Mission</h2>
                    <p class=\"section-subtitle\">We believe that everyone deserves financial freedom and peace of mind. Our mission is to make financial management accessible, intuitive, and even fun for everyone.</p>
                </div>
            </div>
            <div class=\"row g-4\">
                <div class=\"col-md-4\">
                    <div class=\"mission-card\">
                        <div class=\"mission-icon\">
                            <i class=\"bi bi-heart-fill\"></i>
                        </div>
                        <h3 class=\"mission-title\">Empowerment</h3>
                        <p class=\"mission-text\">We empower individuals to take control of their finances through easy-to-use tools and educational resources.</p>
                    </div>
                </div>
                <div class=\"col-md-4\">
                    <div class=\"mission-card\">
                        <div class=\"mission-icon\">
                            <i class=\"bi bi-shield-check\"></i>
                        </div>
                        <h3 class=\"mission-title\">Security</h3>
                        <p class=\"mission-text\">Your financial data is protected with bank-level security. We prioritize your privacy and data protection.</p>
                    </div>
                </div>
                <div class=\"col-md-4\">
                    <div class=\"mission-card\">
                        <div class=\"mission-icon\">
                            <i class=\"bi bi-lightbulb-fill\"></i>
                        </div>
                        <h3 class=\"mission-title\">Innovation</h3>
                        <p class=\"mission-text\">We continuously innovate to provide the best financial management experience with cutting-edge technology.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Journey Sectie -->
    <section class=\"journey-section\">
        <div class=\"aurora-bg\"></div>
        <div class=\"container\">
            <div class=\"row mb-5\">
                <div class=\"col-md-8 mx-auto text-center\">
                    <h2 class=\"section-title\">Our Journey</h2>
                    <p class=\"section-subtitle\">From a simple idea to a trusted financial companion for thousands of users. Here's how Budget Buddy came to be.</p>
                </div>
            </div>
            <div class=\"journey-timeline\">
                <div class=\"timeline-item\">
                    <div class=\"timeline-content\">
                        <div class=\"timeline-year\">2020</div>
                        <h3 class=\"timeline-title\">The Beginning</h3>
                        <p class=\"timeline-text\">Budget Buddy started as a university project when our founder struggled to manage student finances. The initial concept was simple: track income and expenses in one place.</p>
                    </div>
                </div>
                <div class=\"timeline-item\">
                    <div class=\"timeline-content\">
                        <div class=\"timeline-year\">2021</div>
                        <h3 class=\"timeline-title\">First Launch</h3>
                        <p class=\"timeline-text\">We launched our first version with basic budgeting features. Within months, we gained our first 500 users who helped us refine the platform.</p>
                    </div>
                </div>
                <div class=\"timeline-item\">
                    <div class=\"timeline-content\">
                        <div class=\"timeline-year\">2022</div>
                        <h3 class=\"timeline-title\">Partnership with Stichting Klikjongeren</h3>
                        <p class=\"timeline-text\">We partnered with Stichting Klikjongeren to expand our reach and help more young people achieve financial literacy and independence.</p>
                    </div>
                </div>
                <div class=\"timeline-item\">
                    <div class=\"timeline-content\">
                        <div class=\"timeline-year\">2023</div>
                        <h3 class=\"timeline-title\">Today & Beyond</h3>
                        <p class=\"timeline-text\">Budget Buddy now serves over 1,250 users and manages more than €2.5M in budgets. We continue to innovate with new features focused on financial wellness.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Sectie -->
    <section class=\"team-section\">
        <div class=\"aurora-bg\"></div>
        <div class=\"container\">
            <div class=\"row mb-5\">
                <div class=\"col-md-8 mx-auto text-center\">
                    <h2 class=\"section-title\">Meet Our Team</h2>
                    <p class=\"section-subtitle\">Passionate individuals dedicated to making financial management accessible and enjoyable for everyone.</p>
                </div>
            </div>
            <div class=\"row g-4\">
                <div class=\"col-md-4\">
                    <div class=\"team-member-card\">
                        <div class=\"team-member-img\">
                            <img src=\"{{ asset('img/KB.jfif') }}\" alt=\"Krishna Bihari\">
                        </div>
                        <h3 class=\"team-member-name\">Krishna Bihari</h3>
                        <div class=\"team-member-role\">Full-Stack Developer</div>
                        <p class=\"team-member-bio\">Alex started Budget Buddy after struggling with personal finance management during university. With a background in finance and technology, he leads our vision.</p>
                    </div>
                </div>
                <div class=\"col-md-4\">
                    <div class=\"team-member-card\">
                        <div class=\"team-member-img\">
                            <img src=\"{{ asset('img/MK.webp') }}\" alt=\"Mustafa Khedoe\">
                        </div>
                        <h3 class=\"team-member-name\">Mustafa Khedoe</h3>
                        <div class=\"team-member-role\">Full-Stack Developer</div>
                        <p class=\"team-member-bio\">Sarah brings over 8 years of experience in product design and user experience. She ensures Budget Buddy remains intuitive and user-friendly.</p>
                    </div>
                </div>
                <div class=\"col-md-4\">
                    <div class=\"team-member-card\">
                        <div class=\"team-member-img\">
                            <img src=\"{{ asset('img/TB.jfif') }}\" alt=\"Thijmen Bastiaan\">
                        </div>
                        <h3 class=\"team-member-name\">Thijmen Bastiaan</h3>
                        <div class=\"team-member-role\">Full-Stack/Documentation</div>
                        <p class=\"team-member-bio\">Marcus is our tech wizard with expertise in secure financial applications. He ensures our platform is robust, secure, and always improving.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Values Sectie -->
    <section class=\"values-section\">
        <div class=\"container\">
            <div class=\"row mb-5\">
                <div class=\"col-md-8 mx-auto text-center\">
                    <h2 class=\"section-title\">Our Values</h2>
                    <p class=\"section-subtitle\">These core principles guide everything we do at Budget Buddy.</p>
                </div>
            </div>
            <div class=\"row g-4\">
                <div class=\"col-md-4\">
                    <div class=\"value-card\">
                        <div class=\"value-icon\">
                            <i class=\"bi bi-people-fill\"></i>
                        </div>
                        <h3 class=\"value-title\">User-Centric</h3>
                        <p class=\"value-text\">Our users are at the heart of everything we do. We listen, learn, and adapt to meet their financial needs.</p>
                    </div>
                </div>
                <div class=\"col-md-4\">
                    <div class=\"value-card\">
                        <div class=\"value-icon\">
                            <i class=\"bi bi-gem\"></i>
                        </div>
                        <h3 class=\"value-title\">Transparency</h3>
                        <p class=\"value-text\">We believe in being open and honest about our practices, pricing, and how we handle your data.</p>
                    </div>
                </div>
                <div class=\"col-md-4\">
                    <div class=\"value-card\">
                        <div class=\"value-icon\">
                            <i class=\"bi bi-rocket-takeoff\"></i>
                        </div>
                        <h3 class=\"value-title\">Continuous Improvement</h3>
                        <p class=\"value-text\">We're always looking for ways to make Budget Buddy better, with regular updates and new features.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Location Sectie -->
    <section class=\"location-section\">
        <div class=\"aurora-bg\"></div>
        <div class=\"container\">
            <div class=\"row mb-5\">
                <div class=\"col-md-8 mx-auto text-center\">
                    <h2 class=\"section-title\">Visit Us</h2>
                    <p class=\"section-subtitle\">Come and see us at our office in Amsterdam Zuidas. We'd love to meet you!</p>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-6\">
                    <div class=\"location-card\">
                        <h3 class=\"mission-title\">Our Office</h3>
                        <p class=\"mission-text\">We're located in the heart of Amsterdam's business district, easily accessible by public transport.</p>
                        <div class=\"mt-4\">
                            <h4 class=\"value-title\">Address</h4>
                            <p class=\"mission-text\">Gustav Mahlerplein 90<br>1082 MA Amsterdam<br>Netherlands</p>

                            <h4 class=\"value-title mt-4\">Contact</h4>
                            <p class=\"mission-text\">Email: info@budgetbuddy.nl<br>Phone: +31 20 123 4567</p>

                            <h4 class=\"value-title mt-4\">Opening Hours</h4>
                            <p class=\"mission-text\">Monday - Friday: 9:00 - 17:00<br>Saturday - Sunday: Closed</p>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-6\">
                    <div class=\"location-card\">
                        <h3 class=\"mission-title\">Find Us</h3>
                        <div class=\"map-container\">
                            <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2436.476961783372!2d4.872734015801661!3d52.33964697978447!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c60a2dee7f3c0d%3A0x41a3d5f5c5b1b0a0!2sGustav%20Mahlerplein%2090%2C%201082%20MA%20Amsterdam!5e0!3m2!1sen!2snl!4v1642000000000!5m2!1sen!2snl\" allowfullscreen=\"\" loading=\"lazy\"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
{% endblock %}
", "about/index.html.twig", "/Users/krishnabihari/Documents/GitHub/Budget-Buddy/templates/about/index.html.twig");
    }
}
