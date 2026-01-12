@extends('layouts.app')

@section('title', 'Privacy Policy | Tercum LLC')

@section('content')

{{-- BREADCRUMB --}}
@include('partials.breadcrumb', [
    'title' => 'Privacy Policy',
    'current' => 'Privacy'
])

<section class="privacy-policy-area pt-100 pb-100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">

                <div class="privacy-content">

                    <h1>Privacy Policy</h1>
                    <p class="text-muted">
                        Effective Date: {{ date('F j, Y') }}
                    </p>

                    <p>
                        Tercum LLC (“<strong>Tercum</strong>,” “<strong>we</strong>,” “<strong>our</strong>,” or
                        “<strong>us</strong>”) is committed to protecting the privacy and confidentiality of
                        individuals and organizations that engage with our services. This Privacy Policy
                        explains how we collect, use, disclose, and safeguard information obtained through
                        our website and related communications.
                    </p>

                    <p>
                        This policy applies to visitors, clients, partners, and other users who access
                        our website or communicate with us electronically.
                    </p>

                    <hr>

                    <h2>1. Information We Collect</h2>

                    <p>
                        We may collect the following categories of information:
                    </p>

                    <h4>a. Information You Provide Voluntarily</h4>
                    <ul>
                        <li>Name, company name, and job title</li>
                        <li>Email address and phone number</li>
                        <li>Business inquiries, messages, and correspondence</li>
                        <li>Any other information you choose to submit via our contact forms or communications</li>
                    </ul>

                    <h4>b. Automatically Collected Information</h4>
                    <p>
                        When you visit our website, we may automatically collect limited technical information,
                        including:
                    </p>
                    <ul>
                        <li>IP address</li>
                        <li>Browser type and operating system</li>
                        <li>Pages visited and time spent on the site</li>
                        <li>Referring URLs</li>
                    </ul>

                    <p>
                        This information is used for operational, security, and analytical purposes only.
                    </p>

                    <hr>

                    <h2>2. How We Use Information</h2>

                    <p>
                        We use collected information for legitimate business purposes, including:
                    </p>

                    <ul>
                        <li>Responding to inquiries and requests</li>
                        <li>Providing and improving our services</li>
                        <li>Communicating regarding projects, proposals, or partnerships</li>
                        <li>Maintaining operational security and preventing misuse</li>
                        <li>Complying with legal, regulatory, or contractual obligations</li>
                    </ul>

                    <p>
                        We do not sell, rent, or trade personal information.
                    </p>

                    <hr>

                    <h2>3. Legal Basis for Processing (International Users)</h2>

                    <p>
                        Where applicable, including for users located in the European Economic Area (EEA),
                        United Kingdom, or other jurisdictions with data protection laws, we process personal
                        information based on one or more of the following legal grounds:
                    </p>

                    <ul>
                        <li>Your consent</li>
                        <li>Performance of a contract or pre-contractual steps</li>
                        <li>Compliance with legal obligations</li>
                        <li>Our legitimate business interests, where not overridden by your rights</li>
                    </ul>

                    <hr>

                    <h2>4. Information Sharing and Disclosure</h2>

                    <p>
                        We may disclose information only in the following limited circumstances:
                    </p>

                    <ul>
                        <li>To trusted service providers who assist in operating our website or communications</li>
                        <li>When required by law, regulation, or legal process</li>
                        <li>To protect the rights, property, or safety of Tercum LLC, our clients, or others</li>
                        <li>In connection with a corporate transaction (e.g., merger, acquisition, restructuring)</li>
                    </ul>

                    <p>
                        Any third parties receiving information are required to safeguard it appropriately.
                    </p>

                    <hr>

                    <h2>5. Data Retention</h2>

                    <p>
                        We retain personal information only for as long as necessary to fulfill the purposes
                        outlined in this policy, unless a longer retention period is required or permitted
                        by law.
                    </p>

                    <hr>

                    <h2>6. Data Security</h2>

                    <p>
                        We implement reasonable administrative, technical, and organizational safeguards
                        designed to protect information against unauthorized access, disclosure, alteration,
                        or destruction. However, no method of transmission or storage is completely secure,
                        and we cannot guarantee absolute security.
                    </p>

                    <hr>

                    <h2>7. International Data Transfers</h2>

                    <p>
                        As a company operating in international logistics and maritime environments,
                        information may be processed or accessed in multiple jurisdictions. Where required,
                        we implement appropriate safeguards to protect information transferred across borders.
                    </p>

                    <hr>

                    <h2>8. Your Rights</h2>

                    <p>
                        Depending on your location, you may have rights regarding your personal information,
                        including the right to:
                    </p>

                    <ul>
                        <li>Request access to your personal data</li>
                        <li>Request correction or deletion</li>
                        <li>Object to or restrict certain processing</li>
                        <li>Withdraw consent where processing is based on consent</li>
                    </ul>

                    <p>
                        Requests may be submitted using the contact information below. We will respond
                        in accordance with applicable laws.
                    </p>

                    <hr>

                    <h2>9. Cookies and Tracking Technologies</h2>

                    <p>
                        Our website may use limited cookies or similar technologies necessary for basic
                        functionality and performance. We do not use cookies for targeted advertising
                        or profiling.
                    </p>

                    <hr>

                    <h2>10. Third-Party Websites</h2>

                    <p>
                        Our website may contain links to third-party websites. We are not responsible
                        for the privacy practices or content of those sites and encourage users to
                        review their policies independently.
                    </p>

                    <hr>

                    <h2>11. Updates to This Policy</h2>

                    <p>
                        We may update this Privacy Policy periodically to reflect changes in our practices,
                        legal requirements, or operations. Updates will be posted on this page with a
                        revised effective date.
                    </p>

                    <hr>

                    <h2>12. Contact Information</h2>

                    <p>
                        If you have questions about this Privacy Policy or our data practices, please
                        contact us at:
                    </p>

                    <p>
                        <strong>Tercum LLC</strong><br>
                        Email: <a href="mailto:info@tercumllc.com">info@tercumllc.com</a>
                    </p>

                </div>

            </div>
        </div>
    </div>
</section>

@endsection
