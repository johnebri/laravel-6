<h1>Customers</h1>

<p><a href="/customers?active=1">Active Customers</a></p>

<p><a href="/customers?active=0"> Inactive Customers</a></p>

<p><a href="/customers/create"> + Add a New Customer</a></p>

@forelse($customers as $customer)

    <p><strong> 
        <a href="/customers/{{ $customer->id }} ">
            {{ $customer->name }}
        </a>
    </strong>
        ({{ $customer->email}})
    </p>

@empty

    <p>No Customers to Show</p>
     
@endforelse