@if (session('success'))
    <div class="text-success text-center margin-top-15">{{session()->get("success"??"")}}</div>
@endif
@if (session('delete'))
    <div class="text-warning text-center margin-top-15">{{session()->get("delete"??"")}}</div>
@endif
