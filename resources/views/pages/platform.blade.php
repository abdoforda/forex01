<div class="bg-white">
    <div class="container pt-5 pb-2">
        <div class="row g-4">
            <div class="col-md-12">
                <h3>@lang('Overview')</h3>
                <p class="m-0 mb-2">@lang('Among traders, certain platforms are favored and widely adopted for trading.')</p>
                <p class="m-0 mb-2">@lang('Mercato Brokers provides its customers with access to most sophisticated trading platforms.')</p>
                <p class="m-0 mb-2">@lang('MetaTrader 5 stands out as one of the extensively utilized platforms within the trading community.')</p>
            </div>
            <div class="col-md-12">
                <img src="{{ asset('img/image-000.jpg') }}" alt="Overview">
            </div>
            <div class="col-md-12">
                <h3>@lang('Features')</h3>
                <ul class="ul01" style="list-style: disc">
                    <li>@lang('Robust charting functionalities')</li>
                    <li>@lang('Sophisticated order types and swift execution')</li>
                    <li>@lang('Depth of market analysis')</li>
                    <li>@lang('Seamless one-click order placement')</li>
                    <li>@lang('Automation of trading strategies')</li>
                    <li>@lang('Accessible across Windows, Mac, iOS, and Android platforms.')</li>
                </ul>
            </div>

            <div class="col-md-12 mt-5">
                <h3>@lang('MT5')</h3>
                <p class="m-0">
                    @lang("Explore the cutting-edge gateway to global financial markets with MetaTrader 5, a premier online trading platform favored by traders worldwide. Seamlessly access a plethora of trading instruments, advanced analytical tools, and customizable features to elevate your trading experience. Whether you're a seasoned trader or just starting out, MetaTrader 5 offers unparalleled flexibility and performance. Best of all, it's available for both demo and live accounts at absolutely no cost. Join the ranks of savvy traders who rely on MetaTrader 5 for its unmatched capabilities and take your trading journey to new heights.")
                </p>

            </div>
<div class="col-md-12">
                <img src="{{ asset('img/image-001.jpg') }}" alt="Overview" style="display: table; margin: auto; margin-top: 50px;">
            </div>

            <div class="col-md-12">
                <h3>@lang('Specifications')</h3>
                <ul class="ul01" style="list-style: disc">
                    <li>@lang("Unleash your trading potential with MetaTrader 5's sophisticated order management system, providing you with
                        unparalleled control over your trades. Dive into a world of data visualization with an extensive array of 38 built-in
                        indicators and 21 diverse timeframes, empowering you to make informed decisions with confidence.")</li>
                    <li>@lang("Embrace the future of trading with MetaTrader 5's automated functionalities, allowing you to execute trades
                        with precision and efficiency. Explore a vast marketplace offering a plethora of indicators and expert advisors,
                        curated to enhance your trading strategies and maximize your profits.")</li>
                    <li>@lang("Stay ahead of market movements with MetaTrader 5's integrated economic calendar, ensuring you never miss a
                        crucial event impacting your trades. Immerse yourself in real-time market news and analysis, seamlessly integrated
                        into the platform for quick access to valuable insights.")</li>
                    <li>@lang("Experience ultimate trading flexibility with MetaTrader 5, available across desktop, web, iOS, and Android
                        platforms, allowing you to trade anytime, anywhere. Join the ranks of successful traders who rely on MetaTrader
                        5's advanced features to navigate the financial markets with ease and precision.")</li>
                </ul>
            </div>

            <div class="col-md-12">
                <h3>@lang('Technical Indicators')</h3>
                <p class="m-0">@lang('An indicator is the most important tool for technical analysis. Such indicators can be set to operate automatically in
                    order to detect different patterns in the price dynamics of stocks, currencies and other financial assets. Based on
                    this information, traders can assume further price movement and adjust their strategy accordingly.')</p>
                    <p class="m-0">@lang("Many technical indicators have been developed since the creation of financial markets. The most popular
                        indicators are included into the MetaTrader 5 trading platform. For more convenience, the indicators are divided
                        into several groups: Trend indicators, Oscillators, Volume indicators and Bill William's tools.Most of the technical
                        indicators provide the flexibility to adapt the tools to any specific task. You can control both analytical parameters
                        and settings which are responsible for the indicators' results and appearance. For example, you may change the
                        calculation period of Moving Average as well as to adjust the color, width and line type.Indicators can be added to
                        the price charts or to a separate sub-window with an individual scale of values. Moreover, one indicator can be
                        applied over another one. For example, you may apply a Moving Average on DeMarker and obtain a line of
                        averaged values.")</p>
            </div>

            <div class="col-md-12 m-0">
                <img src="{{ asset('img/image-002.jpg') }}" alt="Overview" style="display: table; margin: auto; margin-top: 50px;">
            </div>
            <div class="col-md-12">
                <p class="mt-4">@lang('In general, MetaTrader 5 offers to the traders an elaborate set of tools for the comprehensive technical analysis.
                    Even the most demanding traders can use additional technical indicators.')</p>
            </div>

            <div class="col-md-12 mt-5">
                <h3>@lang('FAQs')</h3>
                <div class="slidClick">
                    {{-- for range 1 to 10 --}}
    
    <div class="slider">
        <h3>@lang("How can I access to the MT5 platform?")</h3>
        <p>@lang("To commence trading on the MT5 platform, you must possess an MT5 trading account. Utilizing your
            existing MT4 account to trade on the MT5 platform is not feasible.")</p>
    </div>

    <div class="slider">
        <h3>@lang('Can I use my MT4 account user and password on MT5 Platform?')</h3>
        <p>@lang('No,you can not.')</p>
    </div>

    
    <div class="slider">
        <h3>@lang('Is MT5 Platform available on IOS Devices?')</h3>
        <p>@lang('Yes.')</p>
    </div>
    <div class="slider">
        <h3>@lang('What we can trade on MT5?')</h3>
        <p>@lang('CFDs, Forex, Precious Metals and Energies.')</p>
    </div>


                </div>
            </div>
        </div>
    </div>
</div>



<style>
    
.ul01 li{
    margin-bottom: 10px;
}
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






