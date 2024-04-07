<div class="container pt-5">
    <div class="row g-4">
        <div class="col-md-12">
            <div class="slidClick">
                {{-- for range 1 to 10 --}}

                
<div class="slider">
    <h3>@lang("Forex Basics")</h3>
    <p>@lang("Get started with our beginner's guide to forex trading, where you'll learn the fundamentals of the forex market, including how it works, major currency pairs, and basic trading terminology. Start your forex journey on the right foot with a solid understanding of the basics.")</p>
</div>


    

<div class="slider">
    <h3>@lang("Trading Strategies")</h3>
    <p>@lang("Explore a variety of forex trading strategies tailored to different market conditions and trading styles. From trend following and range trading to breakout strategies and scalping techniques, discover the strategies that best suit your trading objectives and risk tolerance.")</p>
</div>



<div class="slider">
    <h3>@lang("Technical Analysis")</h3>
    <p>@lang("Master the art of technical analysis with our in-depth tutorials on chart patterns, indicators, and candlestick analysis. Learn how to identify key support and resistance levels, spot trend reversals, and make informed trading decisions based on technical signals.")</p>
</div>



<div class="slider">
    <h3>@lang("Fundamental Analysis")</h3>
    <p>@lang("Understand the impact of economic indicators, central bank policies, and geopolitical events on currency prices with our guides to fundamental analysis. Stay ahead of the curve by analyzing economic data releases, central bank statements, and global news events.")</p>
</div>




<div class="slider">
    <h3>@lang("Risk Management")</h3>
    <p>@lang("Learn how to protect your capital and manage risk effectively with our risk management strategies. Explore the importance of proper position sizing, setting stop-loss orders, and maintaining a disciplined trading approach to minimize losses and maximize profits.")</p>
</div>




<div class="slider">
    <h3>@lang("Trading Psychology")</h3>
    <p>@lang("Gain insights into the psychological aspects of trading and learn how to overcome common trading pitfalls and biases. Develop the mental discipline and emotional resilience needed to navigate the ups and downs of the forex market with confidence.")</p>
</div>




<div class="slider">
    <h3>@lang("Trading Platforms")</h3>
    <p>@lang("Discover how to use our popular forex trading platform to execute trades, analyze charts, and manage your account effectively. Get step-by-step tutorials and tips for navigating Metatrader 5 with ease.")</p>
</div>



<div class="slider">
    <h3>@lang("Market Analysis")</h3>
    <p>@lang("Stay informed about the latest market trends, developments, and trading opportunities with our regular market analysis and commentary. Access expert insights, technical analysis reports, and trading ideas to help you make informed trading decisions.")</p>
</div>

<div class="slider">
    <h3>@lang("Webinars and Seminars")</h3>
    <p>@lang("Join our live webinars and seminars hosted by industry experts, where you can learn from experienced traders, ask questions, and interact with fellow traders. Gain valuable insights and practical tips to enhance your trading skills and stay ahead of the competition.")</p>
</div>


                
            </div>
        </div>
    </div>
</div>



<style>
    .slidClick {
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .slider{
        width: 100%;
        border-left: 4px solid #e0b454;
        padding: 12px 12px;
        margin-bottom: 12px;
        transition: all linear 0.1s;
    -moz-transition: all linear 0.1s;
    -ms-transition: all linear 0.1s;
    -o-transition: all linear 0.1s;
    -webkit-transition: all linear 0.1s;
    }
    .slider:nth-child(even){
        border-left: 4px solid #ffd885;
    }
    .slider h3{
        cursor: pointer;
        font-size: 24px;
        margin: 0;
        transition:all linear 0.2s;
	-moz-transition:all linear 0.2s;
	-ms-transition:all linear 0.2s;
	-o-transition:all linear 0.2s;
	-webkit-transition:all linear 0.2s;
    }

    .slider p{
        display: none;
        margin: 0;
        margin-top: 8px;
        font-size: 16px;
        color: #333;
    }

    .slider:hover{
        background: #cbcbcb8a;
    }
    .slider.active{
        background: #ffffff8a;
    box-shadow: 4px 4px 17px #bbb;
    border-radius: 0px 8px 8px 0px;
    }
    .slider.active h3{
        font-size: 20px;
        color: #e0b454;
    }
    

</style>

{{-- scripts --}}

@section('scripts')
    <script>
        $(document).ready(function() {
            $('.slider h3').click(function() {
                $('.slider').removeClass('active');
                $('.slider').find('p').hide();
                $(this).parent().find('p').fadeIn();
                $(this).parent().addClass('active');
            });

            // click first slider before 1 second delay
            setTimeout(function() {
                $('.slider h3').first().click();
            }, 2000);

        });
    </script>
@endsection









