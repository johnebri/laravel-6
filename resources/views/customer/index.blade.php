<h1>Customers</h1>

<p><a href="/customers/create"> + Add a New Customer</a></p>

@forelse($customers as $customer)

    <p><strong> {{ $customer->name }}</strong>
        ({{ $customer->email}})
    </p>

@empty

    <p>No Customers to Show</p>
     
@endforelse