<footer class="footer-area">
    <div class="footer-top pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <h4>Tercum LLC</h4>
                    <p>Delivering maritime and logistics solutions with precision and reliability.</p>
                </div>

                <div class="col-lg-4">
                    <h4>Quick Links</h4>
                    <ul>
                        <li><a href="{{ url(app()->getLocale().'/about') }}">About</a></li>
                        <li><a href="{{ url(app()->getLocale().'/services') }}">Services</a></li>
                        <li><a href="{{ url(app()->getLocale().'/contact') }}">Contact</a></li>
                        <li><a href="{{ url(app()->getLocale().'/privacy') }}">Privacy Policy</a></li>
                    </ul>
                </div>

                <div class="col-lg-4">
                    <h4>Contact</h4>
                    <p>Email: info@tercumllc.com</p>
                    <p>Phone: +1 (689) 226-6560</p>
                    <p>Address: 6885 Lake Nona Blvd, Orlando, FL 32827
                </div>
            </div>
        </div>
    </div>

    <div class="footer-bottom text-center">
        <p>© {{ date('Y') }} Tercum LLC. All Rights Reserved.</p>
    </div>
</footer>
