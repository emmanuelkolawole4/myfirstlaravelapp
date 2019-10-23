@extends('layout')

@section('content')
{{-- note that this section name 'content' here can be any name as long as its the same as the name being used in the layout --}}

    {{-- <div class="containerr">

    </div> --}}

    <div class="add-customer-form">
        <h3>Customers</h3>

        <form action="customers" method="POST">
            <div>
                <input type="text" name="customer-name" placeholder="Enter Customer Name" value="{{ old('customer-name') }}" autocomplete="off">
                <div class="message">{{ $errors->first('customer-name') }}</div>

                <input type="email" name="customer-email" placeholder="Enter Customer E-mail" value="{{ old('customer-email') }}">
                <div class="message">{{ $errors->first('customer-email') }}</div>
            </div>
    
            <button type="submit"><strong>+</strong> Add Customer</button>
            @csrf {{-- note that laravel has a security measure that ships with it. it typically tries to prevent just any from submitting to our database. but by using the @csrf keyword, we're simply letting laravel know that we are actually the one trying to submit to the database with the said form --}}
        </form>

        {{-- to display feedback(error message) laravel provides for us and error variable that we can manipulate to display what we want--}}
        
        {{-- this tells laravel to give us the first error for customer-name --}}
    </div>

    <div class="customer-names">
        <h4>Names</h4>

        <ul>
            <?php
                // foreach ($customers as $customer) {
                //     echo '<li>' . $customer . '</li>';
                // }
            ?>
            
            <!-- there's a blade shorthand method for simplifying this shown below -->
    
            @foreach ($customers as $customer) 
                <li style="list-style: none; text-align:center;">{{ $customer->name }}</li>
            @endforeach
        </ul>
    </div>

    <div class="customer-emails">
        <h4>Emails</h4>
        <ul>
            <?php
                // foreach ($customers as $customer) {
                //     echo '<li>' . $customer . '</li>';
                // }
            ?>
            
            <!-- there's a blade shorthand method for simplifying this shown below -->

            @foreach ($customers as $customer) 
                <li style="list-style: none; text-align:center;">{{ $customer->email }}</li>                
            @endforeach
        </ul>
    </div>

    

    

@endsection