<h1>Edit Customer</h1>

<form action="/customers/{{ $customer->id  }}" method="post">

    @method('PATCH')

    <div>
        <label for="name">Name</label>
        <input type="text" name="name" autocomplete="off" value="{{ $customer->name }}">
        @error('name')<p style="color:red;">{{ $message }}</p>@enderror
    </div>
    <br>
    <div>
        <label for="email">Email</label>
        <input type="text" name="email" autocomplete="off" value="{{ $customer->email }}">
        @error('email')<p style="color:red;">{{ $message }}</p>@enderror
    </div>

    @csrf
    <br>
    <button>Save Customer </button>
    
</form>