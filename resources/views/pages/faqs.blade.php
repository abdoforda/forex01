<div class="container pt-5">
    <div class="row g-4">
        <div class="col-md-12">
            <div class="slidClick">
                {{-- for range 1 to 10 --}}

<div class="slider">
    <h3>@lang("How can I access to the MT5 platform?")</h3>
    <p>@lang("To commence trading on the MT5 platform, you must possess an MT5 trading account. Utilizing your existing MT4 account to trade on the MT5 platform is not feasible.")</p>
</div>

<div class="slider">
    <h3>@lang("Can I use my MT4 account user and password on MT5 Platform?")</h3>
    <p>@lang("No,you can not.")</p>
</div>


<div class="slider">
    <h3>@lang("Is MT5 Platform available on IOS Devices?")</h3>
    <p>@lang("Yes.")</p>
</div>


<div class="slider">
    <h3>@lang("What we can trade on MT5?")</h3>
    <p>@lang("CFDs, Forex, Precious Metals and Energies.")</p>
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









