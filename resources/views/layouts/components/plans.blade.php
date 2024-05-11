<div id="app" class="gb-scope hosting-app">
    <div><!----> <!---->
        <div class="vps-landing">
            <div class="scrollspy-container">
                <div class="gb-container">
                    <div id="server-management" class="scrollspy-anchor">
                        <section id="management" class="server-management-desc scrollspy-anchor">

                          <div class="gb-headline"><h2 class="gb-headline__title">Ready To <span style="color: #b0843a;">Open Account?</span></h2> <!----> <p>
                            Simply select your preferred type of management during the start trading.
                          </p> </div>

                            <div class="server-management-desc__table-holder">
                                @php
                                    $plans = App\Plan::all();
                                    $icons = ['planItem--free', '', 'planItem--pro', 'planItem--entp'];
                                    $class = ['symbol symbol--rounded', 'symbol', 'symbol', ''];
                                    $btn = ['', 'button--pink', 'button--pink', 'button--white'];
                                @endphp
                                <table class="gb-table server-management-desc__table">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            @foreach ($plans as $p)
                                                <th>
                                                    <p class="server-management-desc__title">
                                                        {{ $p->name }}
                                                    </p>
                                                    @if ($p->price == 0)
                                                    @else
                                                        {{ $p->price }}$
                                                    @endif

                                                </th>
                                            @endforeach
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @php
                                            $array = [
                                                'Feature',
                                                'Minimum Opening Balance',
                                                'Spreads From',
                                                'Commission',
                                                'Swaps',
                                                'Instruments',
                                                'Maximum Leverage',
                                                'Execution',
                                                'Minimum Trade Size'
                                            ];
                                        @endphp



                                        @foreach ($array as $name_array)
                                            <tr>
                                                <th>
                                                    {{ $name_array }}
                                                </th>
                                                @foreach ($plans as $p)
                                                    <td>
                                                        @php
                                                            $desc = 1;
                                                        @endphp
                                                        @foreach ($p->infos as $info)
                                                            @if ($info->name == $name_array)
                                                                @php
                                                                    $desc = 0;
                                                                @endphp
                                                                <p>{{ $info->desc }}</p>
                                                            @endif
                                                        @endforeach

                                                        @if ($desc == 1)
                                                        <span class="icon-hyphen"></span>
                                                        @endif
                                                    </td>

                                                @endforeach
                                            </tr>
                                        @endforeach



                                    </tbody>
                                    <tbody>
                                      {{-- <tr>
                                        <td></td>
                                        @foreach ($plans as $p)
                                          <td>
                                            <a href="/page/try-demo" class="btn-out01 btn-out02">Start Trading</a>
                                          </td>
                                        @endforeach
                                      </tr> --}}
                                    </tbody>
                                </table>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<style>
    .gb-scope .gb-icon {
        font: normal normal normal 14px/1 gb-icon-font;
        font-size: inherit;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
        text-rendering: auto;
        speak: none;
        font-family: gb-icon;
    }

    .gb-scope .gb-icon-tick:before {
        content: "\EAC8";
    }

    .gb-scope {
        font-family: GB Museo Sans, Arial, Helvetica, sans-serif;
        font-size: 1rem;
        font-weight: 300;
        line-height: 1.5;
        text-rendering: optimizeLegibility;
        -ms-text-size-adjust: 100%;
        -webkit-text-size-adjust: 100%;
    }

    .gb-scope,
    .gb-scope *,
    .gb-scope :after,
    .gb-scope :before {
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
    }

    .gb-scope p {
        margin: 0 0 1.5em;
    }

    .gb-scope button {
        margin: 0;
        font-family: GB Museo Sans, Arial, Helvetica, sans-serif;
        font-size: 1rem;
        line-height: 1.5;
    }

    .gb-scope button {
        text-transform: none;
        overflow: visible;
    }

    .gb-scope button {
        -webkit-appearance: button;
    }

    .gb-scope .gb-container {
        max-width: 1440px;
        margin-right: auto;
        margin-left: auto;
        padding-right: 16px;
        padding-left: 16px;
    }

    .gb-scope {
        color: #6d6e70;
    }

    section {
        display: block;
    }

    button {
        color: inherit;
        font: inherit;
        margin: 0;
    }

    button {
        overflow: visible;
    }

    button {
        text-transform: none;
    }

    button {
        -webkit-appearance: button;
        cursor: pointer;
    }

    table {
        border-collapse: collapse;
        border-spacing: 0;
    }

    td,
    th {
        padding: 0;
    }


    .hosting-app .gb-btn {
        display: inline-block;
        height: 38px;
        padding: 0 16px;
        border: 1px solid;
        border-radius: 5px;
        font-family: inherit;
        font-size: 1rem;
        font-weight: bold;
        line-height: 36px;
        text-align: center;
        white-space: nowrap;
        cursor: pointer;
        vertical-align: middle;
        -ms-touch-action: manipulation;
        touch-action: manipulation;
        border-color: #b8b8b8;
        background: #fefefe -webkit-gradient(linear, left top, left bottom, from(#fefefe), to(#ededed));
        background: #fefefe linear-gradient(#fefefe, #ededed);
        color: #6d6e70;
        text-shadow: 0 -1px 1px #ededed;
    }

    .hosting-app .gb-btn:hover {
        text-decoration: none;
    }

    .hosting-app .gb-btn:focus {
        border-color: #75b9f0;
        outline: none;
        -webkit-box-shadow: 0 0 8px #97cbf4;
        box-shadow: 0 0 8px #97cbf4;
    }

    .hosting-app .gb-btn:not([disabled]):hover {
        background: #ededed -webkit-gradient(linear, left top, left bottom, from(#ededed), to(#e0e0e0));
        background: #ededed linear-gradient(#ededed, #e0e0e0);
    }

    .hosting-app .gb-btn:not([disabled]):active {
        background: #fefefe -webkit-gradient(linear, left top, left bottom, from(#ededed), to(#fefefe));
        background: #fefefe linear-gradient(#ededed, #fefefe);
    }

    .hosting-app .gb-label {
        display: inline-block;
        padding: 5px 8px;
        border-radius: 5px;
        background: #6d6e70;
        color: #fff;
        font-size: .75rem;
        line-height: 1;
        text-align: center;
        text-transform: uppercase;
    }

    .hosting-app .gb-label--warning {
        background: #fbbc28;
        color: #fff;
    }

    .hosting-app .gb-tooltip {
        display: inline-block;
        cursor: pointer;
    }

    .hosting-app .gb-tooltip__toggle--icon {
        width: 28px;
        height: 28px;
        border-radius: 50%;
        background: #6d6e70;
        color: #fff;
        font-weight: bold;
        line-height: 28px;
        text-align: center;
    }

    .hosting-app .gb-tooltip__wrap {
        display: none;
        position: absolute;
        top: 0;
        left: 0;
        padding: 6px;
        text-align: left;
        cursor: auto;
        z-index: 999;
    }

    .hosting-app .gb-tooltip__wrap p:last-child {
        margin: 0;
    }

    .hosting-app .gb-tooltip__arrow {
        position: absolute;
        width: 12px;
        height: 12px;
        -webkit-transform: rotate(45deg);
        transform: rotate(45deg);
        background: #6d6e70;
    }

    .hosting-app .gb-tooltip__content {
        display: inline-block;
        width: 260px;
        padding: 24px 28px;
        border-radius: 5px;
        background: #6d6e70;
        color: #fff;
        font-size: 1rem;
        font-weight: 500;
        line-height: 1.5;
        text-transform: none;
        -webkit-box-shadow: 0 0 15px rgba(0, 0, 0, .3);
        box-shadow: 0 0 15px rgba(0, 0, 0, .3);
    }

    .hosting-app .gb-tooltip--right .gb-tooltip__arrow {
        left: 0;
    }

    .hosting-app .gb-tooltip--top .gb-tooltip__arrow {
        bottom: 0;
    }

    .hosting-app .gb-tooltip--bottom .gb-tooltip__arrow {
        top: 0;
    }

    .hosting-app .gb-table {
        width: 100%;
        line-height: 1.25em;
        border-collapse: collapse;
    }

    .hosting-app .gb-table th,
    .hosting-app .gb-table td {
        padding: 16px 24px;
        border: 1px solid #d6d6d6;
    }

    .hosting-app .gb-table th:first-child {
        border-left-color: rgba(0, 0, 0, 0);
    }

    .hosting-app .gb-table th:last-child,
    .hosting-app .gb-table td:last-child {
        border-right-color: rgba(0, 0, 0, 0);
    }

    .hosting-app .gb-table th {
        background: #f2f2f2;
        font-weight: bold;
    }

    .hosting-app .gb-table th:first-child {
        text-align: left;
    }

    .hosting-app .gb-table td:not(:first-child) {
        text-align: center;
    }

    .hosting-app .label {
        display: -webkit-inline-box;
        display: -ms-inline-flexbox;
        display: inline-flex;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        text-transform: none;
        font-size: 1rem;
        -webkit-transition: background-color .15s linear;
        transition: background-color .15s linear;
        border-radius: 10px;
    }

    .hosting-app .label:hover {
        background-color: #9b9b9b;
    }

    .hosting-app .label.gb-label--xxs {
        font-size: .625rem;
        font-weight: 300;
        padding: 2px 4px;
        border: 1px solid #8cc1c1;
    }

    .hosting-app .gb-tooltip {
        position: relative;
    }

    .hosting-app .gb-tooltip__toggle--icon {
        width: 21px;
        height: 21px;
        line-height: 21px;
        font-weight: 500;
        font-size: .95rem;
    }

    .hosting-app .gb-tooltip__content,
    .hosting-app .gb-tooltip__arrow {
        background-color: #6d6e70;
    }

    .hosting-app .gb-tooltip__content {
        font-weight: 300;
    }

    .hosting-app .server-management-desc__table-holder {
        overflow-x: auto;
        overflow-y: hidden;
    }

    .server-management-desc__table-holder{
        background: #f3f3f3;
    border-radius: 10px;
    padding-right: 14px;
    }

    .hosting-app .server-management-desc__table {
        margin-top: 16px;
    }

    .hosting-app .server-management-desc__table--expandable {
        margin-top: 0;
    }

    .hosting-app .server-management-desc__title {
        font-size: 1rem;
        color: #6d6e70;
        margin-bottom: 8px;
    }

    .hosting-app .server-management-desc__label {
        position: relative;
        bottom: 9px;
    }

    .hosting-app .server-management-desc__toggle-details {
        text-transform: capitalize;
        font-size: 1.25rem;
        background: #f2f2f2;
        line-height: 41px;
        color: #a0a1a3;
        border: 0;
        height: 41px;
        margin-top: 16px;
        font-weight: 500;
        min-width: 160px;
    }

    .hosting-app .server-management-desc__toggle-details:not([disabled]):hover {
        background: #f2f2f2;
    }

    .hosting-app .server-management-desc__toggle-details:focus {
        border: 0;
        -webkit-box-shadow: none;
        box-shadow: none;
    }

    .hosting-app .server-management-desc thead th {
        padding-bottom: 24px;
        text-align: center;
    }

    .hosting-app .server-management-desc th,
    .hosting-app .server-management-desc td {
        border-color: rgba(0, 0, 0, 0) rgba(0, 0, 0, 0) #d6d6d6 rgba(0, 0, 0, 0);
        font-size: 1.25rem;
        padding: 12px;
    }

    .hosting-app .server-management-desc th:last-child,
    .hosting-app .server-management-desc td:last-child {
        background-color: #e1e1df;
    }

    .hosting-app .server-management-desc th {
        background-color: rgba(0, 0, 0, 0);
        color: #4d4e4f;
        line-height: 28px;
    }

    .hosting-app .server-management-desc th:first-child {
        text-align: left;
        vertical-align: top;
        min-width: 120px;
        max-width: 120px;
    }

    @media (min-width: 768px) {
        .hosting-app .server-management-desc th:first-child {
            min-width: 350px;
            width: 400px;
            max-width: none;
        }
    }

    .hosting-app .server-management-desc th:last-child {
        border-radius: 8px 8px 0 0;
    }

    .hosting-app .server-management-desc td {
        min-width: 230px;
        width: 245px;
        font-weight: 500;
    }

    .hosting-app .server-management-desc td p {
      font-size: 13px;
    font-weight: 600;
    margin: 0 auto;
    color: #684a0a;
    }

    .hosting-app .server-management-desc .gb-icon {
        color: #8cc1c1;
    }

    .hosting-app .server-management-desc .icon-hyphen {
        display: inline-block;
        height: 2px;
        width: 16px;
        background-color: #9b9b9b;
        margin: 12px 0;
    }


.gb-scope *,.gb-scope :after,.gb-scope :before{-webkit-box-sizing:border-box;box-sizing:border-box;}
.gb-scope p{margin:0 0 1.5em;}
.gb-scope h2{margin:0 0 1em;font-weight:700;line-height:inherit;}
.gb-scope h2{font-size:1.5rem;}


.hosting-app .gb-headline{padding:64px 0 48px;line-height:1.33;text-align:center;}
@media (min-width: 768px){
.hosting-app .gb-headline{font-size:1.125rem;}
}
.hosting-app .gb-headline__title{margin:0;font-size:1.5rem;line-height:1.125;}
@media (min-width: 480px){
.hosting-app .gb-headline__title{margin-bottom:8px;font-size:2rem;font-weight:300;}
}
@media (min-width: 768px){
.hosting-app .gb-headline__title{font-size:3rem;}
}
.hosting-app .gb-headline p{margin:0;}
.hosting-app .gb-headline p{margin-top:16px;}

</style>
