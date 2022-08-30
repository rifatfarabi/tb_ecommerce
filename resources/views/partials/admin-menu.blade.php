<div id="sidebar" class="c-sidebar c-sidebar-fixed c-sidebar-lg-show">

    <div class="c-sidebar-brand d-md-down-none">
        <a class="c-sidebar-brand-full h4" href="#" style="color: #fff">
            {{ __('Asoug') }}
        </a>
    </div>

    <ul class="c-sidebar-nav">


        <li class="c-sidebar-nav-item">
            <a href="{{ route('admin.dashboard') }}" class="c-sidebar-nav-link text-light" >
                <i class="c-sidebar-nav-icon fas fa-fw fa-tachometer-alt">

                </i>
                {{ __("Dashboard") }}
            </a>
        </li>

        {{-- <li class="c-sidebar-nav-item">
            <a href="{{ route('accounts.index') }}" class="c-sidebar-nav-link text-light" >
                <i class="c-sidebar-nav-icon fas fa-fw fa-calculator">

                </i>
                {{ __("Account") }}
            </a>
        </li> --}}



        <li class="c-sidebar-nav-dropdown">
            <a class="c-sidebar-nav-dropdown-toggle" href="#">
                <i class="fa-fw fas fa-users c-sidebar-nav-icon">

                </i>
                {{ __("User Management") }}
            </a>
            <ul class="c-sidebar-nav-dropdown-items">

                    {{-- <li class="c-sidebar-nav-item">
                        <a href="{{ route("permissions.index") }}" class="c-sidebar-nav-link">
                            <i class="fa-fw far fa-circle c-sidebar-nav-icon">

                            </i>
                            {{ __("Permissions") }}
                        </a>
                    </li> --}}

                    {{-- <li class="c-sidebar-nav-item">
                        <a href="{{ route("roles.index") }}" class="c-sidebar-nav-link ">
                            <i class="fa-fw far fa-circle c-sidebar-nav-icon">

                            </i>
                            {{ __("Roles") }}
                        </a>
                    </li> --}}

                    {{-- <li class="c-sidebar-nav-item">
                        <a href="{{ route("users.index") }}" class="c-sidebar-nav-link">
                            <i class="fa-fw far fa-circle c-sidebar-nav-icon">

                            </i>
                            {{ __("All Users") }}
                        </a>
                    </li> --}}

            </ul>
        </li>
{{--
        <li class="c-sidebar-nav-item">
            <a href="{{ route('quotations.index') }}" class="c-sidebar-nav-link text-light" >
                <i class="c-sidebar-nav-icon fas fa-fw fa-hand-holding-usd">

                </i>
                {{ __("Quotation") }}
            </a>
        </li> --}}

        {{-- <li class="c-sidebar-nav-dropdown">
            <a class="c-sidebar-nav-dropdown-toggle" href="#">
                <i class="fa-fw fas fa-building c-sidebar-nav-icon">

                </i>
                {{ __("CRM") }}
            </a>
            <ul class="c-sidebar-nav-dropdown-items">

                <li class="c-sidebar-nav-item">
                    <a href="{{ route('quotations.index') }}" class="c-sidebar-nav-link">
                        <i class="fa-fw far fa-circle c-sidebar-nav-icon">
                        </i>
                        {{ __("Quotations") }}
                    </a>
                </li>
                <li class="c-sidebar-nav-item">
                    <a href="{{ route("contacts.index") }}" class="c-sidebar-nav-link">
                        <i class="fa-fw far fa-circle c-sidebar-nav-icon">

                        </i>
                        {{ __("Contacts") }}
                    </a>
                </li>
                <li class="c-sidebar-nav-item">
                    <a href="{{ route("leads.index") }}" class="c-sidebar-nav-link">
                        <i class="fa-fw far fa-circle c-sidebar-nav-icon">

                        </i>
                        {{ __("Leads") }}
                    </a>
                </li>
                <li class="c-sidebar-nav-item">
                    <a href="{{ route("lead-sources.index") }}" class="c-sidebar-nav-link">
                        <i class="fa-fw far fa-circle c-sidebar-nav-icon">

                        </i>
                        {{ __("Lead Sources") }}
                    </a>
                </li>
                <li class="c-sidebar-nav-item">
                    <a href="{{ route("lead-stages.index") }}" class="c-sidebar-nav-link">
                        <i class="fa-fw far fa-circle c-sidebar-nav-icon">

                        </i>
                        {{ __("Lead Stages") }}
                    </a>
                </li>
                <li class="c-sidebar-nav-item">
                    <a href="{{ route("pipelines.index") }}" class="c-sidebar-nav-link">
                        <i class="fa-fw far fa-circle c-sidebar-nav-icon">

                        </i>
                        {{ __("Pipelines") }}
                    </a>
                </li>
            </ul>
        </li> --}}


        {{-- <li class="c-sidebar-nav-dropdown">
            <a class="c-sidebar-nav-dropdown-toggle" href="#">
                <i class="fa-fw fas fa-building c-sidebar-nav-icon">

                </i>
                {{ __("Company Management") }}
            </a>
            <ul class="c-sidebar-nav-dropdown-items">
                <li class="c-sidebar-nav-item">
                    <a href="{{ route("companies.index") }}" class="c-sidebar-nav-link">
                        <i class="fa-fw far fa-circle c-sidebar-nav-icon">

                        </i>
                        {{ __("All Companies") }}
                    </a>
                </li>
                <li class="c-sidebar-nav-item">
                    <a href="{{ route("companies.edit", Auth::user()->company->id ?? '0') }}" class="c-sidebar-nav-link">
                        <i class="fa-fw far fa-circle c-sidebar-nav-icon">

                        </i>
                        {{ __("My Company") }}
                    </a>
                </li>
            </ul>
        </li> --}}

        {{-- <li class="c-sidebar-nav-dropdown">
            <a class="c-sidebar-nav-dropdown-toggle" href="#">
                <i class="fa-fw fas fa-id-badge c-sidebar-nav-icon">

                </i>
                {{ __("Employees Management") }}
            </a>
            <ul class="c-sidebar-nav-dropdown-items">
                <li class="c-sidebar-nav-item">
                    <a href="{{ route("employees.index") }}" class="c-sidebar-nav-link">
                        <i class="fa-fw far fa-circle c-sidebar-nav-icon">

                        </i>
                        {{ __("Employees") }}
                    </a>
                </li>
                {{-- <li class="c-sidebar-nav-item">
                    <a href="{{ route("companies.edit", Auth::user()->company->id ?? '0') }}" class="c-sidebar-nav-link">
                        <i class="fa-fw far fa-circle c-sidebar-nav-icon">

                        </i>
                        {{ __("Employees Attendance") }}
                    </a>
                </li> --}}
            </ul>
        </li> --}}


            {{-- <li class="c-sidebar-nav-dropdown">
                <a class="c-sidebar-nav-dropdown-toggle" href="#">
                    <i class="fa-fw fas fa-shopping-basket c-sidebar-nav-icon">

                    </i>
                    {{ __("Inventory") }}
                </a>
                <ul class="c-sidebar-nav-dropdown-items">

                        <li class="c-sidebar-nav-item">
                            <a href="{{ route('attributes.index') }}" class="c-sidebar-nav-link">
                                <i class="fa-fw far fa-circle c-sidebar-nav-icon">

                                </i>
                                {{ __("Attributes") }}
                            </a>
                        </li>

                        <li class="c-sidebar-nav-item">
                            <a href="{{ route('brands.index') }}" class="c-sidebar-nav-link">
                                <i class="fa-fw far fa-circle c-sidebar-nav-icon">

                                </i>
                                {{ __("Brands") }}
                            </a>
                        </li>


                        <li class="c-sidebar-nav-item">
                            <a href="{{ route('categories.index') }}" class="c-sidebar-nav-link ">
                                <i class="fa-fw far fa-circle c-sidebar-nav-icon">

                                </i>
                                {{ __("Categories") }}
                            </a>
                        </li>



                        <li class="c-sidebar-nav-item">
                            <a href="{{ route('units.index') }}" class="c-sidebar-nav-link">
                                <i class="fa-fw far fa-circle c-sidebar-nav-icon">

                                </i>
                                {{ __("Units") }}
                            </a>
                        </li>


                        <li class="c-sidebar-nav-item">
                            <a href="{{ route('products.index') }}" class="c-sidebar-nav-link">
                                <i class="fa-fw far fa-circle c-sidebar-nav-icon">

                                </i>
                                {{ __("Products") }}
                            </a>
                        </li>


                    {{-- @can("coupons.index")
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route('coupons.index') }}" class="c-sidebar-nav-link">
                                <i class="fa-fw far fa-circle c-sidebar-nav-icon">

                                </i>
                                Coupons
                            </a>
                        </li>
                    @endcan --}}

                    {{-- @can("returnpolicies.index") --}}
                        {{-- <li class="c-sidebar-nav-item">
                            <a href="{{ route('returnpolicies.index') }}" class="c-sidebar-nav-link">
                                <i class="fa-fw far fa-circle c-sidebar-nav-icon">

                                </i>
                                {{ __("Return Policies") }}
                            </a>
                        </li> --}}
                    {{-- @endcan --}}

                        {{-- <li class="c-sidebar-nav-item">
                            <a href="{{ route('reviews.index') }}" class="c-sidebar-nav-link text-light" >
                                <i class="c-sidebar-nav-icon far fa-fw fa-circle">

                                </i>
                                {{ __("Reviews and Ratings") }}
                            </a>
                        </li> --}}

                </ul>
            </li> --}}



            {{-- <li class="c-sidebar-nav-dropdown">
                <a class="c-sidebar-nav-dropdown-toggle" href="#">
                    <i class="fa-fw fas fa-list-alt c-sidebar-nav-icon">

                    </i>
                    {{ __("Orders") }}
                </a>
                <ul class="c-sidebar-nav-dropdown-items">
                    <li class="c-sidebar-nav-item">
                        <a href="{{ route('orders.index') }}" class="c-sidebar-nav-link">
                            <i class="fa-fw far fa-circle c-sidebar-nav-icon">

                            </i>
                            {{ __("All Orders") }}
                        </a>
                    </li>
                    {{-- <li class="c-sidebar-nav-item">
                        <a href="{{ route('orders.index') }}" class="c-sidebar-nav-link">
                            <i class="fa-fw far fa-circle c-sidebar-nav-icon">

                            </i>
                            Cancelled Orders
                        </a>
                    </li>
                    <li class="c-sidebar-nav-item">
                        <a href="{{ route('orders.index') }}" class="c-sidebar-nav-link">
                            <i class="fa-fw far fa-circle c-sidebar-nav-icon">

                            </i>
                            Returned Orders
                        </a>
                    </li>
                    <li class="c-sidebar-nav-item">
                        <a href="{{ route('invoice.settings') }}" class="c-sidebar-nav-link">
                            <i class="fa-fw far fa-circle c-sidebar-nav-icon">

                            </i>
                            Invoice Settings
                        </a>
                    </li> --}}
                </ul>
            </li> --}}


        <li class="c-sidebar-nav-dropdown">
            <a class="c-sidebar-nav-dropdown-toggle" href="#">
                <i class="fa-fw fas fa-chart-line c-sidebar-nav-icon">

                </i>
                {{ __("Marketing Tools") }}
            </a>
            <ul class="c-sidebar-nav-dropdown-items">
                {{-- <li class="c-sidebar-nav-item">
                    <a href="{{ route('hotdeals.index') }}" class="c-sidebar-nav-link">
                        <i class="fa-fw far fa-circle c-sidebar-nav-icon">

                        </i>
                        {{ __("Hot Deals") }}
                    </a>
                </li>
                <li class="c-sidebar-nav-item">
                    <a href="{{ route('offers.index') }}" class="c-sidebar-nav-link ">
                        <i class="fa-fw far fa-circle c-sidebar-nav-icon">

                        </i>
                        {{ __("Offers") }}
                    </a>
                </li> --}}
                {{-- <li class="c-sidebar-nav-item">
                    <a href="{{ route('banners.index') }}" class="c-sidebar-nav-link ">
                        <i class="fa-fw far fa-circle c-sidebar-nav-icon">

                        </i>
                        {{ __("Banners") }}
                    </a>
                </li> --}}
                {{-- <li class="c-sidebar-nav-item">
                    <a href="{{ route('sliders.index') }}" class="c-sidebar-nav-link ">
                        <i class="fa-fw far fa-circle c-sidebar-nav-icon">

                        </i>
                        {{ __("Sliders") }}
                    </a>
                </li> --}}
                {{-- <li class="c-sidebar-nav-item">
                    <a href="{{ route('subscribers.index') }}" class="c-sidebar-nav-link ">
                        <i class="fa-fw far fa-circle c-sidebar-nav-icon">

                        </i>
                        {{ __("Subscribers") }}
                    </a>
                </li> --}}
                {{-- <li class="c-sidebar-nav-item">
                    <a href="{{ route("contacts.index") }}" class="c-sidebar-nav-link">
                        <i class="fa-fw far fa-circle c-sidebar-nav-icon">

                        </i>
                        {{ __("Contacts") }}
                    </a>
                </li> --}}
                {{-- <li class="c-sidebar-nav-item">
                    <a href="{{ route('email-marketing.index') }}" class="c-sidebar-nav-link ">
                        <i class="fa-fw far fa-circle c-sidebar-nav-icon">

                        </i>
                        {{ __("Email Marketing") }}
                    </a>
                </li> --}}
                {{-- <li class="c-sidebar-nav-item">
                    <a href="{{ route('marketing.notification') }}" class="c-sidebar-nav-link ">
                        <i class="fa-fw far fa-circle c-sidebar-nav-icon">

                        </i>
                        Push Notifications
                    </a>
                </li> --}}
            </ul>
        </li>


       {{-- <li class="c-sidebar-nav-dropdown">
                <a class="c-sidebar-nav-dropdown-toggle" href="#">
                    <i class="fa-fw fas fa-fighter-jet c-sidebar-nav-icon">

                    </i>

                    {{ __("Shipping and Taxes") }}
                </a>
                <ul class="c-sidebar-nav-dropdown-items">

                        <li class="c-sidebar-nav-item">
                            <a href="{{ route('tax.index') }}" class="c-sidebar-nav-link ">
                                <i class="fa-fw far fa-circle c-sidebar-nav-icon">

                                </i>
                                {{ __("Tax Rates") }}

                            </a>
                        </li>

                        <li class="c-sidebar-nav-item">
                            <a href="{{ route('zones.index') }}" class="c-sidebar-nav-link ">
                                <i class="fa-fw far fa-circle c-sidebar-nav-icon">

                                </i>

                                {{ __("Zones") }}
                            </a>
                        </li>

                        <li class="c-sidebar-nav-item">
                            <a href="{{ route('shippings.index') }}" class="c-sidebar-nav-link ">
                                <i class="fa-fw far fa-circle c-sidebar-nav-icon">

                                </i>

                                {{ __("Shipping Methods") }}
                            </a>
                        </li>

                </ul>
            </li> --}}


        {{-- <li class="c-sidebar-nav-dropdown">
            <a class="c-sidebar-nav-dropdown-toggle" href="#">
                <i class="fa-fw fas fa-coins c-sidebar-nav-icon">

                </i>
                Commisions
            </a>
            <ul class="c-sidebar-nav-dropdown-items">
                <li class="c-sidebar-nav-item">
                    <a href="" class="c-sidebar-nav-link">
                        <i class="fa-fw far fa-circle c-sidebar-nav-icon">

                        </i>
                        Commision Settings
                    </a>
                </li>

            </ul>
        </li>

        <li class="c-sidebar-nav-dropdown">
            <a class="c-sidebar-nav-dropdown-toggle" href="#">
                <i class="fa-fw fas fa-money-bill-alt c-sidebar-nav-icon">

                </i>
                Seller Payouts
            </a>
            <ul class="c-sidebar-nav-dropdown-items">
                <li class="c-sidebar-nav-item">
                    <a href="" class="c-sidebar-nav-link">
                        <i class="fa-fw far fa-circle c-sidebar-nav-icon">

                        </i>
                        Pending Payouts
                    </a>
                </li>
                <li class="c-sidebar-nav-item">
                    <a href="" class="c-sidebar-nav-link">
                        <i class="fa-fw far fa-circle c-sidebar-nav-icon">

                        </i>
                        Completed Payouts
                    </a>
                </li>
            </ul>
        </li> --}}




        {{-- <li class="c-sidebar-nav-item">
            <a href="" class="c-sidebar-nav-link text-light" >
                <i class="c-sidebar-nav-icon fas fa-fw fa-question-circle">

                </i>
                FAQ's
            </a>
        </li> --}}

        {{-- <li class="c-sidebar-nav-dropdown">
            <a class="c-sidebar-nav-dropdown-toggle" href="#">
                <i class="fa-fw fas fa-money-check-alt c-sidebar-nav-icon">

                </i>
                {{ __("Payments") }}
            </a>
            <ul class="c-sidebar-nav-dropdown-items">

                    <li class="c-sidebar-nav-item">
                        <a href="{{ route('withdraw-requests.index') }}" class="c-sidebar-nav-link ">
                            <i class="fa-fw far fa-circle c-sidebar-nav-icon">

                            </i>
                            {{ __("Withdraw Requests") }}
                        </a>
                    </li>

                    {{-- <li class="c-sidebar-nav-item">
                        <a href="{{ route('payment-methods.index') }}" class="c-sidebar-nav-link ">
                            <i class="fa-fw far fa-circle c-sidebar-nav-icon">

                            </i>
                            {{ __("Supplier Payments") }}
                        </a>
                    </li> --}}

                    {{-- <li class="c-sidebar-nav-item">
                        <a href="{{ route('payment-methods.index') }}" class="c-sidebar-nav-link">
                            <i class="fa-fw far fa-circle c-sidebar-nav-icon">

                            </i>
                            {{ __("Payment Methods") }}
                        </a>
                    </li> --}}

            </ul>
        </li> --}}

        {{-- <li class="c-sidebar-nav-dropdown">
            <a class="c-sidebar-nav-dropdown-toggle" href="#">
                <i class="fa-fw fas fa-bullhorn c-sidebar-nav-icon">

                </i>
                {{ __("Support") }}
            </a>
            <ul class="c-sidebar-nav-dropdown-items">

                    <li class="c-sidebar-nav-item">
                        <a href="{{ route('support-tickets.index') }}" class="c-sidebar-nav-link">
                            <i class="fa-fw far fa-circle c-sidebar-nav-icon">

                            </i>
                            {{ __("Tickets") }}
                        </a>
                    </li>

                    <li class="c-sidebar-nav-item">
                        <a href="{{ route('contact-messages.index') }}" class="c-sidebar-nav-link ">
                            <i class="fa-fw far fa-circle c-sidebar-nav-icon">

                            </i>
                            {{ __("Contact Message") }}
                        </a>
                    </li>

                    </li>

                {{-- <li class="c-sidebar-nav-item">
                    <a href="" class="c-sidebar-nav-link ">
                        <i class="fa-fw far fa-circle c-sidebar-nav-icon">

                        </i>
                        Delivery Locations
                    </a>
                </li> --}}
            </ul>
        </li> --}}

        {{--
        <li class="c-sidebar-nav-item">
            <a href="" class="c-sidebar-nav-link text-light" >
                <i class="c-sidebar-nav-icon fas fa-fw fa-flag">

                </i>
                Reported Products
            </a>
        </li>

        <li class="c-sidebar-nav-dropdown">
            <a class="c-sidebar-nav-dropdown-toggle" href="#">
                <i class="fa-fw far fa-file-alt c-sidebar-nav-icon">

                </i>
                Reports
            </a>
            <ul class="c-sidebar-nav-dropdown-items">
                <li class="c-sidebar-nav-item">
                    <a href="" class="c-sidebar-nav-link">
                        <i class="fa-fw far fa-circle c-sidebar-nav-icon">

                        </i>
                        Stock Report
                    </a>
                </li>
                <li class="c-sidebar-nav-item">
                    <a href="" class="c-sidebar-nav-link">
                        <i class="fa-fw far fa-circle c-sidebar-nav-icon">

                        </i>
                        Sales Report
                    </a>
                </li>
                <li class="c-sidebar-nav-item">
                    <a href="" class="c-sidebar-nav-link">
                        <i class="fa-fw far fa-circle c-sidebar-nav-icon">

                        </i>
                        Mail Settings
                    </a>
                </li>
                <li class="c-sidebar-nav-item">
                    <a href="" class="c-sidebar-nav-link">
                        <i class="fa-fw far fa-circle c-sidebar-nav-icon">

                        </i>
                        Most Viewed Products
                    </a>
                </li>
            </ul>
        </li> --}}




        {{-- <li class="c-sidebar-nav-dropdown">
            <a class="c-sidebar-nav-dropdown-toggle" href="#">
                <i class="fa-fw fas fa-newspaper c-sidebar-nav-icon">

                </i>
                {{ __("Blogs") }}
            </a>
            <ul class="c-sidebar-nav-dropdown-items">

                    <li class="c-sidebar-nav-item">
                        <a href="{{ route('countries.index') }}" class="c-sidebar-nav-link">
                            <i class="fa-fw far fa-circle c-sidebar-nav-icon">

                            </i>
                            {{ __("Articles") }}
                        </a>
                    </li>

                    <li class="c-sidebar-nav-item">
                        <a href="{{ route('states.index') }}" class="c-sidebar-nav-link ">
                            <i class="fa-fw far fa-circle c-sidebar-nav-icon">

                            </i>
                            {{ __("Categories") }}
                        </a>
                    </li>

                    <li class="c-sidebar-nav-item">
                        <a href="{{ route('cities.index') }}" class="c-sidebar-nav-link ">
                            <i class="fa-fw far fa-circle c-sidebar-nav-icon">

                            </i>
                            {{ __("Tags") }}
                        </a>
                    </li>

            </ul>
        </li> --}}



        <li class="c-sidebar-nav-dropdown">
            <a class="c-sidebar-nav-dropdown-toggle" href="#">
                <i class="fa-fw fas fa-map-marker-alt c-sidebar-nav-icon">

                </i>
                {{ __("Locations") }}
            </a>
            <ul class="c-sidebar-nav-dropdown-items">

                    {{-- <li class="c-sidebar-nav-item">
                        <a href="{{ route('countries.index') }}" class="c-sidebar-nav-link">
                            <i class="fa-fw far fa-circle c-sidebar-nav-icon">

                            </i>
                            {{ __("Countries") }}
                        </a>
                    </li> --}}

                    {{-- <li class="c-sidebar-nav-item">
                        <a href="{{ route('states.index') }}" class="c-sidebar-nav-link ">
                            <i class="fa-fw far fa-circle c-sidebar-nav-icon">

                            </i>
                            {{ __("States") }}
                        </a>
                    </li> --}}

                    {{-- <li class="c-sidebar-nav-item">
                        <a href="{{ route('cities.index') }}" class="c-sidebar-nav-link ">
                            <i class="fa-fw far fa-circle c-sidebar-nav-icon">

                            </i>
                            {{ __("Cities") }}
                        </a>
                    </li> --}}

                {{-- <li class="c-sidebar-nav-item">
                    <a href="" class="c-sidebar-nav-link ">
                        <i class="fa-fw far fa-circle c-sidebar-nav-icon">

                        </i>
                        Delivery Locations
                    </a>
                </li> --}}
            </ul>
        </li>

        {{-- <li class="c-sidebar-nav-dropdown">
            <a class="c-sidebar-nav-dropdown-toggle" href="#">
                <i class="fa-fw fas fa-window-restore c-sidebar-nav-icon">

                </i>
                {{ __("Frontend") }}
            </a>
            <ul class="c-sidebar-nav-dropdown-items">
                <li class="c-sidebar-nav-item">
                    <a href="{{ route('asoug-partners.index') }}" class="c-sidebar-nav-link">
                        <i class="fa-fw far fa-circle c-sidebar-nav-icon">

                        </i>
                        {{ __("Asoug Partners") }}
                    </a>
                </li>

                <li class="c-sidebar-nav-item">
                    <a href="{{ route('menus.index') }}" class="c-sidebar-nav-link">
                        <i class="fa-fw far fa-circle c-sidebar-nav-icon">

                        </i>
                        {{ __("Menus") }}
                    </a>
                </li>


                <li class="c-sidebar-nav-item">
                    <a href="{{ route('pages.index') }}" class="c-sidebar-nav-link">
                        <i class="fa-fw far fa-circle c-sidebar-nav-icon">

                        </i>

                        {{ __("Pages") }}
                    </a>
                </li>

            </ul>
        </li> --}}

        {{-- <li class="c-sidebar-nav-dropdown">
                <a class="c-sidebar-nav-dropdown-toggle" href="#">
                    <i class="fa-fw fas fa-cogs c-sidebar-nav-icon">

                    </i>
                    {{ __("Settings") }}
                </a>
                <ul class="c-sidebar-nav-dropdown-items">

                        <li class="c-sidebar-nav-item">
                            <a href="{{ route('settings.index') }}" class="c-sidebar-nav-link text-light" >
                                <i class="c-sidebar-nav-icon far fa-circle ">

                                </i>
                                {{ __("General Settings") }}
                            </a>
                        </li>


                        <li class="c-sidebar-nav-item">
                            <a href="{{ route('currencies.index') }}" class="c-sidebar-nav-link text-light" >
                                <i class="c-sidebar-nav-icon far fa-circle ">

                                </i>
                                {{ __("Currency Settings") }}
                            </a>
                        </li>


                    <li class="c-sidebar-nav-item">
                        <a href="{{ route('languages.index') }}" class="c-sidebar-nav-link text-light" >
                            <i class="c-sidebar-nav-icon far fa-circle">

                            </i>
                            {{ __("Language Setting") }}
                        </a>
                    </li>

                    <li class="c-sidebar-nav-item">
                        <a href="{{ route('commission-setting.index') }}" class="c-sidebar-nav-link text-light" >
                            <i class="c-sidebar-nav-icon far fa-circle">

                            </i>
                            {{ __("Commission Setting") }}
                        </a>
                    </li>

                    <li class="c-sidebar-nav-item">
                        <a href="{{ route('withdraw-setting.index') }}" class="c-sidebar-nav-link text-light" >
                            <i class="c-sidebar-nav-icon far fa-circle">

                            </i>
                            {{ __("Withdraw Setting") }}
                        </a>
                    </li>




                    {{-- <li class="c-sidebar-nav-item">
                        <a href="" class="c-sidebar-nav-link">
                            <i class="fa-fw far fa-circle c-sidebar-nav-icon">

                            </i>
                            Mail Settings
                        </a>
                    </li>
                    <li class="c-sidebar-nav-item">
                        <a href="" class="c-sidebar-nav-link">
                            <i class="fa-fw far fa-circle c-sidebar-nav-icon">

                            </i>
                            Social Login Settings
                        </a>
                    </li>
                    <li class="c-sidebar-nav-item">
                        <a href="" class="c-sidebar-nav-link">
                            <i class="fa-fw far fa-circle c-sidebar-nav-icon">

                            </i>
                            SmS Settings
                        </a>
                    </li>
                    <li class="c-sidebar-nav-item">
                        <a href="" class="c-sidebar-nav-link">
                            <i class="fa-fw far fa-circle c-sidebar-nav-icon">

                            </i>
                            Maintenance Mode
                        </a>
                    </li> --}}




                    {{-- <li class="c-sidebar-nav-item">
                        <a href="" class="c-sidebar-nav-link">
                            <i class="fa-fw far fa-circle c-sidebar-nav-icon">

                            </i>
                            SEO
                        </a>
                    </li>
                    <li class="c-sidebar-nav-item">
                        <a href="" class="c-sidebar-nav-link">
                            <i class="fa-fw far fa-circle c-sidebar-nav-icon">

                            </i>
                            Terms Settings
                        </a>
                    </li> --}}

                </ul>
        </li> --}}

        {{-- <li class="c-sidebar-nav-item">
            <a href="{{ route('profile.edit',  Auth::user()->id) }}" class="c-sidebar-nav-link text-light" >
                <i class="c-sidebar-nav-icon fas fa-fw fa-user">

                </i>
                {{ __("Profile") }}
            </a>
        </li> --}}

        <li class="c-sidebar-nav-item">

            <a class="c-sidebar-nav-link text-light" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                <i class="c-sidebar-nav-icon fas fa-sign-out-alt ">

                </i>
                {{ __('Logout') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>

        </li>
    </ul>

</div>
