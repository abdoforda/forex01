<div class="content pt-5 pb-4">
    <div class="container">
        <div class="row g-4 text-center">
            <div class="col-md-4">
                <h4>
                    Explore our platform with
                    <br>ease!
                </h4>
                <p class="p-2">Simply click on the "Try Demo" button to access a streamlined form, making it quick and
                    effortless to
                    get started.</p>
            </div>
            <div class="col-md-4">
                <h4>
                    Seamless platform access awaits!
                </h4>
                <p class="p-2">Download our platform and effortlessly log in using the credentials provided in an email from
                    our
                    team. All the necessary details will be waiting for you.</p>
            </div>
            <div class="col-md-4">
                <h4>
                    Embark on your trading adventure!
                </h4>
                <p class="p-2">Dive into trading over 1000+ products with peace of mind, knowing that you're taking on no
                    financial
                    risk. Begin your journey towards financial success today.</p>
            </div>
        </div>
    </div>
</div>

<section class="p-4" style="background: #e0b454;">
    <div class="container">
        <div class="row  g-4">
            <div class="col-md-6 ">
                <div class="p-4">
                    <h2>Trading Demo Account</h2>
                <p>Try our well-equipped demo trading platform with $50,000 in virtual funds:</p>

                <h3>Demo Account Features</h3>
                <ul>
                    <li>
                        <h5>Trade with no risk</h5>
                        <p>Use our risk-free environment to hone your skills and improve your trading strategies.</p>
                    </li>
                    <li>
                        <h5>Access the global markets</h5>
                        <p>Trade our 80+ FX pairs, stock CFDs, indices, commodities, and more using customizable charts, drawing tools, and indicators.</p>
                    </li>
                    <li>
                        <h5>Real-time pricing</h5>
                        <p>Experience the live markets with our superior execution and reliability on web and mobile.</p>
                    </li>
                </ul>
                </div>
            </div>
            <div class="col-md-6">
                <form action="{{ route('demo_account') }}" method="POST" class="p-4 bg-white rounded" id="form_demo_account">
                    @csrf
                    <h2>Open a Demo Account</h2>
                <p>Username and password will be sent to this e-mail</p>
                <div class="form-group">
                    <label for="name01">Full Name</label>
                    <input type="text" class="form-control" id="name01" name="name" placeholder="Full Name">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
                </div>
                {{-- phone --}}
                <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone">
                </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    {{-- message --}}
                    <div class="response_message"></div>

                </form>
            </div>
        </div>
    </div>

</section>

<section class="bg-white p-4">
    <div class="container">
        <div class="row  g-4">
            <div class="col-md-12 text-start">
                <h3 class="text-center">Discover the benefits of using a demo account:</h3>
                <p class="lead">Gain familiarity with the platform: Utilize a trading simulator like our demo account to
                    become
                    acquainted with our platform's features, functionalities, and layout.</p>
                <p class="lead">Develop and refine your strategy: Practice executing trades and fine-tuning your trading
                    strategy
                    without risking any real money, allowing you to gain valuable experience and confidence.</p>
                <p class="lead">Access to personalized guidance: Our dedicated relationship managers will reach out to
                    provide
                    assistance and guidance, helping you navigate the basics of trading effectively.</p>
            </div>
            <div class="col-md-12 text-start">
                <h3 class="text-center mt-4">
                    Key Features:
                </h3>
                <ul class="list-style-right ">
                    <li>Cross-device compatibility: Accessible on desktop/laptop computers, iOS devices, Android devices,
                        and
                        any web browser for convenience and flexibility.</li>
                    <li>Advanced charting tools: Benefit from advanced charting capabilities to analyze market trends and
                        make informed trading decisions.</li>
                    <li>Hedging support: Enjoy full support for hedging strategies to manage risk effectively in your
                        trading
                        activities.</li>
                    <li>
                        Seamless account switching: Easily switch between different accounts for a smooth and efficient
                        trading experience.
                    </li>
                    <li>Direct trading from tick charts: Execute trades directly from tick charts for precise and timely
                        order
                        placement.</li>
                    <li>
                        Secure market depth view and trading: Access market depth view and execute trades securely to stay
                        informed and make informed decisions.
    
                    </li>
                    <li>Algorithmic trading capabilities: Utilize expert advisors for algorithmic trading, enabling
                        automated
                        trading strategies to execute trades based on predefined criteria.
                    </li>
                    <li>Wide range of trading orders: Benefit from a variety of trading orders to suit your trading
                        preferences
                        and objectives, providing flexibility and control over your trading activities.</li>
                </ul>
            </div>
        </div>
    </div>
</section>

@section('scripts')
    <script>
        $(function () {
            $('#form_demo_account').on('submit', function (e) {
                e.preventDefault();
                var form = $(this);
                $.ajax({
                    type: 'POST',
                    url: form.attr('action'),
                    data: form.serialize(),
                    success: function (data) {
                        
                    }, error: function (data) {
                        $(".response_message").html(data.responseJSON.message).hide().fadeIn(500);
                    }
                });
            });
        });
    </script>
    <style>
        .response_message{
            display: none;
        font-size: 18px;
        margin-top: 12px;
        color: #d75454;
        }
    </style>
@endsection